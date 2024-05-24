<?php
class Default_action_SiteConfiguration_Overview_d6b4b6740c712c53f581cf48a1631ef1d11b692e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
    }
    /**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/backend/modal.js',
'1' => '@typo3/backend/context-menu.js',
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'addJsInlineLabels' => NULL,
'includeJavaScriptModules' => $array3,
'includeRequireJsModules' => NULL,
'addInlineSettings' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '

    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '</h1>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array7 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pages'),
];

$expression8 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments6 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression8(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output9 = '';

$output9 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('duplicatedRootPages'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
                    <ul>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
$output21 = '';

$output21 .= '
                            <li>
                                <strong>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$array24 = [
'0' => $renderingContext->getVariableProvider()->getByPath('rootPage'),
];

$arguments22 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedRootPage.message',
'id' => NULL,
'default' => NULL,
'arguments' => $array24,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output21 .= '
                                </strong>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('duplicateSites'),
];

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments25 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output28 = '';

$output28 .= '
                                    <ul>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
$output31 = '';

$output31 .= '
                                            <li>';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('duplicateSite')]);

$output31 .= '</li>
                                        ';
return $output31;
};

$arguments29 = [
'each' => $renderingContext->getVariableProvider()->getByPath('duplicateSites'),
'as' => 'duplicateSite',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
                                    </ul>
                                ';
return $output28;
},
];

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, static fn() => '', $renderingContext)
;

$output21 .= '
                            </li>
                        ';
return $output21;
};

$arguments19 = [
'each' => $renderingContext->getVariableProvider()->getByPath('duplicatedRootPages'),
'as' => 'duplicateSites',
'key' => 'rootPage',
'reverse' => false,
'iteration' => NULL,
];

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
                    </ul>
                ';
return $output18;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedRootPage',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments14 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext),
'state' => 1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure15 = ($arguments14['message'] !== null) ? function() use ($arguments14) { return $arguments14['message']; } : $renderChildrenClosure15;
$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
            ';
return $output13;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, static fn() => '', $renderingContext)
;

$output9 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array33 = [
'0' => $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints'),
];

$expression34 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

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
$output40 = '';

$output40 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};

$arguments41 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints.listing',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output40 .= '
                    <ul>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
$output45 = '';

$output45 .= '
                        <li>
                            <strong>';

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item')]);

$output45 .= '</strong>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array47 = [
'0' => $renderingContext->getVariableProvider()->getByPath('schemes'),
];

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments46 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression48(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                                <ul>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
$output52 = '';

$output52 .= '
                                        <li>';

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('schema')]);

$output52 .= ' (';

$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count')]);

$output52 .= ')</li>
                                    ';
return $output52;
};

$arguments50 = [
'each' => $renderingContext->getVariableProvider()->getByPath('schemes'),
'as' => 'count',
'key' => 'schema',
'reverse' => false,
'iteration' => NULL,
];

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
                                </ul>
                            ';
return $output49;
},
];

$output45 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, static fn() => '', $renderingContext)
;

$output45 .= '
                        </li>
                    ';
return $output45;
};

$arguments43 = [
'each' => $renderingContext->getVariableProvider()->getByPath('duplicatedEntryPoints'),
'as' => 'schemes',
'key' => 'item',
'reverse' => false,
'iteration' => NULL,
];

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output40 .= '
                    </ul>
                ';
return $output40;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.duplicatedEntryPoints',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments36 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext),
'state' => 1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure37 = ($arguments36['message'] !== null) ? function() use ($arguments36) { return $arguments36['message']; } : $renderChildrenClosure37;
$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
            ';
return $output35;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, static fn() => '', $renderingContext)
;

$output9 .= '

            <div class="table-fit">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th colspan="2" class="nowrap align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.site',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output9 .= '</th>
                            <th class="align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};

$arguments55 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.siteIdentifier',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output9 .= '</th>
                            <th class="align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site_language.language',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output9 .= '</th>
                            <th class="align-top">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};

$arguments59 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.baseUrl',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output9 .= '</th>
                            <th class="align-top">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
$output63 = '';

$output63 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
};

$arguments64 = [
'value' => $renderingContext->getVariableProvider()->getByPath('page'),
'name' => 'rootPage',
];
$renderChildrenClosure65 = ($arguments64['value'] !== null) ? function() use ($arguments64) { return $arguments64['value']; } : $renderChildrenClosure65;
$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output63 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
$output68 = '';

$output68 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array70 = [
'0' => $renderingContext->getVariableProvider()->getByPath('rootLinePage.uid'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('page.uid'),
];

$expression71 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments69 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression71(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output72 = '';

$output72 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};

$arguments73 = [
'value' => $renderingContext->getVariableProvider()->getByPath('rootLinePage'),
'name' => 'rootPage',
];
$renderChildrenClosure74 = ($arguments73['value'] !== null) ? function() use ($arguments73) { return $arguments73['value']; } : $renderChildrenClosure74;
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output72 .= '
                                ';
return $output72;
},
];

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, static fn() => '', $renderingContext)
;

$output68 .= '
                            ';
return $output68;
};

$arguments66 = [
'each' => $renderingContext->getVariableProvider()->getByPath('page.rootline'),
'as' => 'rootLinePage',
'key' => NULL,
'reverse' => false,
'iteration' => 'rootLinePageIterator',
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output63 .= '
                            <tr>
                                <td class="col-icon align-top">
                                    <button type="button"
                                        class="btn btn-link p-0"
                                        data-contextmenu-trigger="click"
                                        data-contextmenu-table="pages"
                                        data-contextmenu-uid="';

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootPage.uid')]);

$output63 .= '">
                                        <span style="margin-left: ';

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootLinePage.margin')]);

$output63 .= 'px">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return NULL;
};

$arguments75 = [
'table' => 'pages',
'row' => $renderingContext->getVariableProvider()->getByPath('rootPage'),
'size' => 'small',
'alternativeMarkupIdentifier' => NULL,
];

$output63 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output63 .= '
                                        </span>
                                    </button>
                                </td>
                                <td class="align-top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array78 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments77 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression79(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output80 = '';

$output80 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
$output86 = '';

$output86 .= '
                                                ';

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootPage.title')]);

$output86 .= '
                                            ';
return $output86;
};

$array83 = [
'site' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
return NULL;
};

$arguments84 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.editSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments81 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'route' => 'site_configuration.edit',
'parameters' => $array83,
'referenceType' => 'absolute',
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
                                        ';
return $output80;
},
'__else' => function() use ($renderingContext) {
$output87 = '';

$output87 .= '
                                            ';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('rootPage.title')]);

$output87 .= '
                                        ';
return $output87;
},
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, static fn() => '', $renderingContext)
;

$output63 .= '
                                </td>
                                <td class="align-top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array89 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];

$expression90 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments88 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression90(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output91 = '';

$output91 .= '
                                            <code>';

$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output91 .= '</code>
                                        ';
return $output91;
},
'__else' => function() use ($renderingContext) {
$output92 = '';

$output92 .= '
                                            <div>
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
$output96 = '';

$output96 .= '
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return NULL;
};

$arguments97 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.addSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output96 .= '
                                                ';
return $output96;
};

$array95 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('page.uid'),
];

$arguments93 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'route' => 'site_configuration.edit',
'parameters' => $array95,
'referenceType' => 'absolute',
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'class' => 'btn btn-primary',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
                                            </div>
                                        ';
return $output92;
},
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, static fn() => '', $renderingContext)
;

$output63 .= '
                                </td>
                                <td class="align-top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array100 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration'),
];

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments99 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression101(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output102 = '';

$output102 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
$output105 = '';

$output105 .= '
                                            <div class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array107 = [
'0' => $renderingContext->getVariableProvider()->getByPath('siteLanguageIterator.isLast'),
];

$expression108 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments106 = [
'then' => '',
'else' => 'mb-2',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression108(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)),
    $renderingContext
),
];

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, static fn() => '', $renderingContext)
;

$output105 .= '">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array110 = [
'0' => $renderingContext->getVariableProvider()->getByPath('siteLanguage.enabled'),
];

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments109 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression111(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output112 = '';

$output112 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return NULL;
};

$arguments113 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier'),
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output112 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= ' ';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title')]);

$output112 .= ' <code class="m-0">[';

$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId')]);

$output112 .= ']</code>
                                                    ';
return $output112;
},
'__else' => function() use ($renderingContext) {
$output115 = '';

$output115 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure117 = function() use ($renderingContext) {
return NULL;
};

$arguments116 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('siteLanguage.flagIdentifier'),
'size' => 'small',
'overlay' => 'overlay-hidden',
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output115 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
                                                        <span class="text-body-secondary">';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.title')]);

$output115 .= ' (';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
return 'disabled';
};

$arguments118 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:disabled',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext)]);

$output115 .= ') <code class="m-0">[';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.languageId')]);

$output115 .= ']</code></span>
                                                    ';
return $output115;
},
];

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, static fn() => '', $renderingContext)
;

$output105 .= '
                                            </div>
                                        ';
return $output105;
};

$arguments103 = [
'each' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages'),
'as' => 'siteLanguage',
'key' => NULL,
'reverse' => false,
'iteration' => 'siteLanguageIterator',
];

$output102 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
                                    ';
return $output102;
},
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, static fn() => '', $renderingContext)
;

$output63 .= '
                                </td>
                                <td class="align-top">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array121 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration'),
];

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments120 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression122(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output123 = '';

$output123 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure125 = function() use ($renderingContext) {
$output126 = '';

$output126 .= '
                                            <div class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array128 = [
'0' => $renderingContext->getVariableProvider()->getByPath('siteLanguageIterator.isLast'),
];

$expression129 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments127 = [
'then' => '',
'else' => 'mb-2',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression129(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array128)),
    $renderingContext
),
];

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, static fn() => '', $renderingContext)
;

$output126 .= '">
                                                <a href="';

$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base')]);

$output126 .= '" target="_blank">';

$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteLanguage.base')]);

$output126 .= '</a>
                                            </div>
                                        ';
return $output126;
};

$arguments124 = [
'each' => $renderingContext->getVariableProvider()->getByPath('page.siteConfiguration.allLanguages'),
'as' => 'siteLanguage',
'key' => NULL,
'reverse' => false,
'iteration' => 'siteLanguageIterator',
];

$output123 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
                                    ';
return $output123;
},
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, static fn() => '', $renderingContext)
;

$output63 .= '
                                </td>
                                <td class="align-top nowrap col-control">
                                    <div class="btn-group">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array131 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];

$expression132 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments130 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression132(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output133 = '';

$output133 .= '
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure135 = function() use ($renderingContext) {
$output139 = '';

$output139 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure141 = function() use ($renderingContext) {
return NULL;
};

$arguments140 = [
'identifier' => 'actions-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output139 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
                                            ';
return $output139;
};

$array136 = [
'site' => $renderingContext->getVariableProvider()->getByPath('page.siteIdentifier'),
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext) {
return NULL;
};

$arguments137 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.editSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments134 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'route' => 'site_configuration.edit',
'parameters' => $array136,
'referenceType' => 'absolute',
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output133 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
                                            <button
                                                type="submit"
                                                class="btn btn-default t3js-modal-trigger"
                                                data-target-form="site_configuration_delete_';

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output133 .= '"
                                                title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext) {
return NULL;
};

$arguments142 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext)]);

$output133 .= '"
                                                data-severity="error"
                                                data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure145 = function() use ($renderingContext) {
return NULL;
};

$arguments144 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext)]);

$output133 .= '"
                                                data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext) {
return NULL;
};

$arguments146 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext)]);

$output133 .= '"
                                                data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
return NULL;
};

$arguments148 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext)]);

$output133 .= '"
                                            >
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure151 = function() use ($renderingContext) {
return NULL;
};

$arguments150 = [
'identifier' => 'actions-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output133 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output133 .= '
                                            </button>
                                            <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure153 = function() use ($renderingContext) {
return NULL;
};

$arguments152 = [
'route' => 'site_configuration.delete',
'arguments' => [],
'query' => NULL,
'currentUrlParameterName' => NULL,
];

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext)]);

$output133 .= '" name="site_configuration_delete_';

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output133 .= '" id="site_configuration_delete_';

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output133 .= '" method="post">
                                                <input name="site" type="hidden" value="';

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.siteIdentifier')]);

$output133 .= '">
                                            </form>
                                        ';
return $output133;
},
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, static fn() => '', $renderingContext)
;

$output63 .= '
                                    </div>
                                </td>
                            </tr>
                        ';
return $output63;
};

$arguments61 = [
'each' => $renderingContext->getVariableProvider()->getByPath('pages'),
'as' => 'page',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output9 .= '
                    </tbody>
                </table>
            </div>
        ';
return $output9;
},
'__else' => function() use ($renderingContext) {
$output154 = '';

$output154 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure156 = function() use ($renderingContext) {
$output159 = '';

$output159 .= '
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure161 = function() use ($renderingContext) {
return NULL;
};

$arguments160 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.message',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext)]);

$output159 .= '</p>
            ';
return $output159;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext) {
return NULL;
};

$arguments157 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.noPages.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments155 = [
'message' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext),
'state' => -1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure156 = ($arguments155['message'] !== null) ? function() use ($arguments155) { return $arguments155['message']; } : $renderChildrenClosure156;
$output154 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= '
        ';
return $output154;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, static fn() => '', $renderingContext)
;

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array163 = [
'0' => $renderingContext->getVariableProvider()->getByPath('unassignedSites'),
];

$expression164 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments162 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression164(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output165 = '';

$output165 .= '
        <h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext) {
return NULL;
};

$arguments166 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext)]);

$output165 .= '</h2>
        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure169 = function() use ($renderingContext) {
return NULL;
};

$arguments168 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.unassignedSites.description',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext)]);

$output165 .= '</p>

        <div class="table-fit">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure171 = function() use ($renderingContext) {
return NULL;
};

$arguments170 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.siteIdentifier',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext)]);

$output165 .= '</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure173 = function() use ($renderingContext) {
$output174 = '';

$output174 .= '
                        <tr>
                            <td><code>';

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output174 .= '</code></td>
                            <td class="col-control">
                                <div class="btn-group">
                                    <button
                                        type="submit"
                                        class="btn btn-default t3js-modal-trigger"
                                        data-target-form="site_configuration_delete_';

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output174 .= '"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure176 = function() use ($renderingContext) {
return NULL;
};

$arguments175 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext)]);

$output174 .= '"
                                        data-severity="error"
                                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext) {
return NULL;
};

$arguments177 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf:overview.deleteSiteConfiguration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);

$output174 .= '"
                                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure180 = function() use ($renderingContext) {
return NULL;
};

$arguments179 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext)]);

$output174 .= '"
                                        data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure182 = function() use ($renderingContext) {
return NULL;
};

$arguments181 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext)]);

$output174 .= '"
                                    >
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure184 = function() use ($renderingContext) {
return NULL;
};

$arguments183 = [
'identifier' => 'actions-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output174 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output174 .= '
                                    </button>
                                    <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure186 = function() use ($renderingContext) {
return NULL;
};

$arguments185 = [
'route' => 'site_configuration.delete',
'arguments' => [],
'query' => NULL,
'currentUrlParameterName' => NULL,
];

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext)]);

$output174 .= '" name="site_configuration_delete_';

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output174 .= '" id="site_configuration_delete_';

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output174 .= '" method="post">
                                        <input name="site" type="hidden" value="';

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('unassignedSite.identifier')]);

$output174 .= '">
                                    </form>
                                </div>
                            </td>
                        </tr>
                    ';
return $output174;
};

$arguments172 = [
'each' => $renderingContext->getVariableProvider()->getByPath('unassignedSites'),
'as' => 'unassignedSite',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output165 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output165 .= '
                </tbody>
            </table>
        </div>
    ';
return $output165;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output187 = '';

$output187 .= '

';

$output187 .= '';

$output187 .= '

';

$output187 .= '';

$output187 .= '


';

    return $output187;
}

}

#