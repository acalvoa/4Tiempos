<?php /* Smarty version Smarty-3.1.19, created on 2016-11-25 10:04:09
         compiled from "/home/testing.4tiempos.cl/public_html/pdf/invoice.addresses-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1068271283583836c9567f74-75191624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '631a6ebac8d891fbf993e13b3240bfaabb7ecd2f' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/pdf/invoice.addresses-tab.tpl',
      1 => 1465942510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1068271283583836c9567f74-75191624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
    'delivery_address' => 0,
    'invoice_address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583836c957dc38_28803069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583836c957dc38_28803069')) {function content_583836c957dc38_28803069($_smarty_tpl) {?>
<table id="addresses-tab" cellspacing="0" cellpadding="0">
	<tr>
		<td width="33%"><span class="bold"> </span><br/><br/>
			<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value)) {?><?php echo $_smarty_tpl->tpl_vars['order_invoice']->value->shop_address;?>
<?php }?>
		</td>
		<td width="33%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo smartyTranslate(array('s'=>'Delivery Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

			<?php }?>
		</td>
		<td width="33%"><span class="bold"><?php echo smartyTranslate(array('s'=>'Billing Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

		</td>
	</tr>
</table>
<?php }} ?>
