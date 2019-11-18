<?php
function get_about(){
	ob_start();
?>
	<section id="about" class="section_padding">
        <div class="container-fluid">
            <div class="row">
			<?php 
			$args = array(
				'post_type'=>'post',
				'posts_per_page'=>1
			);
			?>
			<?php 
				$abt_query= new WP_Query($args);
				while($abt_query->have_posts()):
					$abt_query->the_post();
			?>
				<div class="col-md-12">
			        
					<h2 class="text-center"><?php the_title();?></h2>
				</div>				
                <div class="row">
                    <div class="col-md-6">
                       
			        <div class="about_single">
			            <img alt="Bootstrap Image Preview" src="<?php echo get_the_post_thumbnail_url();?>">
			        </div>
                        
                    </div>
                    <div class="col-md-6">
                       
			        <div class="about_single">
						<?php the_content();?>
			        </div>
                        
                    </div>
                </div>
				<?php endwhile;?>
				<?php wp_reset_postdata();?>
			</div>            
        </div>
    </section>
	<?php 
		return ob_get_clean();
	}
	?>	
	<?php add_shortcode('about','get_about');?>