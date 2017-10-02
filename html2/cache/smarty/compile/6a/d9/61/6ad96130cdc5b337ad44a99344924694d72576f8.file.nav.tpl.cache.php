<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 10:43:13
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1884886122582db3f15535a6-08058215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ad96130cdc5b337ad44a99344924694d72576f8' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blockcontact/nav.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1884886122582db3f15535a6-08058215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582db3f15697f3_94549161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582db3f15697f3_94549161')) {function content_582db3f15697f3_94549161($_smarty_tpl) {?><div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone">
		<i class="icon-phone"></i>
        <?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl);?>
 
        <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?>
<div class="clearfix"></div><?php }} ?>
