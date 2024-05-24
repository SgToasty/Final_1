import{Plugin as e}from"@ckeditor/ckeditor5-core";import{EventInfo as t,uid as r,toUnit as i,delay as o,DomEmitterMixin as n,global as a,Rect as s,ResizeObserver as d,env as l,createElement as c}from"@ckeditor/ckeditor5-utils";import{DomEventObserver as g,DataTransfer as p,Range as h,MouseObserver as m,LiveRange as u}from"@ckeditor/ckeditor5-engine";import{mapValues as f,throttle as k}from"lodash-es";import{Widget as b,isWidget as _}from"@ckeditor/ckeditor5-widget";import{View as v}from"@ckeditor/ckeditor5-ui";
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class w extends g{constructor(e){super(e),this.domEventType=["paste","copy","cut","drop","dragover","dragstart","dragend","dragenter","dragleave"];const r=this.document;function i(e){return(i,o)=>{o.preventDefault();const n=o.dropRange?[o.dropRange]:null,a=new t(r,e);r.fire(a,{dataTransfer:o.dataTransfer,method:i.name,targetRanges:n,target:o.target,domEvent:o.domEvent}),a.stop.called&&o.stopPropagation()}}this.listenTo(r,"paste",i("clipboardInput"),{priority:"low"}),this.listenTo(r,"drop",i("clipboardInput"),{priority:"low"}),this.listenTo(r,"dragover",i("dragging"),{priority:"low"})}onDomEvent(e){const t="clipboardData"in e?e.clipboardData:e.dataTransfer,r="drop"==e.type||"paste"==e.type,i={dataTransfer:new p(t,{cacheFiles:r})};"drop"!=e.type&&"dragover"!=e.type||(i.dropRange=function(e,t){const r=t.target.ownerDocument,i=t.clientX,o=t.clientY;let n;r.caretRangeFromPoint&&r.caretRangeFromPoint(i,o)?n=r.caretRangeFromPoint(i,o):t.rangeParent&&(n=r.createRange(),n.setStart(t.rangeParent,t.rangeOffset),n.collapse(!0));if(n)return e.domConverter.domRangeToView(n);return null}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */(this.view,e)),this.fire(e.type,e,i)}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
const y=["figcaption","li"],T=["ol","ul"];function D(e){if(e.is("$text")||e.is("$textProxy"))return e.data;if(e.is("element","img")&&e.hasAttribute("alt"))return e.getAttribute("alt");if(e.is("element","br"))return"\n";let t="",r=null;for(const i of e.getChildren())t+=C(i,r)+D(i),r=i;return t}function C(e,t){return t?e.is("element","li")&&!e.isEmpty&&e.getChild(0).is("containerElement")||T.includes(e.name)&&T.includes(t.name)?"\n\n":e.is("containerElement")||t.is("containerElement")?y.includes(e.name)||y.includes(t.name)?"\n":"\n\n":"":""}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class E extends e{constructor(){super(...arguments),this._markersToCopy=new Map}static get pluginName(){return"ClipboardMarkersUtils"}_registerMarkerToCopy(e,t){this._markersToCopy.set(e,t)}_copySelectedFragmentWithMarkers(e,t,r=(e=>e.model.getSelectedContent(e.model.document.selection))){return this.editor.model.change((i=>{const o=i.model.document.selection;i.setSelection(t);const n=this._insertFakeMarkersIntoSelection(i,i.model.document.selection,e),a=r(i),s=this._removeFakeMarkersInsideElement(i,a);for(const[e,t]of Object.entries(n)){s[e]||(s[e]=i.createRangeIn(a));for(const e of t)i.remove(e)}a.markers.clear();for(const[e,t]of Object.entries(s))a.markers.set(e,t);return i.setSelection(o),a}))}_pasteMarkersIntoTransformedElement(e,t){const r=this._getPasteMarkersFromRangeMap(e);return this.editor.model.change((e=>{const i=this._insertFakeMarkersElements(e,r),o=t(e),n=this._removeFakeMarkersInsideElement(e,o);for(const t of Object.values(i).flat())e.remove(t);for(const[t,r]of Object.entries(n))e.model.markers.has(t)||e.addMarker(t,{usingOperation:!0,affectsData:!0,range:r});return o}))}_pasteFragmentWithMarkers(e){const t=this._getPasteMarkersFromRangeMap(e.markers);e.markers.clear();for(const r of t)e.markers.set(r.name,r.range);return this.editor.model.insertContent(e)}_forceMarkersCopy(e,t,r={allowedActions:"all",copyPartiallySelected:!0,duplicateOnPaste:!0}){const i=this._markersToCopy.get(e);this._markersToCopy.set(e,r),t(),i?this._markersToCopy.set(e,i):this._markersToCopy.delete(e)}_isMarkerCopyable(e,t){const r=this._getMarkerClipboardConfig(e);if(!r)return!1;if(!t)return!0;const{allowedActions:i}=r;return"all"===i||i.includes(t)}_hasMarkerConfiguration(e){return!!this._getMarkerClipboardConfig(e)}_getMarkerClipboardConfig(e){const[t]=e.split(":");return this._markersToCopy.get(t)||null}_insertFakeMarkersIntoSelection(e,t,r){const i=this._getCopyableMarkersFromSelection(e,t,r);return this._insertFakeMarkersElements(e,i)}_getCopyableMarkersFromSelection(e,t,r){const i=Array.from(t.getRanges()),o=new Set(i.flatMap((t=>Array.from(e.model.markers.getMarkersIntersectingRange(t)))));return Array.from(o).filter((e=>{if(!this._isMarkerCopyable(e.name,r))return!1;const{copyPartiallySelected:t}=this._getMarkerClipboardConfig(e.name);if(!t){const t=e.getRange();return i.some((e=>e.containsRange(t,!0)))}return!0})).map((e=>({name:"dragstart"===r?this._getUniqueMarkerName(e.name):e.name,range:e.getRange()})))}_getPasteMarkersFromRangeMap(e,t=null){const{model:r}=this.editor;return(e instanceof Map?Array.from(e.entries()):Object.entries(e)).flatMap((([e,i])=>{if(!this._hasMarkerConfiguration(e))return[{name:e,range:i}];if(this._isMarkerCopyable(e,t)){const t=this._getMarkerClipboardConfig(e),o=r.markers.has(e)&&"$graveyard"===r.markers.get(e).getRange().root.rootName;return(t.duplicateOnPaste||o)&&(e=this._getUniqueMarkerName(e)),[{name:e,range:i}]}return[]}))}_insertFakeMarkersElements(e,t){const r={},i=t.flatMap((e=>{const{start:t,end:r}=e.range;return[{position:t,marker:e,type:"start"},{position:r,marker:e,type:"end"}]})).sort((({position:e},{position:t})=>e.isBefore(t)?1:-1));for(const{position:t,marker:o,type:n}of i){const i=e.createElement("$marker",{"data-name":o.name,"data-type":n});r[o.name]||(r[o.name]=[]),r[o.name].push(i),e.insert(i,t)}return r}_removeFakeMarkersInsideElement(e,t){const r=this._getAllFakeMarkersFromElement(e,t).reduce(((t,r)=>{const i=r.markerElement&&e.createPositionBefore(r.markerElement);let o=t[r.name],n=!1;if(o&&o.start&&o.end){this._getMarkerClipboardConfig(r.name).duplicateOnPaste?t[this._getUniqueMarkerName(r.name)]=t[r.name]:n=!0,o=null}return n||(t[r.name]={...o,[r.type]:i}),r.markerElement&&e.remove(r.markerElement),t}),{});return f(r,(r=>new h(r.start||e.createPositionFromPath(t,[0]),r.end||e.createPositionAt(t,"end"))))}_getAllFakeMarkersFromElement(e,t){const r=Array.from(e.createRangeIn(t)).flatMap((({item:e})=>{if(!e.is("element","$marker"))return[];const t=e.getAttribute("data-name"),r=e.getAttribute("data-type");return[{markerElement:e,name:t,type:r}]})),i=[],o=[];for(const e of r){if("end"===e.type){r.some((t=>t.name===e.name&&"start"===t.type))||i.push({markerElement:null,name:e.name,type:"start"})}if("start"===e.type){r.some((t=>t.name===e.name&&"end"===t.type))||o.unshift({markerElement:null,name:e.name,type:"end"})}}return[...i,...r,...o]}_getUniqueMarkerName(e){const t=e.split(":"),i=r().substring(1,6);return 3===t.length?`${t.slice(0,2).join(":")}:${i}`:`${t.join(":")}:${i}`}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class M extends e{static get pluginName(){return"ClipboardPipeline"}static get requires(){return[E]}init(){this.editor.editing.view.addObserver(w),this._setupPasteDrop(),this._setupCopyCut()}_fireOutputTransformationEvent(e,t,r){const i=this.editor.plugins.get("ClipboardMarkersUtils");this.editor.model.enqueueChange({isUndoable:"cut"===r},(()=>{const o=i._copySelectedFragmentWithMarkers(r,t);this.fire("outputTransformation",{dataTransfer:e,content:o,method:r})}))}_setupPasteDrop(){const e=this.editor,r=e.model,i=e.editing.view,o=i.document,n=this.editor.plugins.get("ClipboardMarkersUtils");this.listenTo(o,"clipboardInput",((t,r)=>{"paste"!=r.method||e.model.canEditAt(e.model.document.selection)||t.stop()}),{priority:"highest"}),this.listenTo(o,"clipboardInput",((e,r)=>{const o=r.dataTransfer;let n;if(r.content)n=r.content;else{let e="";o.getData("text/html")?e=
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
function(e){return e.replace(/<span(?: class="Apple-converted-space"|)>(\s+)<\/span>/g,((e,t)=>1==t.length?" ":t)).replace(/<!--[\s\S]*?-->/g,"")}(o.getData("text/html")):o.getData("text/plain")&&(((a=(a=o.getData("text/plain")).replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\r?\n\r?\n/g,"</p><p>").replace(/\r?\n/g,"<br>").replace(/\t/g,"&nbsp;&nbsp;&nbsp;&nbsp;").replace(/^\s/,"&nbsp;").replace(/\s$/,"&nbsp;").replace(/\s\s/g," &nbsp;")).includes("</p><p>")||a.includes("<br>"))&&(a=`<p>${a}</p>`),e=a),n=this.editor.data.htmlProcessor.toView(e)}var a;const s=new t(this,"inputTransformation");this.fire(s,{content:n,dataTransfer:o,targetRanges:r.targetRanges,method:r.method}),s.stop.called&&e.stop(),i.scrollToTheSelection()}),{priority:"low"}),this.listenTo(this,"inputTransformation",((e,t)=>{if(t.content.isEmpty)return;const i=this.editor.data.toModel(t.content,"$clipboardHolder");0!=i.childCount&&(e.stop(),r.change((()=>{this.fire("contentInsertion",{content:i,method:t.method,dataTransfer:t.dataTransfer,targetRanges:t.targetRanges})})))}),{priority:"low"}),this.listenTo(this,"contentInsertion",((e,t)=>{t.resultRange=n._pasteFragmentWithMarkers(t.content)}),{priority:"low"})}_setupCopyCut(){const e=this.editor,t=e.model.document,r=e.editing.view.document,i=(e,r)=>{const i=r.dataTransfer;r.preventDefault(),this._fireOutputTransformationEvent(i,t.selection,e.name)};this.listenTo(r,"copy",i,{priority:"low"}),this.listenTo(r,"cut",((t,r)=>{e.model.canEditAt(e.model.document.selection)?i(t,r):r.preventDefault()}),{priority:"low"}),this.listenTo(this,"outputTransformation",((t,i)=>{const o=e.data.toView(i.content);r.fire("clipboardOutput",{dataTransfer:i.dataTransfer,content:o,method:i.method})}),{priority:"low"}),this.listenTo(r,"clipboardOutput",((r,i)=>{i.content.isEmpty||(i.dataTransfer.setData("text/html",this.editor.data.htmlProcessor.toData(i.content)),i.dataTransfer.setData("text/plain",D(i.content))),"cut"==i.method&&e.model.deleteContent(t.selection)}),{priority:"low"})}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/* istanbul ignore file -- @preserve */const R=i("px");class A extends v{constructor(){super();const e=this.bindTemplate;this.set({isVisible:!1,left:null,top:null,width:null}),this.setTemplate({tag:"div",attributes:{class:["ck","ck-clipboard-drop-target-line",e.if("isVisible","ck-hidden",(e=>!e))],style:{left:e.to("left",(e=>R(e))),top:e.to("top",(e=>R(e))),width:e.to("width",(e=>R(e)))}}})}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class P extends e{constructor(){super(...arguments),this.removeDropMarkerDelayed=o((()=>this.removeDropMarker()),40),this._updateDropMarkerThrottled=k((e=>this._updateDropMarker(e)),40),this._reconvertMarkerThrottled=k((()=>{this.editor.model.markers.has("drop-target")&&this.editor.editing.reconvertMarker("drop-target")}),0),this._dropTargetLineView=new A,this._domEmitter=new(n()),this._scrollables=new Map}static get pluginName(){return"DragDropTarget"}init(){this._setupDropMarker()}destroy(){this._domEmitter.stopListening();for(const{resizeObserver:e}of this._scrollables.values())e.destroy();return this._updateDropMarkerThrottled.cancel(),this.removeDropMarkerDelayed.cancel(),this._reconvertMarkerThrottled.cancel(),super.destroy()}updateDropMarker(e,t,r,i,o,n){this.removeDropMarkerDelayed.cancel();const a=x(this.editor,e,t,r,i,o,n);
/* istanbul ignore next -- @preserve */if(a)return n&&n.containsRange(a)?this.removeDropMarker():void this._updateDropMarkerThrottled(a)}getFinalDropRange(e,t,r,i,o,n){const a=x(this.editor,e,t,r,i,o,n);return this.removeDropMarker(),a}removeDropMarker(){const e=this.editor.model;this.removeDropMarkerDelayed.cancel(),this._updateDropMarkerThrottled.cancel(),this._dropTargetLineView.isVisible=!1,e.markers.has("drop-target")&&e.change((e=>{e.removeMarker("drop-target")}))}_setupDropMarker(){const e=this.editor;e.ui.view.body.add(this._dropTargetLineView),e.conversion.for("editingDowncast").markerToHighlight({model:"drop-target",view:{classes:["ck-clipboard-drop-target-range"]}}),e.conversion.for("editingDowncast").markerToElement({model:"drop-target",view:(t,{writer:r})=>{if(e.model.schema.checkChild(t.markerRange.start,"$text"))return this._dropTargetLineView.isVisible=!1,this._createDropTargetPosition(r);t.markerRange.isCollapsed?this._updateDropTargetLine(t.markerRange):this._dropTargetLineView.isVisible=!1}})}_updateDropMarker(e){const t=this.editor,r=t.model.markers;t.model.change((t=>{r.has("drop-target")?r.get("drop-target").getRange().isEqual(e)||t.updateMarker("drop-target",{range:e}):t.addMarker("drop-target",{range:e,usingOperation:!1,affectsData:!1})}))}_createDropTargetPosition(e){return e.createUIElement("span",{class:"ck ck-clipboard-drop-target-position"},(function(e){const t=this.toDomElement(e);return t.append("⁠",e.createElement("span"),"⁠"),t}))}_updateDropTargetLine(e){const t=this.editor.editing,r=e.start.nodeBefore,i=e.start.nodeAfter,o=e.start.parent,n=r?t.mapper.toViewElement(r):null,d=n?t.view.domConverter.mapViewToDom(n):null,l=i?t.mapper.toViewElement(i):null,c=l?t.view.domConverter.mapViewToDom(l):null,g=t.mapper.toViewElement(o);if(!g)return;const p=t.view.domConverter.mapViewToDom(g),h=this._getScrollableRect(g),{scrollX:m,scrollY:u}=a.window,f=d?new s(d):null,k=c?new s(c):null,b=new s(p).excludeScrollbarsAndBorders(),_=f?f.bottom:b.top,v=k?k.top:b.bottom,w=a.window.getComputedStyle(p),y=_<=v?(_+v)/2:v;if(h.top<y&&y<h.bottom){const e=b.left+parseFloat(w.paddingLeft),t=b.right-parseFloat(w.paddingRight),r=Math.max(e+m,h.left),i=Math.min(t+m,h.right);this._dropTargetLineView.set({isVisible:!0,left:r,top:y+u,width:i-r})}else this._dropTargetLineView.isVisible=!1}_getScrollableRect(e){const t=e.root.rootName;let r;if(this._scrollables.has(t))r=this._scrollables.get(t).domElement;else{r=function(e){let t=e;do{t=t.parentElement;const e=a.window.getComputedStyle(t).overflowY;if("auto"==e||"scroll"==e)break}while("BODY"!=t.tagName);return t}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */(this.editor.editing.view.domConverter.mapViewToDom(e)),this._domEmitter.listenTo(r,"scroll",this._reconvertMarkerThrottled,{usePassive:!0});const i=new d(r,this._reconvertMarkerThrottled);this._scrollables.set(t,{domElement:r,resizeObserver:i})}return new s(r).excludeScrollbarsAndBorders()}}function x(e,t,r,i,o,n,a){const s=e.model,d=e.editing.mapper;let l=O(e,t);for(;l;){if(!n)if(s.schema.checkChild(l,"$text")){if(r){const t=r[0].start,n=d.toModelPosition(t);if(!a||Array.from(a.getItems()).every((e=>s.schema.checkChild(n,e)))){if(s.schema.checkChild(n,"$text"))return s.createRange(n);if(t)return S(e,O(e,t.parent),i,o)}}}else if(s.schema.isInline(l))return S(e,l,i,o);if(s.schema.isBlock(l))return S(e,l,i,o);if(s.schema.checkChild(l,"$block")){const t=Array.from(l.getChildren()).filter((t=>t.is("element")&&!F(e,t)));let r=0,n=t.length;if(0==n)return s.createRange(s.createPositionAt(l,"end"));for(;r<n-1;){const a=Math.floor((r+n)/2);"before"==I(e,t[a],i,o)?n=a:r=a}return S(e,t[r],i,o)}l=l.parent}return null}function F(e,t){const r=e.editing.mapper,i=e.editing.view.domConverter,o=r.toViewElement(t);if(!o)return!0;const n=i.mapViewToDom(o);return"none"!=a.window.getComputedStyle(n).float}function S(e,t,r,i){const o=e.model;return o.createRange(o.createPositionAt(t,I(e,t,r,i)))}function I(e,t,r,i){const o=e.editing.mapper,n=e.editing.view.domConverter,a=o.toViewElement(t),d=n.mapViewToDom(a),l=new s(d);return e.model.schema.isInline(t)?r<(l.left+l.right)/2?"before":"after":i<(l.top+l.bottom)/2?"before":"after"}function O(e,t){const r=e.editing.mapper,i=e.editing.view,o=r.toModelElement(t);if(o)return o;const n=i.createPositionBefore(t),a=r.findMappedViewAncestor(n);return r.toModelElement(a)}class V extends e{constructor(){super(...arguments),this._isBlockDragging=!1,this._domEmitter=new(n())}static get pluginName(){return"DragDropBlockToolbar"}init(){const e=this.editor;if(this.listenTo(e,"change:isReadOnly",((e,t,r)=>{r?(this.forceDisabled("readOnlyMode"),this._isBlockDragging=!1):this.clearForceDisabled("readOnlyMode")})),l.isAndroid&&this.forceDisabled("noAndroidSupport"),e.plugins.has("BlockToolbar")){const t=e.plugins.get("BlockToolbar").buttonView.element;this._domEmitter.listenTo(t,"dragstart",((e,t)=>this._handleBlockDragStart(t))),this._domEmitter.listenTo(a.document,"dragover",((e,t)=>this._handleBlockDragging(t))),this._domEmitter.listenTo(a.document,"drop",((e,t)=>this._handleBlockDragging(t))),this._domEmitter.listenTo(a.document,"dragend",(()=>this._handleBlockDragEnd()),{useCapture:!0}),this.isEnabled&&t.setAttribute("draggable","true"),this.on("change:isEnabled",((e,r,i)=>{t.setAttribute("draggable",i?"true":"false")}))}}destroy(){return this._domEmitter.stopListening(),super.destroy()}_handleBlockDragStart(e){if(!this.isEnabled)return;const t=this.editor.model,r=t.document.selection,i=this.editor.editing.view,o=Array.from(r.getSelectedBlocks()),n=t.createRange(t.createPositionBefore(o[0]),t.createPositionAfter(o[o.length-1]));t.change((e=>e.setSelection(n))),this._isBlockDragging=!0,i.focus(),i.getObserver(w).onDomEvent(e)}_handleBlockDragging(e){if(!this.isEnabled||!this._isBlockDragging)return;const t=e.clientX+("ltr"==this.editor.locale.contentLanguageDirection?100:-100),r=e.clientY,i=document.elementFromPoint(t,r),o=this.editor.editing.view;i&&i.closest(".ck-editor__editable")&&o.getObserver(w).onDomEvent({...e,type:e.type,dataTransfer:e.dataTransfer,target:i,clientX:t,clientY:r,preventDefault:()=>e.preventDefault(),stopPropagation:()=>e.stopPropagation()})}_handleBlockDragEnd(){this._isBlockDragging=!1}}!function(e,{insertAt:t}={}){if("undefined"==typeof document)return;const r=document.head||document.getElementsByTagName("head")[0],i=document.createElement("style");i.type="text/css",window.litNonce&&i.setAttribute("nonce",window.litNonce),"top"===t&&r.firstChild?r.insertBefore(i,r.firstChild):r.appendChild(i),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(document.createTextNode(e))}('.ck.ck-editor__editable .ck.ck-clipboard-drop-target-position{display:inline;pointer-events:none;position:relative}.ck.ck-editor__editable .ck.ck-clipboard-drop-target-position span{position:absolute;width:0}.ck.ck-editor__editable .ck-widget:-webkit-drag>.ck-widget__selection-handle,.ck.ck-editor__editable .ck-widget:-webkit-drag>.ck-widget__type-around{display:none}.ck.ck-clipboard-drop-target-line{pointer-events:none;position:absolute}:root{--ck-clipboard-drop-target-dot-width:12px;--ck-clipboard-drop-target-dot-height:8px;--ck-clipboard-drop-target-color:var(--ck-color-focus-border)}.ck.ck-editor__editable .ck.ck-clipboard-drop-target-position span{background:var(--ck-clipboard-drop-target-color);border:1px solid var(--ck-clipboard-drop-target-color);bottom:calc(var(--ck-clipboard-drop-target-dot-height)*-.5);margin-left:-1px;top:calc(var(--ck-clipboard-drop-target-dot-height)*-.5)}.ck.ck-editor__editable .ck.ck-clipboard-drop-target-position span:after{border-color:var(--ck-clipboard-drop-target-color) transparent transparent transparent;border-style:solid;border-width:calc(var(--ck-clipboard-drop-target-dot-height)) calc(var(--ck-clipboard-drop-target-dot-width)*.5) 0 calc(var(--ck-clipboard-drop-target-dot-width)*.5);content:"";display:block;height:0;left:50%;position:absolute;top:calc(var(--ck-clipboard-drop-target-dot-height)*-.5);transform:translateX(-50%);width:0}.ck.ck-editor__editable .ck-widget.ck-clipboard-drop-target-range{outline:var(--ck-widget-outline-thickness) solid var(--ck-clipboard-drop-target-color)!important}.ck.ck-editor__editable .ck-widget:-webkit-drag{zoom:.6;outline:none!important}.ck.ck-clipboard-drop-target-line{background:var(--ck-clipboard-drop-target-color);border:1px solid var(--ck-clipboard-drop-target-color);height:0;margin-top:-1px}.ck.ck-clipboard-drop-target-line:before{border-style:solid;content:"";height:0;position:absolute;top:calc(var(--ck-clipboard-drop-target-dot-width)*-.5);width:0}[dir=ltr] .ck.ck-clipboard-drop-target-line:before{border-color:transparent transparent transparent var(--ck-clipboard-drop-target-color);border-width:calc(var(--ck-clipboard-drop-target-dot-width)*.5) 0 calc(var(--ck-clipboard-drop-target-dot-width)*.5) var(--ck-clipboard-drop-target-dot-height);left:-1px}[dir=rtl] .ck.ck-clipboard-drop-target-line:before{border-color:transparent var(--ck-clipboard-drop-target-color) transparent transparent;border-width:calc(var(--ck-clipboard-drop-target-dot-width)*.5) var(--ck-clipboard-drop-target-dot-height) calc(var(--ck-clipboard-drop-target-dot-width)*.5) 0;right:-1px}');
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
class B extends e{constructor(){super(...arguments),this._clearDraggableAttributesDelayed=o((()=>this._clearDraggableAttributes()),40),this._blockMode=!1,this._domEmitter=new(n())}static get pluginName(){return"DragDrop"}static get requires(){return[M,b,P,V]}init(){const e=this.editor,t=e.editing.view;this._draggedRange=null,this._draggingUid="",this._draggableElement=null,t.addObserver(w),t.addObserver(m),this._setupDragging(),this._setupContentInsertionIntegration(),this._setupClipboardInputIntegration(),this._setupDraggableAttributeHandling(),this.listenTo(e,"change:isReadOnly",((e,t,r)=>{r?this.forceDisabled("readOnlyMode"):this.clearForceDisabled("readOnlyMode")})),this.on("change:isEnabled",((e,t,r)=>{r||this._finalizeDragging(!1)})),l.isAndroid&&this.forceDisabled("noAndroidSupport")}destroy(){return this._draggedRange&&(this._draggedRange.detach(),this._draggedRange=null),this._previewContainer&&this._previewContainer.remove(),this._domEmitter.stopListening(),this._clearDraggableAttributesDelayed.cancel(),super.destroy()}_setupDragging(){const e=this.editor,t=e.model,i=e.editing.view,o=i.document,n=e.plugins.get(P);this.listenTo(o,"dragstart",((e,i)=>{if(i.target&&i.target.is("editableElement"))return void i.preventDefault();if(this._prepareDraggedRange(i.target),!this._draggedRange)return void i.preventDefault();this._draggingUid=r(),i.dataTransfer.effectAllowed=this.isEnabled?"copyMove":"copy",i.dataTransfer.setData("application/ckeditor5-dragging-uid",this._draggingUid);const o=t.createSelection(this._draggedRange.toRange());this.editor.plugins.get("ClipboardPipeline")._fireOutputTransformationEvent(i.dataTransfer,o,"dragstart");const{dataTransfer:n,domTarget:a,domEvent:s}=i,{clientX:d}=s;this._updatePreview({dataTransfer:n,domTarget:a,clientX:d}),i.stopPropagation(),this.isEnabled||(this._draggedRange.detach(),this._draggedRange=null,this._draggingUid="")}),{priority:"low"}),this.listenTo(o,"dragend",((e,t)=>{this._finalizeDragging(!t.dataTransfer.isCanceled&&"move"==t.dataTransfer.dropEffect)}),{priority:"low"}),this._domEmitter.listenTo(a.document,"dragend",(()=>{this._blockMode=!1}),{useCapture:!0}),this.listenTo(o,"dragenter",(()=>{this.isEnabled&&i.focus()})),this.listenTo(o,"dragleave",(()=>{n.removeDropMarkerDelayed()})),this.listenTo(o,"dragging",((e,t)=>{if(!this.isEnabled)return void(t.dataTransfer.dropEffect="none");const{clientX:r,clientY:i}=t.domEvent;n.updateDropMarker(t.target,t.targetRanges,r,i,this._blockMode,this._draggedRange),this._draggedRange||(t.dataTransfer.dropEffect="copy"),l.isGecko||("copy"==t.dataTransfer.effectAllowed?t.dataTransfer.dropEffect="copy":["all","copyMove"].includes(t.dataTransfer.effectAllowed)&&(t.dataTransfer.dropEffect="move")),e.stop()}),{priority:"low"})}_setupClipboardInputIntegration(){const e=this.editor,t=e.editing.view.document,r=e.plugins.get(P);this.listenTo(t,"clipboardInput",((t,i)=>{if("drop"!=i.method)return;const{clientX:o,clientY:n}=i.domEvent,a=r.getFinalDropRange(i.target,i.targetRanges,o,n,this._blockMode,this._draggedRange);if(!a)return this._finalizeDragging(!1),void t.stop();this._draggedRange&&this._draggingUid!=i.dataTransfer.getData("application/ckeditor5-dragging-uid")&&(this._draggedRange.detach(),this._draggedRange=null,this._draggingUid="");if("move"==N(i.dataTransfer)&&this._draggedRange&&this._draggedRange.containsRange(a,!0))return this._finalizeDragging(!1),void t.stop();i.targetRanges=[e.editing.mapper.toViewRange(a)]}),{priority:"high"})}_setupContentInsertionIntegration(){const e=this.editor.plugins.get(M);e.on("contentInsertion",((e,t)=>{if(!this.isEnabled||"drop"!==t.method)return;const r=t.targetRanges.map((e=>this.editor.editing.mapper.toModelRange(e)));this.editor.model.change((e=>e.setSelection(r)))}),{priority:"high"}),e.on("contentInsertion",((e,t)=>{if(!this.isEnabled||"drop"!==t.method)return;const r="move"==N(t.dataTransfer),i=!t.resultRange||!t.resultRange.isCollapsed;this._finalizeDragging(i&&r)}),{priority:"lowest"})}_setupDraggableAttributeHandling(){const e=this.editor,t=e.editing.view,r=t.document;this.listenTo(r,"mousedown",((i,o)=>{if(l.isAndroid||!o)return;this._clearDraggableAttributesDelayed.cancel();let n=L(o.target);if(l.isBlink&&!e.isReadOnly&&!n&&!r.selection.isCollapsed){const e=r.selection.getSelectedElement();e&&_(e)||(n=r.selection.editableElement)}n&&(t.change((e=>{e.setAttribute("draggable","true",n)})),this._draggableElement=e.editing.mapper.toModelElement(n))})),this.listenTo(r,"mouseup",(()=>{l.isAndroid||this._clearDraggableAttributesDelayed()}))}_clearDraggableAttributes(){const e=this.editor.editing;e.view.change((t=>{this._draggableElement&&"$graveyard"!=this._draggableElement.root.rootName&&t.removeAttribute("draggable",e.mapper.toViewElement(this._draggableElement)),this._draggableElement=null}))}_finalizeDragging(e){const t=this.editor,r=t.model;if(t.plugins.get(P).removeDropMarker(),this._clearDraggableAttributes(),t.plugins.has("WidgetToolbarRepository")){t.plugins.get("WidgetToolbarRepository").clearForceDisabled("dragDrop")}this._draggingUid="",this._previewContainer&&(this._previewContainer.remove(),this._previewContainer=void 0),this._draggedRange&&(e&&this.isEnabled&&r.change((e=>{const t=r.createSelection(this._draggedRange);r.deleteContent(t,{doNotAutoparagraph:!0});const i=t.getFirstPosition().parent;i.isEmpty&&!r.schema.checkChild(i,"$text")&&r.schema.checkChild(i,"paragraph")&&e.insertElement("paragraph",i,0)})),this._draggedRange.detach(),this._draggedRange=null)}_prepareDraggedRange(e){const t=this.editor,r=t.model,i=r.document.selection,o=e?L(e):null;if(o){const e=t.editing.mapper.toModelElement(o);if(this._draggedRange=u.fromRange(r.createRangeOn(e)),this._blockMode=r.schema.isBlock(e),t.plugins.has("WidgetToolbarRepository")){t.plugins.get("WidgetToolbarRepository").forceDisabled("dragDrop")}return}if(i.isCollapsed&&!i.getFirstPosition().parent.isEmpty)return;const n=Array.from(i.getSelectedBlocks()),a=i.getFirstRange();if(0==n.length)return void(this._draggedRange=u.fromRange(a));const s=$(r,n);if(n.length>1)this._draggedRange=u.fromRange(s),this._blockMode=!0;else if(1==n.length){const e=a.start.isTouching(s.start)&&a.end.isTouching(s.end);this._draggedRange=u.fromRange(e?s:a),this._blockMode=e}r.change((e=>e.setSelection(this._draggedRange.toRange())))}_updatePreview({dataTransfer:e,domTarget:t,clientX:r}){const i=this.editor.editing.view,o=i.document.selection.editableElement,n=i.domConverter.mapViewToDom(o),d=a.window.getComputedStyle(n);this._previewContainer?this._previewContainer.firstElementChild&&this._previewContainer.removeChild(this._previewContainer.firstElementChild):(this._previewContainer=c(a.document,"div",{style:"position: fixed; left: -999999px;"}),a.document.body.appendChild(this._previewContainer));const g=new s(n);if(n.contains(t))return;const p=parseFloat(d.paddingLeft),h=c(a.document,"div");h.className="ck ck-content",h.style.width=d.width,h.style.paddingLeft=`${g.left-r+p}px`,l.isiOS&&(h.style.backgroundColor="white"),h.innerHTML=e.getData("text/html"),e.setDragImage(h,0,0),this._previewContainer.appendChild(h)}}function N(e){return l.isGecko?e.dropEffect:["all","copyMove"].includes(e.effectAllowed)?"move":"copy"}function L(e){if(e.is("editableElement"))return null;if(e.hasClass("ck-widget__selection-handle"))return e.findAncestor(_);if(_(e))return e;const t=e.findAncestor((e=>_(e)||e.is("editableElement")));return _(t)?t:null}function $(e,t){const r=t[0],i=t[t.length-1],o=r.getCommonAncestor(i),n=e.createPositionBefore(r),a=e.createPositionAfter(i);if(o&&o.is("element")&&!e.schema.isLimit(o)){const t=e.createRangeOn(o),r=n.isTouching(t.start),i=a.isTouching(t.end);if(r&&i)return $(e,[o])}return e.createRange(n,a)}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class U extends e{static get pluginName(){return"PastePlainText"}static get requires(){return[M]}init(){const e=this.editor,t=e.model,r=e.editing.view,i=r.document,o=t.document.selection;let n=!1;r.addObserver(w),this.listenTo(i,"keydown",((e,t)=>{n=t.shiftKey})),e.plugins.get(M).on("contentInsertion",((e,r)=>{(n||function(e,t){if(e.childCount>1)return!1;const r=e.getChild(0);if(t.isObject(r))return!1;return 0==Array.from(r.getAttributeKeys()).length}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */(r.content,t.schema))&&t.change((e=>{const i=Array.from(o.getAttributes()).filter((([e])=>t.schema.getAttributeProperties(e).isFormatting));o.isCollapsed||t.deleteContent(o,{doNotAutoparagraph:!0}),i.push(...o.getAttributes());const n=e.createRangeIn(r.content);for(const t of n.getItems())t.is("$textProxy")&&e.setAttributes(i,t)}))}))}}class q extends e{static get pluginName(){return"Clipboard"}static get requires(){return[E,M,B,U]}init(){const e=this.editor,t=this.editor.t;e.accessibility.addKeystrokeInfos({keystrokes:[{label:t("Copy selected content"),keystroke:"CTRL+C"},{label:t("Paste content"),keystroke:"CTRL+V"},{label:t("Paste content as plain text"),keystroke:"CTRL+SHIFT+V"}]})}}export{q as Clipboard,E as ClipboardMarkersUtils,M as ClipboardPipeline,B as DragDrop,V as DragDropBlockToolbar,P as DragDropTarget,U as PastePlainText};