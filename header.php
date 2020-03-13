<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta carset="utf-8">
    <meta name="description" content="Охраняемая автостоянка в Санк-Петербурге, Софийская 63">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="автомобильные стоянки, автостоянки, автостоянка, автостоянка в спб, охраняемая автостоянка, платная автостоянка, стоянка, стоянка в спб, стоянки, стоянки в петербурге">
    <meta name="yandex-verification" content="81e7d780a9987ae4" />
    <title>Автопарковка Софийская 63</title>
    <link rel="canonical" href="https://sofi63.ru"/>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/assets/fonts/ptsansnarrow.woff2" as="font">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/assets/fonts/ptsansnarrowbold.woff2" as="font">
    
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
    <?php wp_head() ?>
  </head>
  <body>
    <header class="main-header">
      <nav class="main-nav main-nav--closed main-nav--nojs">
        <button class="main-nav__toggle" type="button"><span class="visually-hidden">Открыть меню</span></button>
        
        <?php
        wp_nav_menu(array(
        'theme_location'  => 'head_menu', // область темы
        
        'container'       => 'div', // блок, в который нужно поместить меню, укажите false, чтобы не помещать в блок
        'container_class' => 'main-nav__wrapper', // css-класс блока
        
        'menu_class'      => 'main-nav__list site-list', // css-класс меню
        
        
        'depth'           => 0 // количество уровней вложенности
        ));
        ?>
      </nav>
      <!--href="mailto:vdrynov1979@mail.ru"-->
      <div class="logo">
        <img class="logo__title" src="<?php echo get_template_directory_uri() ?>/assets/img/sofy_white.png" width="283" height="40" alt="Охраняемая автостоянка на Софийской 63">
        <img class="logo__title" src="<?php echo get_template_directory_uri() ?>/assets/img/auto_white.png" Width="150" >
      </div>

    </header>