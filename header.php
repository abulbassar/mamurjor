<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   
    <title><?php bloginfo('name');?></title>

    <meta name="description" content="We are Mamurjor">
    <meta name="author" content="mamurjor">
	<?php wp_head();?>
    

  </head>
 <body <?php body_class();?>>
<header id="home" class="section_padding">
    <div class="container-fluid p-0">
       <div class="row" id="sticker">
           <div class="col-md-3">
            <div class="logo">
			    <a href="<?php echo home_url();?>"><?php 
				 $custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if(has_custom_logo()){?>
						<img src="<?php echo esc_url($logo[0]);?>" alt="">
					 <?php }else {
						echo '<h2>'. get_bloginfo( 'name' ) .'</h2>';
						}
				?></a>
            </div>
            </div>
           <?php get_template_part('template-parts/content','nav');?>
       </div>
        <?php get_template_part('template-parts/content','slider');?>   
    </div>
</header>
<main>