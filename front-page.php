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

      </div><!-- /.video-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.video-section -->

<div class="benefits-section">
   <div class="container">
      <div class="benefits-section-wrapper">
         <?php 
         $image = get_field('benefits_image');
         if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="benefits-section-img" />
         <?php endif; ?>
         
         <div class="benefits-section-text">
            <h2 class="benefits-section-title"><?php the_field('benefits_title') ?></h2>
            <p class="benefits-section-description"><?php the_field('benefits_text') ?></p>
            <div class="benefits-features">
               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php the_field('benefit_#1') ?></span>
               </div><!-- /.benefits-features-item -->

               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php the_field('benefit_#2') ?></span>
               </div><!-- /.benefits-features-item -->

               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php the_field('benefit_#3') ?></span>
               </div><!-- /.benefits-features-item -->

               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php the_field('benefit_#4') ?></span>
               </div><!-- /.benefits-features-item -->

               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php the_field('benefit_#5') ?></span>
               </div><!-- /.benefits-features-item -->

               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php the_field('benefit_#6') ?></span>
               </div><!-- /.benefits-features-item -->
            </div><!-- /.benefits-features -->
         </div><!-- /.benefits-section-text -->

      </div><!-- /.benefits-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.benefits-section -->


<?php get_footer(); ?>