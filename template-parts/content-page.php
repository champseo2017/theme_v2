<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package art_theme_by_champ_V_2
 */

?>
<div class="container" id="post-<?php the_ID(); ?>">
<div class="padded">
        <div class="row">
          <div class="three fifths bounceInRight animated">
            <h1 class="zero museo-slab" v-bind:style="{color: selectedColorHex}"><?php echo get_post_meta($post->ID, 'text_header', true); ?></h1>
            <p class="quicksand" v-bind:style="{color: selectedColorHex2}"><?php echo get_post_meta($post->ID, 'text_header_pa', true); ?></p>
          </div>
        </div>
      </div>
	  <hr>
	<header>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<article class="row">
        <section  v-bind:style="bgc" class="two fourths right-one padded bounceInDown animated">
		<?php
 		if ( has_post_thumbnail()) {
    	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
    	echo '<img src="'.$large_image_url[0].'">';
 		}
 		?>
		<p><?php the_excerpt(); ?></p>
		</section>
    

		 <aside id="aside_01"  class="one fourth left-two padded border-right bounceInLeft animated display_m" >
          <p><b>Design website</b></p>
          <div class="row">
            <div class="one whole two-up-small-tablet one-up-mobile">
              <ul class="list">
                <li>
                <p>{{description}}</p>
                <input type="text" v-on:input="bgc.backgroundColor = $event.target.value" placeholder="ภาษาอังกฤษ"/>
                </li>
                <li>
                <p>เปลียนสีตัวอักษร Top bar Title</p>
                <div id="color-picker">
                <color-picker-select :color-options="colors" label="Select Color..." empty-option="None" input-id="color" v-model="selectedColorHex"></color-picker-select>

                </div>
                </li>
                <li class="d_01">
                <p>เปลียนสีตัวอักษร Top bar tag p</p>
                <div id="color-picker">
                <color-picker-select :color-options="colors" label="Select Color..." empty-option="None" input-id="color" v-model="selectedColorHex2"></color-picker-select>

                </div>
                </li>
                <li>
                <div id="app" style="height: 100vh"></div>
                </li>
              </ul>
            </div>
          </div>
         
        </aside>
		<aside class="one fourth padded border-left bounceInRight animated">
          <div class="row">
            <div class="one whole two-up-small-tablet one-up-mobile" id="sidebar-01">
            <?php
                if(is_active_sidebar('sidebar-01')){
                dynamic_sidebar('sidebar-01');
                }
            ?>
            </div>
            <div class="one whole two-up-small-tablet one-up-mobile" id="sidebar-02">
            <?php
                if(is_active_sidebar('sidebar-02')){
                dynamic_sidebar('sidebar-02');
                }
            ?>
            </div>
          </div>
        </aside>
      </article>
	  <article class="row bounceInUp animated">
        <section class="one third padded">
          <h3>Section Heading 3</h3>
          <div class="row">
            <div class="two-up-small-tablet one-up-mobile align-center"><img src="http://placehold.it/380x200/f02475/ffffff/" alt=""></div>
            <div class="two-up-small-tablet one-up-mobile">
              <p class="padded no-pad-mobile">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
            </div>
          </div>
        </section>
        <section class="one third padded">
          <h3>Section Heading 3</h3>
          <div class="row">
            <div class="two-up-small-tablet one-up-mobile align-center"><img src="http://placehold.it/380x200/1abc9c/ffffff/" alt=""></div>
            <div class="two-up-small-tablet one-up-mobile">
              <p class="padded no-pad-mobile">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
            </div>
          </div>
        </section>
        <section class="one third padded">
          <h3>Section Heading 3</h3>
          <div class="row">
            <div class="two-up-small-tablet one-up-mobile align-center"><img src="http://placehold.it/380x200/34495e/ffffff/" alt=""></div>
            <div class="two-up-small-tablet one-up-mobile">
              <p class="padded no-pad-mobile">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
            </div>
          </div>
        </section>
      </article>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'art_theme_by_champ_v_2' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</div>
