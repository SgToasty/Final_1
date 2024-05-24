<?php
class Default_action_Permission_Edit_a7f3736c9bb6f4d0ba7375a14503efa930c7b152 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/beuser/permissions.js',
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

    <h1>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:permissions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= ':
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Edit',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '
    </h1>

    ';

$output0 .= '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'value' => 2,
'name' => 'base',
];
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output0 .= '

    <form action="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formAction')]);

$output0 .= '" method="post" name="editform" id="PermissionControllerEdit">

        <div class="form-row">
            <div class="form-group">
                <label class="form-label" for="selectOwner">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output0 .= '</label>
                <select class="form-select" name="data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_userid]" id="selectOwner">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';

$output14 .= '
                        <option value="';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('userId')]);

$output14 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array16 = [
'0' => $renderingContext->getVariableProvider()->getByPath('userId'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('currentBeUser'),
];

$expression17 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments15 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, static fn() => '', $renderingContext)
;

$output14 .= '>';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('user')]);

$output14 .= '</option>
                    ';
return $output14;
};

$arguments12 = [
'each' => $renderingContext->getVariableProvider()->getByPath('beUserData'),
'as' => 'user',
'key' => 'userId',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="selectGroup">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output0 .= '</label>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'subject' => $renderingContext->getVariableProvider()->getByPath('beGroupData'),
];
$renderChildrenClosure23 = ($arguments22['subject'] !== null) ? function() use ($arguments22) { return $arguments22['subject']; } : $renderChildrenClosure23;
$array21 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext),
'1' => ' > 1',
];

$expression24 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments20 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output25 = '';

$output25 .= '
                        <select class="form-select" name="data[pages][';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output25 .= '][perms_groupid]" id="selectGroup">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output28 = '';

$output28 .= '
                                <option value="';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupId')]);

$output28 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array30 = [
'0' => $renderingContext->getVariableProvider()->getByPath('groupId'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('currentBeGroup'),
];

$expression31 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments29 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression31(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)),
    $renderingContext
),
];

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, static fn() => '', $renderingContext)
;

$output28 .= '>';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group')]);

$output28 .= '</option>
                            ';
return $output28;
};

$arguments26 = [
'each' => $renderingContext->getVariableProvider()->getByPath('beGroupData'),
'as' => 'group',
'key' => 'groupId',
'reverse' => false,
'iteration' => NULL,
];

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
                        </select>
                    ';
return $output25;
},
'__else' => function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                        <div class="alert alert-notice">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$arguments33 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:noGroups',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '</div>
                    ';
return $output32;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, static fn() => '', $renderingContext)
;

$output0 .= '
            </div>
            <div class="form-group">
                <label class="form-label" for="recursionLevel">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Depth',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output0 .= '</label>
                <select class="form-select" name="mirror[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= ']" id="recursionLevel">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
                        <option value="';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('depth')]);

$output39 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array41 = [
'0' => $renderingContext->getVariableProvider()->getByPath('depth'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('currentBeUser'),
];

$expression42 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments40 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression42(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)),
    $renderingContext
),
];

$output39 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, static fn() => '', $renderingContext)
;

$output39 .= '>';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('depthLabel')]);

$output39 .= '</option>
                    ';
return $output39;
};

$arguments37 = [
'each' => $renderingContext->getVariableProvider()->getByPath('recursiveSelectOptions'),
'as' => 'depthLabel',
'key' => 'depth',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output0 .= '
                </select>
            </div>
        </div>

        <div class="table-fit">
            <table class="table table-striped table-hover" id="typo3-permissionMatrix">
                <thead>
                    <tr>
                        <th></th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output0 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
return NULL;
};

$arguments45 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output0 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$arguments47 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output0 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return NULL;
};

$arguments49 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output0 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};

$arguments51 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output0 .= '</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output0 .= '</strong></td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_user][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string55 = '{base ^ 0}';
$array56 = array (
  0 => '{base ^ 0}',
  1 => '{base ^ 0}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string55, $array56)]);

$output0 .= '" data-check-change-permissions="check[perms_user],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_user]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_user][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string57 = '{base ^ 4}';
$array58 = array (
  0 => '{base ^ 4}',
  1 => '{base ^ 4}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string57, $array58)]);

$output0 .= '" data-check-change-permissions="check[perms_user],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_user]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_user][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string59 = '{base ^ 1}';
$array60 = array (
  0 => '{base ^ 1}',
  1 => '{base ^ 1}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string59, $array60)]);

$output0 .= '" data-check-change-permissions="check[perms_user],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_user]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_user][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string61 = '{base ^ 2}';
$array62 = array (
  0 => '{base ^ 2}',
  1 => '{base ^ 2}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string61, $array62)]);

$output0 .= '" data-check-change-permissions="check[perms_user],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_user]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_user][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string63 = '{base ^ 3}';
$array64 = array (
  0 => '{base ^ 3}',
  1 => '{base ^ 3}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string63, $array64)]);

$output0 .= '" data-check-change-permissions="check[perms_user],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_user]" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return NULL;
};

$arguments65 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output0 .= '</strong></td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_group][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string67 = '{base ^ 0}';
$array68 = array (
  0 => '{base ^ 0}',
  1 => '{base ^ 0}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string67, $array68)]);

$output0 .= '" data-check-change-permissions="check[perms_group],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_group]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_group][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string69 = '{base ^ 4}';
$array70 = array (
  0 => '{base ^ 4}',
  1 => '{base ^ 4}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string69, $array70)]);

$output0 .= '" data-check-change-permissions="check[perms_group],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_group]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_group][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string71 = '{base ^ 1}';
$array72 = array (
  0 => '{base ^ 1}',
  1 => '{base ^ 1}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string71, $array72)]);

$output0 .= '" data-check-change-permissions="check[perms_group],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_group]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_group][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string73 = '{base ^ 2}';
$array74 = array (
  0 => '{base ^ 2}',
  1 => '{base ^ 2}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string73, $array74)]);

$output0 .= '" data-check-change-permissions="check[perms_group],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_group]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_group][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string75 = '{base ^ 3}';
$array76 = array (
  0 => '{base ^ 3}',
  1 => '{base ^ 3}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string75, $array76)]);

$output0 .= '" data-check-change-permissions="check[perms_group],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_group]" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return NULL;
};

$arguments77 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output0 .= '</strong></td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_everybody][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string79 = '{base ^ 0}';
$array80 = array (
  0 => '{base ^ 0}',
  1 => '{base ^ 0}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string79, $array80)]);

$output0 .= '" data-check-change-permissions="check[perms_everybody],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_everybody]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_everybody][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string81 = '{base ^ 4}';
$array82 = array (
  0 => '{base ^ 4}',
  1 => '{base ^ 4}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string81, $array82)]);

$output0 .= '" data-check-change-permissions="check[perms_everybody],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_everybody]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_everybody][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string83 = '{base ^ 1}';
$array84 = array (
  0 => '{base ^ 1}',
  1 => '{base ^ 1}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string83, $array84)]);

$output0 .= '" data-check-change-permissions="check[perms_everybody],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_everybody]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_everybody][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string85 = '{base ^ 2}';
$array86 = array (
  0 => '{base ^ 2}',
  1 => '{base ^ 2}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string85, $array86)]);

$output0 .= '" data-check-change-permissions="check[perms_everybody],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_everybody]" />
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-type-toggle">
                                <input class="form-check-input" type="checkbox" name="check[perms_everybody][]" value="';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string87 = '{base ^ 3}';
$array88 = array (
  0 => '{base ^ 3}',
  1 => '{base ^ 3}',
);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [\TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string87, $array88)]);

$output0 .= '" data-check-change-permissions="check[perms_everybody],data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_everybody]" />
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <input type="hidden" name="data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_user]" value="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageInfo.perms_user')]);

$output0 .= '" data-checkbox-group="check[perms_user]" />
        <input type="hidden" name="data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_group]" value="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageInfo.perms_group')]);

$output0 .= '" data-checkbox-group="check[perms_group]" />
        <input type="hidden" name="data[pages][';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id')]);

$output0 .= '][perms_everybody]" value="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageInfo.perms_everybody')]);

$output0 .= '" data-checkbox-group="check[perms_everybody]" />
        <input type="hidden" name="depth" value="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('depth')]);

$output0 .= '" />
        <input type="hidden" name="returnUrl" value="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('returnUrl')]);

$output0 .= '" />
    </form>

    <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
return NULL;
};

$arguments89 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Legend',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output0 .= '</h3>
    <p>
        <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
return NULL;
};

$arguments91 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output0 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return NULL;
};

$arguments93 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:1_t',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output0 .= ' <br>
        <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return NULL;
};

$arguments95 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output0 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return NULL;
};

$arguments97 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:16_t',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output0 .= ' <br>
        <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return NULL;
};

$arguments99 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output0 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};

$arguments101 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:2_t',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output0 .= ' <br>
        <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return NULL;
};

$arguments103 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext)]);

$output0 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return NULL;
};

$arguments105 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:4_t',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext)]);

$output0 .= ' <br>
        <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return NULL;
};

$arguments107 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output0 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};

$arguments109 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output0 .= '
    </p>
    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return NULL;
};

$arguments111 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output0 .= '</p>

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output113 = '';

$output113 .= '

';

$output113 .= '';

$output113 .= '
';

$output113 .= '';

$output113 .= '


';

    return $output113;
}

}

#