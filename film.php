{embed="includes/document_head"}
  <div id="content" class="film">
	  {exp:channel:entries channel="film" limit="3" status="Homepage Feature|Coming Soon|open"}
	  <div id="head"> 
	    {header_logo} 
	    <h2 class="title"><span>{film_num}</span>{title}</h2> 
	  </div><!--#head--> 
	 
	  <div class="film-container"> 
	    <div class="player"> 
	      <!--[if lt IE 9]>
			<img src="{film_img}" class="film-fallback" alt="{film_title}" />
		<![endif]-->
		<iframe src="{film_url}" id="vimeo" width="1200" height="675" frameborder="0"></iframe>
	    </div> 
	  </div><!--.film--> 
	  
	  <div class="film-desc"> 
	    {film_desc}
	    
	    <dl>
		<dt>{credit_1}</dt>
	    		<dd>{if creditor_url_1}<a href="{creditor_url_1}">{creditor_1}</a>
	    			{if:else}{creditor_1}{/if}
	    		</dd>
	    	<dt>{credit_2}</dt>
	    		<dd>{if creditor_url_2}<a href="{creditor_url_2}">{creditor_2}</a>
	    			{if:else}{creditor_2}{/if}
	    		</dd>
	    	<dt>{credit_3}</dt>
	    		<dd>{if creditor_url_3}<a href="{creditor_url_3">{creditor_3}</a>
	    			{if:else}{creditor_3}{/if}
		    	</dd>
	    	<dt>{credit_4}</dt>
	    		<dd>{if creditor_url_4}<a href="{creditor_url_4">{creditor_4}</a>
	    			{if:else}{creditor_4}{/if}
		    	</dd>
	    	<dt>{credit_5}</dt>
	    		<dd>{if creditor_url_5}<a href="{creditor_url_5">{creditor_5}</a>
	    			{if:else}{creditor_5}{/if}
	    		</dd>
	    	<dt>{credit_6}</dt>
	    		<dd>{if creditor_url_6}<a href="{creditor_url_6">{creditor_6}</a>
	    			{if:else}{creditor_6}{/if}
		    	</dd>
	    	<dt>{credit_7}</dt>
	    		<dd>{if creditor_url_7}<a href="{creditor_url_7}">{creditor_7}</a>
	    			{if:else}{creditor_7}{/if}
	    		</dd>
	    	<dt>{credit_8}</dt>
	    		<dd>{if creditor_url_8}<a href="{creditor_url_8">{creditor_8}</a>
	    			{if:else}{creditor_8}{/if}
		    	</dd>
	    	<dt>{credit_9}</dt>
	    		<dd>{if creditor_url_9}<a href="{creditor_url_9">{creditor_9}</a>
	    			{if:else}{creditor_9}{/if}
	    		</dd>
		<dt>{credit_10}</dt>
	    		<dd>{if creditor_url_10}<a href="{creditor_url_10">{creditor_10}</a>
	    			{if:else}{creditor_10}{/if}
		    	</dd>
	    	<dt>{credit_11}</dt>
	    		<dd>{if creditor_url_11}<a href="{creditor_url_11">{creditor_11}</a>
	    			{if:else}{creditor_11}{/if}
	    		</dd>
	    	<dt>{credit_12}</dt>
	    		<dd>{if creditor_url_12}<a href="{creditor_url_12">{creditor_12}</a>
	    			{if:else}{creditor_12}{/if}
		    	</dd>
	    	<dt>{credit_13}</dt>
	    		<dd>{if creditor_url_13}<a href="{creditor_url_13">{creditor_13}</a>
	    			{if:else}{creditor_13}{/if}
		    	</dd>
	    	<dt>{credit_14}</dt>
	    		<dd>{if creditor_url_14}<a href="{creditor_url_14">{creditor_14}</a>
	    			{if:else}{creditor_14}{/if}
	    		</dd>
	    	<dt>{credit_15}</dt>
	    		<dd>{if creditor_url_15}<a href="{creditor_url_15">{creditor_15}</a>
	    			{if:else}{creditor_15}{/if}
	    		</dd>
	    </dl>
	  </div><!--.film-desc-->

	   <div class="film-list">
		  <h2 class="more-series"><img src="{site_url}imgs/more-series.jpg" alt="More From the Series" /></h2>
		  <ol>		
			 {exp:nearby_entries:next this_channel="film" limit="1" this_entryid="{entry_id}" status="Homepage Feature|Coming Soon|open" show_future_entries="yes"}
			  <li>
				{if status == "Coming Soon"}
			  		<div class="film-list-item">
			  			<h2 class="title"><span>Coming Soon</span>{nearby:title}</h2>
				  		<img src="{nearby:film_img}" alt="{nearby:title}" />
				  		<div class="film-desc"> 
				  			<p>{nearby:film_desc}</p>
				  		</div>
			  		</div>
				{if:else}
				<a href="{nearby:url_title}">
					<div class="film-list-item">
			  			<h2 class="title"><span>{nearby:film_num}</span>{nearby:title}</h2>
				  		<img src="{nearby:film_img}" alt="{nearby:title}" />
				  		<div class="film-desc"> 
				  			<p>{nearby:film_desc}</p>
				  		</div>
			  		</div>
				</a>
				{/if}
			  </li>
			  {/exp:nearby_entries:next}
			  
			  {exp:nearby_entries:prev this_channel="film" limit="1" this_entryid="{entry_id}" status="Homepage Feature|Coming Soon|open" show_future_entries="yes"}
			  <li><a href="{path=/}film/{nearby:url_title}">
			  		<div class="film-list-item">
			  			<h2 class="title"><span>{nearby:film_num}</span>{nearby:title}</h2>
				  		<img src="{nearby:film_img}" alt="{nearby:title}" />
				  		<div class="film-desc">
				  			<p>{nearby:film_desc}</p>
				  		</div>
			  		</div>
			  	</a>
			  </li>
			  {/exp:nearby_entries:prev}

		  </ol>
	  </div><!--.film-list--> 
	  {/exp:channel:entries}
  </div><!-- #content -->
  
</div><!--#wrapper (opens in includes/document_head)--> 
{footer}