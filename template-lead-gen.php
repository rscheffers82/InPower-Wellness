<?php
/*
Template Name: Lead Generation
*/
?>

<?php get_header(); ?>

<style>
	.wide-screen {width: 100vw; height: 500px;}
	.page-title {color: white;}
	.entry-content {background-color: #F9F8F4;}
	#main {position:relative; top:-250px;}
</style>

	<div id="content">
		<div class="header-image">
			<?php the_post_thumbnail( 'large', ['class' => 'wide-screen'] ); ?>
		</div>
		<div id="inner-content" class="row expanded">
			<div class="sidebar">
				<?php get_sidebar(); ?>
			</div>

		    <main id="main" class="large-7 medium-7 small-12 columns end" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->



		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
