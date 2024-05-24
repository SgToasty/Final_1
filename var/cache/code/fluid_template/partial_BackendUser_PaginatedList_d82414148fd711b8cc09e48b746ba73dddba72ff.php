<?php
class partial_BackendUser_PaginatedList_d82414148fd711b8cc09e48b746ba73dddba72ff extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
    <table id="typo3-backend-user-list" class="table table-striped table-hover">
        <thead>
        <tr>
            <th colspan="2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'key' => 'userName',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= ' / ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'key' => 'realName',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</th>
            <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'key' => 'lastLogin',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '</th>
            <th class="col-control"></th>
        </tr>
        </thead>
        <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
                <tr>
                    <td class="col-avatar">
                        <button
                            type="button"
                            class="btn btn-link p-0"
                            data-contextmenu-trigger="click"
                            data-contextmenu-table="be_users"
                            data-contextmenu-uid="';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid')]);

$output9 .= '"
                            title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output11 = '';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.description')]);

$output11 .= ' ';

$array12 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backendUser.description'),
];

$expression13 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'then' => $output11,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression13(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)),
    $renderingContext
),
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, static fn() => '', $renderingContext)
;

$output9 .= '(id=';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid')]);

$output9 .= ')"
                        >
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$array16 = [
'0' => 'TRUE',
];

$expression17 = function($context) {return TRUE;};

$arguments14 = [
'backendUser' => $renderingContext->getVariableProvider()->getByPath('backendUser.uid'),
'size' => 32,
'showIcon' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
];

$output9 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output9 .= '
                        </button>
                    </td>
                    <td class="col-title">
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
$output20 = '';

$output20 .= '
                            <b>';

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.userName')]);

$output20 .= '</b>
                        ';
return $output20;
};

$arguments18 = [
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
'uid' => $renderingContext->getVariableProvider()->getByPath('backendUser.uid'),
'table' => 'be_users',
'fields' => NULL,
'returnUrl' => '',
];

$output9 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output9 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers.{backendUser.uid}'),
];

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments21 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output24 = '';

$output24 .= '
                            <span class="badge badge-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$arguments25 = [
'key' => 'online',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output24 .= '</span>
                        ';
return $output24;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, static fn() => '', $renderingContext)
;

$output9 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\MfaStatusViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$arguments27 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'userUid' => $renderingContext->getVariableProvider()->getByPath('backendUser.uid'),
];

$output9 .= TYPO3\CMS\Beuser\ViewHelpers\MfaStatusViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output9 .= '
                        <br>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array30 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backendUser.realName'),
];

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments29 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression31(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
$output35 = '';

$output35 .= '
                                ';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.realName')]);

$output35 .= '
                            ';
return $output35;
};

$arguments33 = [
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
'uid' => $renderingContext->getVariableProvider()->getByPath('backendUser.uid'),
'table' => 'be_users',
'fields' => NULL,
'returnUrl' => '',
];

$output32 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
                        ';
return $output32;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, static fn() => '', $renderingContext)
;

$output9 .= '
                    </td>
                    <td class="col-datetime">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array37 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime'),
];

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments36 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression38(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output39 = '';

$output39 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime');
};
$output42 = '';

$output42 .= $renderingContext->getVariableProvider()->getByPath('dateFormat');

$output42 .= ' ';

$output42 .= $renderingContext->getVariableProvider()->getByPath('timeFormat');

$arguments40 = [
'date' => NULL,
'format' => $output42,
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
];
$renderChildrenClosure41 = ($arguments40['date'] !== null) ? function() use ($arguments40) { return $arguments40['date']; } : $renderChildrenClosure41;
$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= '
                            ';
return $output39;
},
'__else' => function() use ($renderingContext) {
$output43 = '';

$output43 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$arguments44 = [
'key' => 'never',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '
                            ';
return $output43;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, static fn() => '', $renderingContext)
;

$output9 .= '
                    </td>
                    <td class="col-control">
                        <div class="btn-group" role="group">
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
$output50 = '';

$output50 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};

$arguments51 = [
'identifier' => 'actions-open',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output50 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                            ';
return $output50;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'key' => 'edit',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments46 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => $renderingContext->getVariableProvider()->getByPath('backendUser.uid'),
'table' => 'be_users',
'fields' => NULL,
'returnUrl' => '',
];

$output9 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output9 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array54 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backendUser.currentlyLoggedIn'),
'1' => ' == 1',
];

$expression55 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments53 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression55(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output56 = '';

$output56 .= '
                                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'identifier' => 'empty-empty',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output56 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '</span>
                                ';
return $output56;
},
'__else' => function() use ($renderingContext) {
$output59 = '';

$output59 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array61 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled'),
'1' => ' == 1',
];

$expression62 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments60 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression62(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output63 = '';

$output63 .= '
                                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
};
$output66 = '';

$output66 .= 'data[be_users][';

$output66 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid');

$output66 .= '][disable]=0';

$arguments64 = [
'route' => 'tce_db',
'arguments' => [],
'query' => $output66,
'currentUrlParameterName' => 'redirect',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output63 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};

$arguments67 = [
'key' => 'visibility.unhide',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output63 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return NULL;
};

$arguments69 = [
'identifier' => 'actions-edit-unhide',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output63 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output63 .= '</a>
                                        ';
return $output63;
},
'__else' => function() use ($renderingContext) {
$output71 = '';

$output71 .= '
                                            <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};
$output74 = '';

$output74 .= 'data[be_users][';

$output74 .= $renderingContext->getVariableProvider()->getByPath('backendUser.uid');

$output74 .= '][disable]=1';

$arguments72 = [
'route' => 'tce_db',
'arguments' => [],
'query' => $output74,
'currentUrlParameterName' => 'redirect',
];

$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output71 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return NULL;
};

$arguments75 = [
'key' => 'visibility.hide',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output71 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return NULL;
};

$arguments77 = [
'identifier' => 'actions-edit-hide',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output71 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output71 .= '</a>
                                        ';
return $output71;
},
];

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, static fn() => '', $renderingContext)
;

$output59 .= '
                                ';
return $output59;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, static fn() => '', $renderingContext)
;

$output9 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array80 = [
'0' => $renderingContext->getVariableProvider()->getByPath('currentUserUid'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('backendUser.uid'),
];

$expression81 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments79 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression81(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output82 = '';

$output82 .= '
                                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return NULL;
};

$arguments83 = [
'identifier' => 'empty-empty',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output82 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '</span>
                                ';
return $output82;
},
'__else' => function() use ($renderingContext) {
$output85 = '';

$output85 .= '
                                    <button
                                        type="submit"
                                        class="btn btn-default t3js-modal-trigger"
                                        data-target-form="be_user_remove_';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid')]);

$output85 .= '"
                                        title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
return NULL;
};

$arguments86 = [
'key' => 'delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output85 .= '"
                                        data-severity="warning"
                                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext) {
return NULL;
};

$arguments88 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output85 .= '"
                                        data-bs-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
return NULL;
};

$array92 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backendUser.userName'),
];

$arguments90 = [
'key' => 'confirm',
'id' => NULL,
'default' => NULL,
'arguments' => $array92,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output85 .= '"
                                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return NULL;
};

$arguments93 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output85 .= '"
                                        data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return NULL;
};

$arguments95 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.yes',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output85 .= '">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return NULL;
};

$arguments97 = [
'identifier' => 'actions-edit-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output85 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output85 .= '
                                    </button>
                                    <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return NULL;
};

$arguments99 = [
'route' => 'tce_db',
'arguments' => [],
'query' => NULL,
'currentUrlParameterName' => 'redirect',
];

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output85 .= '" name="be_user_remove_';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid')]);

$output85 .= '" id="be_user_remove_';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid')]);

$output85 .= '" method="post">
                                        <input name="cmd[be_users][';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid')]);

$output85 .= '][delete]=1" type="hidden" value="';

$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.uid')]);

$output85 .= '">
                                    </form>
                                ';
return $output85;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, static fn() => '', $renderingContext)
;

$output9 .= '
                        </div>
                        <div class="btn-group" role="group">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array102 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backendUser.passwordResetEnabled'),
];

$expression103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments101 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression103(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output104 = '';

$output104 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
$output118 = '';

$output118 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure120 = function() use ($renderingContext) {
return NULL;
};

$arguments119 = [
'identifier' => 'actions-edit-undo',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output118 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
                                    ';
return $output118;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
return NULL;
};

$arguments108 = [
'key' => 'resetPassword.confirmation.header',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure111 = function() use ($renderingContext) {
return NULL;
};

$array112 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backendUser.email'),
];

$arguments110 = [
'key' => 'resetPassword.confirmation.text',
'id' => NULL,
'default' => NULL,
'arguments' => $array112,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return NULL;
};

$arguments113 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array107 = [
'severity' => 'warning',
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext),
'bs-content' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext),
'button-close-text' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext),
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
return NULL;
};

$arguments115 = [
'key' => 'resetPassword.label',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array117 = [
'user' => $renderingContext->getVariableProvider()->getByPath('backendUser.uid'),
];

$arguments105 = [
'additionalAttributes' => NULL,
'data' => $array107,
'aria' => NULL,
'class' => 'btn btn-default t3js-modal-trigger',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'initiatePasswordReset',
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
'arguments' => $array117,
];

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
                                ';
return $output104;
},
'__else' => function() use ($renderingContext) {
$output121 = '';

$output121 .= '
                                    <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure123 = function() use ($renderingContext) {
return NULL;
};

$arguments122 = [
'identifier' => 'empty-empty',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output121 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '</span>
                                ';
return $output121;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, static fn() => '', $renderingContext)
;

$output9 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure125 = function() use ($renderingContext) {
$output129 = '';

$output129 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure131 = function() use ($renderingContext) {
return NULL;
};

$arguments130 = [
'identifier' => 'actions-system-options-view',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output129 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
                            ';
return $output129;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext) {
return NULL;
};

$arguments126 = [
'key' => 'details',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array128 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('backendUser.uid'),
];

$arguments124 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'show',
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
'arguments' => $array128,
];

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output9 .= '
                            <a class="btn btn-default" href="#" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure133 = function() use ($renderingContext) {
return NULL;
};

$arguments132 = [
'key' => 'info',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext)]);

$output9 .= '" data-dispatch-action="TYPO3.InfoWindow.showItem" data-dispatch-args-list="be_users,';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid')]);

$output9 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure135 = function() use ($renderingContext) {
return NULL;
};

$arguments134 = [
'identifier' => 'actions-document-info',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output9 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output9 .= '
                            </a>
                        </div>
                        <div class="btn-group" role="group">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array137 = [
'0' => $renderingContext->getVariableProvider()->getByPath('compareUserUidList.{backendUser.uid}'),
];

$expression138 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments136 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression138(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output139 = '';

$output139 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure141 = function() use ($renderingContext) {
$output145 = '';

$output145 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure147 = function() use ($renderingContext) {
return NULL;
};

$arguments146 = [
'identifier' => 'actions-minus',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output145 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output145 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
return NULL;
};

$arguments148 = [
'key' => 'compare',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext)]);

$output145 .= '
                                    ';
return $output145;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure143 = function() use ($renderingContext) {
return NULL;
};

$arguments142 = [
'key' => 'compare',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array144 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('backendUser.uid'),
];

$arguments140 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'removeFromCompareList',
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
'arguments' => $array144,
];

$output139 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output139 .= '
                                ';
return $output139;
},
'__else' => function() use ($renderingContext) {
$output150 = '';

$output150 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure152 = function() use ($renderingContext) {
$output156 = '';

$output156 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure158 = function() use ($renderingContext) {
return NULL;
};

$arguments157 = [
'identifier' => 'actions-plus',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
];

$output156 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output156 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure160 = function() use ($renderingContext) {
return NULL;
};

$arguments159 = [
'key' => 'compare',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output156 .= '
                                    ';
return $output156;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure154 = function() use ($renderingContext) {
return NULL;
};

$arguments153 = [
'key' => 'compare',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array155 = [
'uid' => $renderingContext->getVariableProvider()->getByPath('backendUser.uid'),
];

$arguments151 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'action' => 'addToCompareList',
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
'arguments' => $array155,
];

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '
                                ';
return $output150;
},
];

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, static fn() => '', $renderingContext)
;

$output9 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper
$renderChildrenClosure162 = function() use ($renderingContext) {
return NULL;
};

$arguments161 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'backendUser' => $renderingContext->getVariableProvider()->getByPath('backendUser'),
'class' => 'btn btn-default',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output9 .= TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output9 .= '
                        </div>
                    </td>
                </tr>
            ';
return $output9;
};

$arguments7 = [
'each' => $renderingContext->getVariableProvider()->getByPath('paginator.paginatedItems'),
'as' => 'backendUser',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array164 = [
'0' => $renderingContext->getVariableProvider()->getByPath('totalAmountOfBackendUsers'),
'1' => ' > 1',
];

$expression165 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments163 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression165(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output166 = '';

$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('totalAmountOfBackendUsers')]);

$output166 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure168 = function() use ($renderingContext) {
return NULL;
};

$arguments167 = [
'key' => 'users',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);
return $output166;
},
'__else' => function() use ($renderingContext) {
$output169 = '';

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('totalAmountOfBackendUsers')]);

$output169 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure171 = function() use ($renderingContext) {
return NULL;
};

$arguments170 = [
'key' => 'user',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext)]);
return $output169;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, static fn() => '', $renderingContext)
;

$output0 .= '
                </td>
            </tr>
        </tfoot>
    </table>
</div>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure173 = function() use ($renderingContext) {
return NULL;
};

$array174 = [
'paginator' => $renderingContext->getVariableProvider()->getByPath('paginator'),
'pagination' => $renderingContext->getVariableProvider()->getByPath('pagination'),
'actionName' => 'list',
];

$arguments172 = [
'section' => NULL,
'partial' => 'SimplePagination',
'delegate' => NULL,
'arguments' => $array174,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output0 .= '
';

    return $output0;
}

}

#