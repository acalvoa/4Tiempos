<?php /* Smarty version Smarty-3.1.19, created on 2016-07-28 20:24:23
         compiled from "/home/testing.4tiempos.cl/public_html/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7015042405797e0694ff9e3-82023580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79b4c1ab79b98695718354319b8fc353f44eb052' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/modules/blocksharefb/blocksharefb.tpl',
      1 => 1469749621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7015042405797e0694ff9e3-82023580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5797e069508091_84626312',
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5797e069508091_84626312')) {function content_5797e069508091_84626312($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="_blank"><?php echo smartyTranslate(array('s'=>'Share on Facebook!','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
