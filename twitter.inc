			{exp:twitter_timeline screen_name="madebyhand" limit="3" create_links="user_mentions|hashtags|urls" twitter_refresh="20" use_stale_cache="yes"}
				<li>
				    <p class="status">{text}</p>
				    <span class="date">{created_at format="%d %F"}</span>
				</li>
			{/exp:twitter_timeline}