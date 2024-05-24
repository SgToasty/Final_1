<?php
class Default_action_NewRecord_NewRecord_3425ebf1f19c903cb8f9e72a04f9e639b5b2bacf extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:db_new.php.pagetitle',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '
        <div class="row mb-4">
            <div class="col-12">
                <strong>';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('groupedLinks.icon'),
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output5 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= ' ';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupedLinks.title')]);

$output5 .= '</strong>
                <div class="list-group mt-2">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('link');
};

$arguments11 = [
'value' => NULL,
];

$output10 .= isset($arguments11['value']) ? $arguments11['value'] : $renderChildrenClosure12();

$output10 .= '
                    ';
return $output10;
};

$arguments8 = [
'each' => $renderingContext->getVariableProvider()->getByPath('groupedLinks.items'),
'as' => 'link',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output5 .= '
                </div>
            </div>
        </div>
    ';
return $output5;
};

$arguments3 = [
'each' => $renderingContext->getVariableProvider()->getByPath('groupedLinksOnTop'),
'as' => 'groupedLinks',
'key' => 'recordTypeTable',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output15 = '';

$output15 .= '
        <div class="row mb-4">
            <div class="col-12">
                <strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('recordTypeGroup.icon');
};

$arguments16 = [
'value' => NULL,
];

$output15 .= isset($arguments16['value']) ? $arguments16['value'] : $renderChildrenClosure17();

$output15 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('recordTypeGroup.title');
};

$arguments18 = [
'value' => NULL,
'mode' => 'capital',
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output15 .= '</strong>
                <div class="list-group mt-2">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
$output22 = '';

$output22 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('recordTypeItem');
};

$arguments23 = [
'value' => NULL,
];

$output22 .= isset($arguments23['value']) ? $arguments23['value'] : $renderChildrenClosure24();

$output22 .= '
                    ';
return $output22;
};

$arguments20 = [
'each' => $renderingContext->getVariableProvider()->getByPath('recordTypeGroup.html'),
'as' => 'recordTypeItem',
'key' => 'recordTypeTable',
'reverse' => false,
'iteration' => NULL,
];

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output15 .= '
                </div>
            </div>
        </div>
    ';
return $output15;
};

$arguments13 = [
'each' => $renderingContext->getVariableProvider()->getByPath('recordTypeGroups'),
'as' => 'recordTypeGroup',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output25 = '';

$output25 .= '

';

$output25 .= '';

$output25 .= '

';

$output25 .= '';

$output25 .= '


';

    return $output25;
}

}

#