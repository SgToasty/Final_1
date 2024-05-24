import{Command as e,Plugin as t}from"@ckeditor/ckeditor5-core";import{env as i,EventInfo as n,count as o,keyCodes as r,isInsideSurrogatePair as s,isInsideCombinedSymbol as a,isInsideEmojiSequence as c,ObservableMixin as l}from"@ckeditor/ckeditor5-utils";import{Observer as d,FocusObserver as h,DomEventData as u,BubblingEventInfo as f,MouseObserver as g}from"@ckeditor/ckeditor5-engine";import{escapeRegExp as m}from"lodash-es";
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class p{constructor(e,t=20){this._batch=null,this.model=e,this._size=0,this.limit=t,this._isLocked=!1,this._changeCallback=(e,t)=>{t.isLocal&&t.isUndoable&&t!==this._batch&&this._reset(!0)},this._selectionChangeCallback=()=>{this._reset()},this.model.document.on("change",this._changeCallback),this.model.document.selection.on("change:range",this._selectionChangeCallback),this.model.document.selection.on("change:attribute",this._selectionChangeCallback)}get batch(){return this._batch||(this._batch=this.model.createBatch({isTyping:!0})),this._batch}get size(){return this._size}input(e){this._size+=e,this._size>=this.limit&&this._reset(!0)}get isLocked(){return this._isLocked}lock(){this._isLocked=!0}unlock(){this._isLocked=!1}destroy(){this.model.document.off("change",this._changeCallback),this.model.document.selection.off("change:range",this._selectionChangeCallback),this.model.document.selection.off("change:attribute",this._selectionChangeCallback)}_reset(e=!1){this.isLocked&&!e||(this._batch=null,this._size=0)}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class b extends e{constructor(e,t){super(e),this._buffer=new p(e.model,t),this._isEnabledBasedOnSelection=!1}get buffer(){return this._buffer}destroy(){super.destroy(),this._buffer.destroy()}execute(e={}){const t=this.editor.model,i=t.document,n=e.text||"",o=n.length;let r=i.selection;if(e.selection?r=e.selection:e.range&&(r=t.createSelection(e.range)),!t.canEditAt(r))return;const s=e.resultRange;t.enqueueChange(this._buffer.batch,(e=>{this._buffer.lock();const a=Array.from(i.selection.getAttributes());t.deleteContent(r),n&&t.insertContent(e.createText(n,a),r),s?e.setSelection(s):r.is("documentSelection")||e.setSelection(r),this._buffer.unlock(),this._buffer.input(o)}))}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */const y=["insertText","insertReplacementText"];class _ extends d{constructor(e){super(e),this.focusObserver=e.getObserver(h),i.isAndroid&&y.push("insertCompositionText");const t=e.document;t.on("beforeinput",((i,o)=>{if(!this.isEnabled)return;const{data:r,targetRanges:s,inputType:a,domEvent:c}=o;if(!y.includes(a))return;this.focusObserver.flush();const l=new n(t,"insertText");t.fire(l,new u(e,c,{text:r,selection:e.createSelection(s)})),l.stop.called&&i.stop()})),t.on("compositionend",((n,{data:o,domEvent:r})=>{this.isEnabled&&!i.isAndroid&&o&&t.fire("insertText",new u(e,r,{text:o,selection:t.selection}))}),{priority:"lowest"})}observe(){}stopObserving(){}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class v extends t{static get pluginName(){return"Input"}init(){const e=this.editor,t=e.model,n=e.editing.view,o=t.document.selection;n.addObserver(_);const r=new b(e,e.config.get("typing.undoStep")||20);e.commands.add("insertText",r),e.commands.add("input",r),this.listenTo(n.document,"insertText",((o,r)=>{n.document.isComposing||r.preventDefault();const{text:s,selection:a,resultRange:c}=r,l=Array.from(a.getRanges()).map((t=>e.editing.mapper.toModelRange(t)));let d=s;if(i.isAndroid){const e=Array.from(l[0].getItems()).reduce(((e,t)=>e+(t.is("$textProxy")?t.data:"")),"");e&&(e.length<=d.length?d.startsWith(e)&&(d=d.substring(e.length),l[0].start=l[0].start.getShiftedBy(e.length)):e.startsWith(d)&&(l[0].start=l[0].start.getShiftedBy(d.length),d=""))}const h={text:d,selection:t.createSelection(l)};c&&(h.resultRange=e.editing.mapper.toModelRange(c)),e.execute("insertText",h),n.scrollToTheSelection()})),i.isAndroid?this.listenTo(n.document,"keydown",((e,i)=>{!o.isCollapsed&&229==i.keyCode&&n.document.isComposing&&k(t,r)})):this.listenTo(n.document,"compositionstart",(()=>{o.isCollapsed||k(t,r)}))}}function k(e,t){if(!t.isEnabled)return;const i=t.buffer;i.lock(),e.enqueueChange(i.batch,(()=>{e.deleteContent(e.document.selection)})),i.unlock()}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class C extends e{constructor(e,t){super(e),this.direction=t,this._buffer=new p(e.model,e.config.get("typing.undoStep")),this._isEnabledBasedOnSelection=!1}get buffer(){return this._buffer}execute(e={}){const t=this.editor.model,i=t.document;t.enqueueChange(this._buffer.batch,(n=>{this._buffer.lock();const r=n.createSelection(e.selection||i.selection);if(!t.canEditAt(r))return;const s=e.sequence||1,a=r.isCollapsed;if(r.isCollapsed&&t.modifySelection(r,{direction:this.direction,unit:e.unit,treatEmojiAsSingleUnit:!0}),this._shouldEntireContentBeReplacedWithParagraph(s))return void this._replaceEntireContentWithParagraph(n);if(this._shouldReplaceFirstBlockWithParagraph(r,s))return void this.editor.execute("paragraph",{selection:r});if(r.isCollapsed)return;let c=0;r.getFirstRange().getMinimalFlatRanges().forEach((e=>{c+=o(e.getWalker({singleCharacters:!0,ignoreElementEnd:!0,shallow:!0}))})),t.deleteContent(r,{doNotResetEntireContent:a,direction:this.direction}),this._buffer.input(c),n.setSelection(r),this._buffer.unlock()}))}_shouldEntireContentBeReplacedWithParagraph(e){if(e>1)return!1;const t=this.editor.model,i=t.document.selection,n=t.schema.getLimitElement(i);if(!(i.isCollapsed&&i.containsEntireContent(n)))return!1;if(!t.schema.checkChild(n,"paragraph"))return!1;const o=n.getChild(0);return!o||!o.is("element","paragraph")}_replaceEntireContentWithParagraph(e){const t=this.editor.model,i=t.document.selection,n=t.schema.getLimitElement(i),o=e.createElement("paragraph");e.remove(e.createRangeIn(n)),e.insert(o,n),e.setSelection(o,0)}_shouldReplaceFirstBlockWithParagraph(e,t){const i=this.editor.model;if(t>1||"backward"!=this.direction)return!1;if(!e.isCollapsed)return!1;const n=e.getFirstPosition(),o=i.schema.getLimitElement(n),r=o.getChild(0);return n.parent==r&&(!!e.containsEntireContent(r)&&(!!i.schema.checkChild(o,"paragraph")&&"paragraph"!=r.name))}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */const w="word",x="selection",T="backward",S="forward",E={deleteContent:{unit:x,direction:T},deleteContentBackward:{unit:"codePoint",direction:T},deleteWordBackward:{unit:w,direction:T},deleteHardLineBackward:{unit:x,direction:T},deleteSoftLineBackward:{unit:x,direction:T},deleteContentForward:{unit:"character",direction:S},deleteWordForward:{unit:w,direction:S},deleteHardLineForward:{unit:x,direction:S},deleteSoftLineForward:{unit:x,direction:S}};class A extends d{constructor(e){super(e);const t=e.document;let n=0;t.on("keydown",(()=>{n++})),t.on("keyup",(()=>{n=0})),t.on("beforeinput",((o,r)=>{if(!this.isEnabled)return;const{targetRanges:l,domEvent:d,inputType:h}=r,g=E[h];if(!g)return;const m={direction:g.direction,unit:g.unit,sequence:n};m.unit==x&&(m.selectionToRemove=e.createSelection(l[0])),"deleteContentBackward"===h&&(i.isAndroid&&(m.sequence=1),function(e){if(1!=e.length||e[0].isCollapsed)return!1;const t=e[0].getWalker({direction:"backward",singleCharacters:!0,ignoreElementEnd:!0});let i=0;for(const{nextPosition:e}of t){if(e.parent.is("$text")){const t=e.parent.data,n=e.offset;if(s(t,n)||a(t,n)||c(t,n))continue;i++}else i++;if(i>1)return!0}return!1}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */(l)&&(m.unit=x,m.selectionToRemove=e.createSelection(l)));const p=new f(t,"delete",l[0]);t.fire(p,new u(e,d,m)),p.stop.called&&o.stop()})),i.isBlink&&function(e){const t=e.view,i=t.document;let n=null,o=!1;function s(e){return e==r.backspace||e==r.delete}function a(e){return e==r.backspace?T:S}i.on("keydown",((e,{keyCode:t})=>{n=t,o=!1})),i.on("keyup",((r,{keyCode:c,domEvent:l})=>{const d=i.selection,h=e.isEnabled&&c==n&&s(c)&&!d.isCollapsed&&!o;if(n=null,h){const e=d.getFirstRange(),n=new f(i,"delete",e),o={unit:x,direction:a(c),selectionToRemove:d};i.fire(n,new u(t,l,o))}})),i.on("beforeinput",((e,{inputType:t})=>{const i=E[t];s(n)&&i&&i.direction==a(n)&&(o=!0)}),{priority:"high"}),i.on("beforeinput",((e,{inputType:t,data:i})=>{n==r.delete&&"insertText"==t&&""==i&&e.stop()}),{priority:"high"})}(this)}observe(){}stopObserving(){}}class R extends t{static get pluginName(){return"Delete"}init(){const e=this.editor,t=e.editing.view,i=t.document,n=e.model.document;t.addObserver(A),this._undoOnBackspace=!1;const o=new C(e,"forward");e.commands.add("deleteForward",o),e.commands.add("forwardDelete",o),e.commands.add("delete",new C(e,"backward")),this.listenTo(i,"delete",((n,o)=>{i.isComposing||o.preventDefault();const{direction:r,sequence:s,selectionToRemove:a,unit:c}=o,l="forward"===r?"deleteForward":"delete",d={sequence:s};if("selection"==c){const t=Array.from(a.getRanges()).map((t=>e.editing.mapper.toModelRange(t)));d.selection=e.model.createSelection(t)}else d.unit=c;e.execute(l,d),t.scrollToTheSelection()}),{priority:"low"}),this.editor.plugins.has("UndoEditing")&&(this.listenTo(i,"delete",((t,i)=>{this._undoOnBackspace&&"backward"==i.direction&&1==i.sequence&&"codePoint"==i.unit&&(this._undoOnBackspace=!1,e.execute("undo"),i.preventDefault(),t.stop())}),{context:"$capture"}),this.listenTo(n,"change",(()=>{this._undoOnBackspace=!1})))}requestUndoOnBackspace(){this.editor.plugins.has("UndoEditing")&&(this._undoOnBackspace=!0)}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class B extends t{static get requires(){return[v,R]}static get pluginName(){return"Typing"}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */function q(e,t){let i=e.start;return{text:Array.from(e.getWalker({ignoreElementEnd:!1})).reduce(((e,{item:n})=>n.is("$text")||n.is("$textProxy")?e+n.data:(i=t.createPositionAfter(n),"")),""),range:t.createRange(i,e.end)}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class O extends(l()){constructor(e,t){super(),this.model=e,this.testCallback=t,this._hasMatch=!1,this.set("isEnabled",!0),this.on("change:isEnabled",(()=>{this.isEnabled?this._startListening():(this.stopListening(e.document.selection),this.stopListening(e.document))})),this._startListening()}get hasMatch(){return this._hasMatch}_startListening(){const e=this.model.document;this.listenTo(e.selection,"change:range",((t,{directChange:i})=>{i&&(e.selection.isCollapsed?this._evaluateTextBeforeSelection("selection"):this.hasMatch&&(this.fire("unmatched"),this._hasMatch=!1))})),this.listenTo(e,"change:data",((e,t)=>{!t.isUndo&&t.isLocal&&this._evaluateTextBeforeSelection("data",{batch:t})}))}_evaluateTextBeforeSelection(e,t={}){const i=this.model,n=i.document.selection,o=i.createRange(i.createPositionAt(n.focus.parent,0),n.focus),{text:r,range:s}=q(o,i),a=this.testCallback(r);if(!a&&this.hasMatch&&this.fire("unmatched"),this._hasMatch=!!a,a){const i=Object.assign(t,{text:r,range:s});"object"==typeof a&&Object.assign(i,a),this.fire(`matched:${e}`,i)}}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class P extends t{static get pluginName(){return"TwoStepCaretMovement"}constructor(e){super(e),this._isNextGravityRestorationSkipped=!1,this.attributes=new Set,this._overrideUid=null}init(){const e=this.editor,t=e.model,i=e.editing.view,n=e.locale,o=t.document.selection;this.listenTo(i.document,"arrowKey",((e,t)=>{if(!o.isCollapsed)return;if(t.shiftKey||t.altKey||t.ctrlKey)return;const i=t.keyCode==r.arrowright,s=t.keyCode==r.arrowleft;if(!i&&!s)return;const a=n.contentLanguageDirection;let c=!1;c="ltr"===a&&i||"rtl"===a&&s?this._handleForwardMovement(t):this._handleBackwardMovement(t),!0===c&&e.stop()}),{context:"$text",priority:"highest"}),this.listenTo(o,"change:range",((e,t)=>{this._isNextGravityRestorationSkipped?this._isNextGravityRestorationSkipped=!1:this._isGravityOverridden&&(!t.directChange&&N(o.getFirstPosition(),this.attributes)||this._restoreGravity())})),this._enableClickingAfterNode(),this._enableInsertContentSelectionAttributesFixer(),this._handleDeleteContentAfterNode()}registerAttribute(e){this.attributes.add(e)}_handleForwardMovement(e){const t=this.attributes,i=this.editor.model,n=i.document.selection,o=n.getFirstPosition();return!this._isGravityOverridden&&((!o.isAtStart||!F(n,t))&&(!!N(o,t)&&($(e),F(n,t)&&N(o,t,!0)?G(i,t):this._overrideGravity(),!0)))}_handleBackwardMovement(e){const t=this.attributes,i=this.editor.model,n=i.document.selection,o=n.getFirstPosition();return this._isGravityOverridden?($(e),this._restoreGravity(),N(o,t,!0)?G(i,t):L(i,t,o),!0):o.isAtStart?!!F(n,t)&&($(e),L(i,t,o),!0):!F(n,t)&&N(o,t,!0)?($(e),L(i,t,o),!0):!!z(o,t)&&(o.isAtEnd&&!F(n,t)&&N(o,t)?($(e),L(i,t,o),!0):(this._isNextGravityRestorationSkipped=!0,this._overrideGravity(),!1))}_enableClickingAfterNode(){const e=this.editor,t=e.model,i=t.document.selection,n=e.editing.view.document;e.editing.view.addObserver(g);let o=!1;this.listenTo(n,"mousedown",(()=>{o=!0})),this.listenTo(n,"selectionChange",(()=>{const e=this.attributes;if(!o)return;if(o=!1,!i.isCollapsed)return;if(!F(i,e))return;const n=i.getFirstPosition();N(n,e)&&(n.isAtStart||N(n,e,!0)?G(t,e):this._isGravityOverridden||this._overrideGravity())}))}_enableInsertContentSelectionAttributesFixer(){const e=this.editor.model,t=e.document.selection,i=this.attributes;this.listenTo(e,"insertContent",(()=>{const n=t.getFirstPosition();F(t,i)&&N(n,i)&&G(e,i)}),{priority:"low"})}_handleDeleteContentAfterNode(){const e=this.editor,t=e.model,i=t.document.selection,n=e.editing.view;let o=!1,r=!1;this.listenTo(n.document,"delete",((e,t)=>{o="backward"===t.direction}),{priority:"high"}),this.listenTo(t,"deleteContent",(()=>{if(!o)return;const e=i.getFirstPosition();r=F(i,this.attributes)&&!z(e,this.attributes)}),{priority:"high"}),this.listenTo(t,"deleteContent",(()=>{o&&(o=!1,r||e.model.enqueueChange((()=>{const e=i.getFirstPosition();F(i,this.attributes)&&N(e,this.attributes)&&(e.isAtStart||N(e,this.attributes,!0)?G(t,this.attributes):this._isGravityOverridden||this._overrideGravity())})))}),{priority:"low"})}get _isGravityOverridden(){return!!this._overrideUid}_overrideGravity(){this._overrideUid=this.editor.model.change((e=>e.overrideSelectionGravity()))}_restoreGravity(){this.editor.model.change((e=>{e.restoreSelectionGravity(this._overrideUid),this._overrideUid=null}))}}function F(e,t){for(const i of t)if(e.hasAttribute(i))return!0;return!1}function L(e,t,i){const n=i.nodeBefore;e.change((i=>{if(n){const t=[],o=e.schema.isObject(n)&&e.schema.isInline(n);for(const[i,r]of n.getAttributes())!e.schema.checkAttribute("$text",i)||o&&!1===e.schema.getAttributeProperties(i).copyFromObject||t.push([i,r]);i.setSelectionAttribute(t)}else i.removeSelectionAttribute(t)}))}function G(e,t){e.change((e=>{e.removeSelectionAttribute(t)}))}function $(e){e.preventDefault()}function z(e,t){return N(e.getShiftedBy(-1),t)}function N(e,t,i=!1){const{nodeBefore:n,nodeAfter:o}=e;for(const e of t){const t=n?n.getAttribute(e):void 0,r=o?o.getAttribute(e):void 0;if((!i||void 0!==t&&void 0!==r)&&r!==t)return!0}return!1}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */const D={copyright:{from:"(c)",to:"©"},registeredTrademark:{from:"(r)",to:"®"},trademark:{from:"(tm)",to:"™"},oneHalf:{from:/(^|[^/a-z0-9])(1\/2)([^/a-z0-9])$/i,to:[null,"½",null]},oneThird:{from:/(^|[^/a-z0-9])(1\/3)([^/a-z0-9])$/i,to:[null,"⅓",null]},twoThirds:{from:/(^|[^/a-z0-9])(2\/3)([^/a-z0-9])$/i,to:[null,"⅔",null]},oneForth:{from:/(^|[^/a-z0-9])(1\/4)([^/a-z0-9])$/i,to:[null,"¼",null]},threeQuarters:{from:/(^|[^/a-z0-9])(3\/4)([^/a-z0-9])$/i,to:[null,"¾",null]},lessThanOrEqual:{from:"<=",to:"≤"},greaterThanOrEqual:{from:">=",to:"≥"},notEqual:{from:"!=",to:"≠"},arrowLeft:{from:"<-",to:"←"},arrowRight:{from:"->",to:"→"},horizontalEllipsis:{from:"...",to:"…"},enDash:{from:/(^| )(--)( )$/,to:[null,"–",null]},emDash:{from:/(^| )(---)( )$/,to:[null,"—",null]},quotesPrimary:{from:K('"'),to:[null,"“",null,"”"]},quotesSecondary:{from:K("'"),to:[null,"‘",null,"’"]},quotesPrimaryEnGb:{from:K("'"),to:[null,"‘",null,"’"]},quotesSecondaryEnGb:{from:K('"'),to:[null,"“",null,"”"]},quotesPrimaryPl:{from:K('"'),to:[null,"„",null,"”"]},quotesSecondaryPl:{from:K("'"),to:[null,"‚",null,"’"]}},M={symbols:["copyright","registeredTrademark","trademark"],mathematical:["oneHalf","oneThird","twoThirds","oneForth","threeQuarters","lessThanOrEqual","greaterThanOrEqual","notEqual","arrowLeft","arrowRight"],typography:["horizontalEllipsis","enDash","emDash"],quotes:["quotesPrimary","quotesSecondary"]},W=["symbols","mathematical","typography","quotes"];class U extends t{static get requires(){return["Delete","Input"]}static get pluginName(){return"TextTransformation"}constructor(e){super(e),e.config.define("typing",{transformations:{include:W}})}init(){const e=this.editor.model.document.selection;e.on("change:range",(()=>{this.isEnabled=!e.anchor.parent.is("element","codeBlock")})),this._enableTransformationWatchers()}_enableTransformationWatchers(){const e=this.editor,t=e.model,i=e.plugins.get("Delete"),n=function(e){const t=e.extra||[],i=e.remove||[],n=e=>!i.includes(e);return function(e){const t=new Set;for(const i of e)if("string"==typeof i&&M[i])for(const e of M[i])t.add(e);else t.add(i);return Array.from(t)}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */(e.include.concat(t).filter(n)).filter(n).map((e=>"string"==typeof e&&D[e]?D[e]:e)).filter((e=>"object"==typeof e)).map((e=>({from:I(e.from),to:j(e.to)})))}(e.config.get("typing.transformations")),o=new O(e.model,(e=>{for(const t of n){if(t.from.test(e))return{normalizedTransformation:t}}}));o.on("matched:data",((e,n)=>{if(!n.batch.isTyping)return;const{from:o,to:r}=n.normalizedTransformation,s=o.exec(n.text),a=r(s.slice(1)),c=n.range;let l=s.index;t.enqueueChange((e=>{for(let i=1;i<s.length;i++){const n=s[i],o=a[i-1];if(null==o){l+=n.length;continue}const r=c.start.getShiftedBy(l),d=t.createRange(r,r.getShiftedBy(n.length)),h=H(r);t.insertContent(e.createText(o,h),d),l+=o.length}t.enqueueChange((()=>{i.requestUndoOnBackspace()}))}))})),o.bind("isEnabled").to(this)}}function I(e){return"string"==typeof e?new RegExp(`(${m(e)})$`):e}function j(e){return"string"==typeof e?()=>[e]:e instanceof Array?()=>e:e}function H(e){return(e.textNode?e.textNode:e.nodeAfter).getAttributes()}function K(e){return new RegExp(`(^|\\s)(${e})([^${e}]*)(${e})$`)}function Q(e,t,i,n){return n.createRange(V(e,t,i,!0,n),V(e,t,i,!1,n))}function V(e,t,i,n,o){let r=e.textNode||(n?e.nodeBefore:e.nodeAfter),s=null;for(;r&&r.getAttribute(t)==i;)s=r,r=n?r.previousSibling:r.nextSibling;return s?o.createPositionAt(s,n?"before":"after"):e}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */function J(e,t,i,n){const o=e.editing.view,r=new Set;o.document.registerPostFixer((o=>{const s=e.model.document.selection;let a=!1;if(s.hasAttribute(t)){const c=Q(s.getFirstPosition(),t,s.getAttribute(t),e.model),l=e.editing.mapper.toViewRange(c);for(const e of l.getItems())e.is("element",i)&&!e.hasClass(n)&&(o.addClass(n,e),r.add(e),a=!0)}return a})),e.conversion.for("editingDowncast").add((e=>{function t(){o.change((e=>{for(const t of r.values())e.removeClass(n,t),r.delete(t)}))}e.on("insert",t,{priority:"highest"}),e.on("remove",t,{priority:"highest"}),e.on("attribute",t,{priority:"highest"}),e.on("selection",t,{priority:"highest"})}))}export{R as Delete,v as Input,b as InsertTextCommand,U as TextTransformation,O as TextWatcher,P as TwoStepCaretMovement,B as Typing,Q as findAttributeRange,V as findAttributeRangeBound,q as getLastTextLine,J as inlineHighlight};