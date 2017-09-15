<?php
/*
Template Name: Home
*/
?>

<style>
	section {
		border: 1px solid #ccc;
		margin: 2.5rem auto;
	}
	.temp {
		height: 300px;
		background-color:#F9F8F4;
		width:80%;
	}
</style>

<?php get_header(); ?>

	<div id="content">
		<!-- Hero section -->
		<div id="hero" style="background-image: url('<?php the_field('hero_image'); ?>')">
			<div class="heroCTA">
				<h2><?php the_field('hero_title'); ?></h2>
				<p><?php the_field('hero_text'); ?></p>
				<a class="button" href="<?php the_field('hero_button_url'); ?>">
					<?php the_field('hero_button_description'); ?>
				</a>
			</div>

		<svg width="1440px" height="105px" viewBox="0 0 1440 105" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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
		</div>

		<div id="inner-content" class="row">

		    <main id="main" class="large-12 medium-12 columns" role="main">


				<!-- Additional content section -->
				<section class="temp">
				</section>

				<!-- Testimonial section -->
				<section class="testimonial">
					<?php thinkup_testimonials(9000); ?>
				</section>

				<!-- Call to Action section -->
				<section class="CTA-home">
					<h2><?php the_field('call_to_action_title'); ?></h2>
					<div class=""><?php the_field('call_to_action_description'); ?></div>
					<a class="button" href="<?php the_field('call_to_action_button_url'); ?>">
						<?php the_field('call_to_action_button_text'); ?>
					</a>
				</section>


				<!-- Footer -->
				<section>
					Footer area code here...
				</section>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>



				<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php //get_template_part( 'parts/loop', 'page' ); ?>

				<?php //endwhile; endif; ?>
