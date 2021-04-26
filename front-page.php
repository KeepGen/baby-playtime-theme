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
            <?php
            $args = array(
               'posts_per_page' => 3,
               'orderby'   => 'rand',
               'post_type' => 'review',
            );
            $products = new WP_Query( $args );
            if( $products->have_posts() ) {
               while( $products->have_posts() ) {
               $products->the_post();
            ?>
               <div class="review-section-best-wrapper">
                  <span class="review-section-name"><?php the_field('review_author_name') ?></span>
                  <div class="review-section-best-item">
                     <img src="<?php echo get_template_directory_uri() . '/assets/images/stars-' . get_field('review_rate_stars')  . '.png' ?> " alt="Author Rank" class="review-section-best-item-stars">

                     <h3 class="review-section-best-item-title"><?php echo mb_strimwidth(get_the_title(), 0, 50, '...') ?></h3>
                     <p class="review-section-best-item-text"><?php echo mb_strimwidth(get_the_content(), 0, 500, '...') ?></p>
                  </div><!-- /.review-section-best-item -->

               </div><!-- /.review-section-best-wrapper -->
            <?php
                  }
               }
               else {
                  echo 'Oh no! Unfortunatelly no reviews at the moment. Please add some and its will appear here!';
               }
            ?>

         </div><!-- /.review-section-text -->

         <a href="#" class="review-section-readmore">View all reviews</a>
         <!-- /.review-section-readmore -->

      </div><!-- /.review-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.review-section -->

<div class="questions-section">
   <div class="container">
      <div class="questions-section-wrapper">
         <h2 class="questions-section-title"><?php the_field('questions_title', 15); ?></h2>
         <div class="accordion-header"><?php the_field('question_1', 15); ?></div>
         <div class="accordion-body"><?php the_field('answer_1', 15); ?></div>
         
         <div class="accordion-header"><?php the_field('question_2', 15); ?></div>
         <div class="accordion-body"><?php the_field('answer_2', 15); ?></div>
         
         <div class="accordion-header"><?php the_field('question_3', 15); ?></div>
         <div class="accordion-body"><?php the_field('answer_3', 15); ?></div>
         
         <div class="accordion-header"><?php the_field('question_4', 15); ?></div>
         <div class="accordion-body"><?php the_field('answer_4', 15); ?></div>

         <div class="accordion-header"><?php the_field('question_5', 15); ?></div>
         <div class="accordion-body"><?php the_field('answer_5', 15); ?></div>
      </div><!-- /.questions-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.questions-section -->



<?php get_footer(); ?>