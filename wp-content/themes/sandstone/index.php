<?php get_header(); ?>
<?php include('customFunctions.php'); ?>
			<div class="container">
				<div class="row">
					<div id="slideshow" class="carousel slide col-md-8 text-center" data-ride="carousel">
						<?php
							$output_array = array();
							$args = array(
								'posts_per_page' => -1,
								'category' => 10,
							);
							$posts = get_posts($args);
							$output_array = orderByTag($posts);

						?>
					  <!-- Indicators - begin creating the number of carousel-indicators-->
					  <ol class="carousel-indicators">
					  	<?php for($i = 0; $i < count($posts); $i++) : ?>
					    	<li data-target="#slideshow" data-slide-to="<?php echo $i ?>" <?php if($i == 0) : ?>class="active"><?php endif ?></li>
						<?php endfor ?>
					  </ol>
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
						  <?php for($i = 1; $i <= count($output_array); $i++) : ?>
						  	<div class="item <?php if($i == 1) echo 'active' ?>">
						      	<?php
									echo $output_array[$i]->post_content;
								?>
						      <!-- <div class="carousel-caption"> -->
						        <?php //echo $output_array[$i]->post_title; ?>
						      <!-- </div> -->
						    </div>
						  <?php endfor ?>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#slideshow" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#slideshow" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					</div>
					<div class="col-md-4 text-center">
						<h2>Location</h2>
						<div id="location">
							<div id="map">
								<!-- - -->
							</div>
							<p class="bold">Sandstone Nursery</p>
							<p>
								1815 East St.<br />
								Mineral Point, WI 55555
							</p>
							<div id="map-this">
								<!-- - -->
							</div>
						</div>
						<h2>Hours</h2>
						<h3>
							M-F 8am-5pm<br />
							Sat 10am-4pm<br />
							Sun Closed<br />
						</h3>
						<h3><span class="bold">Phone&nbsp;&nbsp;&nbsp;</span>(123) 456-7890</h3>
					</div>
				</div> <!-- row -->
				<div class="row">
					<h1 class="text-center col-xs-12">Garden Center</h1>
				</div>
				<div id="content" class="clearfix row">
					<?php 
						$output_array = array();
						$args = array(
							'posts_per_page' => -1,
							'category' => 3,
						);
						$posts = get_posts($args);
						$output_array = orderByTag($posts);
					?>
					<?php for($i = 1; $i <= count($output_array) && $i < 5; $i++) : ?>
						<div class="garden-center-block text-center col-lg-3 col-md-6">
							<?php
								$image = get_the_post_thumbnail($output_array[$i]->ID);
								if($image != ''){
									echo $image;
								}
							?>
							<h2><?php echo $output_array[$i]->post_title; ?></h2>
							<p>
								<?php echo $output_array[$i]->post_content; ?>
							</p>
						</div>
					<?php endfor ?>
	   			</div> <!-- end #content -->
	   			<div class="row">
	   				<h1 class="text-center col-xs-12">Design and Build</h1>
	   			</div>
	   			<div class="clearfix row">
					<?php 
						$output_array = array();
						$args = array(
							'posts_per_page' => -1,
							'category' => 4,
						);
						$posts = get_posts($args);
						$output_array = orderByTag($posts);
					?>
					<?php for($i = 1; $i <= count($output_array) && $i < 4; $i++) : ?>
						<div class="garden-center-block text-center col-md-4">
							<?php
								$image = get_the_post_thumbnail($output_array[$i]->ID);
								if($image != ''){
									echo $image;
								}
							?>
							<h2><?php echo $output_array[$i]->post_title; ?></h2>
							<p>
								<?php echo $output_array[$i]->post_content; ?>
							</p>
						</div>
					<?php endfor ?>
	   			</div> <!-- end #content -->
			</div><!-- container -->
			<script>
				$('.carousel').carousel({
				  interval: 2000
				})
			</script>

<?php get_footer(); ?>