<?php
class Default_action_PageTsConfig_RecordsOverview_b51b1807c8d036a29369c0bd7ea90e48f5f557ff extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
'0' => '@typo3/backend/context-menu.js',
'1' => '@typo3/backend/element/immediate-action-element.js',
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$array6 = [
'0' => 'web',
'1' => $renderingContext->getVariableProvider()->getByPath('id'),
];

$arguments4 = [
'value' => $array6,
'name' => 'args',
];
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '
    <typo3-immediate-action
        action="TYPO3.Backend.Storage.ModuleStateStorage.update"
        args="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('args');
};

$arguments10 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure11 = ($arguments10['value'] !== null) ? function() use ($arguments10) { return $arguments10['value']; } : $renderChildrenClosure11;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
};

$arguments7 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output0 .= !is_string($value9) && !(is_object($value9) && method_exists($value9, '__toString')) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments7['encoding'], $arguments7['doubleEncode']);

$output0 .= '"
    ></typo3-immediate-action>
';

    return $output0;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output12 = '';

$output12 .= '

    <h1>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_pages.headline',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output12 .= '
    </h1>
    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_pages.description',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output12 .= '</p>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('accessContent'),
];

$expression19 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments17 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression19(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output20 = '';

$output20 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$arguments23 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig.noAccess',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments21 = [
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]),
'title' => NULL,
'state' => -1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure22 = ($arguments21['message'] !== null) ? function() use ($arguments21) { return $arguments21['message']; } : $renderChildrenClosure22;
$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
        ';
return $output20;
},
'__else' => function() use ($renderingContext) {
$output25 = '';

$output25 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array27 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('overviewOfPagesUsingTSConfig'),
];

$expression28 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments26 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression28(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output29 = '';

$output29 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_pages.noRecords',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments30 = [
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]),
'title' => NULL,
'state' => -1,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure31 = ($arguments30['message'] !== null) ? function() use ($arguments30) { return $arguments30['message']; } : $renderChildrenClosure31;
$output29 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
                ';
return $output29;
},
'__else' => function() use ($renderingContext) {
$output34 = '';

$output34 .= '
                    <div class="table-fit">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_pages.pagetitle',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= '</th>
                                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$arguments37 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf:module.pagetsconfig_pages.written_tsconfig_lines',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output34 .= '</th>
                                </tr>
                            </thead>
                            <tbody>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
$output41 = '';

$output41 .= '
                                    <tr>
                                        <td class="align-top nowrap">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
$output44 = '';

$output44 .= '
                                            <span style="margin-left: ';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.padding')]);

$output44 .= 'px">
                                                <button
                                                    type="button"
                                                    class="btn btn-link p-0"
                                                    data-contextmenu-trigger="click"
                                                    data-contextmenu-table="pages"
                                                    data-contextmenu-uid="';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title')]);

$output44 .= '"
                                                >
                                                    <span title="id=';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.title')]);

$output44 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('line.icon');
};

$arguments45 = [
'value' => NULL,
];

$output44 .= isset($arguments45['value']) ? $arguments45['value'] : $renderChildrenClosure46();

$output44 .= '
                                                    </span>
                                                </button>
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('line.pageTitle');
};

$arguments47 = [
'value' => NULL,
];

$output44 .= isset($arguments47['value']) ? $arguments47['value'] : $renderChildrenClosure48();

$output44 .= '
                                            </span>
                                        ';
return $output44;
};

$arguments42 = [
];

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '</td>
                                        <td>';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.lines')]);

$output41 .= '</td>
                                    </tr>
                                ';
return $output41;
};

$arguments39 = [
'each' => $renderingContext->getVariableProvider()->getByPath('overviewOfPagesUsingTSConfig'),
'as' => 'line',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output34 .= '
                            </tbody>
                        </table>
                    </div>
                ';
return $output34;
},
];

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, static fn() => '', $renderingContext)
;

$output25 .= '
        ';
return $output25;
},
];

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, static fn() => '', $renderingContext)
;

$output12 .= '

';

    return $output12;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output49 = '';

$output49 .= '

';

$output49 .= '';

$output49 .= '

';

$output49 .= '';

$output49 .= '

';

$output49 .= '';

$output49 .= '


';

    return $output49;
}

}

#