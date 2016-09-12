<?php /* Smarty version Smarty-3.1.19, created on 2016-07-26 17:21:04
         compiled from "/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17689507005797d440585884-49864950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '939d59fc9f8871e08109a5e6df6597241a5950dd' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1469420544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17689507005797d440585884-49864950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5797d4405a9714_51166939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5797d4405a9714_51166939')) {function content_5797d4405a9714_51166939($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
<div id="block_top_menu_indent">
    <div class="topMenu">
        <div class="topMenu_inner">
    	   <div id="block_top_menu" class="sf-contener clearfix col-lg-12">
        		<div class="cat-title"><?php echo smartyTranslate(array('s'=>"Categories",'mod'=>"blocktopmenu"),$_smarty_tpl);?>
</div>
                <ul class="sf-menu clearfix menu-content nonborderbox">
                    <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
                        <li class="sf-search noBack" style="float:right">
                            <form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
                                <p>
                                    <input type="hidden" name="controller" value="search" />
                                    <input type="hidden" value="position" name="orderby"/>
                                    <input type="hidden" value="desc" name="orderway"/>
                                    <input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                                </p>
                            </form>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
