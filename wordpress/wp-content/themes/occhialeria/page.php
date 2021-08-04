<?php get_header(); ?>

<?php
	if (is_page('HOME')){
		get_template_part('template_parts/banner-home');
        get_template_part('template_parts/home-content');
        get_template_part('template_parts/lightbox');

		} else if(is_page('Óculos Feminino')){
			get_template_part('template_parts/content-page-glasses-female');
		}else if(is_page('Óculos Masculino')){
			get_template_part('template_parts/content-page-glasses-male');
		}
	 ?>

<section>
    <div class="container">
        <?php while(have_posts()): ?>
        <?php the_post(); ?>
        <article>
            <p>
                <?php the_content(); ?>
            </p>
        </article>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>