<?php
function get_contact(){
	ob_start();
?>	
	<section id="contact" class="section_padding">
        <div class="container-fluid">
           <div class="row">
				<div class="col-md-12">
                    <h2 class="text-center">যোগাযোগ </h2>
                </div> 
           </div>
            <div class="row">
                <div class="col-md-8">
                    <?php 
						 if(is_active_sidebar( 'maps' )){
						 dynamic_sidebar('maps');
						 }
						 ?>
                </div>
                <div class="col-md-4">
                    <div class="ct ct_info">
                         <?php 
						 if(is_active_sidebar( 'address' )){
						 dynamic_sidebar('address');}
						 ?>
                           
                           
                           
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php 
		return ob_get_clean();
	}
	?>	
	<?php add_shortcode('contact','get_contact');?>