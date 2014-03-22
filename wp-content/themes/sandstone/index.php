<?php get_header(); ?>
			<div class="container">
				<div class="row">
					<h1 class="text-center col-xs-12">Garden Center</h1>
				</div>
				<div id="content" class="clearfix row">
					<?php 
						$args = array(
							'category' => 3,
						);
						$posts = get_posts($args);
						var_dump($posts);
					?>
					<div class="garden-center-block text-center col-lg-3 col-md-4">
						<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Wiktionary_small.svg/350px-Wiktionary_small.svg.png" height="180px" alt="oops" />
						<h2>Annuals</h2>
						<p>
							lorem ipsum dolar sit amet. blura mira sola des in caten.
						</p>
					</div>
					<div class="garden-center-block text-center col-lg-3 col-md-4">
						<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Wiktionary_small.svg/350px-Wiktionary_small.svg.png" height="180px" alt="oops" />
						<h2>Annuals</h2>
						<p>
							lorem ipsum dolar sit amet. blura mira sola des in caten.
						</p>
					</div>
					<div class="garden-center-block text-center col-lg-3 col-md-4">
						<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Wiktionary_small.svg/350px-Wiktionary_small.svg.png" height="180px" alt="oops" />
						<h2>Annuals</h2>
						<p>
							lorem ipsum dolar sit amet. blura mira sola des in caten.
						</p>
					</div>
					<div class="garden-center-block text-center col-lg-3 col-md-4">
						<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Wiktionary_small.svg/350px-Wiktionary_small.svg.png" height="180px" alt="oops" />
						<h2>Annuals</h2>
						<p>
							lorem ipsum dolar sit amet. blura mira sola des in caten.
						</p>
					</div>
	   			</div> <!-- end #content -->
	   			<div class="row">
	   				<h1 class="text-center col-xs-12">Design and Build</h1>
	   			</div>
	   			<div class="row">
	   				<div class="text-center col-md-4">
	   					<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Wiktionary_small.svg/350px-Wiktionary_small.svg.png" height="210px" alt="oops" />
						<h2>Annuals</h2>
						<p>
							lorem ipsum dolar sit amet. blura mira sola des in caten.
						</p>
	   				</div>
	   				<div class="text-center col-md-4">
	   					<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Wiktionary_small.svg/350px-Wiktionary_small.svg.png" height="210px" alt="oops" />
						<h2>Annuals</h2>
						<p>
							lorem ipsum dolar sit amet. blura mira sola des in caten.
						</p>
	   				</div>
	   				<div class="text-center col-md-4">
	   					<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Wiktionary_small.svg/350px-Wiktionary_small.svg.png" height="210px" alt="oops" />
						<h2>Annuals</h2>
						<p>
							lorem ipsum dolar sit amet. blura mira sola des in caten.
						</p>
	   				</div>
	   			</div>
			</div><!-- container -->

<?php get_footer(); ?>