<?php include 'utils/detect-language.php'; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<script>
   function setEspLang() {
      let langEs = 'es';
      let d = new Date();
      d.setTime(d.getTime() + (1*24*60*60*1000));
      let expires = "expires="+ d.toUTCString();
      document.cookie = 'lang' + "=" + langEs + ";" + expires + ";path=/";
      return location.reload();
   }

   function removeEspLang() {
      let langEs = 'us';
      let d = new Date();
      d.setTime(d.getTime() + (1*24*60*60*1000));
      let expires = "expires="+ d.toUTCString();
      document.cookie = 'lang' + "=" + langEs + ";" + expires + ";path=/";
      return location.reload();
   }
</script>



<div id="top" class="separator"></div>
<header class="header">
   <div class="language__selector">
      <div class="container language__container">
         <button class="language__usa language__button" onclick="removeEspLang();">
            <span>🇺🇸 English</span>
         </button>

         <button class="language__esp language__button" onclick="setEspLang();">
            <span>🇪🇸 Español</span>
         </button><br>
      </div><!-- ./container -->
   </div><!-- ./language__selector -->

   <div class="container">
      <div class="header-wrapper">
         <?php
            if (has_custom_logo() ) {
               the_custom_logo();
            } else {
               echo 'Baby-PlayTime';
            }

            if ($userEs) {
               wp_nav_menu( [
                  'theme_location'  => 'header_es_menu',
                  'container'       => 'nav',
                  'container_class' => 'header-nav',
                  'menu_class'      => 'header-menu',
                  'echo'            => true,
               ] );
            } else {
               wp_nav_menu( [
                  'theme_location'  => 'header_menu',
                  'container'       => 'nav',
                  'container_class' => 'header-nav',
                  'menu_class'      => 'header-menu',
                  'echo'            => true,
               ] );
            }
         ?>

         <a href="#" class="header-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
         </a>

      </div>
      <!-- /.header-wrapper -->
   </div>
</header>