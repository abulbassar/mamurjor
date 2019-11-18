<?php 
/*
	Template name: one page full
*/
?>
<?php get_header();?>
<?php 
	$page_query = new WP_Query(array('post_type'=>'page')); 
	while($page_query->have_posts()):
	$page_query->the_post();
	the_content();
	endwhile;
?>
<?php get_footer();?>