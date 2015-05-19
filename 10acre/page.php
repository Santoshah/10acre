<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage 10acre
 * @since Elegant 1.0
 */

get_header(); ?>
	
		<aside class="sidebar">



			<?php get_sidebar(); ?>
				<!-- <div class="widget_box">
						<div class="contact_form">
							<div class="contact_title">Ready to get more information and start the admission process?</div>
							<?php echo do_shortcode('[contact-form-7 id="55" title="Contact"]' ); ?>
						</div>
				</div> -->
				<!-- /.widget_box -->
			</aside>
			<article class="article">
		<?php if ( !is_front_page() ) { ?>
			<header class="page-header clr">
				<h1 class="title"><?php the_title(); ?></h1>
			</header><!-- #page-header -->
		<?php } ?>
		<div id="content" class="site-content left-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry clr">

						<?php if( $post->post_content=="" ) { ?>
<p class="italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis purus non suscipit faucibus. Integer lobortis porta tellus sed molestie. Integer imperdiet, velit et sollicitudin scelerisque, libero ex ultrices leo, nec faucibus nisl purus vel purus. Ut euismod, velit vitae lacinia sollicitudin, leo enim volutpat dolor, sed tempor dui lectus non urna. Maecenas porttitor mi enim, ac luctus nibh fermentum a. Mauris interdum risus nisl.</p>
<img src="<?php echo get_template_directory_uri(); ?>/img/flower-horse.jpg" alt="" width="659" height="241" />
<h4>Specialized men’s Drug Rehab</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis purus non suscipit faucibus. Integer lobortis porta tellus sed molestie. Integer imperdiet, velit et sollicitudin scelerisque, libero ex ultrices leo, nec faucibus nisl purus vel purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis purus non suscipit faucibus. Integer lobortis porta tellus sed molestie.
<h4>Another header here</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis purus non suscipit faucibus. Integer lobortis porta tellus sed molestie. Integer imperdiet, velit et sollicitudin scelerisque, libero ex ultrices leo, nec faucibus nisl purus vel purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis purus non suscipit faucibus. Integer lobortis porta tellus sed molestie.
<h4>Another header here</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis purus non suscipit faucibus. Integer lobortis porta tellus sed molestie. Integer imperdiet, velit et sollicitudin scelerisque, libero ex ultrices leo, nec faucibus nisl purus vel purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis purus non suscipit faucibus. Integer lobortis porta tellus sed molestie.
<h4>Another header here</h4>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis purus non suscipit faucibus. Integer lobortis porta tellus sed molestie. Integer imperdiet, velit et sollicitudin scelerisque, libero ex ultrices leo, nec faucibus nisl purus vel purus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis purus non suscipit faucibus. Integer lobortis porta tellus sed molestie.

							<?php } else { the_content();  } ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links clr">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->
				<?php // comments_template(); ?>
			<?php endwhile; ?>
		</div><!-- #content -->
		
			</article>


	
<?php get_footer(); ?>