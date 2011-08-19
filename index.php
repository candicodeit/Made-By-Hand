{embed="includes/document_head" entry_title="{exp:channel:entries channel="site"}{title}{/exp:channel:entries}"}
  <div id="content" class="home">
	{exp:channel:entries channel="film" limit="1" status="Homepage Feature"}
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
	    <div class="film-desc"> 
	      {film_desc}
	      <a href="{title_permalink="film"}" class="credits">credits</a>
	    </div><!--.film-desc-->
	</div><!--.film--> 
	{/exp:channel:entries}	

	<div class="film-list">
		  <h2 class="more-series"><img src="{site_url}imgs/more-series.jpg" alt="More From the Series" /></h2>
		  <ol>
			{exp:channel:entries channel="film" limit="1" status="Coming Soon" show_future_entries="yes"}
			  <li class="coming-soon">
			  	<div class="film-list-item">
			  		<h2 class="title"><span>{film_num}</span>{title}</h2>
				 		<img src="{film_img}" alt="{title}" />
				  		<div class="film-desc"> 
				  			{film_desc}
				  		</div><!--.film-desc-->
			  	</div><!--.film-list-item-->
			  </li>
			 {/exp:channel:entries}
			 {exp:channel:entries channel="film" orderby="date" sort="asc"}	 
			  <li>
				<a href="{title_permalink="film"}">
			  		<div class="film-list-item">
			  			<h2 class="title"><span>{film_num}</span>{title}</h2>
				  		<img src="{film_img}" alt="{title}" />
				  		<div class="film-desc">
				  			{film_desc}
				  		</div><!--.film-desc-->
			  		</div><!--.film-list-item-->
			  	</a>
			  </li>
			  {/exp:channel:entries}
		  </ol>
	  </div><!--.film-list-->
  </div><!--#content-->

  
</div><!--#wrapper (opens in includes/document_head)--> 
{footer}