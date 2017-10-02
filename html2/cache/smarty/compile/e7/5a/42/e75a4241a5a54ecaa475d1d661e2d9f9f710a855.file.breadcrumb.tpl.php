<?php /* Smarty version Smarty-3.1.19, created on 2016-11-17 10:43:13
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280944351582db3f157bb85-24514212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e75a4241a5a54ecaa475d1d661e2d9f9f710a855' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/breadcrumb.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280944351582db3f157bb85-24514212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582db3f15ce9d5_88171152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582db3f15ce9d5_88171152')) {function content_582db3f15ce9d5_88171152($_smarty_tpl) {?><!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])) {?>
	<?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?>
<?php }?>

<div class="breadcrumb clearfix">
	<a class="home" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
">
    	<i class="icon-home"></i>
    </a>
	<?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value) {?>
		<span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1) {?>style="display:none;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		<?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')) {?>
			<span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['path']->value;?>

		<?php }?>
	<?php }?>
</div>

<?php if (isset($_GET['search_query'])&&isset($_GET['results'])&&$_GET['results']>1&&isset($_SERVER['HTTP_REFERER'])) {?>
    <div class="pull-right">
        <strong>
            <a href="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER'], ENT_QUOTES, 'UTF-8', true);?>
" name="back" title="">
                <i class="icon-chevron-left left"></i> 
                <?php echo smartyTranslate(array('s'=>'Back to Search results for "%s" (%d other results)','sprintf'=>array($_GET['search_query'],$_GET['results'])),$_smarty_tpl);?>

            </a>
        </strong>
    </div>
<?php }?>
<!-- /Breadcrumb --><?php }} ?>
