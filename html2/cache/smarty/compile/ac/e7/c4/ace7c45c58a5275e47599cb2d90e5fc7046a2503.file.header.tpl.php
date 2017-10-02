<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 10:46:26
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/homeslider/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:785435836582db4b2a0fd95-52689523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ace7c45c58a5275e47599cb2d90e5fc7046a2503' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/homeslider/header.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '785435836582db4b2a0fd95-52689523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582db4b2a27a01_52344990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582db4b2a27a01_52344990')) {function content_582db4b2a27a01_52344990($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_loop'=>$_smarty_tpl->tpl_vars['homeslider']->value['loop']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_width'=>$_smarty_tpl->tpl_vars['homeslider']->value['width']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_speed'=>$_smarty_tpl->tpl_vars['homeslider']->value['speed']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_pause'=>$_smarty_tpl->tpl_vars['homeslider']->value['pause']),$_smarty_tpl);?>

<?php }?><?php }} ?>
