<div class="clearfix">

	<header class="title">
		<h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="categories"><?php the_category(', '); ?></div>
	</header>

	<p>Posted by: <a href="<?php bloginfo('siteurl') ;?>/about/"><?php the_author(); ?></a> <?php the_time('F j, Y'); ?></p>


<div class="excerpt">
	
	<?php if(is_single()): ?>

		<?php the_content(); ?>
		<?php comments_template(); ?>

	<?php else: ?>

		<?php the_excerpt(); ?>
		<p><a class="post-link" href="<?php the_permalink(); ?>">Continue Reading &rarr;</a></p>

	<?php endif; ?>
	<hr>
</div>
</div>
