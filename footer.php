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
          <div class="one small-tablet fourth padded" id="footer-01">
         
          <?php
            if(is_active_sidebar('footer-01')){
            dynamic_sidebar('footer-01');
            }
            ?>
            
            </div>
            <div class="three small-tablet fourths padded" id="footer-02">
           
            <?php
                if(is_active_sidebar('footer-02')){
                dynamic_sidebar('footer-02');
                }
            ?>
           
            
            </div>
          </div>
        </div>
      </div>
      <div class="box square">
        <div class="container padded">
          <div class="row">
            <div class="one half padded" id="footer-03">

             <?php
                if(is_active_sidebar('footer-03')){
                dynamic_sidebar('footer-03');
                }
              ?>
                <?php
                if(is_active_sidebar('footer-04')){
                dynamic_sidebar('footer-04');
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
    var link_home_blog = '<?=get_post_meta($post->ID, 'link_blog', true)?>';
		var element = $('button[id="post-18"] a');
		element.removeAttr( "href","http://localhost/ex_wordpress/");
    element.attr("href",link_home_blog);
    $('section[id="blog_home_01"] p:nth-child(2)').remove();


     $.getJSON("http://localhost/ex_wordpress/wp-json/wp/v2/posts?include[]=6",function(data_post_01) {
      createHTML(data_post_01);
     });
     $.getJSON("http://localhost/ex_wordpress/wp-json/wp/v2/posts?include[]=10",function(data_post_02) {
      createHTML_02(data_post_02);
     });
     $.getJSON("http://localhost/ex_wordpress/wp-json/wp/v2/posts?include[]=23",function(data_post_03) {
      createHTML_03(data_post_03);
     });
     function createHTML(postsData_01) {
      var title_post_01 = '';
      var blog_content_01 = '';
      for(i = 0; i < postsData_01.length; i++){
        title_post_01 += postsData_01[i].title.rendered;
        blog_content_01 += postsData_01[i].excerpt.rendered;
      }
      $('#blog_title_section_01').append(title_post_01);
      $('#blog_content_section_01').append(blog_content_01);
      $('#blog_content_section_01 p:nth-child(1)').addClass('padded no-pad-mobile');
  }
  function createHTML_02(postsData_02) {
      var title_post_02 = '';
      var blog_content_02 = '';
      for(i = 0; i < postsData_02.length; i++){
        title_post_02 += postsData_02[i].title.rendered;
        blog_content_02 += postsData_02[i].excerpt.rendered;
      }
      $('#blog_title_section_02').append(title_post_02);
      $('#blog_content_section_02').append(blog_content_02);
      $('#blog_content_section_02 p:nth-child(1)').addClass('padded no-pad-mobile');
  }
  function createHTML_03(postsData_03) {
      var title_post_03 = '';
      var blog_content_03 = '';
      for(i = 0; i < postsData_03.length; i++){
        title_post_03 += postsData_03[i].title.rendered;
        blog_content_03 += postsData_03[i].excerpt.rendered;
      }
      $('#blog_title_section_03').append(title_post_03);
      $('#blog_content_section_03').append(blog_content_03);
      $('#blog_content_section_03 p:nth-child(1)').addClass('padded no-pad-mobile');
  }
});
</script>

<?php wp_footer(); ?>

</body>
</html>
