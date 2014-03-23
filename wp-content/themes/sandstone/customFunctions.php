<?php
	function orderByTag($posts){
		foreach($posts as $post){
			//Tried to simplify this, but php 5.3 (on heroku) didn't like it.  sad.
			$tags = wp_get_post_tags($post->ID);
			$index = intval($tags[0]->name);
			$output_array[$index] = $post;
		}
		return $output_array;
	}
?>