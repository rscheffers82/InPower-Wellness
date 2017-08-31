<?php
/*
Template Name: Thank you page
*/
?>

<style>

</style>
<?php get_header(); ?>

<style>
	.wide-screen {width: 100vw; height: 500px;}
	.thanks-header {margin-bottom: 5rem; width: 75%}
	.thanks-message {margin-bottom: 2rem; padding: 1rem; background-color: #F9F8F4; margin: }
	#main {position: relative; top: -450px;}
</style>

	<div id="content">
		<div class="header-image">
			<?php the_post_thumbnail( 'large', ['class' => 'wide-screen'] ); ?>
		</div>
		<div id="inner-content" class="row expanded">

		    <main id="main" class="large-6 large-offset-2 small-12 columns" role="main">

					<h2 class="thanks-header">Congrats Jessica. The first step to make your workplace even more awesome is V.</h2>

					<div class="thanks-message">
						Thank you! Your information has been submitted to InPower.

						Caitlin Bourassa, Owner, will be contacting you shortly to follow up on your inquiry. Based on your preference, she'll be getting a hold of you via phone on September 11th at 9am.

						You're done!
					</div>


					But if you want to learn more about how workplace wellness is changing how companies work check out Caitlin's latest article.

					<ul>
						<?php
							$args = array( 'numberposts' => '1' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
								echo '<li>';
								the_post_thumbnail();
								echo '<h2>' . $recent["post_title"] . '</h2>';
								// strip the first 25 words of the post content
								$words = explode(" ", $recent["post_content"]);
								echo '<div class="post-content">' . implode(" ", array_splice($words, 0, 25)) . '</div>';
								echo '<a href=' . get_permalink($recent["ID"]) . ' class="button">Read It</a>';
								echo '</li>';
							}
							wp_reset_query();
						?>
					</ul>

			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
