<?php /*%%SmartyHeaderCode:1377589417579549d927d854-48642088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb133095bde69f0e824656e6ac8690d1fd8223e0' => 
    array (
      0 => '/home/testing.4tiempos.cl/public_html/themes/theme1003/modules/blocksearch/blocksearch-top.tpl',
      1 => 1469401534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1377589417579549d927d854-48642088',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_579585a89c5136_62810027',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579585a89c5136_62810027')) {function content_579585a89c5136_62810027($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top">
	<form id="searchbox" method="get" action="http://testing.4tiempos.cl/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Buscar</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
