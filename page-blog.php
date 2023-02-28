<?php
/*
Template Name: お知らせ一覧ページ
*/
?>

<?php get_header(); ?>
<section id="info_list">
	<ul>
		<?php query_posts("posts_per_page=10&paged=$paged"); ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php ?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<h2>
					<?php
						if(mb_strlen($post->post_title,'UTF-8')>12){
						$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_title), 0, 12,'UTF-8'));
							echo $content.' . . . ';
						}else{
							echo str_replace('\n', '', strip_tags($post->post_title));
						}
					?>
				</h2>
				<div class="left">
					<p>
						<?php if(mb_strlen($post->post_content,'UTF-8')>24){
							$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 24,'UTF-8'));
							echo $content.' . . . ';
						}else{
							echo str_replace('\n', '', strip_tags($post->post_content));
						}
						?>
					</p>
				</div>
				<div class="right">
					<time><?php echo get_the_date(); ?></time>
				</div>
			</a>
		</li>
		<?php endwhile; wp_reset_postdata(); ?>
	</ul>
	<div class="btn">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">top</a>
	</div>
	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</section>
<?php get_footer(); ?>