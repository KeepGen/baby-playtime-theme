<?php get_header(); ?>

<main class="front-page-header">
   <div class="container">
      <div class="hero">
         <div class="hero-main-texts">
            <h1 class="hero-title"><?php the_field('main_title') ?></h1>
            <span class="hero-description"><?php the_field('main_text') ?></span>
            <button class="button button-buy-amazon"><?php the_field('main_button_text') ?></button>
         </div>

         <?php 
         $image = get_field('main_image');
         if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="hero-main-img" />
         <?php endif; ?>

      </div><!-- /.hero -->
   </div><!-- /.container -->
</main><!-- /.front-page-header -->

<div class="video-section">
   <div class="container">
      <div class="video-section-text">
         <h2 class="video-section-title">Make Tummy TimeGreat</h2>
         <p class="video-section-description">We want to see your new arrival smiling from the moment they meet their new marine friends, so why not treat them to a toy they'll treasure for a lifetime?</p>
         <img src="#" class="decor-video video-section-decor">
      </div><!-- /.video-section-text -->

      <div class="video-section-video">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/sszGhk8YYZg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div><!-- /.video-section-video -->
   </div><!-- /.container -->
</div><!-- /.video-section -->

<?php get_footer(); ?>