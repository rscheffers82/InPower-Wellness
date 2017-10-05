<?php
/*
Template Name: Thank you page
*/
?>

<?php get_header(); ?>

	<div id="content">
		<div class="header-image" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
			<div id="thankyouHeader">
				<h1>
					Congrats <?php echo get_query_var( 'fname' ); ?>. The first step to make your workplace even more awesome is <i class="fa fa-check" aria-hidden="true"></i>.
				</h1>
			</div>
			<!-- <svg class="arc" viewBox="0 0 1440 105" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			    <desc>Created with Sketch.</desc>
			    <defs></defs>
			    <g id="Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			        <g id="Desktop-HD" transform="translate(0.000000, -559.000000)" fill="#FFFFFF">
			            <g id="Hero-Section" transform="translate(-23.000000, 121.000000)">
			                <path d="M20,543 C256.648257,473 494.454496,438 733.418717,438 C972.382938,438 1215.5767,473 1463,543 L20,543 Z" id="Arc"></path>
			            </g>
			        </g>
			    </g>
			</svg> -->
		</div>
		<div id="inner-content" class="row expanded">

		    <main id="main" class="large-6 large-offset-3 medium-8 medium-offset-2 small-12 columns end" role="main">
						<div class="thank-you-message">
							<p><strong>Thank you! Your information has been submitted to InPower.</strong></p>
							<p>
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
							</p>
							You're done!
						</div>
							<p class="margin-bottom">But if you want to learn more about how workplace wellness is changing how companies work check out Caitlin's latest article.</p>

							<?php global $query_articles; // required
							$posts = query_posts($query_articles . 'category_name=articles&posts_per_page=1'); ?>

							<?php while ( have_posts() ) : the_post(); ?>
								<!-- To see additional archive styles, visit the /parts directory -->
								<?php get_template_part( 'parts/loop', 'archive' ); ?>

							<?php endwhile; ?>
							<?php wp_reset_query(); // reset the query ?>


			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
<?php get_footer(); ?>
