<?php /* Smarty version Smarty-3.1.19, created on 2016-11-25 10:02:10
         compiled from "/home/testing.4tiempos.cl/public_html/modules/flowpayment/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7077008458383652843903-24854899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48c0d03467b11452eb03648a084cc3439854a5aa' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/modules/flowpayment/views/templates/hook/payment.tpl',
      1 => 1479341285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7077008458383652843903-24854899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'logo' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58383652851962_39847426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58383652851962_39847426')) {function content_58383652851962_39847426($_smarty_tpl) {?><div class="row">
	<div class="col-xs-12 col-md-6">
        <p class="payment_module">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('flowpayment','payment'), ENT_QUOTES, 'UTF-8', true);?>
"
				style="background: url(<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
) no-repeat scroll 15px 12px #FBFBFB;"
				title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="bankwire flowpayment">
            	<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </a>
        </p>
    </div>
</div><?php }} ?>
