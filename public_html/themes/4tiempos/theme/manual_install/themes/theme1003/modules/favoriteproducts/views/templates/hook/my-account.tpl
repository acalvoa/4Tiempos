<li class="favoriteproducts">
	<a href="{$link->getModuleLink('favoriteproducts', 'account')|escape:'html':'UTF-8'}" title="{l s='My favorite products.' mod='favoriteproducts'}">
		{if !$in_footer}
			<i class="icon-heart-empty"></i>
			<span>{l s='My favorite products' mod='favoriteproducts'}</span>
		{else}
			{l s='My favorite products' mod='favoriteproducts'}
		{/if}
	</a>
</li>
