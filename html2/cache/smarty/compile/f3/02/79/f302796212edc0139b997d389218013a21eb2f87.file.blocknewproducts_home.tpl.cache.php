<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 10:46:27
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blocknewproducts/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1534464909582db4b3170918-37279018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f302796212edc0139b997d389218013a21eb2f87' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blocknewproducts/blocknewproducts_home.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1534464909582db4b3170918-37279018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582db4b31a9245_94887348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582db4b31a9245_94887348')) {function content_582db4b31a9245_94887348($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/testing.4tiempos.cl/public_html/tools/smarty/plugins/function.counter.php';
?><?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

<?php } else { ?>
    <ul id="blocknewproducts" class="blocknewproducts tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1) {?> active<?php }?>">
        <li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
    </ul>
<?php }?><?php }} ?>
