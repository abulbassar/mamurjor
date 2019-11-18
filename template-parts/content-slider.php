<div class="row slider_area p-0">
           
            <div class="col-md-12 p-0">

                <div class="carousel slide" id="carousel-937395">
                <ol class="carousel-indicators">
                        <li data-slide-to="0" data-target="#carousel-937395">
                        </li>
                        <li data-slide-to="1" data-target="#carousel-937395">
                        </li>
                        <li data-slide-to="2" data-target="#carousel-937395" class="active">
                        </li> 
                    </ol>
                    <div class="carousel-inner">
					<?php 
						$args= array('post_type'=>'slider');
						$slider_query = new WP_Query($args);
						$i=1;
					?>
					<?php while($slider_query->have_posts()):
						$slider_query->the_post();
						
					?>	
                        <div class="carousel-item <?php if($i==1){echo 'active';}?>">
                            <img class="d-block w-100" alt="Carousel Bootstrap First" src="<?php echo get_the_post_thumbnail_url();?>">
                            <div class="carousel-caption">
                                <h2>
                                  <?php echo get_the_title(); ?>
                                </h2>
                                <p>
                                   <?php echo get_the_content();?>
                                </p>
                            </div>
                        </div>
					<?php 
						$i++;
						endwhile;
					?>
					<?php wp_reset_postdata();?>
						
          
                    </div> 
					<a class="carousel-control-prev" href="#carousel-937395" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-937395" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                </div>
            </div>
        </div> 