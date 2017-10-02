<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 12:08:59
         compiled from "/home/testing.4tiempos.cl/public_html/admin8872/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1859605243582dc80b491812-69646640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5114ff4b8083fcc6d48610262bbe2d4ec48c77b' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/admin8872/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1465942510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1859605243582dc80b491812-69646640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582dc80b4b1680_42103582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582dc80b4b1680_42103582')) {function content_582dc80b4b1680_42103582($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
