<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</main><!-- / end page container, begun in the header -->

<!--<footer class="site-footer">-->
<!--	<div class="site-info container">-->
<!--		-->
<!--		<p>Birthed <a href="http://bckmn.com/naked-wordpress" rel="theme">Naked</a> -->
<!--			on <a href="http://wordpress.org" rel="generator">Wordpress</a> -->
<!--			by <a href="http://bckmn.com" rel="designer">Joshua Beckman</a>-->
<!--		</p>-->
<!--		-->
<!--	</div><!-- .site-info -->
<!--</footer><!-- #colophon .site-footer -->

<!-- Footer -->
<footer>
	<div class="rocket"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<ul class="list-inline text-center">
					<li class="list-inline-item">
						<a href="#">
		                  <span class="fa-stack fa-lg">
		                    <i class="fa fa-circle fa-stack-2x"></i>
		                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
		                  </span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
		                  <span class="fa-stack fa-lg">
		                    <i class="fa fa-circle fa-stack-2x"></i>
		                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
		                  </span>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
		                  <span class="fa-stack fa-lg">
		                    <i class="fa fa-circle fa-stack-2x"></i>
		                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
		                  </span>
						</a>
					</li>
				</ul>
				<p class="copyright text-muted">Copyright &copy; Chase Woodford 2017</p>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
