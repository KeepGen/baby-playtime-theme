<?php
   get_header();

   include 'utils/detect-language.php';
?>

<main class="front-page-header">
   <div class="container">
      <div class="hero">
         <div class="hero-main-texts">
            <h1 class="hero-title"><?php ($userEs) ? the_field('main_title', 2701) : the_field('main_title', 15); ?></h1>
            <span class="hero-description"><?php ($userEs) ? the_field('main_text', 2701) : the_field('main_text', 15); ?></span>

            <div class="hero-prices">
               <span class="hero-old-price">$<?php ($userEs) ? the_field('main_old_price', 2701) : the_field('main_old_price', 15); ?></span>
               <span class="hero-real-price"><?php echo ($userEs) ? "Solo" : "Only"; ?> $<?php ($userEs) ? the_field('main_real_price', 2701) : the_field('main_real_price', 15); ?></span>
            </div>
            
            <button class="button button-hero" onclick="location.href='<?php ($userEs) ? the_field('main_button_url', 2701) : the_field('main_button_url', 15); ?>'" type="button">
               <?php ($userEs) ? the_field('main_button_text', 2701) : the_field('main_button_text', 15); ?>
            </button>
         </div>

         <?php
            $imageHeroUs = get_field('main_image', 15);
            $imageHeroEs = get_field('main_image', 2701);

            if ($userEs) {
               if( !empty( $imageHeroEs ) ) { ?>
                  <img src="<?php echo esc_url($imageHeroEs['url']); ?>" alt="<?php echo esc_attr($imageHeroEs['alt']); ?>" class="hero-main-img" />
               <?php }
            } else {
               if( !empty( $imageHeroUs ) ) { ?>
               <img src="<?php echo esc_url($imageHeroUs['url']); ?>" alt="<?php echo esc_attr($imageHeroUs['alt']); ?>" class="hero-main-img" />
               <?php }
            }
         ?>

      </div><!-- /.hero -->
   </div><!-- /.container -->
</main><!-- /.front-page-header -->
<div id="video" class="separator"></div>

<div class="video-section">
   <div class="container">
      <div class="video-section-wrapper">
         <div class="video-section-text">
            <h2 class="video-section-title"><?php ($userEs) ? the_field('video_title', 2701) : the_field('video_title', 15); ?></h2>
            <p class="video-section-description"><?php ($userEs) ? the_field('video_text', 2701) : the_field('video_text', 15); ?></p>
            <?php 
            $image = get_field('video_decor');
            if( !empty( $image ) ): ?>
               <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="decor-video video-section-decor" />
            <?php endif; ?>
         </div><!-- /.video-section-text -->

         <div class="video-section-video">
            <?php ($userEs) ? the_field('video_url', 2701) : the_field('video_url', 15); ?>
         </div><!-- /.video-section-video -->
      
      </div><!-- /.video-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.video-section -->
<div id="benefits" class="separator"></div>

<div class="benefits-section">
   <div class="container">
      <div class="benefits-section-wrapper">
         <?php 
         $image = get_field('benefits_image');
         if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="benefits-section-img" />
         <?php endif; ?>
         
         <div class="benefits-section-text">
            <h2 class="benefits-section-title"><?php ($userEs) ? the_field('benefits_title', 2701) : the_field('benefits_title', 15); ?></h2>
            <p class="benefits-section-description"><?php ($userEs) ? the_field('benefits_text', 2701) : the_field('benefits_text', 15); ?></p>
            <div class="benefits-features">
               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php ($userEs) ? the_field('benefit_#1', 2701) : the_field('benefit_#1', 15); ?></span>
               </div><!-- /.benefits-features-item -->

               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php ($userEs) ? the_field('benefit_#2', 2701) : the_field('benefit_#2', 15); ?></span>
               </div><!-- /.benefits-features-item -->

               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php ($userEs) ? the_field('benefit_#3', 2701) : the_field('benefit_#3', 15); ?></span>
               </div><!-- /.benefits-features-item -->

               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php ($userEs) ? the_field('benefit_#4', 2701) : the_field('benefit_#4', 15); ?></span>
               </div><!-- /.benefits-features-item -->

               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php ($userEs) ? the_field('benefit_#4', 2701) : the_field('benefit_#4', 15); ?></span>
               </div><!-- /.benefits-features-item -->

               <div class="benefits-features-item">
                  <svg width="25" height="20" fill="#21a2ca" class="icon arrow-icon">
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#arrow"></use>
                  </svg>
                  <span class="benefits-features-item-text"><?php ($userEs) ? the_field('benefit_#4', 2701) : the_field('benefit_#4', 15); ?></span>
               </div><!-- /.benefits-features-item -->
            </div><!-- /.benefits-features -->
         </div><!-- /.benefits-section-text -->
         
      </div><!-- /.benefits-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.benefits-section -->
<div id="gift" class="separator"></div>

<div class="gift-section">
   <div class="container">
      <div class="gift-section-wrapper">
         <div class="gift-section-text">
            <h2 class="gift-section-title"><?php ($userEs) ? the_field('gift_title', 2701) : the_field('gift_title', 15); ?></h2>
            <p class="gift-section-description"><?php ($userEs) ? the_field('gift_text', 2701) : the_field('gift_text', 15); ?></p>


            <?php
               $imageGiftDecorUs = get_field('gift_decor', 15);
               $imageGiftDecorEs = get_field('gift_decor', 2701);

               if ($userEs) {
                  if( !empty( $imageGiftDecorEs ) ) { ?>
                     <img src="<?php echo esc_url($imageGiftDecorEs['url']); ?>" alt="<?php echo esc_attr($imageGiftDecorEs['alt']); ?>" class="decor-gift" />
                  <?php }
               } else {
                  if( !empty( $imageGiftDecorUs ) ) { ?>
                     <img src="<?php echo esc_url($imageGiftDecorUs['url']); ?>" alt="<?php echo esc_attr($imageGiftDecorUs['alt']); ?>" class="decor-gift" />
                  <?php }
               }
            ?>

            <button class="button button-gift" onclick="location.href='<?php ($userEs) ? the_field('gift_button_url', 2701) : the_field('gift_button_url', 15); ?>'" type="button">
               <?php ($userEs) ? the_field('gift_button_text', 2701) : the_field('gift_button_text', 15); ?>
            </button>
         </div><!-- /.gift-section-text -->

         <?php
            $imageGiftUs = get_field('gift_image', 15);
            $imageGiftEs = get_field('gift_image', 2701);

            if ($userEs) {
               if( !empty( $imageGiftEs ) ) { ?>
                  <img src="<?php echo esc_url($imageGiftEs['url']); ?>" alt="<?php echo esc_attr($imageGiftEs['alt']); ?>" class="gift-section-image" />
               <?php }
            } else {
               if( !empty( $imageGiftUs ) ) { ?>
                  <img src="<?php echo esc_url($imageGiftUs['url']); ?>" alt="<?php echo esc_attr($imageGiftUs['alt']); ?>" class="gift-section-image" />
               <?php }
            }
         ?>
         
      </div><!-- /.gift-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.gift-section -->
<div id="reviews" class="separator"></div>

<div class="review-section">
   <div class="container">
      <div class="review-section-wrapper">
         <h2 class="review-section-title"><?php ($userEs) ? the_field('review_title', 2701) : the_field('review_title', 15); ?></h2>
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
                  <span class="review-section-name"><?php ($userEs) ? the_field('review_author_name', 2701) : the_field('review_author_name', 15); ?></span>
                  <div class="review-section-best-item">
                     <img src="<?php echo get_template_directory_uri() . '/assets/images/stars-' . get_field('review_rate_stars')  . '.png' ?> " alt="Author Rank" class="review-section-best-item-stars">

                     <h3 class="review-section-best-item-title"><?php echo get_the_title(); ?></h3>
                     <p class="review-section-best-item-text"><?php echo get_the_content(); ?></p>
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

         <!-- <a href="#" class="review-section-readmore">View all reviews</a> -->
         <!-- /.review-section-readmore -->
         
         <div id="faq" class="separator"></div>
      </div><!-- /.review-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.review-section -->

<div class="questions-section">
   <div class="container">
      <div class="questions-section-wrapper">
         <h2 class="questions-section-title"><?php ($userEs) ? the_field('questions_title', 2701) : the_field('questions_title', 15); ?></h2>
         <div class="accordion-header"><?php ($userEs) ? the_field('question_1', 2701) : the_field('question_1', 15); ?></div>
         <div class="accordion-body"><?php ($userEs) ? the_field('answer_1', 2701) : the_field('answer_1', 15); ?></div>
         
         <div class="accordion-header"><?php ($userEs) ? the_field('question_2', 2701) : the_field('question_2', 15); ?></div>
         <div class="accordion-body"><?php ($userEs) ? the_field('answer_2', 2701) : the_field('answer_2', 15); ?></div>
         
         <div class="accordion-header"><?php ($userEs) ? the_field('question_3', 2701) : the_field('question_3', 15); ?></div>
         <div class="accordion-body"><?php ($userEs) ? the_field('answer_3', 2701) : the_field('answer_3', 15); ?></div>
         
         <div class="accordion-header"><?php ($userEs) ? the_field('question_4', 2701) : the_field('question_4', 15); ?></div>
         <div class="accordion-body"><?php ($userEs) ? the_field('answer_4', 2701) : the_field('answer_4', 15); ?></div>
         
         <div class="accordion-header"><?php ($userEs) ? the_field('question_5', 2701) : the_field('question_5', 15); ?></div>
         <div class="accordion-body"><?php ($userEs) ? the_field('answer_5', 2701) : the_field('answer_5', 15); ?></div>

         <!-- 
         <div class="accordion-header"><?php ($userEs) ? the_field('question_6', 2701) : the_field('question_6', 15); ?></div>
         <div class="accordion-body"><?php ($userEs) ? the_field('answer_6', 2701) : the_field('answer_6', 15); ?></div>

         <div class="accordion-header"><?php ($userEs) ? the_field('question_7', 2701) : the_field('question_7', 15); ?></div>
         <div class="accordion-body"><?php ($userEs) ? the_field('answer_7', 2701) : the_field('answer_7', 15); ?></div>
         
         <div class="accordion-header"><?php ($userEs) ? the_field('question_8', 2701) : the_field('question_8', 15); ?></div>
         <div class="accordion-body"><?php ($userEs) ? the_field('answer_8', 2701) : the_field('answer_8', 15); ?></div>
         
         <div class="accordion-header"><?php ($userEs) ? the_field('question_9', 2701) : the_field('question_9', 15); ?></div>
         <div class="accordion-body"><?php ($userEs) ? the_field('answer_9', 2701) : the_field('answer_9', 15); ?></div>

         <div class="accordion-header"><?php ($userEs) ? the_field('question_10', 2701) : the_field('question_10', 15); ?></div>
         <div class="accordion-body"><?php ($userEs) ? the_field('answer_10', 2701) : the_field('answer_10', 15); ?></div>
         -->
      </div><!-- /.questions-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.questions-section -->

<div class="action-section">
   <div class="container">
      <div class="action-section-wrapper">
         <div class="action-section-text">
            <h2 class="action-section-title"><?php ($userEs) ? the_field('action_title', 2701) : the_field('action_title', 15); ?></h2>

            <?php
               $imageActionUs = get_field('action_decor', 15);
               $imageActionEs = get_field('action_decor', 2701);

               if ($userEs) {
                  if( !empty( $imageActionEs ) ) { ?>
                     <img src="<?php echo esc_url($imageActionEs['url']); ?>" alt="<?php echo esc_attr($imageActionEs['alt']); ?>" class="decor-action action-section-decor" />
                  <?php }
               } else {
                  if( !empty( $imageActionEs ) ) { ?>
                     <img src="<?php echo esc_url($imageActionUs['url']); ?>" alt="<?php echo esc_attr($imageActionUs['alt']); ?>" class="decor-action action-section-decor" />
                  <?php }
               }
            ?>

            <button class="button button-gift" onclick="location.href='<?php ($userEs) ? the_field('action_button_url', 2701) : the_field('action_button_url', 15); ?>'" type="button">
               <?php ($userEs) ? the_field('action_button_text', 2701) : the_field('action_button_text', 15); ?>
            </button>
         </div><!-- /.action-section-text -->

      </div><!-- /.action-section-wrapper -->
   </div><!-- /.container -->
</div><!-- /.action-section -->

<?php get_footer(); ?>