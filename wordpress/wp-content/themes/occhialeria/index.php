<?php get_header(); ?>

	<?php
	if (is_home()){
		get_template_part('template_parts/banner-home');

		} else{
			get_template_part('template_parts/banner-single');
		}
	 ?>

		<div class="container">
			<?php if(have_posts()): ?>
			<?php while(have_posts()): ?>
				<?php the_post(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
		</div>

<?php get_footer(); ?>


