<?php get_header(); ?>

   <main class="site-main">
      <article>
         <h1 class="post-header-title"><?php the_title(); ?></h1>
         <div class="post-content">
            <div class="container">
               <div class="post-content-wrapper">
                  <div class="post-content-text">
                     <?php the_content();?>
                  </div><!-- /.post-content-text -->
               </div><!-- /.post-content-wrapper -->
            </div><!-- .container -->
         </div><!-- .post-content -->
      </article>
   </main>

<?php get_footer(); ?>