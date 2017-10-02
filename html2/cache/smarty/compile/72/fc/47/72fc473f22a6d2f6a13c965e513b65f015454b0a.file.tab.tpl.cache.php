<?php /* Smarty version Smarty-3.1.19, created on 2016-11-25 10:17:49
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blockbestsellers/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1796764995583839fd0e98c6-79454402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72fc473f22a6d2f6a13c965e513b65f015454b0a' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blockbestsellers/tab.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1796764995583839fd0e98c6-79454402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_583839fd117cf4_35551733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583839fd117cf4_35551733')) {function content_583839fd117cf4_35551733($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/testing.4tiempos.cl/public_html/tools/smarty/plugins/function.counter.php';
?><?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>>
	<a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers" title="<?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
