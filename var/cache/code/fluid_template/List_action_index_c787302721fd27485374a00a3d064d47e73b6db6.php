<?php
class List_action_index_c787302721fd27485374a00a3d064d47e73b6db6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
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
'0' => '@typo3/extensionmanager/main.js',
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
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\Be\TriggerViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'triggers' => $renderingContext->getVariableProvider()->getByPath('triggers'),
];

$output0 .= TYPO3\CMS\Extensionmanager\ViewHelpers\Be\TriggerViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'key' => 'installedExtensions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '</h1>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'section' => NULL,
'partial' => 'List/UploadForm',
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '
    <form>
        <div class="form-row justify-content-between">
            <div class="form-group">
                <div class="input-group">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'key' => 'extensionList.search',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments10 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'Tx_Extensionmanager_extensionkey',
'value' => $renderingContext->getVariableProvider()->getByPath('search'),
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'maxlength' => NULL,
'readonly' => NULL,
'size' => NULL,
'placeholder' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext),
'pattern' => NULL,
'errorClass' => 'f3-form-error',
'class' => 'form-control extension-list-search',
'dir' => NULL,
'id' => 'Tx_Extensionmanager_extensionkey',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'required' => false,
'type' => 'text',
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
                    <button type="submit" class="btn btn-default">
                        <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'key' => NULL,
'id' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.title.search',
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output0 .= '</span>
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'identifier' => 'actions-search',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
                    </button>
                </div>
            </div>
            <div class="form-group">
                <div class="btn-group">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'key' => 'extensionList.filter.showAll',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= '
                    ';
return $output27;
};
$output20 = '';

$output20 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('typeFilter'),
'1' => ' == All',
];

$expression23 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "All");};

$arguments21 = [
'then' => 'active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
),
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'key' => 'extensionList.filter.showAll',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array26 = [
'filter' => '',
];

$arguments18 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => $output20,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => 'width: 80px;',
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'index',
'controller' => 'List',
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'arguments' => $array26,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'key' => 'extensionList.filter.showSystemExtensions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= '
                    ';
return $output39;
};
$output32 = '';

$output32 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array34 = [
'0' => $renderingContext->getVariableProvider()->getByPath('typeFilter'),
'1' => ' == System',
];

$expression35 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "System");};

$arguments33 = [
'then' => 'active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression35(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)),
    $renderingContext
),
];

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'key' => 'extensionList.filter.showSystemExtensions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array38 = [
'filter' => 'System',
];

$arguments30 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => $output32,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => 'width: 80px;',
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'index',
'controller' => 'List',
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'arguments' => $array38,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
$output51 = '';

$output51 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$arguments52 = [
'key' => 'extensionList.filter.showLocalExtensions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output51 .= '
                    ';
return $output51;
};
$output44 = '';

$output44 .= 'btn btn-default ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array46 = [
'0' => $renderingContext->getVariableProvider()->getByPath('typeFilter'),
'1' => ' == Local',
];

$expression47 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "Local");};

$arguments45 = [
'then' => 'active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression47(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)),
    $renderingContext
),
];

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'key' => 'extensionList.filter.showLocalExtensions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array50 = [
'filter' => 'Local',
];

$arguments42 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => $output44,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => 'width: 80px;',
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'index',
'controller' => 'List',
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'arguments' => $array50,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output0 .= '
                </div>
            </div>
        </div>
    </form>
    <br>
    <div class="table-fit">
        <table id="typo3-extension-list" class="table table-striped table-hover extension-list">
            <thead>
                <tr>
                    <th ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array55 = [
'0' => $renderingContext->getVariableProvider()->getByPath('sortByUpdate'),
];

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments54 = [
'then' => 'data-sort-default',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression56(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)),
    $renderingContext
),
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, static fn() => '', $renderingContext)
;

$output0 .= ' title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'key' => 'extensionList.header.title.update',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};

$arguments59 = [
'key' => 'extensionList.header.update',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output0 .= '</th>
                    <th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return NULL;
};

$arguments61 = [
'key' => 'extensionList.header.title.activate',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};

$arguments63 = [
'key' => 'extensionList.header.activate',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output0 .= '</th>
                    <th data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return NULL;
};

$arguments65 = [
'key' => 'extensionList.header.extensionName',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output0 .= '</th>
                    <th ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array68 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('sortByUpdate'),
];

$expression69 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments67 = [
'then' => 'data-sort-default',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression69(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)),
    $renderingContext
),
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, static fn() => '', $renderingContext)
;

$output0 .= ' data-filterable>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return NULL;
};

$arguments70 = [
'key' => 'extensionList.header.extensionKey',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output0 .= '</th>
                    <th data-sort-method="dotsep">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};

$arguments72 = [
'key' => 'extensionList.header.extensionVersion',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output0 .= '</th>
                    <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return NULL;
};

$arguments74 = [
'key' => 'extensionList.header.extensionState',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output0 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return NULL;
};

$arguments76 = [
'key' => 'extensionList.header.extensionType',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output0 .= '</th>
                    <th data-sort-method="none">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
return NULL;
};

$arguments78 = [
'key' => 'extensionList.header.extensionActions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output0 .= '</th>
                </tr>
            </thead>
            <tbody>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
$output82 = '';

$output82 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array84 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.terObject'),
];

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments83 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression85(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output86 = '';

$output86 .= '
                            <tr role="row" id="';

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey')]);

$output86 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array88 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState'),
'1' => ' == -1',
];

$expression89 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};

$arguments87 = [
'then' => 'insecure',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression89(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)),
    $renderingContext
),
];

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array91 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState'),
'1' => ' == -2',
];

$expression92 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};

$arguments90 = [
'then' => 'outdated',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression92(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)),
    $renderingContext
),
];

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, static fn() => '', $renderingContext)
;

$output86 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array94 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.installed'),
];

$expression95 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments93 = [
'then' => '',
'else' => 'inactive',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression95(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)),
    $renderingContext
),
];

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, static fn() => '', $renderingContext)
;

$output86 .= '">
                        ';
return $output86;
},
'__else' => function() use ($renderingContext) {
$output96 = '';

$output96 .= '
                            <tr role="row" id="';

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey')]);

$output96 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array98 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.installed'),
];

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments97 = [
'then' => '',
'else' => 'inactive',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression99(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)),
    $renderingContext
),
];

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments97, static fn() => '', $renderingContext)
;

$output96 .= '">
                        ';
return $output96;
},
];

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, static fn() => '', $renderingContext)
;

$output82 .= '
                    <td data-sort="';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.sortUpdate')]);

$output82 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array101 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable'),
];

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments100 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression102(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output103 = '';

$output103 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array105 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.updateIsBlocked'),
];

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments104 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression106(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output107 = '';

$output107 .= '
                                    <span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
return NULL;
};

$arguments108 = [
'key' => 'extensionList.updateDisabled',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output107 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure111 = function() use ($renderingContext) {
return NULL;
};

$arguments110 = [
'identifier' => 'actions-system-extension-update',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output107 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output107 .= '
                                    </span>
                                ';
return $output107;
},
'__else' => function() use ($renderingContext) {
$output112 = '';

$output112 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
$output120 = '';

$output120 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure122 = function() use ($renderingContext) {
return NULL;
};

$arguments121 = [
'identifier' => 'actions-system-extension-update',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output120 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
                                    ';
return $output120;
};

$array115 = [
'data-action' => 'update-extension',
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext) {
return NULL;
};

$array118 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version'),
];

$arguments116 = [
'key' => 'extensionList.updateToVersion',
'id' => NULL,
'default' => NULL,
'arguments' => $array118,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array119 = [
'extension' => $renderingContext->getVariableProvider()->getByPath('extension.key'),
'integerVersionStart' => $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion'),
'integerVersionStop' => $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion'),
];

$arguments113 = [
'additionalAttributes' => $array115,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'updateCommentForUpdatableVersions',
'controller' => 'Download',
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => 'json',
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'arguments' => $array119,
];

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
                                ';
return $output112;
},
];

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, static fn() => '', $renderingContext)
;

$output103 .= '
                        ';
return $output103;
},
];

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, static fn() => '', $renderingContext)
;

$output82 .= '
                    </td>
                    <td data-sort="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array124 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.installed'),
];

$expression125 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments123 = [
'then' => 'active',
'else' => 'inactive',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression125(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)),
    $renderingContext
),
];

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, static fn() => '', $renderingContext)
;

$output82 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
return NULL;
};

$arguments126 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'extension' => $renderingContext->getVariableProvider()->getByPath('extension'),
];

$output82 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output82 .= '
                    </td>
                    <td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array129 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.icon'),
];

$expression130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments128 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression130(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output131 = '';

$output131 .= '
                                <img class="extension-icon" src="';

$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.icon')]);

$output131 .= '" alt="" />
                            ';
return $output131;
},
'__else' => function() use ($renderingContext) {
$output132 = '';

$output132 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure134 = function() use ($renderingContext) {
return NULL;
};

$arguments133 = [
'identifier' => 'empty-empty',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output132 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output132 .= '
                            ';
return $output132;
},
];

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, static fn() => '', $renderingContext)
;

$output82 .= '
                        <span title="';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description')]);

$output82 .= '">';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title')]);

$output82 .= '</span>
                    </td>
                    <td>';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey')]);

$output82 .= '</td>
                    <td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array136 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.terObject'),
];

$expression137 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

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
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
$output144 = '';

$output144 .= '
                                    ';

$output144 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version')]);

$output144 .= '
                                ';
return $output144;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure142 = function() use ($renderingContext) {
return NULL;
};

$arguments141 = [
'key' => 'showAllVersions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array143 = [
'extensionKey' => $renderingContext->getVariableProvider()->getByPath('extensionKey'),
'returnTo' => 'index',
];

$arguments139 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'showAllVersions',
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'arguments' => $array143,
];

$output138 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
                            ';
return $output138;
},
'__else' => function() use ($renderingContext) {
$output145 = '';

$output145 .= '
                                ';

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version')]);

$output145 .= '
                            ';
return $output145;
},
];

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments135, static fn() => '', $renderingContext)
;

$output82 .= '
                    </td>
                    <td><span class="badge badge-';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state')]);

$output82 .= '">';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state')]);

$output82 .= '</span></td>
                    <td>';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type')]);

$output82 .= '</td>
                    <td>
                        <div class="btn-group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure147 = function() use ($renderingContext) {
$output148 = '';

$output148 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array150 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('isComposerMode'),
];

$expression151 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments149 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression151(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output152 = '';

$output152 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure154 = function() use ($renderingContext) {
return NULL;
};

$arguments153 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'removeExtension btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'extension' => $renderingContext->getVariableProvider()->getByPath('extension'),
];

$output152 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure156 = function() use ($renderingContext) {
$output160 = '';

$output160 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure162 = function() use ($renderingContext) {
return NULL;
};

$arguments161 = [
'identifier' => 'actions-system-extension-download',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output160 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
                                    ';
return $output160;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext) {
return NULL;
};

$arguments157 = [
'key' => 'extensionList.downloadzip',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array159 = [
'extension' => $renderingContext->getVariableProvider()->getByPath('extension.key'),
];

$arguments155 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'downloadExtensionZip',
'controller' => 'Action',
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'arguments' => $array159,
];

$output152 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output152 .= '
                                ';
return $output152;
},
];

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments149, static fn() => '', $renderingContext)
;

$output148 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure164 = function() use ($renderingContext) {
return NULL;
};

$arguments163 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'reloadSqlData btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'extension' => $renderingContext->getVariableProvider()->getByPath('extension'),
];

$output148 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output148 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array166 = [
'0' => $renderingContext->getVariableProvider()->getByPath('extension.terObject.documentationLink'),
];

$expression167 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments165 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression167(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output168 = '';

$output168 .= '
                                        <a href="';

$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.documentationLink')]);

$output168 .= '" target="_blank" rel="noopener noreferrer" class="btn btn-default">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure170 = function() use ($renderingContext) {
return NULL;
};

$arguments169 = [
'identifier' => 'actions-system-extension-documentation',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output168 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
                                        </a>
                                    ';
return $output168;
},
'__else' => function() use ($renderingContext) {
$output171 = '';

$output171 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure173 = function() use ($renderingContext) {
return NULL;
};

$arguments172 = [
'identifier' => 'empty-empty',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output171 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '</span>
                                    ';
return $output171;
},
];

$output148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments165, static fn() => '', $renderingContext)
;

$output148 .= '
                            ';
return $output148;
};

$arguments146 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'extension' => $renderingContext->getVariableProvider()->getByPath('extension'),
];

$output82 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output82 .= '
                        </div>
                    </td>
                    </tr>
                ';
return $output82;
};

$arguments80 = [
'each' => $renderingContext->getVariableProvider()->getByPath('extensions'),
'as' => 'extension',
'key' => 'extensionKey',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output0 .= '
            </tbody>
        </table>
    </div>

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output174 = '';

$output174 .= '

';

$output174 .= '';

$output174 .= '

';

$output174 .= '';

$output174 .= '


';

    return $output174;
}

}

#