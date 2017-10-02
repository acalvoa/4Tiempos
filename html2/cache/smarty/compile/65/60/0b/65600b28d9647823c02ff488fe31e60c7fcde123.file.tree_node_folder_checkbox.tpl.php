<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 10:43:26
         compiled from "/home/testing.4tiempos.cl/public_html/admin8872/themes/default/template/helpers/tree/tree_node_folder_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1683578256582db3fe6c9529-14095487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65600b28d9647823c02ff488fe31e60c7fcde123' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/admin8872/themes/default/template/helpers/tree/tree_node_folder_checkbox.tpl',
      1 => 1465942510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1683578256582db3fe6c9529-14095487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'root_category' => 0,
    'input_name' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582db3fe708b40_45097547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582db3fe708b40_45097547')) {function content_582db3fe708b40_45097547($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/testing.4tiempos.cl/public_html/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<?php if (isset($_smarty_tpl->tpl_vars['node']->value['id_category'])&&$_smarty_tpl->tpl_vars['node']->value['id_category']!=$_smarty_tpl->tpl_vars['root_category']->value) {?>
		<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<?php }?>
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php if (isset($_smarty_tpl->tpl_vars['node']->value['name'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['node']->value['selected_childs'])&&(int)$_smarty_tpl->tpl_vars['node']->value['selected_childs']>0) {?> <?php echo smartyTranslate(array('s'=>'(%s selected)','sprintf'=>$_smarty_tpl->tpl_vars['node']->value['selected_childs']),$_smarty_tpl);?>
<?php }?></label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li>
<?php }} ?>
