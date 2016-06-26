<?php /* Smarty version Smarty-3.1.19, created on 2016-06-15 11:03:57
         compiled from "/home/testing.4tiempos.cl/public_html/modules/webpaykcc/views/templates/front/confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75851544257616e5d2f6d41-85382971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a09bfd491b667823a9fd1b964dd5ef2ec2554eb' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/modules/webpaykcc/views/templates/front/confirmation.tpl',
      1 => 1465958601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75851544257616e5d2f6d41-85382971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'transaction_type' => 0,
    'tbk_total_amount' => 0,
    'order_id' => 0,
    'session_id' => 0,
    'failure_page' => 0,
    'success_page' => 0,
    'logo' => 0,
    'total_amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57616e5d331d56_35485050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57616e5d331d56_35485050')) {function content_57616e5d331d56_35485050($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Payment Using Webpay','mod'=>'webpaykcc'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h2><?php echo smartyTranslate(array('s'=>'Order summary','mod'=>'webpaykcc'),$_smarty_tpl);?>
</h2>

<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('payment', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">

<input type="hidden" name="TBK_TIPO_TRANSACCION" value="<?php echo $_smarty_tpl->tpl_vars['transaction_type']->value;?>
" />

<input type="hidden" name="TBK_MONTO" value="<?php echo $_smarty_tpl->tpl_vars['tbk_total_amount']->value;?>
" />

<input type="hidden" name="TBK_ORDEN_COMPRA" value="<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
" />

<input type="hidden" name="TBK_ID_SESION" value="<?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
" /> 

<input type="hidden" name="TBK_URL_FRACASO" value="<?php echo $_smarty_tpl->tpl_vars['failure_page']->value;?>
" />

<input type="hidden" name="TBK_URL_EXITO" value="<?php echo $_smarty_tpl->tpl_vars['success_page']->value;?>
" />

	<div class="row row-margin-bottom">
		<div class="col-sm-6">
			<img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
">
			<?php echo smartyTranslate(array('s'=>'You will be charged with the following amount','mod'=>'webpaykcc'),$_smarty_tpl);?>
 &nbsp; <strong>$<?php echo $_smarty_tpl->tpl_vars['total_amount']->value;?>
</strong>
		</div>
		<div class="col-sm-6">
			<button type="submit" class="button btn btn-default standard-checkout button-medium pull-right">
				<span><?php echo smartyTranslate(array('s'=>'Pay Cart','mod'=>'webpaykcc'),$_smarty_tpl);?>
 <i class="icon-chevron-right right"></i></span>
			</button>
		</div>
	</div>
</form>
<?php }} ?>
