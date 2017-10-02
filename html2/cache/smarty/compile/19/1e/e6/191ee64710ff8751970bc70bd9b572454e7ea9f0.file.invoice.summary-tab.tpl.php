<?php /* Smarty version Smarty-3.1.19, created on 2016-11-25 10:04:09
         compiled from "/home/testing.4tiempos.cl/public_html/pdf/invoice.summary-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1204614983583836c9583255-54525839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '191ee64710ff8751970bc70bd9b572454e7ea9f0' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/pdf/invoice.summary-tab.tpl',
      1 => 1465942510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1204614983583836c9583255-54525839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addresses' => 0,
    'title' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583836c95b23b6_58467367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583836c95b23b6_58467367')) {function content_583836c95b23b6_58467367($_smarty_tpl) {?>
<table id="summary-tab" width="100%">
	<tr>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Invoice Number','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Invoice Date','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order Reference','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order date','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php if ($_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number) {?>
			<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'VAT Number','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php }?>
	</tr>
	<tr>
		<td class="center small white"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->invoice_date,'full'=>0),$_smarty_tpl);?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['order']->value->getUniqReference();?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number) {?>
			<td class="center small white">
				<?php echo $_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number;?>

			</td>
		<?php }?>
	</tr>
</table>
<?php }} ?>
