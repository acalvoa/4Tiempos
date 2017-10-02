<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 11:07:11
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1792583241582db98f069088-59726642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99eb29d33fafd891f5ae11fa2a0c7fd3234c53ee' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/category-count.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1792583241582db98f069088-59726642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582db98f085bc3_84257349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582db98f085bc3_84257349')) {function content_582db98f085bc3_84257349($_smarty_tpl) {?><span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0) {?><?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }} ?>
