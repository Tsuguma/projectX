<?php get_header() ?>


	<main>
		<div class="vmain">
			<img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="" class="pc-img">
			<img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="" class="imgtext pc-img">
			<img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt="" class="sp-img">
			<img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt=""
			class="imgtext sp-img">
		</div>

		<p class="words">進化し続ける「街」アメリカンビレッジマガジン</p>

		<div class="content">
			<h2 class="ctitle">Latest Articles</h2>

			<div class="post">
				<?php if (have_posts()): ?>
				  <?php while (have_posts()): the_post(); ?>
				  	<div class="post-size unreade">
				  		<?php the_post_thumbnail('full'); ?>
				  		<p class="date"><?php the_time('Y年m月d日'); ?></p>
				  		<p class="come"><?php the_title(); ?></p>
				  		<p class="read"><a href="<?php the_permalink(); ?>" class="under">READ MORE</a></p>
				  	</div>
				  <?php endwhile; ?>
				<?php else: ?>
					<p>ないもん</p>
				<?php endif; ?>
			</div>
		</div>


	</main>

<?php get_footer() ?>
