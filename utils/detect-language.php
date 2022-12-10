<?php
   $checkUser = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
   $userEs = $checkUser === 'ru';
   $userUs = $checkUser === 'en';
?>