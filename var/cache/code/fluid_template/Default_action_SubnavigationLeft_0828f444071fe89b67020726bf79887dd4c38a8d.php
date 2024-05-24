<?php
class Default_action_SubnavigationLeft_0828f444071fe89b67020726bf79887dd4c38a8d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Default';
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
 * section Border
 */
public function section_5d10d3f42121c3aa0d7923d1f05cccf56ef176e5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 3,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide'),
];

$arguments1 = [
'data' => $array3,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

    return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output4 = '';

$output4 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$array7 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 8,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide'),
];

$arguments5 = [
'data' => $array7,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure6 = ($arguments5['data'] !== null) ? function() use ($arguments5) { return $arguments5['data']; } : $renderChildrenClosure6;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '

    <div class="section section-default">
        <div class="container">
            <div class="section-row">
                <div class="section-column subnav-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'section' => NULL,
'partial' => 'Navigation/Subnavigation',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output4 .= '
                </div>
                <main class="section-column maincontent-wrap" role="main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$array12 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 0,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide'),
];

$arguments10 = [
'data' => $array12,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure11 = ($arguments10['data'] !== null) ? function() use ($arguments10) { return $arguments10['data']; } : $renderChildrenClosure11;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output4 .= '
                </main>
            </div>
        </div>
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$array15 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 9,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide'),
];

$arguments13 = [
'data' => $array15,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure14 = ($arguments13['data'] !== null) ? function() use ($arguments13) { return $arguments13['data']; } : $renderChildrenClosure14;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output4 .= '

';

    return $output4;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output16 = '';

$output16 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'section' => NULL,
'partial' => 'Structure/FooterContent',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '

';

    return $output16;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output19 = '';

$output19 .= '
';

$output19 .= '';

$output19 .= '
';

$output19 .= '';

$output19 .= '
';

$output19 .= '';

$output19 .= '
';

$output19 .= '';

$output19 .= '

';

    return $output19;
}

}

#