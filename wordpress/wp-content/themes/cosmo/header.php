<html>
  <head>
    <title><?php wp_title('｜', true, 'right'); ?>コスモジュク</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0"/>
    <meta name="title" content="<?php wp_title('｜', true, 'right'); ?>コスモジュク"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta property="og:url" content="http://renewal.cosmojuku.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php wp_title('｜', true, 'right'); ?>コスモジュク"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="http://renewal.cosmojuku.com/assets/images/share/ogp.png"/>
    <meta property="og:site_name" content="コスモジュク"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="<?php wp_title('｜', true, 'right'); ?>コスモジュク"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content="http://renewal.cosmojuku.com/assets/images/share/ogp.png"/>
    <meta name="format-detection" content="telephone=no"/>
    <link rel="shortcut icon" href="<?php echo esc_url( home_url( '/') ); ?>/assets/images/favicon.ico"/>
    <link rel="icon" sizes="96x96" href="/assets/images/favicon.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( home_url( '/') ); ?>/assets/images/touch-icon.png"/>
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
      <div class="c-header">
        <div class="c-header__inner"><a class="c-header__logo" href="/"><img src="/assets/images/common/logo.png" alt="ロゴ"/></a>
          <div class="c-header__links u-is-pc">
            <div class="c-header__links__inner">
              <ul class="c-header__links__list">
                <li class="c-header__links__item" data-module="currentActive" data-options="{&quot;name&quot;:&quot;top&quot;}"><a class="c-header__links__page" href="/">トップ</a></li>
                <li class="c-header__links__item has-second" data-module="currentActive" data-options="{&quot;name&quot;:&quot;about&quot;}"><a class="c-header__links__page" href="javascript:void(0)">コスモジュクについて</a>
                  <div class="c-header__links__second">
                    <div class="c-header__links__second__inner">
                      <ul class="c-header__links__second__list">
                        <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/about/">コスモジュクとは</a></li>
                        <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/flow/">入塾の流れ ＆ よくある質問</a></li>
                        <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/teachers/">講師紹介 ＆ 教室紹介</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="c-header__links__item" data-module="currentActive" data-options="{&quot;name&quot;:&quot;course&quot;}"><a class="c-header__links__page" href="/course/">コース・料金</a></li>
                <li class="c-header__links__item" data-module="currentActive" data-options="{&quot;name&quot;:&quot;topics&quot;}"><a class="c-header__links__page" href="/topics/">コスモニュース</a></li>
              </ul>
              <div class="c-header__links__contacus"><a class="c-button c-button-small" href="/contact/">
                  <div class="c-button__text">
                    <p>お問い合わせ</p>
                  </div>
                  <div class="c-button__arrow"></div></a></div>
            </div>
          </div>
          <div class="c-header__links u-is-sp" data-module-hamburger-roll="target">
            <div class="c-header__links__inner">
              <ul class="c-header__links__list">
                <li class="c-header__links__item is-top"><a class="c-header__links__page" href="/">トップ</a></li>
                <li class="c-header__links__item is-about">
                  <div class="c-header__links__page">コスモジュクについて
                    <div class="c-header__links__second">
                      <div class="c-header__links__second__inner">
                        <ul class="c-header__links__second__list">
                          <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/about/">コスモジュクとは</a></li>
                          <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/flow/">入塾の流れ ＆ よくある質問</a></li>
                          <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/teachers/">講師紹介 ＆ 教室紹介</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="c-header__links__item is-course"><a class="c-header__links__page" href="/course/">コース・料金</a></li>
                <li class="c-header__links__item is-topics"><a class="c-header__links__page" href="/topics/">コスモニュース</a></li>
              </ul>
              <div class="c-header__links__contacus"><a class="c-button c-button-small" href="/contact/">
                  <div class="c-button__text">
                    <p>お問い合わせ</p>
                  </div>
                  <div class="c-button__arrow"></div></a></div>
            </div>
          </div><a class="c-header__hamburger u-is-sp" href="javascript:void(0)" data-module="hamburger">
            <div class="c-header__hamburger__line"></div></a>
        </div>
      </div>
