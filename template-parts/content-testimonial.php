<?php
function get_testimonial(){
	ob_start();
?>
	<section id="testimonial" class="section_padding">
       <div class="testimonial_area">
        <div class="container">
            <div class="row">
 				<div class="col-md-12">
					<h2 class="text-center">মন্তব্য</h2>
				</div>              
                <div class="col-md-12">
                    <div class="owl-carousel test-slides" id="testimonial-carousel">
					<?php 
						$args= array(
							'post_type'=>'testimonial',
							'meta_key'   => 'jobs',
						);
						$testi_query = new WP_Query($args);
						
					?>
					<?php while($testi_query->have_posts()):
						$testi_query->the_post();
						$job_title = get_post_meta(get_the_ID(), 'jobs', true);
						
					?>	
                        <div class="item">
                            <div class="single-testimonial">
                                <div class="image-area">
                                    <img src="<?php echo get_the_post_thumbnail_url();?>">
                                </div>
                                <div class="text-area">
                                    <h3><?php the_title();?><span><?php echo esc_html($job_title);?></span></h3>
									
                                    <?php the_content();?>
                                </div>
                            </div>
                        </div>
						<?php 
						endwhile;
					?>
					<?php wp_reset_postdata();?>
                    </div>
                </div>
            </div>        
        </div>
        </div>
    </section>
	<?php 
		return ob_get_clean();
	}
	?>	
	<?php add_shortcode('testimonial','get_testimonial');?>