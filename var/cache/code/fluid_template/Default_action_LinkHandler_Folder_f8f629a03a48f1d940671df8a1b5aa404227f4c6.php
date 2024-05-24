<?php
class Default_action_LinkHandler_Folder_f8f629a03a48f1d940671df8a1b5aa404227f4c6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'LinkBrowser';
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
        tree-actions="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('treeActions');
};

$arguments1 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '"
        active-folder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array6 = [
'0' => $renderingContext->getVariableProvider()->getByPath('selectedFolder'),
];

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments5 = [
'then' => $renderingContext->getVariableProvider()->getByPath('selectedFolder.combinedIdentifier'),
'else' => '',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression7(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)),
    $renderingContext
),
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, static fn() => '', $renderingContext)
;
};

$arguments3 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => NULL,
'doubleEncode' => true,
];
$renderChildrenClosure4 = ($arguments3['value'] !== null) ? function() use ($arguments3) { return $arguments3['value']; } : $renderChildrenClosure4;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

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
    $output8 = '';

$output8 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array10 = [
'0' => $renderingContext->getVariableProvider()->getByPath('selectedFolder'),
];

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments9 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output12 = '';

$output12 .= '
        <h4 class="text-truncate mb-4">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'resource' => $renderingContext->getVariableProvider()->getByPath('selectedFolder'),
'size' => 'small',
'overlay' => NULL,
'options' => [],
'alternativeMarkupIdentifier' => NULL,
];

$output12 .= TYPO3\CMS\Core\ViewHelpers\IconForResourceViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                ';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedFolder.storage.name')]);

$output17 .= ': ';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedFolder.identifier')]);

$output17 .= '
            ';
return $output17;
};

$arguments15 = [
'section' => 'LinkWrap',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => 'linkText',
'debug' => true,
];

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output12 .= '
        </h4>
    ';
return $output12;
},
];

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments9, static fn() => '', $renderingContext)
;

$output8 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};

$arguments18 = [
'value' => NULL,
];

$output8 .= isset($arguments18['value']) ? $arguments18['value'] : $renderChildrenClosure19();

$output8 .= '
';

    return $output8;
}
/**
 * section LinkWrap
 */
public function section_6329d6a763d60e3b1bacd573ee795674545f7358(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output20 = '';

$output20 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('selectedFolderLink'),
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
            <a href="#" class="element-browser-link" data-linkbrowser-link="';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('selectedFolderLink')]);

$output24 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('linkText');
};

$arguments25 = [
'value' => NULL,
];

$output24 .= isset($arguments25['value']) ? $arguments25['value'] : $renderChildrenClosure26();

$output24 .= '
            </a>
        ';
return $output24;
},
'__else' => function() use ($renderingContext) {
$output27 = '';

$output27 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('linkText');
};

$arguments28 = [
'value' => NULL,
];

$output27 .= isset($arguments28['value']) ? $arguments28['value'] : $renderChildrenClosure29();

$output27 .= '
        ';
return $output27;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, static fn() => '', $renderingContext)
;

$output20 .= '
';

    return $output20;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output30 = '';

$output30 .= '

';

$output30 .= '';

$output30 .= '

';

$output30 .= '';

$output30 .= '

';

$output30 .= '';

$output30 .= '

';

$output30 .= '';

$output30 .= '


';

    return $output30;
}

}

#