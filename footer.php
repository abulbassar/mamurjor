</main>
<footer  class="section_padding" id="foot">
    <div class="container-fluid">
       <div class="row">
           <div class="col-md-12 text-center">
                <div class="c_right">
                    <?php if(is_active_sidebar('footer_text')){
						dynamic_sidebar('footer_text');
					}?>
                </div>               
           </div>
       </div>

    </div>
</footer>
    <?php wp_footer();?>
	
	<script>
        
        $(document).ready(function(){
        $('#testimonial-carousel').owlCarousel({
    autoplay:true,
    dots:false,
    nav:true,        
    loop:true,
    margin:10,
    nav:true,
    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
}) 
 // sticky
        $("#sticker").sticky({topSpacing:0});
        $(".slicknav_menu").sticky({topSpacing:0});
        
 // ScrollSpy
            
            $("#ex_spy").scrollspy();
    //mobilemenu
      
    $(function(){

        var menu = $('.menu-navigation-dark');

        menu.slicknav();

        // Mark the clicked item as selected

        menu.on('click', 'a', function(){
            var a = $(this);

            a.siblings().removeClass('selected');
            a.addClass('selected');
        });
    });
            
            });
			
      </script>

  </body>
</html>

