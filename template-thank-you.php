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

					<h2 class="thanks-header">Congrats <?php echo get_query_var( 'fname' ); ?>. The first step to make your workplace even more awesome is <i class="fa fa-check" aria-hidden="true"></i>.</h2>

					<div class="thanks-message">
						Thank you! Your information has been submitted to InPower.

						Caitlin Bourassa, Owner, will be contacting you shortly to follow up on your inquiry.

						<?php
							$fcontact = get_query_var( 'fcontact' );
							$fdate = get_query_var( 'fdate' );
 							$ftime = get_query_var( 'ftime' );

							if ($fcontact == 'phone') {
								$display_text = 'Based on your preference, she\'ll be getting a hold of you via phone on ' . $fdate . ' at ' . $ftime . '.';
							} elseif ($fcontact == 'email') {
								$display_text = 'Based on your preference, she\'ll be getting a hold of you via email.';
							} else {
								$display_text = '';
							}
							echo $display_text;
						?>
						<br /><br />
						You're done!
					</div>

					But if you want to learn more about how workplace wellness is changing how companies work check out Caitlin's latest article.

					<ul>
						<?php
							$args = array( 'numberposts' => '1' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ) {
								$words = explode(" ", $recent["post_content"]);
								$short_content = implode(" ", array_splice($words, 0, 25));
								?>

								<div class="media-object">
								  <div class="media-object-section">
								    <?php the_post_thumbnail(); ?>
								  </div>
								  <div class="media-object-section">
								    <h4><?php echo $recent["post_title"]; ?></h4>
								    <p>
											<?php echo $short_content; ?>
											<a href=' <?php get_permalink($recent["ID"]) ?>' class="button">Read It</a>
										</p>
								  </div>
								</div>

								<!-- echo '<li>';
								the_post_thumbnail();
								echo '<h2>' . $recent["post_title"] . '</h2>';
								// strip the first 25 words of the post content
								$words = explode(" ", $recent["post_content"]);
								echo '<div class="post-content">' . implode(" ", array_splice($words, 0, 25)) . '</div>';
								echo '<a href=' . get_permalink($recent["ID"]) . ' class="button">Read It</a>';
								echo '</li>'; -->
							<?php
							}
							wp_reset_query();
						?>
					</ul>

			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
