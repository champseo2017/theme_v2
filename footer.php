<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package art_theme_by_champ_V_2
 */

?>

		 <footer class="gap-top bounceInUp animated">
      <div class="box square charcoal">
        <div class="container padded">
          <div class="row">
          <div class="one small-tablet fourth padded" id="footer-1">
         
          <?php
            if(is_active_sidebar('footer-1')){
            dynamic_sidebar('footer-1');
            }
            ?>
            
            </div>
            <div class="three small-tablet fourths padded" id="footer-2">
           
            <?php
                if(is_active_sidebar('footer-2')){
                dynamic_sidebar('footer-2');
                }
            ?>
           
            
            </div>
          </div>
        </div>
      </div>
      <div class="box square">
        <div class="container padded">
          <div class="row">
            <div class="one half padded" id="footer-3">

             <?php
                if(is_active_sidebar('footer-3')){
                dynamic_sidebar('footer-3');
                }
              ?>
                <?php
                if(is_active_sidebar('footer-4')){
                dynamic_sidebar('footer-4');
                }
              ?>
             
            </div>
          </div>
        </div>
      </div>
      </footer>
     
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chromatism/3.0.0/chromatism.umd.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/app/home_page.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/app/text_01.js"></script>
 
     <script>
    $(document).ready(function(){
  	$('nav').removeAttr( "title" );
	$( "li" ).before().css("content", "none");
// $(window).resize(function(){

//   if (window.matchMedia('(max-width: 767px)').matches) {
//     $('aside[id="aside_01"]').css('display','none');
//     } 
// });
//function url active menu

    var link_home_blog = '<?=get_post_meta($post->ID, 'link_blog', true)?>';
		var element = $('button[id="post-18"] a');
		element.removeAttr( "href","http://localhost/ex_wordpress/");
		element.attr("href",link_home_blog);

	
        
    
});
</script>

<?php wp_footer(); ?>

</body>
</html>
