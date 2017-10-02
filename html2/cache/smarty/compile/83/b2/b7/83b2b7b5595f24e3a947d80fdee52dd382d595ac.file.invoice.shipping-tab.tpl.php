<?php /* Smarty version Smarty-3.1.19, created on 2016-11-25 10:04:09
         compiled from "/home/testing.4tiempos.cl/public_html/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1406726041583836c978f819-28998980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83b2b7b5595f24e3a947d80fdee52dd382d595ac' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/pdf/invoice.shipping-tab.tpl',
      1 => 1465942510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1406726041583836c978f819-28998980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583836c9796e35_06008804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583836c9796e35_06008804')) {function content_583836c9796e35_06008804($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
