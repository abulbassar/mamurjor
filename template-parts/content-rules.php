<?php

?>
<?php
function get_rules(){
	ob_start();
?>
	<section id="rules" class="section_padding">
        <div class="container-fluid">
            <div class="row">
                <?php if(is_active_sidebar('rules')){
						dynamic_sidebar('rules');
				}?>
			</div>        
        </div>
    </section>
	<?php 
		return ob_get_clean();
	}
	?>	
	 <?php add_shortcode('rules','get_rules');?>