<?php
/*
Template Name: お知らせ詳細ページ
*/
?>

<?php get_header(); ?>
<section id="single_page">
  <time><?php echo get_the_date(); ?></time>
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
  <div class="btn"><a href="<?php echo esc_url( home_url( '/info' ) ); ?>">all</a></div>
</section>
<?php get_footer(""); ?>
