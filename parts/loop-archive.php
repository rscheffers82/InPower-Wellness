<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<div class="row">
		<div class="large-3 medium-3 columns">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-thumb'); ?></a>
		</div>
		<div class="large-9 medium-9 columns">
			<header class="article-header">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			</header> <!-- end article header -->

			<section class="entry-content" itemprop="articleBody">
				<?php the_excerpt(); ?>
			</section> <!-- end article section -->

			<footer class="article-footer">
		    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
			</footer> <!-- end article footer -->
		</div>
	</div>
</article> <!-- end article -->