<?php
   // Get data Language from browser
   $checkUser = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
   $browserEs = $checkUser === 'ru';
   $browserUs = $checkUser === 'en';

   // Conditions: Buttons switcher
   $checkCookie = $_COOKIE;
   $cookieES = '';
   $cookieUS = '';

   if($checkCookie) {
      $cookieES = $_COOKIE['lang'] === 'es';
      $cookieUS = $_COOKIE['lang'] === 'us';
   }


   $userEs = $cookieES || $browserEs; // TO DEL ============================

   if($browserEs && $cookieES) {
      $userEs = true;
   } elseif ($browserEs && $cookieUS) {
      $userEs = false;
   }