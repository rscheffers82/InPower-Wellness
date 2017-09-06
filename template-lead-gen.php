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

/*Styles used for radio buttons*/
span.wpcf7-list-item {
    margin: 0;
}

.wpcf7-list-item input {
	position: absolute !important;
	clip: rect(0, 0, 0, 0);
	height: 1px;
	width: 1px;
	border: 0;
	overflow: hidden;
}

.wpcf7-list-item label span {
  float: left;
}

.wpcf7-list-item label span {
  display: inline-block;
  width: 180px;
  background-color: #e4e4e4;
  color: rgba(0, 0, 0, 0.6);
  font-size: 14px;
  font-weight: normal;
  text-align: center;
  text-shadow: none;
  padding: 6px 14px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  /*-webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);*/
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition:    all 0.1s ease-in-out;
  -ms-transition:     all 0.1s ease-in-out;
  -o-transition:      all 0.1s ease-in-out;
  transition:         all 0.1s ease-in-out;
}

.wpcf7-list-item label:hover {
	cursor: pointer;
}

.wpcf7-list-item input:checked + span {
	background-color: rgba(0, 0, 0, 0.6);
	color: #e4e4e4;
  -webkit-box-shadow: none;
  box-shadow: none;
}

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
