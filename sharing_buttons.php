<?php 
function bonuin_sharing_buttons() {
	global $post;
	
	if(is_singular('vehicles')){
	
		// Get current page URL 
		$bonuinShareUrl = get_permalink();
		
		// Get current page title
		$bonuinShareTitle = str_replace( ' ', '%20', get_the_title());
		
		// Get Post Thumbnail for pinterest
		
		$bonuinShareThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'bonuin_single_vehicle_slider_flex' );
		
		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$bonuinShareTitle.'&amp;url='.$bonuinShareUrl.';';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$bonuinShareUrl;
		$googleURL = 'https://plus.google.com/share?url='.$bonuinShareUrl;
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$bonuinShareUrl.'&amp;media='.$bonuinShareThumbnail[0].'&amp;description='.
		$bonuinShareTitle;
 
		
		
		?>
		
		
		
		<div class="bonuin-social">
			<div class="title_seperator">
				<h3 class="underline"><?php _e('Share this vehicle','bonuin_theme');?></h3>
			</div>
	
			<a class="btn btn_box social_btn bonuin-twitter" href="<?php echo $twitterURL ;?>" target="_blank">	
				<i class="tomplabs-twitter-2"></i> 
				<span>Twitter</span>
			</a>
			<a href="https://www.facebook.com/dialog/feed?app_id=184683071273&link=<?php echo $bonuinShareUrl;?>&picture=<?php echo $bonuinShareThumbnail[0];?>&name=<?php echo $bonuinShareTitle;?>&caption=%20&description=description&redirect_uri=http%3A%2F%2Fwww.facebook.com%2F" class="btn btn_box social_btn bonuin-facebook" target="_blank">
				<i class="tomplabs-facebook-1"></i> 
				<span>Facebook</span>
			</a>
			<a class="btn btn_box social_btn bonuin-googleplus" href="<?php echo $googleURL;?>" target="_blank">
				<i class="tomplabs-google"></i> 
				<span>Google+</span>
			</a>
			<a class="btn btn_box social_btn bonuin-pinterest" href="<?php echo$pinterestURL;?>" target="_blank">
				<i class="tomplabs-pinterest-2"></i> 
				<span>Pin It</span>
			</a>
			
		</div>
		
		<?php 
	}
};
add_action( 'bonuin_sharing_buttons', 'bonuin_sharing_buttons');

?>