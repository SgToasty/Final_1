<?php
class partial_BackendUserGroup_PaginatedList_9894ae34cbce0b62a3c67917eba7edbdbf4aadee extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'beuser' => 
  array (
    0 => 'TYPO3\\CMS\\Beuser\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

<div class="table-fit">
    <table id="typo3-backend-user-group-list" class="table table-striped table-hover">
        <thead>
            <tr>
                <th colspan="2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'key' => 'backendUserGroup',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</th>
                <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'key' => 'subGroups',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</th>
                <th class="col-control"></th>
            </tr>
        </thead>
        <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
                <tr>
                    <td class="col-icon">
                        <button
                            type="button"
                            class="btn btn-link p-0"
                            data-contextmenu-trigger="click"
                            data-contextmenu-table="be_groups"
                            data-contextmenu-uid="';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid')]);

$output7 .= '"
                            title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output9 = '';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.description')]);

$output9 .= ' ';

$array10 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backendUserGroup.description'),
];

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments8 = [
'then' => $output9,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)),
    $renderingContext
),
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, static fn() => '', $renderingContext)
;

$output7 .= '(id=';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid')]);

$output7 .= ')"
                        >
                            ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SpriteIconForRecordViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'table' => 'be_groups',
'object' => $renderingContext->getVariableProvider()->getByPath('backendUserGroup'),
];

$output7 .= TYPO3\CMS\Beuser\ViewHelpers\SpriteIconForRecordViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output7 .= '
                        </button>
                    </td>
                    <td class="title">
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output16 = '';

$output16 .= '
                            <b>';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.title')]);

$output16 .= '</b><br>
                            ';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.realName')]);

$output16 .= '
                        ';
return $output16;
};

$arguments14 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => 'edit',
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => $renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid'),
'table' => 'be_groups',
'fields' => NULL,
'returnUrl' => '',
];

$output7 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output7 .= '
                    </td>
                    <td class="nowrap-disabled">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output19 = '';

$output19 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
$output22 = '';

$output22 .= '
                                ';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subgroup.title')]);

$output22 .= '
                            ';
return $output22;
};

$arguments20 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => 'edit',
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => $renderingContext->getVariableProvider()->getByPath('subgroup.uid'),
'table' => 'be_groups',
'fields' => NULL,
'returnUrl' => '',
];

$output19 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array24 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('subGroupIterator.isLast'),
];

$expression25 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments23 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return ', ';
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, static fn() => '', $renderingContext)
;

$output19 .= '
                        ';
return $output19;
};

$arguments17 = [
'each' => $renderingContext->getVariableProvider()->getByPath('backendUserGroup.subgroups'),
'as' => 'subgroup',
'key' => NULL,
'reverse' => false,
'iteration' => 'subGroupIterator',
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output7 .= '
                    </td>
                    <td class="col-control">
                        <div class="btn-group" role="group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
$output28 = '';

$output28 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};

$arguments29 = [
'identifier' => 'actions-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output28 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
                            ';
return $output28;
};

$arguments26 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => 'edit',
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => $renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid'),
'table' => 'be_groups',
'fields' => NULL,
'returnUrl' => '',
];

$output7 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output7 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array32 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backendUserGroup.hidden'),
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
                                    <a
                                        class="btn btn-default"
                                        href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};
$output37 = '';

$output37 .= 'data[be_groups][';

$output37 .= $renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid');

$output37 .= '][hidden]=0';

$arguments35 = [
'route' => 'tce_db',
'arguments' => [],
'query' => $output37,
'currentUrlParameterName' => 'redirect',
];

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= '"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'key' => 'visibility.unhide',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output34 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'identifier' => 'actions-edit-unhide',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output34 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output34 .= '
                                    </a>
                                ';
return $output34;
},
'__else' => function() use ($renderingContext) {
$output42 = '';

$output42 .= '
                                    <a
                                        class="btn btn-default"
                                        href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};
$output45 = '';

$output45 .= 'data[be_groups][';

$output45 .= $renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid');

$output45 .= '][hidden]=1';

$arguments43 = [
'route' => 'tce_db',
'arguments' => [],
'query' => $output45,
'currentUrlParameterName' => 'redirect',
];

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'key' => 'visibility.hide',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext)]);

$output42 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'identifier' => 'actions-edit-hide',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output42 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output42 .= '
                                    </a>
                                ';
return $output42;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, static fn() => '', $renderingContext)
;

$output7 .= '
                            <button
                                type="submit"
                                class="btn btn-default t3js-modal-trigger"
                                data-target-form="be_user_group_remove_';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid')]);

$output7 .= '"
                                data-severity="warning"
                                data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$arguments50 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output7 .= '"
                                data-bs-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$array54 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backendUserGroup.title'),
];

$arguments52 = [
'key' => 'backendUserGroup.confirmDelete',
'id' => NULL,
'default' => NULL,
'arguments' => $array54,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output7 .= '"
                                data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};

$arguments55 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output7 .= '"
                                data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.yes',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output7 .= '"
                                title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};

$arguments59 = [
'key' => 'delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output7 .= '"
                            >
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return NULL;
};

$arguments61 = [
'identifier' => 'actions-edit-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output7 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output7 .= '
                            </button>
                            <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};

$arguments63 = [
'route' => 'tce_db',
'arguments' => [],
'query' => NULL,
'currentUrlParameterName' => 'redirect',
];

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output7 .= '" name="be_user_group_remove_';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid')]);

$output7 .= '" id="be_user_group_remove_';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid')]);

$output7 .= '" method="post">
                                <input name="cmd[be_groups][';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid')]);

$output7 .= '][delete]=1" type="hidden" value="';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.uid')]);

$output7 .= '">
                            </form>
                        </div>
                        <div class="btn-group" role="group">
                            <a class="btn btn-default" href="#" data-dispatch-action="TYPO3.InfoWindow.showItem" data-dispatch-args-list="be_groups,';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid')]);

$output7 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return NULL;
};

$arguments65 = [
'identifier' => 'actions-document-info',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output7 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output7 .= '
                            </a>
                        </div>
                        <div class="btn-group" role="group">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array68 = [
'0' => $renderingContext->getVariableProvider()->getByPath('compareGroupUidList.{backendUserGroup.uid}'),
];

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments67 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression69(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output70 = '';

$output70 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
$output76 = '';

$output76 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return NULL;
};

$arguments77 = [
'identifier' => 'actions-minus',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output76 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return NULL;
};

$arguments79 = [
'key' => 'compare',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output76 .= '
                                    ';
return $output76;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};

$arguments73 = [
'key' => 'compare',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array75 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid'),
];

$arguments71 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'removeGroupFromCompareList',
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'arguments' => $array75,
];

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
                                ';
return $output70;
},
'__else' => function() use ($renderingContext) {
$output81 = '';

$output81 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
$output87 = '';

$output87 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
return NULL;
};

$arguments88 = [
'identifier' => 'actions-plus',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output87 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
return NULL;
};

$arguments90 = [
'key' => 'compare',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output87 .= '
                                    ';
return $output87;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
return NULL;
};

$arguments84 = [
'key' => 'compare',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array86 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('backendUserGroup.uid'),
];

$arguments82 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'addGroupToCompareList',
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'arguments' => $array86,
];

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                                ';
return $output81;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, static fn() => '', $renderingContext)
;

$output7 .= '
                        </div>
                    </td>
                </tr>
            ';
return $output7;
};

$arguments5 = [
'each' => $renderingContext->getVariableProvider()->getByPath('paginator.paginatedItems'),
'as' => 'backendUserGroup',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array93 = [
'0' => $renderingContext->getVariableProvider()->getByPath('totalAmountOfBackendUserGroups'),
'1' => ' > 1',
];

$expression94 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments92 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression94(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output95 = '';

$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('totalAmountOfBackendUserGroups')]);

$output95 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
return NULL;
};

$arguments96 = [
'key' => 'groups',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output95 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext)]);
return $output95;
},
'__else' => function() use ($renderingContext) {
$output98 = '';

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('totalAmountOfBackendUserGroups')]);

$output98 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return NULL;
};

$arguments99 = [
'key' => 'group',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output98 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);
return $output98;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, static fn() => '', $renderingContext)
;

$output0 .= '
                </td>
            </tr>
        </tfoot>
    </table>
</div>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};

$array103 = [
'paginator' => $renderingContext->getVariableProvider()->getByPath('paginator'),
'pagination' => $renderingContext->getVariableProvider()->getByPath('pagination'),
'actionName' => 'groups',
];

$arguments101 = [
'section' => NULL,
'partial' => 'SimplePagination',
'delegate' => NULL,
'arguments' => $array103,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output0 .= '


';

    return $output0;
}

}

#