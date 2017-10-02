<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 10:43:12
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blocknewsletter/blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204675819582db3f077f6d0-10900663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd43182d92eed175c36ab8941244cb08814cc1a8e' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blocknewsletter/blocknewsletter.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204675819582db3f077f6d0-10900663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'msg' => 0,
    'nw_error' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582db3f07d2e74_34860440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582db3f07d2e74_34860440')) {function content_582db3f07d2e74_34860440($_smarty_tpl) {?><!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block col-xs-4">
	<h4><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
			<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }?><?php }?>" >
				<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value) {?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Enter your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" />
                <button type="submit" name="submitNewsletter" class="btn btn-default button button-small">
                    <span><?php echo smartyTranslate(array('s'=>'Ok','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</span>
                </button>
				<input type="hidden" name="action" value="0" />
			</div>
		</form>
	</div>
</div>
<!-- /Block Newsletter module-->
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('msg_newsl'=>addcslashes($_smarty_tpl->tpl_vars['msg']->value,'\'')),$_smarty_tpl);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['nw_error']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('nw_error'=>$_smarty_tpl->tpl_vars['nw_error']->value),$_smarty_tpl);?>
<?php }?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'placeholder_blocknewsletter')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'placeholder_blocknewsletter'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Enter your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'placeholder_blocknewsletter'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'alert_blocknewsletter')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'alert_blocknewsletter'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Newsletter : %1$s','sprintf'=>$_smarty_tpl->tpl_vars['msg']->value,'js'=>1,'mod'=>"blocknewsletter"),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'alert_blocknewsletter'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
<div class="clearfix"></div><?php }} ?>
