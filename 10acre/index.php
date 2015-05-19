<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Elegant WPExplorer Theme
 * @since Elegant 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area clr">
		<div id="content" class="site-content left-content clr" role="main">
			<?php if ( have_posts() ) { ?>
				<div id="blog-wrap" class="clr">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php // get_template_part( 'content', get_post_format() ); ?>
<!-- <div id="post-<?php the_ID(); ?>" class="blogitem">

<?php if ( has_post_thumbnail() ) { ?>
	<a href="<?php the_permalink(); ?>" class="blogitem_thumb"><?php the_post_thumbnail( array('class' => 'blogthumb')); ?></a>
<?php } ?>

<h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="postmeta"><?php _e('Posted By','Webconsuls') ?> <a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>, <?php _e('On:','cleanport') ?> <?php the_time('F j, Y') ?>, <?php _e('In:','cleanporte') ?> <?php the_category(', ') ?>, <?php comments_number( '' . __('0 Comments', 'cleanport') . '', '' . __('1 Comments', 'cleanport') . '', '' . __('% Comments', 'cleanport') . '' ); ?></p>
<?php the_excerpt(40); ?>
</div> -->

<div id="post-<?php the_ID(); ?>" class="blogitem">
<?php if ( has_post_thumbnail() ) { ?>
<a href="<?php the_permalink(); ?>" class="blogitem_thumb"><?php the_post_thumbnail('blog-full', array('class' => 'blogthumb')); ?></a>
<?php } else if( catch_that_image() ) {  ?>
    <a  class="blogitem_thumb catch" href="<?php the_permalink();?>">
         <img src="<?php echo catch_that_image()?>" class="blogthumb" alt="<?php the_title();?>" />
    </a>
<?php } ?>


	<div class="excerpt_content">
		<h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php
				// Display post meta details
				wpex_post_meta() ;?>
		<p><?php echo excerpt(130); ?> </p>
		<a href="<?php the_permalink(); ?>" class="read_more">Read more..</a>
	</div> <!-- /.excerpt_content -->
</div>


					<?php endwhile; ?>
				</div><!-- #post -->
				<?php wpex_pagination(); ?>
			<?php } else { ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php } ?>
			</div><!-- #content -->
		<?php get_sidebar('blog'); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>