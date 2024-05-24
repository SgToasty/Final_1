<?php
class Default_action_File_List_5cdd74058dfdab1949fa9fc02c5ebf881a3f9d0d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

    ';

$output0 .= '';

$output0 .= '
    <div class="filelist-main" data-filelist-current-identifier="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('currentIdentifier');
};

$arguments1 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= !is_string($value3) && !(is_object($value3) && method_exists($value3, '__toString')) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments1['encoding'], $arguments1['doubleEncode']);

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array5 = [
'0' => $renderingContext->getVariableProvider()->getByPath('folderIdentifier'),
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
$output7 = '';

$output7 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'section' => 'headline',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'section' => 'content',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output7 .= '
        ';
return $output7;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, static fn() => '', $renderingContext)
;

$output0 .= '
    </div>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('dragUploader'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments12 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
        <div class="t3js-drag-uploader" data-target-folder="';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('folderIdentifier')]);

$output15 .= '" data-progress-container="#typo3-filelist"
            data-dropzone-trigger=".t3js-drag-uploader-trigger" data-dropzone-target=".t3js-module-body h1:first"
            data-file-deny-pattern="';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dragUploader.fileDenyPattern')]);

$output15 .= '" data-max-file-size="';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dragUploader.maxFileSize')]);

$output15 .= '"
            data-default-action="';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dragUploader.defaultDuplicationBehaviourAction')]);

$output15 .= '" data-reload-url="';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('listUrl')]);

$output15 .= '"
        ></div>
    ';
return $output15;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output16 = '';

$output16 .= '
    <h1>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('searchTerm'),
];

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$array23 = [
'0' => $renderingContext->getVariableProvider()->getByPath('searchTerm'),
'1' => $renderingContext->getVariableProvider()->getByPath('headline'),
];

$arguments21 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:search',
'id' => NULL,
'default' => NULL,
'arguments' => $array23,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output20 .= '
            ';
return $output20;
},
'__else' => function() use ($renderingContext) {
$output24 = '';

$output24 .= '
                ';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline')]);

$output24 .= '
            ';
return $output24;
},
];

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, static fn() => '', $renderingContext)
;

$output16 .= '
    </h1>
';

    return $output16;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output25 = '';

$output25 .= '
    <form method="post" name="fileListForm" action="';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('listUrl')]);

$output25 .= '">
        <input type="hidden" name="cmd"/>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array27 = [
'0' => $renderingContext->getVariableProvider()->getByPath('searchTerm'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('totalItems'),
];

$expression28 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

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
            <div class="form-row">
                <div class="form-group">
                    <div class="input-group">
                        <input type="search" id="filelist-searchterm" name="searchTerm" class="form-control" value="';

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm')]);

$output29 .= '" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.enterSearchString',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output29 .= '" />
                        <label for="filelist-searchterm" class="visually-hidden">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'key' => NULL,
'id' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.label.searchString',
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output29 .= '
                        </label>
                        <input type="hidden" name="currentPage" value="0" />
                        <button type="submit" class="btn btn-default" name="search">
                            <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'key' => NULL,
'id' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.title.search',
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output29 .= '</span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'identifier' => 'actions-search',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output29 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output29 .= '
                        </button>
                    </div>
                </div>
            </div>
        ';
return $output29;
},
];

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, static fn() => '', $renderingContext)
;

$output25 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array39 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('totalItems'),
];

$expression40 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments38 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression40(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output41 = '';

$output41 .= '
            <div class="t3-filelist-info-container">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array43 = [
'0' => $renderingContext->getVariableProvider()->getByPath('searchTerm'),
];

$expression44 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments42 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression44(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output45 = '';

$output45 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'identifier' => 'actions-question',
'size' => 'large',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output45 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
                        <h5 class="mt-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_results',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output45 .= '
                        </h5>
                        <p>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$array52 = [
'0' => $renderingContext->getVariableProvider()->getByPath('searchTerm'),
];

$arguments50 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_results.message',
'id' => NULL,
'default' => NULL,
'arguments' => $array52,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output45 .= '
                        </p>
                        <button type="submit" class="btn btn-info" name="searchTerm" value="">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:search.reset',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output45 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output45 .= '
                        </button>
                    ';
return $output45;
},
'__else' => function() use ($renderingContext) {
$output55 = '';

$output55 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
return NULL;
};

$arguments56 = [
'identifier' => 'apps-pagetree-folder-contains',
'size' => 'large',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output55 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                        <h5 class="mt-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};

$arguments58 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_items',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output55 .= '
                        </h5>
                        <p>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};

$array62 = [
'0' => $renderingContext->getVariableProvider()->getByPath('searchTerm'),
];

$arguments60 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_items.message',
'id' => NULL,
'default' => NULL,
'arguments' => $array62,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output55 .= '
                        </p>
                        <a href="';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fileUploadUrl')]);

$output55 .= '" class="btn btn-info t3js-drag-uploader-trigger">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};

$arguments63 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.upload',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output55 .= '
                        </a>
                    ';
return $output55;
},
];

$output41 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, static fn() => '', $renderingContext)
;

$output41 .= '
            </div>
        ';
return $output41;
},
];

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, static fn() => '', $renderingContext)
;

$output25 .= '
        <div class="t3-filelist-container ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array66 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('totalItems'),
];

$expression67 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments65 = [
'then' => 'hidden',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression67(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)),
    $renderingContext
),
];

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, static fn() => '', $renderingContext)
;

$output25 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array69 = [
'0' => $renderingContext->getVariableProvider()->getByPath('listHtml'),
];

$expression70 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments68 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression70(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output71 = '';

$output71 .= '
                <div class="multi-record-selection-actions-wrapper">
                    <div class="t3js-multi-record-selection-actions row row-cols-auto gx-2 mb-3 align-items-center hidden">
                        <div class="col">
                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};

$arguments72 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.selection',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output71 .= '</strong>
                        </div>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array75 = [
'0' => $renderingContext->getVariableProvider()->getByPath('editActionConfiguration'),
];

$expression76 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments74 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression76(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output77 = '';

$output77 .= '
                            <div class="col">
                                <button type="button" class="btn btn-default btn-sm disabled" data-multi-record-selection-action="edit" data-multi-record-selection-action-config="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('editActionConfiguration');
};

$arguments78 = [
'value' => NULL,
];

$output77 .= isset($arguments78['value']) ? $arguments78['value'] : $renderChildrenClosure79();

$output77 .= '">
                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
return NULL;
};

$arguments80 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:editMarked',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output77 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
return NULL;
};

$arguments82 = [
'identifier' => 'actions-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output77 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output77 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
return NULL;
};

$arguments84 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:editMarked',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output77 .= '
                                </span>
                                </button>
                            </div>
                        ';
return $output77;
},
];

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, static fn() => '', $renderingContext)
;

$output71 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array87 = [
'0' => $renderingContext->getVariableProvider()->getByPath('downloadActionConfiguration'),
];

$expression88 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments86 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression88(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output89 = '';

$output89 .= '
                            <div class="col">
                                <button type="button" class="btn btn-default btn-sm" data-multi-record-selection-action="download" data-multi-record-selection-action-config="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('downloadActionConfiguration');
};

$arguments90 = [
'value' => NULL,
];

$output89 .= isset($arguments90['value']) ? $arguments90['value'] : $renderChildrenClosure91();

$output89 .= '">
                                    <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext) {
return NULL;
};

$arguments92 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:download',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output89 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure95 = function() use ($renderingContext) {
return NULL;
};

$arguments94 = [
'identifier' => 'actions-download',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output89 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output89 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
return NULL;
};

$arguments96 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:download',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext)]);

$output89 .= '
                                    </span>
                                </button>
                            </div>
                        ';
return $output89;
},
];

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, static fn() => '', $renderingContext)
;

$output71 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array99 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showClipboardPanel'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('enableClipBoard.mode'),
'3' => ' != \'normal\'',
];

$expression100 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 'normal'));};

$arguments98 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression100(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output101 = '';

$output101 .= '
                            <div class="col">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array103 = [
'0' => $renderingContext->getVariableProvider()->getByPath('enableClipBoard.mode'),
'1' => ' == normal',
];

$expression104 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "normal");};

$arguments102 = [
'then' => 'disabled',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression104(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)),
    $renderingContext
),
];

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, static fn() => '', $renderingContext)
;

$output101 .= '" data-multi-record-selection-action="copyMarked">
                                        <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return NULL;
};

$arguments105 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_selectMarked',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext)]);

$output101 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return NULL;
};

$arguments107 = [
'identifier' => 'actions-edit-copy',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output101 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output101 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};

$arguments109 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_selectMarked',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output101 .= '
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array112 = [
'0' => $renderingContext->getVariableProvider()->getByPath('enableClipBoard.mode'),
'1' => ' == normal',
];

$expression113 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "normal");};

$arguments111 = [
'then' => 'disabled',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression113(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)),
    $renderingContext
),
];

$output101 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, static fn() => '', $renderingContext)
;

$output101 .= '" data-multi-record-selection-action="removeMarked">
                                        <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext) {
return NULL;
};

$arguments114 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_deleteMarked',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output101 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure117 = function() use ($renderingContext) {
return NULL;
};

$arguments116 = [
'identifier' => 'actions-minus',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output101 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output101 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
return NULL;
};

$arguments118 = [
'key' => 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_deleteMarked',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext)]);

$output101 .= '
                                        </span>
                                    </button>
                                </div>
                            </div>
                        ';
return $output101;
},
];

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, static fn() => '', $renderingContext)
;

$output71 .= '
                        <div class="col">
                            <button type="button" class="btn btn-default btn-sm" data-multi-record-selection-action="delete" data-multi-record-selection-action-config="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure121 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('deleteActionConfiguration');
};

$arguments120 = [
'value' => NULL,
];

$output71 .= isset($arguments120['value']) ? $arguments120['value'] : $renderChildrenClosure121();

$output71 .= '">
                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure123 = function() use ($renderingContext) {
return NULL;
};

$arguments122 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext)]);

$output71 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure125 = function() use ($renderingContext) {
return NULL;
};

$arguments124 = [
'identifier' => 'actions-edit-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output71 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output71 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
return NULL;
};

$arguments126 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext)]);

$output71 .= '
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            ';
return $output71;
},
];

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, static fn() => '', $renderingContext)
;

$output25 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure129 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('listHtml');
};

$arguments128 = [
'value' => NULL,
];

$output25 .= isset($arguments128['value']) ? $arguments128['value'] : $renderChildrenClosure129();

$output25 .= '
        </div>
    </form>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array131 = [
'0' => $renderingContext->getVariableProvider()->getByPath('listHtml'),
];

$expression132 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments130 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression132(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output133 = '';

$output133 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array135 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showClipboardPanel'),
];

$expression136 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments134 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression136(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output137 = '';

$output137 .= '
            <hr class="spacer">
            <typo3-backend-clipboard-panel return-url="';

$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('listUrl')]);

$output137 .= '" table="_FILE"></typo3-backend-clipboard-panel>
        ';
return $output137;
},
];

$output133 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments134, static fn() => '', $renderingContext)
;

$output133 .= '
    ';
return $output133;
},
];

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, static fn() => '', $renderingContext)
;

$output25 .= '
';

    return $output25;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output138 = '';

$output138 .= '

';

$output138 .= '';

$output138 .= '

';

$output138 .= '';

$output138 .= '


';

$output138 .= '';

$output138 .= '

';

$output138 .= '';

$output138 .= '


';

    return $output138;
}

}

#