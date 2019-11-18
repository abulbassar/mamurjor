<?php
function get_course(){
	ob_start();
?>
	<section id="course" class="section_padding">
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">
					আমাদের কোর্স সমূহ
					</h2>        
                </div>
            </div>
            <div class="row">
				<?php 
					$args= array(
						'post_type'=>'course',
						'posts_per_page'=>12,
						'order' => 'ASC',
					);
					$course_query = new WP_Query($args);
				?>
				<?php while($course_query->have_posts()):
						$course_query->the_post();
						$course_short_desc = get_post_meta(get_the_ID(), 'course_short_desc', true);
						$course_fee = get_post_meta(get_the_ID(), 'course_fee', true);
						 $post_id    = get_the_id();
						 
					?>	
                <div class="col-md-4">
                    <div class="box">
                        <div class="box_icon">
                            01
                        </div>
                        <div class="box_content">
                            <h3><?php the_title();?></h3>
                            <p><?php if($course_short_desc){echo esc_html($course_short_desc);}?></p>
							
							 <a id="modal-279823" href="#modal-container-1-<?php echo $post_id;?>" role="button" class="btn" data-toggle="modal" >Details</a>
							
							<div class="modal fade" id="modal-container-1-<?php echo $post_id;?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="myModalLabel">
												<?php echo get_the_title();?>
											</h5> 
											<button type="button" class="close" data-dismiss="modal">
												<span aria-hidden="true">×</span>
											</button>
										</div>
										
										<div class="modal-body">
											<?php the_content();?>
                                            
										</div>
										<div class="modal-footer">
											  
											<button type="button" class="btn btn-secondary" data-dismiss="modal">
												Close
											</button>
										</div>
									</div>
									
								</div>
								
							</div>                            
                        </div>
                    </div>
                </div>
				<?php 
					endwhile;
				?>
				<?php wp_reset_postdata();?>
                
            </div>
            
            
            
        </div>
    </section>
	<?php 
		return ob_get_clean();
	}
	?>	
	<?php add_shortcode('course','get_course');?>