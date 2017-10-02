<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 10:46:27
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blocknewproducts/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:390266367582db4b30e73c6-45131269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1efd478575290cb00004e4a7c2740d44a950a426' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blocknewproducts/tab.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '390266367582db4b30e73c6-45131269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582db4b3100b89_57723805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582db4b3100b89_57723805')) {function content_582db4b3100b89_57723805($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/testing.4tiempos.cl/public_html/tools/smarty/plugins/function.counter.php';
?><?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>>
	<a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts" title="<?php echo smartyTranslate(array('s'=>'New arrivals','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'New arrivals','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
