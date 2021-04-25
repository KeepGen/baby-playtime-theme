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
      <div class="video-section-wrapper">
         <div class="video-section-text">
            <h2 class="video-section-title"><?php the_field('video_title') ?></h2>
            <p class="video-section-description"><?php the_field('video_text') ?></p>
            <?php 
            $image = get_field('video_decor');
            if( !empty( $image ) ): ?>
               <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="decor-video video-section-decor" />
            <?php endif; ?>
         </div><!-- /.video-section-text -->

         <div class="video-section-video">
            <?php the_field('video_url') ?>
         </div><!-- /.video-section-video -->

         <!-- <img src="<?php echo get_template_directory_uri() . '/assets/images/leaves.png'?>" alt="Leaves decoration" class="video-section-leaves-img"> -->

      </div><!-- /.video-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.video-section -->

<?php get_footer(); ?>