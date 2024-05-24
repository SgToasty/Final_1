<?php
class Default_action_Permission_Index_806e31231028d1c09d69143b61d5112d281b245a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'backend' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
  'beuser' => 
  array (
    0 => 'TYPO3\\CMS\\Beuser\\ViewHelpers',
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

    <h1>';
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

$output0 .= '</h1>

    <div class="table-fit">
        <table class="table table-striped table-hover" id="typo3-permissionList">
            <thead>
            <tr>
                <th></th>
                <th colspan="2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Owner',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '</th>
                <th colspan="2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Group',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output0 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:Everybody',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output0 .= '</th>
                <th></th>
            </tr>
            </thead>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';

$output14 .= '
                <tr>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array16 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.row.uid'),
];

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments15 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output18 = '';

$output18 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output23 = '';

$output23 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid'),
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments27 = [
'then' => $renderingContext->getVariableProvider()->getByPath('data.row._ORIG_uid'),
'else' => $renderingContext->getVariableProvider()->getByPath('data.row.uid'),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
];

$array26 = [
'id' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, static fn() => '', $renderingContext)
,
'action' => 'edit',
'depth' => $renderingContext->getVariableProvider()->getByPath('depth'),
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];

$arguments24 = [
'route' => 'permissions_pages',
'arguments' => $array26,
'query' => NULL,
'currentUrlParameterName' => NULL,
];

$output23 .= TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                            ';
return $output23;
};

$arguments21 = [
];
return TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
};

$arguments19 = [
'value' => NULL,
'name' => 'editUrl',
];
$renderChildrenClosure20 = ($arguments19['value'] !== null) ? function() use ($arguments19) { return $arguments19['value']; } : $renderChildrenClosure20;
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output18 .= '

                            ';

$output18 .= '';

$output18 .= '

                            <td class="permission-column-name">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('data.depthData');
};

$arguments33 = [
'value' => NULL,
];

$output32 .= isset($arguments33['value']) ? $arguments33['value'] : $renderChildrenClosure34();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('data.HTML');
};

$arguments35 = [
'value' => NULL,
];

$output32 .= isset($arguments35['value']) ? $arguments35['value'] : $renderChildrenClosure36();

$output32 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array38 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.icon'),
];

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments37 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression39(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('data.icon');
};

$arguments40 = [
'value' => NULL,
];
return isset($arguments40['value']) ? $arguments40['value'] : $renderChildrenClosure41();
},
];

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, static fn() => '', $renderingContext)
;

$output32 .= '
                                ';
return $output32;
};

$arguments30 = [
];

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output18 .= '
                                <a
                                    href="';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('editUrl')]);

$output18 .= '"
                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$arguments42 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output18 .= '"
                                >';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title')]);
};

$arguments44 = [
'maxCharacters' => 20,
'append' => '&hellip;',
'respectWordBoundaries' => true,
'respectHtml' => true,
];

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output18 .= '</a>
                            </td>

                            <td class="permission-column-list">
                                ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'permission' => $renderingContext->getVariableProvider()->getByPath('data.row.perms_user'),
'scope' => 'user',
'pageId' => $renderingContext->getVariableProvider()->getByPath('data.row.uid'),
];

$output18 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output18 .= '
                            </td>
                            <td class="permission-column-group">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};

$arguments51 = [
'array' => $renderingContext->getVariableProvider()->getByPath('beUsers'),
'key' => $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid'),
'subKey' => 'username',
];

$array50 = [
'pageId' => $renderingContext->getVariableProvider()->getByPath('data.row.uid'),
'userId' => $renderingContext->getVariableProvider()->getByPath('data.row.perms_userid'),
'username' => TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext),
];

$arguments48 = [
'section' => NULL,
'partial' => 'Permission/Ownername',
'delegate' => NULL,
'arguments' => $array50,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output18 .= '
                            </td>

                            <td class="permission-column-list">
                                ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'permission' => $renderingContext->getVariableProvider()->getByPath('data.row.perms_group'),
'scope' => 'group',
'pageId' => $renderingContext->getVariableProvider()->getByPath('data.row.uid'),
];

$output18 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output18 .= '
                            </td>
                            <td class="permission-column-group">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};

$arguments58 = [
'array' => $renderingContext->getVariableProvider()->getByPath('beGroups'),
'key' => $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid'),
'subKey' => 'title',
];

$array57 = [
'pageId' => $renderingContext->getVariableProvider()->getByPath('data.row.uid'),
'groupId' => $renderingContext->getVariableProvider()->getByPath('data.row.perms_groupid'),
'groupname' => TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext),
];

$arguments55 = [
'section' => NULL,
'partial' => 'Permission/Groupname',
'delegate' => NULL,
'arguments' => $array57,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output18 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output18 .= '
                            </td>

                            <td class="permission-column-list">
                                ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};

$arguments60 = [
'permission' => $renderingContext->getVariableProvider()->getByPath('data.row.perms_everybody'),
'scope' => 'everybody',
'pageId' => $renderingContext->getVariableProvider()->getByPath('data.row.uid'),
];

$output18 .= TYPO3\CMS\Beuser\ViewHelpers\PermissionsViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output18 .= '
                            </td>

                            <td class="col-control">
                                <span class="btn-group">
                                    <span id="el_';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid')]);

$output18 .= '">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array63 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.row.editlock'),
];

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments62 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression64(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output65 = '';

$output65 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-sm btn-default"
                                                    data-page="';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid')]);

$output65 .= '"
                                                    data-lockstate="1"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
return NULL;
};

$arguments66 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output65 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return NULL;
};

$arguments68 = [
'identifier' => 'actions-lock',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output65 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output65 .= '
                                                </button>
                                            ';
return $output65;
},
'__else' => function() use ($renderingContext) {
$output70 = '';

$output70 .= '
                                                <button
                                                    type="button"
                                                    class="editlock btn btn-sm btn-default"
                                                    data-page="';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.uid')]);

$output70 .= '"
                                                    data-lockstate="0"
                                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return NULL;
};

$arguments71 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:EditLock_descr2',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '"
                                                >
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};

$arguments73 = [
'identifier' => 'actions-unlock',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output70 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output70 .= '
                                                </button>
                                            ';
return $output70;
},
];

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, static fn() => '', $renderingContext)
;

$output18 .= '
                                    </span>
                                    ';

$output18 .= '';

$output18 .= '
                                    <a href="';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('editUrl')]);

$output18 .= '"
                                        class="btn btn-sm btn-default"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return NULL;
};

$arguments75 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:ch_permissions',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output18 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return NULL;
};

$arguments77 = [
'identifier' => 'actions-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output18 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output18 .= '
                                    </a>
                                </span>
                            </td>
                        ';
return $output18;
},
'__else' => function() use ($renderingContext) {
$output79 = '';

$output79 .= '
                            ';

$output79 .= '';

$output79 .= '
                            <td class="permission-column-name">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('data.HTML');
};

$arguments80 = [
'value' => NULL,
];

$output79 .= isset($arguments80['value']) ? $arguments80['value'] : $renderChildrenClosure81();

$output79 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array83 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.icon'),
];

$expression84 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments82 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression84(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('data.icon');
};

$arguments85 = [
'value' => NULL,
];
return isset($arguments85['value']) ? $arguments85['value'] : $renderChildrenClosure86();
},
];

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, static fn() => '', $renderingContext)
;

$output79 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.row.title')]);
};

$arguments87 = [
'maxCharacters' => 20,
'append' => '&hellip;',
'respectWordBoundaries' => true,
'respectHtml' => true,
];

$output79 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output79 .= '
                            </td>
                            <td colspan="6"></td>
                        ';
return $output79;
},
];

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, static fn() => '', $renderingContext)
;

$output14 .= '
                </tr>
            ';
return $output14;
};

$arguments12 = [
'each' => $renderingContext->getVariableProvider()->getByPath('viewTree'),
'as' => 'data',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
        </table>
    </div>

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

$output0 .= ':</h3>
    <div class="access-legend">
        <table>
            <tr>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">1</span></td>
                <td class="nowrap"><strong>';
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

$output0 .= '</td>
            </tr>
            <tr>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">2</span></td>
                <td class="nowrap"><strong>';
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

$output0 .= '</td>
            </tr>
            <tr>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">3</span></td>
                <td class="nowrap"><strong>';
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

$output0 .= '</td>
            </tr>
            <tr>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="t3-vr nowrap"><span></span></td>
                <td class="edge nowrap"><span><span></span></span></td>
                <td class="hr nowrap"><span></span></td>
                <td class="nowrap"><span class="number">4</span></td>
                <td class="nowrap"><strong>';
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

$output0 .= '</td>
            </tr>
            <tr>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return NULL;
};

$arguments107 = [
'identifier' => 'status-status-permission-granted',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output0 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};

$arguments109 = [
'identifier' => 'status-status-permission-denied',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output0 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return NULL;
};

$arguments111 = [
'identifier' => 'status-status-permission-granted',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output0 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return NULL;
};

$arguments113 = [
'identifier' => 'status-status-permission-denied',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output0 .= '</td>
                <td class="nowrap">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
return NULL;
};

$arguments115 = [
'identifier' => 'status-status-permission-denied',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output0 .= '</td>
                <td class="nowrap"><span class="number">5</span></td>
                <td class="nowrap"><strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure118 = function() use ($renderingContext) {
return NULL;
};

$arguments117 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output0 .= '</strong>: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext) {
return NULL;
};

$arguments119 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:8_t',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output0 .= '</td>
            </tr>
        </table>
    </div>
    <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure122 = function() use ($renderingContext) {
return NULL;
};

$arguments121 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:def',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext)]);

$output0 .= '</p>
    <p>
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure124 = function() use ($renderingContext) {
return NULL;
};

$arguments123 = [
'identifier' => 'status-status-permission-granted',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output0 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
return NULL;
};

$arguments125 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Granted',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext)]);

$output0 .= '<br>
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
return NULL;
};

$arguments127 = [
'identifier' => 'status-status-permission-denied',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output0 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
return NULL;
};

$arguments129 = [
'key' => 'LLL:EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf:A_Denied',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output0 .= '
    </p>

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output131 = '';

$output131 .= '

';

$output131 .= '';

$output131 .= '
';

$output131 .= '';

$output131 .= '


';

    return $output131;
}

}

#