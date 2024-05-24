<?php
class Default_action_Main_cbb627c0bf0c660d7fca0debee9f815af5121804 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
'0' => '@typo3/backend/tabs.js',
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
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array5 = [
'0' => $renderingContext->getVariableProvider()->getByPath('isLanguageUpdate'),
];

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments4 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression6(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '
        <typo3-immediate-action action="TYPO3.ModuleMenu.App.refreshMenu"></typo3-immediate-action>
        <typo3-immediate-action action="TYPO3.Backend.Topbar.refresh"></typo3-immediate-action>
    ';
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, static fn() => '', $renderingContext)
;

$output0 .= '
';

    return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output7 = '';

$output7 .= '

    <h1>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'key' => 'LLL:EXT:setup/Resources/Private/Language/locallang.xlf:UserSettings',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '
    </h1>

    <form
        action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'route' => 'user_setup',
'parameters' => [],
'referenceType' => 'absolute',
];

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output7 .= '"
        method="post"
        id="SetupModuleController"
        name="usersetup"
        enctype="multipart/form-data"
        spellcheck="false"
    >
        <div role="tabpanel">
            <ul class="nav nav-tabs t3js-tabs" role="tablist" id="tabs-';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuId')]);

$output7 .= '" data-store-last-tab="1">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';

$output14 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array16 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.content'),
];

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments15 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output18 = '';

$output18 .= '
                        <li role="presentation" class="t3js-tabmenu-item nav-item">
                            <a href="#';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuId')]);

$output18 .= '-';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.cycle')]);

$output18 .= '" class="nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array20 = [
'0' => $renderingContext->getVariableProvider()->getByPath('iteration.cycle'),
'1' => ' == 1',
];

$expression21 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments19 = [
'then' => ' active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression21(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)),
    $renderingContext
),
];

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, static fn() => '', $renderingContext)
;

$output18 .= '" aria-controls="';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuId')]);

$output18 .= '-';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.cycle')]);

$output18 .= '" role="tab" data-bs-toggle="tab">
                                ';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.label')]);

$output18 .= '
                            </a>
                        </li>
                    ';
return $output18;
},
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, static fn() => '', $renderingContext)
;

$output14 .= '
                ';
return $output14;
};

$arguments12 = [
'each' => $renderingContext->getVariableProvider()->getByPath('menuItems'),
'as' => 'item',
'key' => NULL,
'reverse' => false,
'iteration' => 'iteration',
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output7 .= '
            </ul>
            <div class="tab-content">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
$output24 = '';

$output24 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.content'),
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
                        <div role="tabpanel" class="tab-pane';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array30 = [
'0' => $renderingContext->getVariableProvider()->getByPath('iteration.cycle'),
'1' => ' == 1',
];

$expression31 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments29 = [
'then' => ' active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression31(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)),
    $renderingContext
),
];

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, static fn() => '', $renderingContext)
;

$output28 .= '" id="';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('menuId')]);

$output28 .= '-';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iteration.cycle')]);

$output28 .= '">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('item.content');
};

$arguments32 = [
'value' => NULL,
];

$output28 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output28 .= '
                        </div>
                    ';
return $output28;
},
];

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, static fn() => '', $renderingContext)
;

$output24 .= '
                ';
return $output24;
};

$arguments22 = [
'each' => $renderingContext->getVariableProvider()->getByPath('menuItems'),
'as' => 'item',
'key' => NULL,
'reverse' => false,
'iteration' => 'iteration',
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output7 .= '
            </div>
        </div>

        <div>
            <input type="hidden" name="formToken" value="';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formToken')]);

$output7 .= '" />
            <input type="hidden" value="1" name="data[save]" />
            <input type="hidden" name="data[setValuesToDefault]" value="0" id="setValuesToDefault" />
        </div>
    </form>
';

    return $output7;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output34 = '';

$output34 .= '

';

$output34 .= '';

$output34 .= '

';

$output34 .= '';

$output34 .= '

';

$output34 .= '';

$output34 .= '


';

    return $output34;
}

}

#