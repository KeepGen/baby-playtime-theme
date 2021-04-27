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
            <span class="footer-article-title"><?php the_field('footer_article_text', 15) ?></span>
            <a href="" class="footer-article-item">5 ways to make tummy time truly special</a>
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
    </footer>

   <?php wp_footer(); ?>
   </body>
</html>