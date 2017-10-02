<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 10:43:12
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1349392325582db3f06a4923-94959963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c26c57d16f0c4a6f46b9c2e69fbd22e0849d35fe' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1349392325582db3f06a4923-94959963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582db3f06e0fb8_41579604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582db3f06e0fb8_41579604')) {function content_582db3f06e0fb8_41579604($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/home/testing.4tiempos.cl/public_html/tools/smarty/plugins/function.mailto.php';
?><!-- MODULE Block contact infos -->
<section id="block_contact_infos" class="footer-block col-xs-12 col-sm-4">
	<div>
        <h4><?php echo smartyTranslate(array('s'=>'Store Information','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
        <ul class="toggle-footer">
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!='') {?>
            	<li>
            		<i class="icon-map-marker"></i>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>

                    	<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?>
                        	, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!='') {?>
            	<li>
            		<i class="icon-phone"></i>
                    <?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!='') {?>
            	<li>
            		<i class="icon-envelope-alt"></i>
                    <?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
        </ul>
    </div>
</section>
<!-- /MODULE Block contact infos -->
<?php }} ?>
