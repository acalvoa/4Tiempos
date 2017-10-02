<?php /* Smarty version Smarty-3.1.19, created on 2016-11-25 10:02:10
         compiled from "/home/testing.4tiempos.cl/public_html/modules/webpaykcc/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19435404265838365281ce54-27462405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f093e29451e5aebae72ff7b04e60edf963f3c32c' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/modules/webpaykcc/views/templates/hook/payment.tpl',
      1 => 1480078795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19435404265838365281ce54-27462405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58383652838d90_53340235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58383652838d90_53340235')) {function content_58383652838d90_53340235($_smarty_tpl) {?><div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('webpaykcc','payment'), ENT_QUOTES, 'UTF-8', true);?>
"
				style="background: url(<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
) no-repeat scroll 15px 12px #FBFBFB;"
				title="<?php echo smartyTranslate(array('s'=>'Pay using Webpay','mod'=>'webpaykcc'),$_smarty_tpl);?>
" class="bankwire webpaykcc">
            	<?php echo smartyTranslate(array('s'=>'Pay using Webpay','mod'=>'webpaykcc'),$_smarty_tpl);?>

            </a>
        </p>
    </div>
</div><?php }} ?>
