<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 10:46:27
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:960853903582db4b3056c12-79870369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ee11c0c2f0d5ab956cdc54cc9f15985a03a84d' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blockfacebook/blockfacebook.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '960853903582db4b3056c12-79870369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582db4b306d0d0_51305427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582db4b306d0d0_51305427')) {function content_582db4b306d0d0_51305427($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" 
        	data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" 
            data-height="240" 
            data-colorscheme="light" 
            data-show-faces="true" 
            data-header="false" 
            data-stream="false" 
            data-show-border="false"
            connections="10">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
