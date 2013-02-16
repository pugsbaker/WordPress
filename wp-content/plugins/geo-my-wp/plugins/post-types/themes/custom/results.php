<div class="row-fluid"> 
<?php 
/////// POSTS LOOP - DEFAULT /////////
$p_count = 1;
foreach ($wppl['posts_within'] as $single_result) {
	$post = get_post($single_result->post_id); 
	$single_result->post_permalink = get_permalink($post->ID); 
	$single_result->post_thumbnail = get_the_post_thumbnail($post->ID); 
  ?>
     <div class="wppl-single-result span4" >
	<?php wppl_thumbnail($wppl, $post); ?>
	<?php wppl_title($wppl, $post, $single_result);  ?>
        <?php wppl_taxonomies($wppl, $post); ?>
	<?php wppl_by_radius($wppl, $single_result, $returned_address); ?>
	<?php wppl_excerpt($wppl, $post); ?>
		
		
		
    	
    	<div class="wppl-info">
    			
            <?php wppl_address($post); ?>
            <?php wppl_additional_info($wppl, $post); ?>	
    		
    			
    		
    			<?php wppl_driving_distance($wppl, $single_result, $returned_address); ?>
    			
    			<?php wppl_directions($wppl, $single_result); ?>
    	</div> <!-- info -->
    </div> <!--  single- wrapper -->
      <?php if(($p_count % 3 == 0)) {  ?>
      
       </div> 
 <div class="row-fluid"> 
    
     <?php }; $mc++; $pc++; $p_count++; } ?>
</div> 
