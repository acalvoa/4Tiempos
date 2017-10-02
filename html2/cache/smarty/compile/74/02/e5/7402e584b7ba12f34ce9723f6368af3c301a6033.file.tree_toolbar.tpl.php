<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 10:43:08
         compiled from "/home/testing.4tiempos.cl/public_html/admin8872/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:988601382582db3ec058a34-84503292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7402e584b7ba12f34ce9723f6368af3c301a6033' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/admin8872/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1465942510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '988601382582db3ec058a34-84503292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582db3ec06d067_82537409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582db3ec06d067_82537409')) {function content_582db3ec06d067_82537409($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
