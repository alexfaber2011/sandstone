<?php get_header(); ?>
			<div class="container">
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
						foreach($posts as $post){
							$tags = wp_get_post_tags($post->ID);
							$index = intval($tags[0]->name);
							$output_array[$index] = $post;
						}
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
						foreach($posts as $post){
							$output_array[intval(wp_get_post_tags($post->ID)[0]->name)] = $post;
						}
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

<?php get_footer(); ?>