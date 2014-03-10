		<div class='scrollToTopButton'>
			<input type='button' value="Top" id="toTop">
		</div>

		<div class='fullspan footer1'>
			<footer class='container_12' id='footer-1'>
				<div class='grid_3 footer_left'>

					<?php if( dynamic_sidebar( 'footer_left' ) ): ?>

					<?php else: ?>	

						<a href='<?php bloginfo('url'); ?>'><img src="<?php bloginfo('template_directory'); ?>/img/logo-reverse.png" id='footer-logo'></a>

					<?php endif; ?>

				</div>

				<div class='grid_6 footer_middle'>
					<?php if( dynamic_sidebar( 'footer_middle' ) ): ?>

					<?php else: ?>	
						<p class='social-icons'>
							<a href="https://www.facebook.com/pages/Mount-Annan-Christian-College/89294472495" target="_new">&#xe227</a> 	<!-- FACEBOOK -->
							<a href="https://twitter.com/search?q=%23maccchat&src=typd" target='_new'>&#xe286</a>	<!-- TWITTER -->
							<a href='mailto:admin@macc.nsw.edu.au'>&#xe224</a>		<!-- EMAIL -->
						</p>
					<?php endif; ?>
				</div>

				<div class='grid_3 footer_right'>
					<?php if( dynamic_sidebar( 'footer_right' ) ): ?>

					<?php else: ?>	
						<form>
							<input type='search' name='site-search' class'searchfield' placeholder='Search'>
							<input type="submit" value="Go" class'gobutton'>
						</form>
					<?php endif; ?>
				</div>
			</footer>
		</div>

		<div class='fullspan footer2 copyright'>
			<footer class='container_12' id='footer-2'>
				<span>
					<?php
						echo('&copy; ');
						echo(date('Y '));
						echo(bloginfo(name) . '. All Rights Reserved.');
					?>
				</span>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>