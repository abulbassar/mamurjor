<div class="col-md-9 p-0">
		<div class="main_menu">
		
			<nav class="menu-navigation-dark">
				<!--
				<a href="#home" class="selected"><i class="fa fa-home"></i><span>Home</span></a>
				<a href="#rules"><i class="fa fa-cog"></i><span>Rules</span></a>
				<a href="#about"><i class="fa fa-comment"></i><span>About</span></a>
				<a href="#testimonial"><i class="fa fa-star"></i><span>Freedback</span></a>
				<a href="#team"><i class="fa fa-user"></i><span>Team</span></a>
				<a href="#course"><i class="fa fa-film"></i><span>Course</span></a>
				<a href="#contact"><i class="fa fa-phone"></i><span>Contact</span></a>
				-->
				
				<?php 
				wp_nav_menu(array(
				'menu'			=>'',
				'theme_location'=>'primary-menu',
				'container'       => false,
				'items_wrap'      =>'%3$s',
				'link_before'=>'<span>',
				'link_after'=>'</span>',
				'depth'           => 0,
				'echo'            => true,
				'walker' => new Description_Walker,
				
			 ));
			 
			 
			?>
				
			</nav>   
			
			
		</div>
                          
</div>