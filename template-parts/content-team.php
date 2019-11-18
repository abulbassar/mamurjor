<?php
function get_team(){
	ob_start();
?>
	<section id="team" class="section_padding">
        <div class="container">
            <div class="row bug">
 				<div class="col-md-12">
					<h2 class="text-center">আমাদের টিম</h2>
				</div>  
               <div class="row">   
				<?php 
						$args= array(
							'post_type'=>'team',
							'order' => 'ASC',
						);
						$team_query = new WP_Query($args);
						
					?>
			   <?php while($team_query->have_posts()):
						$team_query->the_post();
						$team_facebook_url = get_post_meta(get_the_ID(), 'team_facebook_url', true);
						$team_instagram_url = get_post_meta(get_the_ID(), 'team_instagram_url', true);
						$team_twitter_url = get_post_meta(get_the_ID(), 'team_twitter_url', true);
						//var_dump($team_facebook_url);
					?>	
                    <div class="col-md-4">
                        <div class="team_member">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                            <h3><?php the_title();?></h3>
                            <?php the_content();?>
                            <p>
                                <a href="https://www.facebook.com/mnua51" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/mnua51" target="_blank"><i class="fa fa-twitter"></i>
                                </a>                                
                                <a href="https://www.linkedin.com/in/md-niamatullah-atif-37823a124/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </p>
                        </div>
                    </div>  
					<?php 
						endwhile;
					?>
					<?php wp_reset_postdata();?>
					
                                
                </div>  
            </div>
        </div>
    </section>
	<?php 
		return ob_get_clean();
	}
	?>	
	<?php add_shortcode('team','get_team');?>