<?php get_header(); ?>

		<div class="container">
			<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
		</div>
<?php get_footer(); ?>
