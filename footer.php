   <footer class="footer">
      <div class="container">
        
         <?php dynamic_sidebar( 'sidebar-footer' ); ?>

         <?php
            wp_nav_menu( [
            'theme_location'  => 'footer_menu',
            'container'       => 'nav',
            'container_class' => 'footer-nav-wrapper',
            'menu_class'      => 'footer-nav',
            'echo'            => true,
            ] );
         ?>

         <div class="footer-articles-wrapper">
            <!-- <span class="footer-article-title"><?php the_field('footer_article_text', 15) ?></span> -->
            <?php		
               global $post;

               $query = new WP_Query( [
                  'posts_per_page' => 5,
               ] );

               if ( $query->have_posts() ) {
                  while ( $query->have_posts() ) {
                     $query->the_post();
                     ?>
                        <a href="<?php the_permalink() ?>" class="footer-article-item">
                           <?php the_title(); ?>
                        </a>
                     <?php 
                  }
               } else {
                  ?>
                  Articles are not added yet, please come back later or add some.
                  <?php
               }
               wp_reset_postdata(); // Сбрасываем $post
            ?>

         </div>
         <!-- /.footer-articles-wrapper -->

         <div class="footer-logo">
            <svg width="100%" height="32" fill="#ffffff" class="logo ooter-logo-img">
               <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#logo-footer"></use>
            </svg>
         </div><!-- /.footer-logo -->

         <span class="footer-copyright">
            Copyright &copy; <?php echo date(' Y ') ?> &nbsp; <span class="footer-copyright-text"> <?php the_field('footer_copyright_text', 15) ?>
         </span><!-- /.footer-copyright -->

      </div><!-- /.container -->
      
      <a href="#top" id="totop" class="icontotop">
         <svg width="50" height="50" fill="#fd9b03" class="logo ooter-logo-img">
            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/images/sprite.svg#totop"></use>
         </svg>
      </a>

    </footer>

   <?php wp_footer(); ?>
   </body>
</html>