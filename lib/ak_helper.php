<?php 

namespace Roots\Sage\Ak;


class helper
{
	
	public static function get_post_bg( $post_id )
	{
		if (!is_singular()){
			return;
		}

		$class = $style = '';
				
		$img = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'full');
		if (isset($img[0]))
		{
			$class = 'has-image';
			$style = 'background-image:url('. $img[0] .');';
		}

		return [$class, $style];
	}
}
