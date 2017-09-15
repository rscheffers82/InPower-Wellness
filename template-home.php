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
