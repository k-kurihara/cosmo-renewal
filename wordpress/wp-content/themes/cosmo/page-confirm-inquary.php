<?php
/*
Template Name: 問い合わせ-確認（お問い合わせ）
Template Post Type: page
*/
?>
<html>
  <head>
    <title>お問い合わせ｜コスモジュク</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0"/>
    <meta name="title" content="お問い合わせ｜コスモジュク"/>
    <meta name="description" content="コスモジュクに関するご相談、教室見学や体験申込、資料のご請求など、何でもお気軽にお問い合わせくださいLINEでカンタン問合せも受付中。"/>
    <meta name="keywords" content="塾,個別指導,集団授業,受験,コスモジュク,コスモ,上永谷,日限山,丸山台,舞岡,野庭,別所,上大岡,弘明寺,大久保,芹が谷"/>
    <meta property="og:url" content="http://cosmojuku.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="お問い合わせ｜コスモジュク"/>
    <meta property="og:description" content="コスモジュクに関するご相談、教室見学や体験申込、資料のご請求など、何でもお気軽にお問い合わせくださいLINEでカンタン問合せも受付中。"/>
    <meta property="og:image" content="http://cosmojuku.com/assets/images/share/ogp.png"/>
    <meta property="og:site_name" content="コスモジュク"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="お問い合わせ｜コスモジュク"/>
    <meta name="twitter:description" content="コスモジュクに関するご相談、教室見学や体験申込、資料のご請求など、何でもお気軽にお問い合わせくださいLINEでカンタン問合せも受付中。"/>
    <meta name="twitter:image" content="http://cosmojuku.com/assets/images/share/ogp.png"/>
    <meta name="format-detection" content="telephone=no"/>
    <link rel="shortcut icon" href="https://cosmojuku.com//assets/images/favicon.ico"/>
    <link rel="icon" sizes="96x96" href="/assets/images/favicon.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="https://cosmojuku.com//assets/images/touch-icon.png"/>
    <link rel="stylesheet" href="/assets/styles/app.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=UA-121793051-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-121793051-1');
    </script>
    <?php wp_head(); ?>
  </head>
  <body>
    <main>
  <?php get_header(); ?>




<div class="p-contact-confirmation">
        <div class="p-contact-confirmation__inner">


        <div class="p-contact-confirmation__header__primary">
          <h1 class="p-contact-confirmation__header__primary__title">入力内容のご確認</h1>
        </div>
        <div class="p-contact-confirmation__contact__type">
          <div class="p-contact-confirmation__contact__type__label">お問い合わせ種別</div>
          <div class="p-contact-confirmation__contact__type__text">お問い合わせ</div>
        </div>


          <?php echo do_shortcode('[mwform_formkey key="294"]'); ?>

        </div>
      </div>
      <section>
      <div class="c-section">
        <div class="c-section__inner">
          <div class="c-section__contents">
            <div class="c-breadcrumb">
              <ul class="c-breadcrumb__list">
                <li class="c-breadcrumb__list__item"><a href="/">トップ</a></li>
                <li class="c-breadcrumb__list__item">お問い合わせ</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </section>





<?php get_footer(); ?>