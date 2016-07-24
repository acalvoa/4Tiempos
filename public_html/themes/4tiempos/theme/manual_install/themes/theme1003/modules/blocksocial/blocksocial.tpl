<section id="social_block" class="col-xs-4">
	<h4>{l s='Follow us' mod='blocksocial'}</h4>
	<ul>
		{if $facebook_url != ''}
			<li class="facebook">
				<a target="_blank" href="{$facebook_url|escape:html:'UTF-8'}" title="{l s='Facebook' mod='blocksocial'}">
					<span>{l s='Facebook' mod='blocksocial'}</span>
				</a>
			</li>
		{/if}
		{if $twitter_url != ''}
			<li class="twitter">
				<a target="_blank" href="{$twitter_url|escape:html:'UTF-8'}" title="{l s='Twitter' mod='blocksocial'}">
					<span>{l s='Twitter' mod='blocksocial'}</span>
				</a>
			</li>
		{/if}
		{if $rss_url != ''}
			<li class="rss">
				<a target="_blank" href="{$rss_url|escape:html:'UTF-8'}" title="{l s='RSS' mod='blocksocial'}">
					<span>{l s='RSS' mod='blocksocial'}</span>
				</a>
			</li>
		{/if}
        {if $youtube_url != ''}
        	<li class="youtube">
        		<a href="{$youtube_url|escape:html:'UTF-8'}" title="{l s='Youtube' mod='blocksocial'}">
        			<span>{l s='Youtube' mod='blocksocial'}</span>
        		</a>
        	</li>
        {/if}
        {if $google_plus_url != ''}
        	<li class="google-plus">
        		<a href="{$google_plus_url|escape:html:'UTF-8'}" title="{l s='Google Plus' mod='blocksocial'}">
        			<span>{l s='Google Plus' mod='blocksocial'}</span>
        		</a>
        	</li>
        {/if}
        {if $pinterest_url != ''}
        	<li class="pinterest">
        		<a href="{$pinterest_url|escape:html:'UTF-8'}" title="{l s='Pinterest' mod='blocksocial'}">
        			<span>{l s='Pinterest' mod='blocksocial'}</span>
        		</a>
        	</li>
        {/if}
	</ul>
</section>

