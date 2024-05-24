<?php
class Default_action_ElementBrowser_Folder_c09391793d35a66a726cea0357f7f98d0a260431 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'ElementBrowserWithNavigation';
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
 * section Navigation
 */
public function section_cf03cf2e9cdf95a20af09137dfb9071db0c31bf2(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    <typo3-backend-component-filestorage-browser
        class="scaffold-content-navigation-component"
        active-folder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('selectedFolder'),
];

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments3 = [
'then' => $renderingContext->getVariableProvider()->getByPath('selectedFolder.combinedIdentifier'),
'else' => '',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, static fn() => '', $renderingContext)
;
};

$arguments1 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => NULL,
'doubleEncode' => true,
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '"
    >
    </typo3-backend-component-filestorage-browser>
';

    return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output6 = '';

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('selectedFolder'),
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments7 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output10 = '';

$output10 .= '
        <h4 class="text-truncate mb-4">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'resource' => $renderingContext->getVariableProvider()->getByPath('selectedFolder'),
'size' => 'small',
'overlay' => NULL,
'options' => [],
'alternativeMarkupIdentifier' => NULL,
];

$output10 .= TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedFolder.storage.name')]);

$output10 .= ': ';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedFolder.identifier')]);

$output10 .= '
        </h4>
    ';
return $output10;
},
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, static fn() => '', $renderingContext)
;

$output6 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'queueIdentifier' => 'core.template.flashMessages',
'as' => NULL,
];

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= '

    <div data-filelist-element="true" data-filelist-type="folder" data-filelist-identifier="';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedFolder.combinedIdentifier')]);

$output6 .= '" data-filelist-state-identifier="';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedFolder.identifier')]);

$output6 .= '">
        <button title="';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedFolder.storage.name')]);

$output6 .= '" class="btn btn-default" data-filelist-action="primary">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'resource' => $renderingContext->getVariableProvider()->getByPath('selectedFolder'),
'size' => 'small',
'overlay' => NULL,
'options' => [],
'alternativeMarkupIdentifier' => NULL,
];

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array20 = [
'0' => $renderingContext->getVariableProvider()->getByPath('selectedFolder.name'),
'1' => ' !== \'\'',
];

$expression21 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) !== '');};

$arguments19 = [
'then' => $renderingContext->getVariableProvider()->getByPath('selectedFolder.name'),
'else' => $renderingContext->getVariableProvider()->getByPath('selectedFolder.storage.name'),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression21(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)),
    $renderingContext
),
];

$arguments17 = [
'value' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, static fn() => '', $renderingContext)
,
'name' => 'folderLabel',
];
$renderChildrenClosure18 = ($arguments17['value'] !== null) ? function() use ($arguments17) { return $arguments17['value']; } : $renderChildrenClosure18;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output6 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
$output26 = '';

$output26 .= $renderingContext->getVariableProvider()->getByPath('selectedFolder.storage.name');

$output26 .= ': ';

$output26 .= $renderingContext->getVariableProvider()->getByPath('selectedFolder.identifier');
return $output26;
};
$output25 = '';

$output25 .= '/';

$output25 .= $renderingContext->getVariableProvider()->getByPath('folderLabel');

$array24 = [
'0' => $output25,
];

$arguments22 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_browse_links.xlf:linkTo',
'id' => NULL,
'default' => NULL,
'arguments' => $array24,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output6 .= '
        </button>
    </div>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};

$arguments27 = [
'value' => NULL,
];

$output6 .= isset($arguments27['value']) ? $arguments27['value'] : $renderChildrenClosure28();

$output6 .= '
';

    return $output6;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output29 = '';

$output29 .= '

';

$output29 .= '';

$output29 .= '

';

$output29 .= '';

$output29 .= '

';

$output29 .= '';

$output29 .= '


';

    return $output29;
}

}

#