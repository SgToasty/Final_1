<?php
class Default_action_PageTsConfig_Active_3d7dad6b11b7240eeeb4f590c99e45878fd3ad66 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Module';
    }
    public function hasLayout() {
        return true;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'backend' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
    }
    /**
 * section Before
 */
public function section_74f39697ac328c6325ce068b6aaca626abc0bf63(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'collapse-state-search.numberOfSearchMatches' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.panel.header.numberOfSearchMatches',
];

$array4 = [
'0' => '@typo3/backend/context-menu.js',
'1' => '@typo3/backend/element/immediate-action-element.js',
'2' => '@typo3/backend/tree/tree-node-toggle.js',
'3' => '@typo3/backend/utility/collapse-state-persister.js',
'4' => '@typo3/backend/utility/collapse-state-search.js',
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'addJsInlineLabels' => $array3,
'includeJavaScriptModules' => $array4,
'includeRequireJsModules' => NULL,
'addInlineSettings' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$array7 = [
'0' => 'web',
'1' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments5 = [
'value' => $array7,
'name' => 'args',
];
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '
    <typo3-immediate-action
        action="TYPO3.Backend.Storage.ModuleStateStorage.update"
        args="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('args');
};

$arguments11 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure12 = ($arguments11['value'] !== null) ? function() use ($arguments11) { return $arguments11['value']; } : $renderChildrenClosure12;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
};

$arguments8 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value10 = ($arguments8['value'] !== NULL ? $arguments8['value'] : $renderChildrenClosure9());

$output0 .= !is_string($value10) && !(is_object($value10) && method_exists($value10, '__toString')) ? $value10 : htmlspecialchars($value10, ($arguments8['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments8['encoding'], $arguments8['doubleEncode']);

$output0 .= '"
    ></typo3-immediate-action>
';

    return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output13 = '';

$output13 .= '
    <h1>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$array16 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageTitle'),
];

$arguments14 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.headline',
'id' => NULL,
'default' => NULL,
'arguments' => $array16,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '
    </h1>
    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.description',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output13 .= '</p>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$arguments19 = [
'section' => 'Options',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '

    ';

$output13 .= '';

$output13 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('siteSettingsAst'),
];

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments21 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output24 = '';

$output24 .= '
        <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$arguments25 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.siteSettings',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output24 .= '</h2>
        <div class="panel-group">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$array29 = [
'type' => 'constant',
'tree' => $renderingContext->getVariableProvider()->getByPath('siteSettingsAst'),
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'displayComments' => 0,
];

$arguments27 = [
'section' => 'TreePanel',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array29,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output24 .= '
        </div>
    ';
return $output24;
},
];

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, static fn() => '', $renderingContext)
;

$output13 .= '

    <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.activePageTsConfig',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output13 .= '</h2>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array33 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('pageTsConfigAst.children'),
];

$expression34 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments32 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression34(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output35 = '';

$output35 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.noPageTSconfigAvailable',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments36 = [
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]),
'title' => NULL,
'state' => -1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure37 = ($arguments36['message'] !== null) ? function() use ($arguments36) { return $arguments36['message']; } : $renderChildrenClosure37;
$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
        ';
return $output35;
},
'__else' => function() use ($renderingContext) {
$output40 = '';

$output40 .= '
            <div class="panel-group">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array42 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageTsConfigConditions'),
];

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments41 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression43(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output44 = '';

$output44 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$array47 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'conditions' => $renderingContext->getVariableProvider()->getByPath('pageTsConfigConditions'),
'conditionActiveCount' => $renderingContext->getVariableProvider()->getByPath('pageTsConfigConditionsActiveCount'),
'displayConstantSubstitutions' => $renderingContext->getVariableProvider()->getByPath('displayConstantSubstitutions'),
];

$arguments45 = [
'section' => 'Conditions',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array47,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
                ';
return $output44;
},
];

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, static fn() => '', $renderingContext)
;

$output40 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$array50 = [
'type' => 'setup',
'tree' => $renderingContext->getVariableProvider()->getByPath('pageTsConfigAst'),
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'displayComments' => $renderingContext->getVariableProvider()->getByPath('displayComments'),
'displayConstantSubstitutions' => $renderingContext->getVariableProvider()->getByPath('displayConstantSubstitutions'),
];

$arguments48 = [
'section' => 'TreePanel',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array50,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output40 .= '
            </div>
        ';
return $output40;
},
];

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, static fn() => '', $renderingContext)
;

$output13 .= '
';

    return $output13;
}
/**
 * section Options
 */
public function section_6bf5da9c080bee3a8142586c412aa39971137eee(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output51 = '';

$output51 .= '
    <div class="form-row-md">
        <div class="form-group">
            <form action="#">
                <div class="input-group">
                    <input
                        type="text"
                        class="form-control form-control-clearable t3js-collapse-search-term"
                        name="searchValue"
                        data-persist-collapse-search-key="collapse-search-term-pagets"
                        value=""
                        minlength="3"
                        placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$arguments52 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.enterSearchString',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output51 .= '"
                    />
                    <button type="submit" class="btn btn-default disabled">
                        <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
return NULL;
};

$arguments54 = [
'key' => NULL,
'id' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.title.search',
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output51 .= '</span>
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
return NULL;
};

$arguments56 = [
'identifier' => 'actions-search',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output51 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output51 .= '
                    </button>
                </div>
            </form>
        </div>
        <div class="form-group">
            <div class="form-row-sm">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array59 = [
'0' => $renderingContext->getVariableProvider()->getByPath('siteSettingsAst'),
];

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments58 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression60(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output61 = '';

$output61 .= '
                    <div class="form-group">
                        <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
return NULL;
};

$array64 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments62 = [
'route' => 'pagetsconfig_active',
'parameters' => $array64,
'referenceType' => 'absolute',
];

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output61 .= '" method="post">
                            <input type="hidden" name="displayConstantSubstitutions" value="0" />
                            <div class="form-check form-switch form-check-size-input">
                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    name="displayConstantSubstitutions"
                                    id="displayConstantSubstitutions"
                                    value="1"
                                    data-global-event="change"
                                    data-action-submit="$form"
                                    data-value-selector="input[name=\'displayConstantSubstitutions\']"
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array66 = [
'0' => $renderingContext->getVariableProvider()->getByPath('displayConstantSubstitutions'),
];

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments65 = [
'then' => 'checked="checked"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression67(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)),
    $renderingContext
),
];

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, static fn() => '', $renderingContext)
;

$output61 .= '
                                />
                                <label class="form-check-label" for="displayConstantSubstitutions">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return NULL;
};

$arguments68 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.displayConstantSubstitutions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output61 .= '
                                </label>
                            </div>
                        </form>
                    </div>
                ';
return $output61;
},
];

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, static fn() => '', $renderingContext)
;

$output51 .= '
                <div class="form-group">
                    <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return NULL;
};

$array72 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments70 = [
'route' => 'pagetsconfig_active',
'parameters' => $array72,
'referenceType' => 'absolute',
];

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output51 .= '" method="post">
                        <input type="hidden" name="displayComments" value="0" />
                        <div class="form-check form-switch form-check-size-input">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                name="displayComments"
                                id="displayComments"
                                value="1"
                                data-global-event="change"
                                data-action-submit="$form"
                                data-value-selector="input[name=\'displayComments\']"
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array74 = [
'0' => $renderingContext->getVariableProvider()->getByPath('displayComments'),
];

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments73 = [
'then' => 'checked="checked"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression75(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)),
    $renderingContext
),
];

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, static fn() => '', $renderingContext)
;

$output51 .= '
                            />
                            <label class="form-check-label" for="displayComments">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return NULL;
};

$arguments76 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.displayComments',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output51 .= '
                            </label>
                        </div>
                    </form>
                </div>
                <div class="form-group">
                    <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
return NULL;
};

$array80 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments78 = [
'route' => 'pagetsconfig_active',
'parameters' => $array80,
'referenceType' => 'absolute',
];

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output51 .= '" method="post">
                        <input type="hidden" name="sortAlphabetically" value="0" />
                        <div class="form-check form-switch form-check-size-input">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                name="sortAlphabetically"
                                id="sortAlphabetically"
                                value="1"
                                data-global-event="change"
                                data-action-submit="$form"
                                data-value-selector="input[name=\'sortAlphabetically\']"
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array82 = [
'0' => $renderingContext->getVariableProvider()->getByPath('sortAlphabetically'),
];

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments81 = [
'then' => 'checked="checked"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression83(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)),
    $renderingContext
),
];

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, static fn() => '', $renderingContext)
;

$output51 .= '
                            />
                            <label class="form-check-label" for="sortAlphabetically">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
return NULL;
};

$arguments84 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.sortAlphabetically',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output51 .= '
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
';

    return $output51;
}
/**
 * section Conditions
 */
public function section_5506eb6161a07356d96e91770d25d5a0f22200ef(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output86 = '';

$output86 .= '
    <div class="panel panel-default">
        <div class="panel-heading" role="tab">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array88 = [
'0' => $renderingContext->getVariableProvider()->getByPath('conditionActiveCount'),
];

$expression89 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments87 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression89(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output90 = '';

$output90 .= '
                    <div class="row align-items-center justify-content-between">
                        <div class="col align-middle">
                            <h3 class="panel-title" id="pagetsconfig-active-conditions-heading">
                                <a
                                    href="#"
                                    class="collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#pagetsconfig-active-conditions-body"
                                    aria-expanded="false"
                                    aria-controls="pagetsconfig-active-conditions-body"
                                >
                                    <span class="caret"></span>
                                    <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
return NULL;
};

$arguments91 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.panel.header.conditions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output90 .= '</strong>
                                </a>
                            </h3>
                        </div>
                        <div class="col text-end">
                            <span class="badge badge-info">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return NULL;
};
$output95 = '';

$output95 .= 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.panel.info.conditionActiveCount.';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array97 = [
'0' => $renderingContext->getVariableProvider()->getByPath('conditionActiveCount'),
'1' => ' > 1',
];

$expression98 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments96 = [
'then' => 'multiple',
'else' => 'single',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression98(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)),
    $renderingContext
),
];

$output95 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, static fn() => '', $renderingContext)
;

$array99 = [
'0' => $renderingContext->getVariableProvider()->getByPath('conditionActiveCount'),
];

$arguments93 = [
'key' => $output95,
'id' => NULL,
'default' => NULL,
'arguments' => $array99,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output90 .= '
                            </span>
                        </div>
                    </div>
                ';
return $output90;
},
'__else' => function() use ($renderingContext) {
$output100 = '';

$output100 .= '
                    <h3 class="panel-title" id="pagetsconfig-active-conditions-heading">
                        <a
                            href="#"
                            class="collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#pagetsconfig-active-conditions-body"
                            aria-expanded="false"
                            aria-controls="pagetsconfig-active-conditions-body"
                        >
                            <span class="caret"></span>
                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};

$arguments101 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.panel.header.conditions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output100 .= '</strong>
                        </a>
                    </h3>
                ';
return $output100;
},
];

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, static fn() => '', $renderingContext)
;

$output86 .= '
        </div>
        <div
            class="panel-collapse collapse"
            id="pagetsconfig-active-conditions-body"
            data-persist-collapse-state="true"
            data-persist-collapse-state-if-state="shown"
            role="tabpanel"
            aria-labelledby="pagetsconfig-active-conditions-heading"
        >
            <div class="panel-body">
                <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return NULL;
};

$array105 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments103 = [
'route' => 'pagetsconfig_active',
'parameters' => $array105,
'referenceType' => 'absolute',
];

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext)]);

$output86 .= '" method="post">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure107 = function() use ($renderingContext) {
$output108 = '';

$output108 .= '
                        <input type="hidden" name="pageTsConfigConditions[';

$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.hash')]);

$output108 .= ']" value="0" />
                        <div class="form-check form-switch">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="condition';

$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.hash')]);

$output108 .= '"
                                name="pageTsConfigConditions[';

$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.hash')]);

$output108 .= ']"
                                value="1"
                                data-global-event="change"
                                data-action-submit="$form"
                                data-value-selector="input[name=\'pageTsConfigConditions[';

$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.hash')]);

$output108 .= ']\']"
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array110 = [
'0' => $renderingContext->getVariableProvider()->getByPath('condition.active'),
];

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments109 = [
'then' => 'checked="checked"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression111(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)),
    $renderingContext
),
];

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, static fn() => '', $renderingContext)
;

$output108 .= '
                            />
                            <label class="form-check-label" for="condition';

$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.hash')]);

$output108 .= '">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array113 = [
'0' => $renderingContext->getVariableProvider()->getByPath('displayConstantSubstitutions'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('condition.originalValue'),
];

$expression114 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments112 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression114(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array113)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output115 = '';

$output115 .= '
                                        <span class="font-monospace">[';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.value')]);

$output115 .= ']</span>
                                        <span class="diff-item-result diff-item-result-inline font-monospace p-0">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure117 = function() use ($renderingContext) {
$output118 = '';

$output118 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\TypoScript\FineDiffViewHelper
$renderChildrenClosure123 = function() use ($renderingContext) {
return NULL;
};

$arguments122 = [
'from' => $renderingContext->getVariableProvider()->getByPath('condition.originalValue'),
'to' => $renderingContext->getVariableProvider()->getByPath('condition.value'),
];

$array121 = [
'0' => TYPO3\CMS\Backend\ViewHelpers\TypoScript\FineDiffViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext),
];

$arguments119 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.panel.info.conditionWithConstant',
'id' => NULL,
'default' => NULL,
'arguments' => $array121,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
                                            ';
return $output118;
};

$arguments116 = [
'value' => NULL,
];

$output115 .= isset($arguments116['value']) ? $arguments116['value'] : $renderChildrenClosure117();

$output115 .= '
                                        </span>
                                    ';
return $output115;
},
'__else' => function() use ($renderingContext) {
$output124 = '';

$output124 .= '
                                        <span class="font-monospace">[';

$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('condition.value')]);

$output124 .= ']</span>
                                    ';
return $output124;
},
];

$output108 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, static fn() => '', $renderingContext)
;

$output108 .= '
                            </label>
                        </div>
                    ';
return $output108;
};

$arguments106 = [
'each' => $renderingContext->getVariableProvider()->getByPath('conditions'),
'as' => 'condition',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output86 .= '
                </form>
            </div>
        </div>
    </div>
';

    return $output86;
}
/**
 * section TreePanel
 */
public function section_205bda38f4611e51620f129404b86c7e263ea8b9(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output125 = '';

$output125 .= '
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row align-items-center justify-content-between">
                <div class="col align-middle">
                    <h3 class="panel-title" id="pagetsconfig-active-';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output125 .= '-ast-heading">
                        <a
                            href="#"
                            class="collapsed"
                            id="panel-tree-heading-';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output125 .= '"
                            data-bs-toggle="collapse"
                            data-bs-target="#pagetsconfig-active-';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output125 .= '-ast-body"
                            aria-expanded="false"
                            aria-controls="pagetsconfig-active-';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output125 .= '-ast-body"
                        >
                            <span class="caret"></span>
                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
return NULL;
};

$arguments126 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.panel.header.configuration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext)]);

$output125 .= '</strong>
                        </a>
                    </h3>
                </div>
                <div class="col text-end">
                    <span class="badge badge-success hidden t3js-collapse-states-search-numberOfSearchMatches"></span>
                </div>
            </div>
        </div>
        <div
            id="pagetsconfig-active-';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output125 .= '-ast-body"
            class="panel-collapse collapse"
            data-persist-collapse-state="true"
            data-persist-collapse-state-if-state="shown"
            aria-labelledby="pagetsconfig-active-';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output125 .= '-ast-heading"
            role="tabpanel"
        >
            <div class="panel-body panel-body-overflow t3js-collapse-states-search-tree">
                <ul class="treelist">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure129 = function() use ($renderingContext) {
return NULL;
};

$array130 = [
'type' => $renderingContext->getVariableProvider()->getByPath('type'),
'tree' => $renderingContext->getVariableProvider()->getByPath('tree'),
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'displayConstantSubstitutions' => $renderingContext->getVariableProvider()->getByPath('displayConstantSubstitutions'),
'displayComments' => $renderingContext->getVariableProvider()->getByPath('displayComments'),
];

$arguments128 = [
'section' => 'Tree',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array130,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output125 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output125 .= '
                </ul>
            </div>
        </div>
    </div>
';

    return $output125;
}
/**
 * section Tree
 */
public function section_99f5ff6378a0b48f815677894306b090ee036726(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output131 = '';

$output131 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure133 = function() use ($renderingContext) {
$output134 = '';

$output134 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array136 = [
'0' => $renderingContext->getVariableProvider()->getByPath('displayComments'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('child.comments'),
];

$expression137 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments135 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression137(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array136)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output138 = '';

$output138 .= '
            <li class="loose">
                <div class="treelist-comment">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
$output141 = '';

$output141 .= '
                        <div>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure143 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('comment')]);
};

$arguments142 = [
'value' => NULL,
];
$renderChildrenClosure143 = ($arguments142['value'] !== null) ? function() use ($arguments142) { return $arguments142['value']; } : $renderChildrenClosure143;
$output141 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '</div>
                    ';
return $output141;
};

$arguments139 = [
'each' => $renderingContext->getVariableProvider()->getByPath('child.comments'),
'as' => 'comment',
'key' => NULL,
'reverse' => false,
'iteration' => 'iterator',
];

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
                </div>
            </li>
        ';
return $output138;
},
];

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, static fn() => '', $renderingContext)
;

$output134 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array145 = [
'0' => $renderingContext->getVariableProvider()->getByPath('displayConstantSubstitutions'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('child.originalValueTokenStream'),
];

$expression146 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments144 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression146(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output147 = '';

$output147 .= '
            <li class="loose">
                <span class="diff-item-result diff-item-result-inline">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
$output150 = '';

$output150 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure152 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure154 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('child.originalValueTokenStream');
};

$arguments153 = [
'value' => NULL,
'characters' => NULL,
'side' => 'both',
];
return TYPO3\CMS\Fluid\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);
};

$arguments151 = [
'value' => NULL,
'name' => 'trimmedValueTokenStream',
];
$renderChildrenClosure152 = ($arguments151['value'] !== null) ? function() use ($arguments151) { return $arguments151['value']; } : $renderChildrenClosure152;
$output150 .= TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\TypoScript\FineDiffViewHelper
$renderChildrenClosure159 = function() use ($renderingContext) {
return NULL;
};

$arguments158 = [
'from' => $renderingContext->getVariableProvider()->getByPath('trimmedValueTokenStream'),
'to' => $renderingContext->getVariableProvider()->getByPath('child.value'),
];

$array157 = [
'0' => TYPO3\CMS\Backend\ViewHelpers\TypoScript\FineDiffViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext),
];

$arguments155 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_active.tree.valueWithConstant',
'id' => NULL,
'default' => NULL,
'arguments' => $array157,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output150 .= '
                    ';
return $output150;
};

$arguments148 = [
'value' => NULL,
];

$output147 .= isset($arguments148['value']) ? $arguments148['value'] : $renderChildrenClosure149();

$output147 .= '
                </span>
            </li>
        ';
return $output147;
},
];

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, static fn() => '', $renderingContext)
;

$output134 .= '
        <li>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array161 = [
'0' => $renderingContext->getVariableProvider()->getByPath('child.children'),
];

$expression162 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments160 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression162(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output163 = '';

$output163 .= '
                <typo3-backend-tree-node-toggle
                    class="treelist-control collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse-list-';

$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.identifier')]);

$output163 .= '"
                    aria-expanded="false">
                </typo3-backend-tree-node-toggle>
            ';
return $output163;
},
];

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments160, static fn() => '', $renderingContext)
;

$output134 .= '
            <span class="treelist-group treelist-group-monospace">
                <span class="treelist-label">';

$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.name')]);

$output134 .= '</span>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array165 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('child.valueNull'),
];

$expression166 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments164 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression166(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output167 = '';

$output167 .= '
                    <span class="treelist-operator">=</span>
                    <span class="treelist-value">';

$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.value')]);

$output167 .= '</span>
                ';
return $output167;
},
];

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments164, static fn() => '', $renderingContext)
;

$output134 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array169 = [
'0' => $renderingContext->getVariableProvider()->getByPath('child.referenceSourceStream'),
];

$expression170 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments168 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression170(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output171 = '';

$output171 .= '
                    <span class="treelist-operator">=<</span>
                    <span class="treelist-value">';

$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.referenceSourceStream')]);

$output171 .= '</span>
                ';
return $output171;
},
];

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, static fn() => '', $renderingContext)
;

$output134 .= '
            </span>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array173 = [
'0' => $renderingContext->getVariableProvider()->getByPath('child.children'),
];

$expression174 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments172 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression174(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output175 = '';

$output175 .= '
                <div
                    class="treelist-collapse collapse"
                    data-persist-collapse-state="true"
                    data-persist-collapse-state-suffix="pagets-active-';

$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type')]);

$output175 .= '"
                    data-persist-collapse-state-not-if-search="true"
                    data-persist-collapse-state-if-state="shown"
                    id="collapse-list-';

$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.identifier')]);

$output175 .= '"
                >
                    <ul class="treelist">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure177 = function() use ($renderingContext) {
return NULL;
};

$array178 = [
'type' => $renderingContext->getVariableProvider()->getByPath('type'),
'tree' => $renderingContext->getVariableProvider()->getByPath('child'),
'pageUid' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
'displayConstantSubstitutions' => $renderingContext->getVariableProvider()->getByPath('displayConstantSubstitutions'),
'displayComments' => $renderingContext->getVariableProvider()->getByPath('displayComments'),
];

$arguments176 = [
'section' => 'Tree',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array178,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '
                    </ul>
                </div>
            ';
return $output175;
},
];

$output134 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, static fn() => '', $renderingContext)
;

$output134 .= '
        </li>
    ';
return $output134;
};

$arguments132 = [
'each' => $renderingContext->getVariableProvider()->getByPath('tree.nextChild'),
'as' => 'child',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output131 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
';

    return $output131;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output179 = '';

$output179 .= '

';

$output179 .= '';

$output179 .= '

';

$output179 .= '';

$output179 .= '

';

$output179 .= '';

$output179 .= '

';

$output179 .= '';

$output179 .= '

';

$output179 .= '';

$output179 .= '

';

$output179 .= '';

$output179 .= '

';

$output179 .= '';

$output179 .= '


';

    return $output179;
}

}

#