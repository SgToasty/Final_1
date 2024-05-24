<?php
class partial_BackendUser_Filter_dd68471bbcca7fd553fe6ea087397a04f65fe309 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
            <label for="tx_Beuser_username" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return 'Username';
};

$arguments4 = [
'key' => 'userName',
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
'property' => 'userName',
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
'id' => 'tx_Beuser_username',
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
        <div class="form-group">
            <label for="tx_Beuser_usertype" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return 'Admin';
};

$arguments8 = [
'key' => 'admin',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output3 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'key' => 'both',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'key' => 'adminOnly',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'key' => 'normalUserOnly',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array12 = [
'0' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext),
'1' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext),
'2' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext),
];

$arguments10 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => 'userType',
'class' => 'form-select',
'dir' => NULL,
'id' => 'tx_Beuser_usertype',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => $array12,
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'prependOptionLabel' => NULL,
'prependOptionValue' => NULL,
'multiple' => false,
'required' => false,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output3 .= '
        </div>
        <div class="form-group">
            <label for="tx_Beuser_status" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return 'Status';
};

$arguments19 = [
'key' => 'status',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output3 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'key' => 'both',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'key' => 'activeOnly',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'key' => 'inactiveOnly',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array23 = [
'0' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext),
'1' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext),
'2' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext),
];

$arguments21 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => 'status',
'class' => 'form-select',
'dir' => NULL,
'id' => 'tx_Beuser_status',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => $array23,
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'prependOptionLabel' => NULL,
'prependOptionValue' => NULL,
'multiple' => false,
'required' => false,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output3 .= '
        </div>
        <div class="form-group">
            <label for="tx_Beuser_logins" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return 'Login';
};

$arguments30 = [
'key' => 'login',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output3 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'key' => 'both',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$arguments37 = [
'key' => 'loginBefore',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return NULL;
};

$arguments39 = [
'key' => 'neverLoggedIn',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array34 = [
'0' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext),
'1' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext),
'2' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext),
];

$arguments32 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => 'logins',
'class' => 'form-select',
'dir' => NULL,
'id' => 'tx_Beuser_logins',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => $array34,
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'prependOptionLabel' => NULL,
'prependOptionValue' => NULL,
'multiple' => false,
'required' => false,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output3 .= '
        </div>
        <div class="form-group">
            <label for="tx_beuser_backendUserGroup" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return 'User Group';
};

$arguments41 = [
'key' => 'backendUserGroup',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output3 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => 'backendUserGroup',
'class' => 'form-select',
'dir' => NULL,
'id' => 'tx_beuser_backendUserGroup',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => $renderingContext->getVariableProvider()->getByPath('backendUserGroups'),
'optionsAfterContent' => false,
'optionValueField' => 'uid',
'optionLabelField' => 'title',
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'prependOptionLabel' => NULL,
'prependOptionValue' => NULL,
'multiple' => false,
'required' => false,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output3 .= '
        </div>
        <div class="form-group align-self-end">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$arguments47 = [
'key' => 'filter',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);
};

$arguments45 = [
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

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};

$arguments51 = [
'key' => 'reset',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);
};

$arguments49 = [
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

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

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
'action' => 'list',
'arguments' => [],
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'object' => $renderingContext->getVariableProvider()->getByPath('demand'),
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
'objectName' => 'demand',
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