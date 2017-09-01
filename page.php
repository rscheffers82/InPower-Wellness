<?php get_header(); ?>

<style>
	.wide-screen {width: 100vw; height: 500px;}
	.entry-content {background-color: white;}
	.page-title {color:black;}
	.featured-image {position:relative; top:-250px;}
	.featured-image .page-title {color: white;}
</style>

	<div id="content">
		<div class="header-image">
			<?php the_post_thumbnail( 'large', ['class' => 'wide-screen'] ); ?>
		</div>
		<div id="inner-content" class="row expanded">
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>

				<?php global $post;
				if (has_post_thumbnail($post->ID)): ?>
		    	<main id="main" class="large-7 medium-7 small-12 columns end featured-image" role="main">
				<?php else: ?>
		    	<main id="main" class="large-7 medium-7 small-12 columns end" role="main">
				<?php endif ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->



		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
