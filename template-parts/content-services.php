<?php
function get_services(){
	ob_start();
?>	
	<section id="services" class="section_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">আমাদের সেবা সমূহ</h2>
                </div> 
				<?php 
					$args = array(
						'post_type'=>'services',
						'posts_per_page'=>4,
						'order' => 'ASC',
					);
				?>
				<?php 
				
				$service_query= new WP_Query($args);
				while($service_query->have_posts()):
					$service_query->the_post();
					
					$service_charge = get_post_meta(get_the_ID(), 'service_charge', true);
					$service_duration = get_post_meta(get_the_ID(), 'service_duration', true);
					$buy_now_link = get_post_meta(get_the_ID(), 'buy_now_link', true);
					$service_lists = get_post_meta(get_the_ID(), 'service_list', false);
				?>
                <div class="col-md-3">
                    <div class="single_service">
                        <div class="service_title">
                            <h2><?php the_title();?></h2>
                        </div>
                        <div class="service_content">
						
                              <h4><?php echo esc_html($service_charge);?>/-<br><?php echo esc_html($service_duration);?> </h4>
                           <div class="pro_desc">
								<ul>
								<?php foreach($service_lists as $service_list){ ?>
									<li><?php echo $service_list;?></li>
								<?php }?>
									
                               </ul>
									
                            
                           </div>
                           <div class="btn"><a class="pro_buy" href="https://mamu756807.supersite2.srsportal.com/" target="_blank">Buy Now</a></div>
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
	<?php add_shortcode('services','get_services');?>