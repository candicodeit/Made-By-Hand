{embed="includes/document_head" entry_title="{exp:channel:entries channel="shoppe" limit="1"}{channel_title}{/exp:channel:entries}"}
	<div id="content" class="shoppe">
		<div id="head"> 
			{header_logo}
			<h2 class="title">Shoppe</h2> 
		</div><!--#head--> 
		
		<div class="shoppe-page">	 
		 	<ol class="shoppe-list">
				{exp:channel:entries channel="shoppe" orderby="date" sort="desc" limit="3" paginate="bottom"}
			 	<li class="shoppe-list-item">
			  		<img src="{item_img}" alt="{title}" />
			  		<div class="item-desc">
			  			<a href="{item_url}" class="buy">Buy</a><span class="price">${item_price}</span>
						{item_desc}
			  			
			  			<span class="date">{entry_date format="%d %F %Y"}</span>
			  		</div><!--.item-desc-->
		  		</li><!--.shoppe-list-item-->
				
				{if count == "3"}
				
					{paginate}
					<ol class="pagination">
						{pagination_links}
					</ol>
					{/paginate} 
				
				{/if}
				
				{/exp:channel:entries}

	  		</ol><!--.shoppe-list-->
		</div><!-- .shoppe-page -->
		
	</div><!--#content-->
  
</div><!--#wrapper (opens in includes/document_head)--> 
{footer}