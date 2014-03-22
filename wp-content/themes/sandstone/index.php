<?php get_header(); ?>
			<div class="container">
				<!-- <div class="row">
					<div class="col-lg-12">
						<div id="slideshow-container">
							<div id="images">

							</div> images
							 <div id="info" class="text-center">
								<h1>Location</h1>
								<div id="map-container">
									
									<div class="row">
										<div id="map" class="col-lg-8">

										</div> <!-- map
										<div id="map-info" class="col-lg-4">

										</div><!-- map-info
									</div>
								</div><!-- map-container
							</div> <!-- info
						</div> <!-- slideshow-container
					</div> 
				</div> -->
				<div id="content" class="clearfix row">
					
					<div id="main" class="col-sm-12 clearfix" role="main">

						<?php query_posts( array ( 'category_name' => 'Garden Center', 'posts_per_page' => 3 ) ); ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php
								$garden_object = get_post(the_ID);
							?>
							<h1><?php the_title(); ?></h1>
							<h1>Title: <?php echo the_ID + the_title + $garden_object->post_title; ?></h1>
						
						
						<?php endwhile; ?>	
				
					</div> <!-- end #main -->
	    
					<?php //get_sidebar(); // sidebar 1 ?>
	    
				</div> <!-- end #content -->
			</div><!-- container -->

<?php get_footer(); ?>