		<div class='scrollToTopButton'>
			<input type='button' value="Top" id="toTop">
		</div>

		<div class='fullspan footer1'>
			<footer class='container_12' id='footer-1'>
				<div class='grid_3'>
					<a href='<?php bloginfo('url'); ?>'><img src="<?php bloginfo('template_directory'); ?>/img/logo-reverse.png" id='footer-logo'></a>
				</div>

				<div class='grid_6'>
					<p class='social-icons'>
						<a href="#">circlefacebook</a> 	<!-- FACEBOOK -->
						<a href="#">circletwitter</a>	<!-- TWITTER -->
						<a href='#'>circleemail</a>		<!-- EMAIL -->
					</p>
				</div>

				<div class='grid_3 table'>
					<form>
						<input type='search' name='site-search' class'searchfield' placeholder='Search'>
						<input type="submit" value="Go" class'gobutton'>
					</form>
				</div>
			</footer>
		</div>

		<div class='fullspan footer2'>
			<footer class='container_12' id='footer-2'>
				<span>&copy; Copyright <?php echo(date('Y')); ?> Mount Annan Christian College. All Rights Reserved.</span>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>