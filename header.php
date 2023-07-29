<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <!-- Swiper -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> -->
  <!-- css -->
  <!-- <link rel="stylesheet" href="./assets/css/style.css" /> -->
  <!-- JavaScript -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script defer src="./assets/js/script.js"></script> -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="p-header__inner">
      <h1 class="p-header__logo">
        <a href="" class="p-header__logoLink">CodeUps</a>
      </h1>
      <div class="p-header__drawer c-hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="p-header__pc-nav pc-nav ">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="#">NEWS</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">SERVICE</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">WORKS</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">COMPANY</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">RECRUIT</a>
          </li>
          <li class="pc-nav__item">
            <a href="#">CONTACT</a>
          </li>
        </ul>
      </nav>
      <nav class="p-header__sp-nav sp-nav js-sp-nav">
        <ul class="sp-nav__items">
          <li class="sp-nav__item">
            <a href="#">NEWS</a>
          </li>
          <li class="sp-nav__item">
            <a href="#">SERVICE</a>
          </li>
          <li class="sp-nav__item">
            <a href="#">WORKS</a>
          </li>
          <li class="sp-nav__item">
            <a href="#">COMPANY</a>
          </li>
          <li class="sp-nav__item">
            <a href="#">RECRUIT</a>
          </li>
          <li class="sp-nav__item">
            <a href="#">CONTACT</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>