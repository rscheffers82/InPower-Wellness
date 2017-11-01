				<footer class="footer" role="contentinfo">
					<div class="svgWrapBottom">
						<svg class="footerArc" viewBox="0 0 1439 105" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <!-- Generator: Sketch 46.1 (44463) - http://www.bohemiancoding.com/sketch -->
						    <desc>Created with Sketch.</desc>
						    <defs></defs>
						    <g id="Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <g id="Desktop-HD" transform="translate(-1.000000, -1761.000000)" fill="#FFFFFF">
						            <g id="Footer" transform="translate(1.000000, 1761.000000)">
						                <path d="M0,105 C228.266751,35 462.933418,2.15265618e-15 704,0 C945.066582,0 1190.39992,35 1440,105 L0,105 Z" id="Arc" transform="translate(720.000000, 52.500000) rotate(-180.000000) translate(-720.000000, -52.500000) "></path>
						            </g>
						        </g>
						    </g>
						</svg>
					</div>

					<?php if ( is_page('corporate-intake') || is_page('thank-you') || is_page('private-intake')) {

					}
					else {
						?>
							<!-- For Footer Widgets -->
							<div class="footerTop">
									<div id="footerwidgets" class="row">
										<?php
											if ( is_active_sidebar( 'footer' ) ) :
												dynamic_sidebar( 'footer' );
											endif; ?>
									</div>
							</div><!-- end .footerTop -->
						<?php
						}
						?>

					<div id="inner-footer">
						<div class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
							<div class="large-12 medium-12 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.  <span class="copyRight"> Made with &hearts; by <a href="http://thinkupdesign.ca">Think Up!</a></span></p>
							</div>
						</div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108417432-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-108417432-1');
		</script>

	</body>
</html> <!-- end page -->
