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
		
		<svg class="arc" viewBox="0 0 1440 105" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		    <!-- Generator: Sketch 46.1 (44463) - http://www.bohemiancoding.com/sketch -->
		    <desc>Created with Sketch.</desc>
		    <defs></defs>
		    <g id="Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		        <g id="Desktop-HD" transform="translate(0.000000, -559.000000)" fill="#FFFFFF">
		            <g id="Hero-Section" transform="translate(-23.000000, 121.000000)">
		                <path d="M20,543 C256.648257,473 494.454496,438 733.418717,438 C972.382938,438 1215.5767,473 1463,543 L20,543 Z" id="Arc"></path>
		            </g>
		        </g>
		    </g>
		</svg>

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
