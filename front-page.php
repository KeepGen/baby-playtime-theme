<?php get_header(); ?>

<main class="front-page-header">
   <div class="container">
      <div class="hero">
         <div class="hero-main-texts">
            <h1 class="hero-title"><?php the_field('main_title') ?></h1>
            <span class="hero-description"><?php the_field('main_text') ?></span>
            <button class="button button-hero"><?php the_field('main_button_text') ?></button>
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

<div class="gift-section">
   <div class="container">
      <div class="gift-section-wrapper">
         <div class="gift-section-text">
            <h2 class="gift-section-title"><?php the_field('gift_title') ?></h2>
            <p class="gift-section-description"><?php the_field('gift_text') ?></p>
            <?php 
            $image = get_field('gift_decor');
            if( !empty( $image ) ): ?>
               <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="decor-gift gift-section-decor" />
            <?php endif; ?>
            <button class="button button-gift"><?php the_field('gift_button_text') ?></button>
         </div><!-- /.gift-section-text -->

         <?php 
            $image = get_field('gift_image');
            if( !empty( $image ) ): ?>
               <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="decor-gift gift-section-image" />
         <?php endif; ?>

      </div><!-- /.gift-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.gift-section -->

<div class="review-section">
   <div class="container">
      <div class="review-section-wrapper">
         <h2 class="review-section-title"><?php the_field('review_title') ?></h2>
         <div class="review-section-best">
            <div class="review-section-best-wrapper">
               <span class="review-section-name">Sarah</span>
               <div class="review-section-best-item">
                  <img src="STARS" alt="Stars" class="review-section-best-item-stars">
                  <h3 class="review-section-best-item-title">Tons of fun for my baby</h3>
                  <p class="review-section-best-item-text">Lovely mat. My baby has tons of fun playing with it. I wasn't expecting much for the price I paid, but after my baby playing with it almost everyday I have no regrets. I will buy couple more, just in case, since the price is so good. It would be also a perfect gift. Packed well enough to use as a gift. I just wonder why didn't they seal the box though.</p>
               </div><!-- /.review-section-best-item -->
            </div><!-- /.review-section-best-wrapper -->

            <div class="review-section-best-wrapper">
               <span class="review-section-name">Sarah</span>
               <div class="review-section-best-item">
                  <img src="STARS" alt="Stars" class="review-section-best-item-stars">
                  <h3 class="review-section-best-item-title">Tons of fun for my baby</h3>
                  <p class="review-section-best-item-text">Lovely mat. My baby has tons of fun playing with it. I wasn't expecting much for the price I paid, but after my baby playing with it almost everyday I have no regrets. I will buy couple more, just in case, since the price is so good. It would be also a perfect gift. Packed well enough to use as a gift. I just wonder why didn't they seal the box though.</p>
               </div><!-- /.review-section-best-item -->
            </div><!-- /.review-section-best-wrapper -->

            <div class="review-section-best-wrapper">
               <span class="review-section-name">Sarah</span>
               <div class="review-section-best-item">
                  <img src="STARS" alt="Stars" class="review-section-best-item-stars">
                  <h3 class="review-section-best-item-title">Tons of fun for my baby</h3>
                  <p class="review-section-best-item-text">Lovely mat. My baby has tons of fun playing with it. I wasn't expecting much for the price I paid, but after my baby playing with it almost everyday I have no regrets. I will buy couple more, just in case, since the price is so good. It would be also a perfect gift. Packed well enough to use as a gift. I just wonder why didn't they seal the box though.</p>
               </div><!-- /.review-section-best-item -->
            </div><!-- /.review-section-best-wrapper -->

         </div><!-- /.review-section-text -->

         <a href="#" class="review-section-readmore">View all revievs</a>
         <!-- /.review-section-readmore -->

      </div><!-- /.review-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.review-section -->

<?php get_footer(); ?>