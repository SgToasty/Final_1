<?php
class Default_action_Form_ImageManipulationWizard_626f9d398957af2cdbea1856d442e6473aea8029 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"
    xmlns:core="http://typo3.org/ns/TYPO3/CMS/Core/ViewHelpers"
>

<div class="modal-panel-main">
    <div id="t3js-crop-image-container" class="cropper-image-container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'data-original-width' => $renderingContext->getVariableProvider()->getByPath('image.properties.width'),
'data-original-height' => $renderingContext->getVariableProvider()->getByPath('image.properties.height'),
];

$arguments1 = [
'additionalAttributes' => $array3,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => 't3js-crop-image',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'alt' => NULL,
'ismap' => NULL,
'longdesc' => NULL,
'usemap' => NULL,
'loading' => NULL,
'decoding' => NULL,
'src' => '',
'treatIdAsReference' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('image'),
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => 1000,
'maxHeight' => 1000,
'absolute' => false,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </div>
</div>
<div class="modal-panel-sidebar">
    <div class="panel-group" id="accordion-cropper-variants" role="tablist" aria-multiselectable="false">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output6 = '';

$output6 .= '
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="cropper-accordion-heading-';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle')]);

$output6 .= '">
                    <h4 class="panel-title">
                        <a
                            role="button"
                            data-bs-toggle="collapse"
                            href="#cropper-collapse-';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle')]);

$output6 .= '"
                            aria-expanded="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst'),
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments7 = [
'then' => 'true',
'else' => 'false',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, static fn() => '', $renderingContext)
;

$output6 .= '"
                            aria-controls="cropper-collapse-';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle')]);

$output6 .= '"
                            class="t3js-crop-variant-trigger ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'then' => 'is-active',
'else' => 'collapsed',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, static fn() => '', $renderingContext)
;

$output6 .= '"
                            data-crop-variant-id="';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id')]);

$output6 .= '"
                            data-crop-variant
                        >
                        <span>';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};
$output15 = '';

$output15 .= 'actions-chevron-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array17 = [
'0' => $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst'),
];

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments16 = [
'then' => 'up',
'else' => 'down',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
];

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, static fn() => '', $renderingContext)
;

$arguments13 = [
'identifier' => $output15,
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output6 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('cropVariant.title');
};

$arguments19 = [
'key' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('cropVariant.title'),
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output6 .= '</span>
                            <div
                                class="cropper-preview-thumbnail ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('image.properties.width'),
'1' => '>',
'2' => $renderingContext->getVariableProvider()->getByPath('image.properties.height'),
];

$expression23 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments21 = [
'then' => 'wide',
'else' => 'tall',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
),
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, static fn() => '', $renderingContext)
;

$output6 .= '"
                            >
                                <img class="cropper-preview-thumbnail-image" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'src' => '',
'treatIdAsReference' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('image'),
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => 300,
'maxHeight' => 300,
'absolute' => false,
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output6 .= '">
                                <div class="cropper-preview-thumbnail-crop-area t3js-cropper-preview-thumbnail-crop-area">
                                    <img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'src' => '',
'treatIdAsReference' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('image'),
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => 300,
'maxHeight' => 300,
'absolute' => false,
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output6 .= '" class="cropper-preview-thumbnail-crop-image t3js-cropper-preview-thumbnail-crop-image">
                                    <div class="cropper-preview-thumbnail-focus-area t3js-cropper-preview-thumbnail-focus-area"></div>
                                </div>
                            </div>
                        </a>
                    </h4>
                </div>
                <div
                    id="cropper-collapse-';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle')]);

$output6 .= '"
                    class="panel-collapse collapse ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array29 = [
'0' => $renderingContext->getVariableProvider()->getByPath('cropVariantIterator.isFirst'),
];

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments28 = [
'then' => 'show',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)),
    $renderingContext
),
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, static fn() => '', $renderingContext)
;

$output6 .= '"
                    role="tabpanel"
                    aria-labelledby="cropper-accordion-heading-';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle')]);

$output6 .= '"
                    data-bs-parent="#accordion-cropper-variants"
                >
                    <div class="panel-body">
                        <form class="form">
                            <div class="form-group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array32 = [
'0' => $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios'),
];

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments31 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression33(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output34 = '';

$output34 .= '
                                    <label class="form-label" for="ratio-';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle')]);

$output34 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'key' => NULL,
'id' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.aspect-ratio',
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= '
                                    </label>
                                    <div id="ratio-';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle')]);

$output34 .= '" class="ratio-buttons t3js-ratio-buttons">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
                                            <label
                                                class="btn btn-secondary"
                                                data-method="setAspectRatio"
                                                data-bs-option="';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratio.id')]);

$output39 .= '"
                                                title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'key' => NULL,
'id' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.set-aspect-ratio',
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= '"
                                            >
                                                <input
                                                    class="visually-hidden"
                                                    id="aspectRatio-';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle')]);

$output39 .= '-';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratioIterator.cycle')]);

$output39 .= '"
                                                    name="aspectRatio-';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariantIterator.cycle')]);

$output39 .= '-';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratioIterator.cycle')]);

$output39 .= '"
                                                    value="';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id')]);

$output39 .= '"
                                                    type="radio"
                                                />
                                                <span class="t3-js-ratio-title" data-ratio-id="';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cropVariant.id')]);

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('ratio.id')]);

$output39 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('ratio.title');
};

$arguments42 = [
'key' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('ratio.title'),
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output39 .= '</span> ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$arguments44 = [
'identifier' => 'actions-check',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output39 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output39 .= '
                                            </label>
                                        ';
return $output39;
};

$arguments37 = [
'each' => $renderingContext->getVariableProvider()->getByPath('cropVariant.allowedAspectRatios'),
'as' => 'ratio',
'key' => NULL,
'reverse' => false,
'iteration' => 'ratioIterator',
];

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output34 .= '
                                    </div>
                                ';
return $output34;
},
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, static fn() => '', $renderingContext)
;

$output6 .= '
                                <label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.selection',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output6 .= '</label>
                                <div class="mb-3 t3js-cropper-info-crop"></div>
                                <button
                                    class="btn btn-secondary"
                                    name="reset"
                                    data-crop-variant="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('cropVariant');
};

$arguments48 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure49 = ($arguments48['value'] !== null) ? function() use ($arguments48) { return $arguments48['value']; } : $renderChildrenClosure49;
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output6 .= '"
                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$arguments50 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.reset',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output6 .= '"
                                >
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$arguments52 = [
'identifier' => 'actions-refresh',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output6 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output6 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
return NULL;
};

$arguments54 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.reset',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output6 .= '
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ';
return $output6;
};

$arguments4 = [
'each' => $renderingContext->getVariableProvider()->getByPath('cropVariants'),
'as' => 'cropVariant',
'key' => NULL,
'reverse' => false,
'iteration' => 'cropVariantIterator',
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
    </div>
</div>

</html>
';

    return $output0;
}

}

#