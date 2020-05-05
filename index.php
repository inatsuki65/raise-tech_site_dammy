<?php get_header();?>
		<div class="c-wrap">
			<div class="c-grid">
				<div class="p-contents">
					<div class="back_image">
						<img src="<?php bloginfo('template_directory'); ?>/images/raise-tech_main.png" alt="背景" class="image_size">
					</div>
				</div> 
				<?php if($wp_query -> max_num_pages > 1 ) : ?>
					<ul class="p-pagenation">
						<li class="prevpostslink"><?php next_posts_link('Prev'); ?></li>
						<li class="prevpostslink"><?php previous_posts_link('Next'); ?></li>
					</ul>
				<?php endif; ?>
				
			</div>
		</div>
<?php get_footer(); ?>