<?php 
/*
Plugin Name: mamurjor widget
Description: This is for mamurjor widget
Plugin URI:https://developer.wordpress.org/plugins/plugin-basics
Version:4.5
Author: Bassar
Author URI: www.bassar.com
*/

?>
<?php 

 // Address widget
 Class Address_widget extends WP_Widget{
	function __construct(){
		parent::__construct(
			'Address_widget',
			__('Mamurjor Address','mamusrc'),
			array('description' => __( 'This is for Address widget', 'mamusrc' ),)
		
		);
	}
	
	public function widget($args,$instance){
		?>
		<p><?php echo esc_attr($instance['address']);?></p>
                          <div class="single_ct">
                            <a href="tel:+8801746686868"><?php echo esc_attr($instance['phone_one']);?></a> 
                           <p>(<?php echo esc_attr($instance['contact_person_one']);?>)</p>
                          </div>
                          <div class="single_ct">
                              <a href="tel:+8801703355355"><?php echo esc_attr($instance['phone_two']);?></a> 
                           <p>(<?php echo esc_attr($instance['contact_person_two']);?>)</p>
                          </div>
                          <div class="single_ct">
                              <a href="tel:+8801791411311"><?php echo esc_attr($instance['phone_three']);?></a> 
                           <p>(<?php echo esc_attr($instance['contact_person_three']);?>)</p>
                          </div>
                          <h4>Follow Us</h4>
                           <ul class="ct_links"> <li><a href="https://www.facebook.com/mamurjor/" target="_blank">Facebook</a></li><li><a href="https://www.youtube.com/WordPress%20Learning%20Bangladesh" target="_blank">Youtube</a></li><li><a href="https://goo.gl/maps/UgavWVnpFeBz78an9" target="_blank">Visit on Map</a></li></ul>
		
	<?php 	
	}
	
	public function form($instance){
		
		$address = !empty($instance['address'])?$instance['address']:'';
		$phone_one = !empty($instance['phone_one'])?$instance['phone_one']:'';
		$phone_two = !empty($instance['phone_two'])?$instance['phone_two']:'';
		$phone_three = !empty($instance['phone_three'])?$instance['phone_three']:'';
		
		
		$contact_person_one = !empty($instance['contact_person_one'])?$instance['contact_person_one']:'';
		$contact_person_two = !empty($instance['contact_person_two'])?$instance['contact_person_two']:'';
		$contact_person_three = !empty($instance['contact_person_three'])?$instance['contact_person_three']:'';
		
		$fb_link = !empty($instance['fb_link'])?$instance['fb_link']:'';
		$youtube_link = !empty($instance['youtube_link'])?$instance['youtube_link']:'';
		$map_link = !empty($instance['map_link'])?$instance['map_link']:'';
		
		
		
		
// Widget admin form
		?>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'address' ); ?>"><?php echo esc_attr_e('Address')?></label>
		</p>	
		
			<textarea name="<?php echo $this->get_field_name('address' ); ?>"><?php echo esc_attr($address);?></textarea>
		
		<hr />
		<p>
			<label for="<?php echo $this->get_field_id( 'phone_one' ); ?>"><?php echo esc_attr_e('1st phone number')?></label>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('phone_one' ); ?>" id="<?php echo $this->get_field_id( 'phone_one' ); ?>" value="<?php echo esc_attr($phone_one);?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'contact_person_one' ); ?>"><?php echo esc_attr_e('1st contact person name')?></label>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('contact_person_one' ); ?>" id="<?php echo $this->get_field_id( 'contact_person_one' ); ?>" value="<?php echo esc_attr($contact_person_one);?>"/>
		</p>
		<hr />
		<p>
			<label for="<?php echo $this->get_field_id( 'phone_two' ); ?>"><?php echo esc_attr_e('2nd phone number')?></label>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('phone_two' ); ?>" id="<?php echo $this->get_field_id( 'phone_two' ); ?>" value="<?php echo esc_attr($phone_two);?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'contact_person_two' ); ?>"><?php echo esc_attr_e('2nd contact person name')?></label>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('contact_person_two' ); ?>" id="<?php echo $this->get_field_id( 'contact_person_two' ); ?>" value="<?php echo esc_attr($contact_person_two);?>"/>
		</p>
		<hr />
		<p>
			<label for="<?php echo $this->get_field_id( 'phone_three' ); ?>"><?php echo esc_attr_e('3rd phone number')?></label>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('phone_three' ); ?>" id="<?php echo $this->get_field_id( 'phone_three' ); ?>" value="<?php echo esc_attr($phone_three);?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'contact_person_three' ); ?>"><?php echo esc_attr_e('3rd contact person name')?></label>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('contact_person_three' ); ?>" id="<?php echo $this->get_field_id( 'contact_person_three' ); ?>" value="<?php echo esc_attr($contact_person_three);?>"/>
		</p>
		
		<hr />
		
		<p>
			<label for="<?php echo $this->get_field_id( 'fb_link' ); ?>"><?php echo esc_attr_e('Facebook url')?></label>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('fb_link' ); ?>" id="<?php echo $this->get_field_id( 'fb_link' ); ?>" value="<?php echo esc_attr($fb_link);?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'youtube_link' ); ?>"><?php echo esc_attr_e('Youtube url')?></label>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('youtube_link' ); ?>" id="<?php echo $this->get_field_id( 'youtube_link' ); ?>" value="<?php echo esc_attr($youtube_link);?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'map_link' ); ?>"><?php echo esc_attr_e('Map url')?></label>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('map_link' ); ?>" id="<?php echo $this->get_field_id( 'map_link' ); ?>" value="<?php echo esc_attr($map_link);?>"/>
		</p>
		
		
	<?php }
	public function update($new_instance, $old_instance){
		$instance=array();
		
		$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
		
		$instance['phone_one'] = ( ! empty( $new_instance['phone_one'] ) ) ? strip_tags( $new_instance['phone_one'] ) : '';
		$instance['phone_two'] = ( ! empty( $new_instance['phone_two'] ) ) ? strip_tags( $new_instance['phone_two'] ) : '';
		$instance['phone_three'] = ( ! empty( $new_instance['phone_three'] ) ) ? strip_tags( $new_instance['phone_three'] ) : '';
		
		$instance['contact_person_one'] = ( ! empty( $new_instance['contact_person_one'] ) ) ? strip_tags( $new_instance['contact_person_one'] ) : '';
		$instance['contact_person_two'] = ( ! empty( $new_instance['contact_person_two'] ) ) ? strip_tags( $new_instance['contact_person_two'] ) : '';
		$instance['contact_person_three'] = ( ! empty( $new_instance['contact_person_three'] ) ) ? strip_tags( $new_instance['contact_person_three'] ) : '';
		
		$instance['fb_link'] = ( ! empty( $new_instance['fb_link'] ) ) ? strip_tags( $new_instance['fb_link'] ) : '';
		$instance['youtube_link'] = ( ! empty( $new_instance['youtube_link'] ) ) ? strip_tags( $new_instance['youtube_link'] ) : '';
		$instance['map_link'] = ( ! empty( $new_instance['map_link'] ) ) ? strip_tags( $new_instance['map_link'] ) : '';
		
		
		
		return $instance;
	}
	
} 

// footer text widget
Class Footer_Text_widget extends WP_Widget{
	function __construct(){
		parent::__construct(
			'Footer_Text_widget',
			__('Mamurjor Footer Text','mamusrc'),
			array('description' => __( 'This is Footer Text widget', 'mamusrc' ),)
		
		);
	}
	
	public function widget($args,$instance){
		?>
		
		<p>&copy; <?php echo esc_attr($instance['footer_text']);?></p>
	<?php 	
	}
	
	public function form($instance){
		
		$footer_text = !empty($instance['footer_text'])?$instance['footer_text']:'';
		
// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'footer_text' ); ?>"><?php echo esc_attr_e('Footer Text')?></label>
		</p>	
			<textarea name="<?php echo $this->get_field_name('footer_text' ); ?>"><?php echo esc_attr($footer_text);?></textarea>
		
		
	<?php }
	public function update($new_instance, $old_instance){
		$instance=array();
		
		$instance['footer_text'] = ( ! empty( $new_instance['footer_text'] ) ) ? strip_tags( $new_instance['footer_text'] ) : '';
		
		return $instance;
	}
	
} 


// rules widget
 Class Rules_widget extends WP_Widget{
	function __construct(){
		parent::__construct(
			'Rules_widget',
			__('Mamurjor Rules','mamusrc'),
			array('description' => __( 'This is Rules widget', 'mamusrc' ),)
		
		);
	}
	
	public function widget($args,$instance){
		?>
		<div class="col-md-12">
                    <h2 class="text-center"><?php echo esc_attr($instance['rule_sec_title']);?></h2> 
                </div>
				<div class="col-md-4">
					<div class="single_rules text-center">
					    <div class="rules_icon">
					        <i class="fa fa-skype"></i>
					    </div>
					    <div class="rules_text">
					        <h3><?php echo esc_attr($instance['rule_one_title']);?></h3>
					        <p><?php echo esc_attr($instance['rule_one_desc']);?></p>
					    </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single_rules text-center">
					    <div class="rules_icon">
					        <i class="fa fa-clock-o"></i>
					    </div>
					    <div class="rules_text">
					        <h3><?php echo esc_attr($instance['rule_two_title']);?></h3>
					        <p><?php echo esc_attr($instance['rule_two_desc']);?></p>
					    </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single_rules text-center">
					    <div class="rules_icon">
					        <i class="fa fa-assistive-listening-systems"></i>
					    </div>
					    <div class="rules_text">
					        <h3><?php echo esc_attr($instance['rule_three_title']);?></h3>
					        <p><?php echo esc_attr($instance['rule_three_desc']);?></p>
					    </div>
					</div>
				</div>
		
	<?php 	
	}
	
	public function form($instance){
		
		$rule_sec_title = !empty($instance['rule_sec_title'])?$instance['rule_sec_title']:'';
		
		$rule_one_title = !empty($instance['rule_one_title'])?$instance['rule_one_title']:'';
		$rule_one_desc = !empty($instance['rule_one_desc'])?$instance['rule_one_desc']:'';
		
		$rule_two_title = !empty($instance['rule_two_title'])?$instance['rule_two_title']:'';
		$rule_two_desc = !empty($instance['rule_two_desc'])?$instance['rule_two_desc']:'';
		
		$rule_three_title = !empty($instance['rule_three_title'])?$instance['rule_three_title']:'';
		$rule_three_desc = !empty($instance['rule_three_desc'])?$instance['rule_three_desc']:'';
		
// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'rule_sec_title' ); ?>"><?php echo esc_attr_e('Rules Section Title')?></label>
		</p>
		
		<p>
		<input type="text" name="<?php echo $this->get_field_name('rule_sec_title' ); ?>" id="<?php echo $this->get_field_id( 'rule_sec_title' ); ?>" value="<?php echo esc_attr($rule_sec_title);?>"/>
		</p>
		
		<hr />
		<p>
			<label for="<?php echo $this->get_field_id( 'rule_one_title' ); ?>"><?php echo esc_attr_e('Rule one title:')?></label>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('rule_one_title' ); ?>" id="<?php echo $this->get_field_id( 'rule_one_title' ); ?>" value="<?php echo esc_attr($rule_one_title);?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'rule_one_desc' ); ?>"><?php echo esc_attr_e('Rule one Details:')?></label>
		<p>
		<p>
		<textarea name="<?php echo $this->get_field_name('rule_one_desc' ); ?>"><?php echo esc_attr($rule_one_desc);?></textarea>
		</p>
		<hr />
		
		<p>
			<label for="<?php echo $this->get_field_id( 'rule_two_title' ); ?>"><?php echo esc_attr_e('Rule Two title:')?></label>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('rule_two_title' ); ?>" id="<?php echo $this->get_field_id( 'rule_two_title' ); ?>" value="<?php echo esc_attr($rule_two_title);?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'rule_two_desc' ); ?>"><?php echo esc_attr_e('Rule Two Details:')?></label>
		<p>
		<p>
		<textarea name="<?php echo $this->get_field_name('rule_two_desc' ); ?>"><?php echo esc_attr($rule_two_desc);?></textarea>
		</p>
		<hr />
		<p>
			<label for="<?php echo $this->get_field_id( 'rule_three_title' ); ?>"><?php echo esc_attr_e('Rule Three title:')?></label>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('rule_three_title' ); ?>" id="<?php echo $this->get_field_id( 'rule_three_title' ); ?>" value="<?php echo esc_attr($rule_three_title);?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'rule_three_desc' ); ?>"><?php echo esc_attr_e('Rule Three Details:')?></label>
		<p>
		<p>
		<textarea name="<?php echo $this->get_field_name('rule_three_desc' ); ?>"><?php echo esc_attr($rule_three_desc);?></textarea>
		</p>
		
	<?php }
	public function update($new_instance, $old_instance){
		$instance=array();
		
		$instance['rule_sec_title'] = ( ! empty( $new_instance['rule_sec_title'] ) ) ? strip_tags( $new_instance['rule_sec_title'] ) : '';
		
		$instance['rule_one_title'] = ( ! empty( $new_instance['rule_one_title'] ) ) ? strip_tags( $new_instance['rule_one_title'] ) : '';
		$instance['rule_one_desc'] = ( ! empty( $new_instance['rule_one_desc'] ) ) ? strip_tags( $new_instance['rule_one_desc'] ) : '';
		
		$instance['rule_two_title'] = ( ! empty( $new_instance['rule_two_title'] ) ) ? strip_tags( $new_instance['rule_two_title'] ) : '';
		$instance['rule_two_desc'] = ( ! empty( $new_instance['rule_two_desc'] ) ) ? strip_tags( $new_instance['rule_two_desc'] ) : '';
		
		$instance['rule_three_title'] = ( ! empty( $new_instance['rule_three_title'] ) ) ? strip_tags( $new_instance['rule_three_title'] ) : '';
		$instance['rule_three_desc'] = ( ! empty( $new_instance['rule_three_desc'] ) ) ? strip_tags( $new_instance['rule_three_desc'] ) : '';
		
		return $instance;
	}
} 

// Maps widget
Class Maps_widget extends WP_Widget{
	function __construct(){
		parent::__construct(
			'Maps_widget',
			__('Mamurjor Google Map','mamusrc'),
			array('description' => __( 'This is Map widget', 'mamusrc' ),)
		
		);
	}
	
	public function widget($args,$instance){
		?>
			<div class="ct maps_area">
				<iframe width="<?php echo esc_attr($instance['map_width']);?>" height="<?php echo esc_attr($instance['map_height']);?>" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo esc_attr($instance['place']);?>?>&t=&z=<?php echo esc_attr($instance['map_zoom']);?>&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</div>
		
	<?php 	
	}
	
	public function form($instance){
		
		$place = !empty($instance['place'])?$instance['place']:'';
		$map_width = !empty($instance['map_width'])?$instance['map_width']:'';
		$map_height = !empty($instance['map_height'])?$instance['map_height']:'';
		$map_zoom = !empty($instance['map_zoom'])?$instance['map_zoom']:'';
		
		
		
// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'place' ); ?>"><?php echo esc_attr_e('Location')?></label>
		</p>
		
		<p>
		<textarea name="<?php echo $this->get_field_name('place' ); ?>"><?php echo esc_attr($place);?></textarea>
		</p>
		
		
		<p>
			<label for="<?php echo $this->get_field_id( 'map_width' ); ?>"><?php echo esc_attr_e('Width:')?></label>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('map_width' ); ?>" id="<?php echo $this->get_field_id( 'map_width' ); ?>" value="<?php echo esc_attr($map_width);?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'map_height' ); ?>"><?php echo esc_attr_e('Height:')?></label>
		<p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('map_height' ); ?>" id="<?php echo $this->get_field_id( 'map_height' ); ?>" value="<?php echo esc_attr($map_height);?>"/>
		</p>
		
		
		<p>
			<label for="<?php echo $this->get_field_id( 'map_zoom' ); ?>"><?php echo esc_attr_e('Zoom:')?></label>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('map_zoom' ); ?>" id="<?php echo $this->get_field_id( 'map_zoom' ); ?>" value="<?php echo esc_attr($map_zoom);?>"/>
		</p>
		
		
	<?php }
	public function update($new_instance, $old_instance){
		$instance=array();
		
		$instance['place'] = ( ! empty( $new_instance['place'] ) ) ? strip_tags( $new_instance['place'] ) : '';
		
		$instance['map_width'] = ( ! empty( $new_instance['map_width'] ) ) ? strip_tags( $new_instance['map_width'] ) : '';
		$instance['map_height'] = ( ! empty( $new_instance['map_height'] ) ) ? strip_tags( $new_instance['map_height'] ) : '';
		
		$instance['map_zoom'] = ( ! empty( $new_instance['map_zoom'] ) ) ? strip_tags( $new_instance['map_zoom'] ) : '';
		
		
		return $instance;
	}
} 

function wp_load_widget(){
	register_widget('Address_widget');
	register_widget('Footer_Text_widget');
	register_widget('Rules_widget');
	register_widget('Maps_widget');
	
}
add_action('widgets_init','wp_load_widget');
?>