<?php
class partial_BackendUserGroup_Filter_8420455c82425ad4485ffded063a5a7d9cd6793b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'backend' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    <div class="form-row">
        <div class="form-group">
            <label for="tx_Beugroups_title" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'key' => 'userGroupTitle',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => 'title',
'autofocus' => NULL,
'disabled' => NULL,
'maxlength' => NULL,
'readonly' => NULL,
'size' => NULL,
'placeholder' => NULL,
'pattern' => NULL,
'errorClass' => 'f3-form-error',
'class' => 'form-control',
'dir' => NULL,
'id' => 'tx_Beugroups_title',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'required' => false,
'type' => 'text',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
        </div>
        <div class="form-group align-self-end">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'key' => 'filter',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);
};

$arguments8 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'operation',
'value' => 'filter',
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'form' => NULL,
'formaction' => NULL,
'formenctype' => NULL,
'formmethod' => NULL,
'formnovalidate' => NULL,
'formtarget' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'type' => 'submit',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'key' => 'reset',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);
};

$arguments12 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'operation',
'value' => 'reset-filters',
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'form' => NULL,
'formaction' => NULL,
'formenctype' => NULL,
'formmethod' => NULL,
'formnovalidate' => NULL,
'formtarget' => NULL,
'class' => 'btn btn-link',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'type' => 'submit',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output3 .= '
        </div>
    </div>
';
return $output3;
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'action' => 'groups',
'arguments' => [],
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'object' => $renderingContext->getVariableProvider()->getByPath('userGroupDto'),
'pageType' => 0,
'noCache' => false,
'section' => '',
'format' => '',
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'fieldNamePrefix' => NULL,
'actionUri' => NULL,
'objectName' => 'userGroupDto',
'hiddenFieldClassName' => NULL,
'requestToken' => NULL,
'signingType' => NULL,
'enctype' => NULL,
'method' => 'post',
'name' => NULL,
'onreset' => NULL,
'onsubmit' => NULL,
'target' => NULL,
'novalidate' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '


';

    return $output0;
}

}

#