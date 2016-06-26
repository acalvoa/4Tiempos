<?php /* Smarty version Smarty-3.1.19, created on 2016-06-14 22:47:08
         compiled from "/home/testing.4tiempos.cl/public_html/modules/webpaykcc/views/templates/admin/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5699205445760c1acadfef5-55493842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee0968bbd667a84940307280c446667c8c2299c5' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/modules/webpaykcc/views/templates/admin/config.tpl',
      1 => 1465958601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5699205445760c1acadfef5-55493842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_header' => 0,
    'version' => 0,
    'base_path' => 0,
    'validation_url' => 0,
    'post_url' => 0,
    'errors' => 0,
    'data_kccPath' => 0,
    'cgi_path' => 0,
    'data_kccURL' => 0,
    'cgi_url' => 0,
    'data_kccLogPath' => 0,
    'log_path' => 0,
    'data_kccTocPage' => 0,
    'toc_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5760c1acba54f9_95740411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5760c1acba54f9_95740411')) {function content_5760c1acba54f9_95740411($_smarty_tpl) {?><img src="<?php echo $_smarty_tpl->tpl_vars['img_header']->value;?>
"/>

<h2><?php echo smartyTranslate(array('s'=>'Payment using Webpay KCC','mod'=>'webpaykcc'),$_smarty_tpl);?>
</h2>

<fieldset>
    <legend><img src="../img/admin/warning.gif"/><?php echo smartyTranslate(array('s'=>'Information','mod'=>'webpaykcc'),$_smarty_tpl);?>
</legend>
    <div class="margin-form">
        <p>
            <?php echo smartyTranslate(array('s'=>'Module version','mod'=>'webpaykcc'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
 
        </p>
    
        <p>
            <?php echo smartyTranslate(array('s'=>'Base Path','mod'=>'webpaykcc'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['base_path']->value;?>
 
        </p>
        
        <p>
            <?php echo smartyTranslate(array('s'=>'Validation Page','mod'=>'webpaykcc'),$_smarty_tpl);?>
 (HTML_TR_NORMAL): <?php echo $_smarty_tpl->tpl_vars['validation_url']->value;?>

        </p>
    </div>
</fieldset>

<form action="<?php echo $_smarty_tpl->tpl_vars['post_url']->value;?>
" method="post" style="clear: both; margin-top: 10px;">
    <fieldset>
        <legend><img src="../img/admin/contact.gif"/><?php echo smartyTranslate(array('s'=>'Settings','mod'=>'webpaykcc'),$_smarty_tpl);?>
</legend>
        
        <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['kccPath'])) {?>
            <div class="error">
                <p><?php echo $_smarty_tpl->tpl_vars['errors']->value['kccPath'];?>
</p>
            </div>
        <?php }?>



        <label for="kccPath"><?php echo smartyTranslate(array('s'=>'KCC Path','mod'=>'webpaykcc'),$_smarty_tpl);?>
</label>

        <div class="margin-form"><input type="text" size="50" id="kccPath" name="kccPath"
                                        value="<?php echo $_smarty_tpl->tpl_vars['data_kccPath']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['cgi_path']->value;?>
"/></div>
        
        <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['kccURL'])) {?>
            <div class="error">
                <p><?php echo $_smarty_tpl->tpl_vars['errors']->value['kccURL'];?>
</p>
            </div>
        <?php }?>


        <label for="kccURL"><?php echo smartyTranslate(array('s'=>'KCC URL','mod'=>'webpaykcc'),$_smarty_tpl);?>
</label>

        <div class="margin-form"><input type="text" size="50" name="kccURL"
                                        id="kccURL" value="<?php echo $_smarty_tpl->tpl_vars['data_kccURL']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['cgi_url']->value;?>
"/></div>

        <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['kccLogPath'])) {?>
            <div class="error">
                <p><?php echo $_smarty_tpl->tpl_vars['errors']->value['kccLogPath'];?>
</p>
            </div>
        <?php }?>

        <label for="kccLogPath"><?php echo smartyTranslate(array('s'=>'KCC Log Path','mod'=>'webpaykcc'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <input type="text" size="50" name="kccLogPath" id="kccLogPath" value="<?php echo $_smarty_tpl->tpl_vars['data_kccLogPath']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['log_path']->value;?>
"/>
        </div>


        <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['kccTocPage'])) {?>
            <div class="error">
                <p><?php echo $_smarty_tpl->tpl_vars['errors']->value['kccTocPage'];?>
</p>
            </div>
        <?php }?>

        <label for="kccTocPage"><?php echo smartyTranslate(array('s'=>'Terms and Conditions Page URL','mod'=>'webpaykcc'),$_smarty_tpl);?>
</label>

        <div class="margin-form">
            <input type="text" size="50" name="kccTocPage" id="kccTocPage" value="<?php echo $_smarty_tpl->tpl_vars['data_kccTocPage']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['toc_url']->value;?>
"/>
        </div>


        <center><input type="submit" name="webpaykcc_updateSettings" value="<?php echo smartyTranslate(array('s'=>'Save Settings','mod'=>'webpaykcc'),$_smarty_tpl);?>
"
                       class="button" style="cursor: pointer; display:"/></center>
    </fieldset>
</form><?php }} ?>
