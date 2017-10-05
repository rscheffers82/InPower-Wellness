<?php
/*
Template Name: Thank you page
*/
?>
<style>
	#thankyouHeader {
		width: 48%;
		position: relative;
		color: #fff;
		margin: 2.5rem auto;
		text-shadow: 1px 1px 3px rgba(23, 23, 23, 0.31);
	}

	#main {
		position: relative;
		margin-top: -150px;
	}

	body.page-id-59 .thank-you-message {
    background-color: #F9F8F4;
    padding: 2.5rem;
    color: #7d7d7d;
	}
	body.page-id-59 .margin-bottom {
		margin-bottom: 3rem;
	}

</style>


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
						<div class="thank-you-message margin-bottom">
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

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			    	<?php get_template_part( 'parts/loop', 'archive' ); ?>
			    <?php endwhile; endif; ?>
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
<?php get_footer(); ?>
