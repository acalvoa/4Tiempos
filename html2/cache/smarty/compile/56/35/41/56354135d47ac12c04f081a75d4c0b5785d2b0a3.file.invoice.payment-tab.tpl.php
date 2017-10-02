<?php /* Smarty version Smarty-3.1.19, created on 2016-11-25 10:04:09
         compiled from "/home/testing.4tiempos.cl/public_html/pdf/invoice.payment-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149016140583836c96f7c91-61031815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56354135d47ac12c04f081a75d4c0b5785d2b0a3' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/pdf/invoice.payment-tab.tpl',
      1 => 1465942510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149016140583836c96f7c91-61031815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
    'payment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583836c970aeb5_15594306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583836c970aeb5_15594306')) {function content_583836c970aeb5_15594306($_smarty_tpl) {?>
<table id="payment-tab" width="100%">
	<tr>
		<td class="payment center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Payment Method','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="payment left white" width="56%">
			<table width="100%" border="0">
				<?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_invoice']->value->getOrderPaymentCollection(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
					<tr>
						<td class="right small"><?php echo $_smarty_tpl->tpl_vars['payment']->value->payment_method;?>
</td>
						<td class="right small"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['payment']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['payment']->value->amount),$_smarty_tpl);?>
</td>
					</tr>
				<?php } ?>
			</table>
		</td>
	</tr>
</table>
<?php }} ?>
