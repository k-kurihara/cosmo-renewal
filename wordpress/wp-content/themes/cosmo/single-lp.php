
<html>
  <head>
    <title>[記事名]｜コスモNEWS｜コスモジュク</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0"/>
    <meta name="title" content="[記事名]｜コスモNEWS｜コスモジュク"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta property="og:url" content="http://localhost:3000"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="[記事名]｜コスモNEWS｜コスモジュク"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="http://localhost:3000/assets/images/share/ogp.jpg"/>
    <meta property="og:site_name" content="[記事名]｜コスモNEWS｜コスモジュク"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="[記事名]｜コスモNEWS｜コスモジュク"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content="http://localhost:3000/assets/images/share/ogp.jpg"/>
    <meta name="format-detection" content="telephone=no"/>
    <link rel="shortcut icon" href="/assets/images/favicon.ico"/>
    <link rel="icon" sizes="96x96" href="/assets/images/favicon.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/touch-icon.png"/>
    <link rel="stylesheet" href="/assets/styles/app.css"/>
  </head>
  <body>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); 
    /* ループ開始 */ ?>
    <?php the_content(); ?>



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




      <div class="p-lp">
        <div class="p-lp__contents">


        <?php
          $lp_key_visual_pc = SCF::get('lp_key_visual_pc');
          $lp_key_visual_pc = wp_get_attachment_image_src( $lp_key_visual_pc , 'full' );
          $lp_key_visual_pc_url = esc_url($lp_key_visual_pc[0]);

          $lp_key_visual_sp = SCF::get('lp_key_visual_sp');
          $lp_key_visual_sp = wp_get_attachment_image_src( $lp_key_visual_sp , 'full' );
          $lp_key_visual_sp_url = esc_url($lp_key_visual_sp[0]);
        ?>

        <?php /*  KV image */ ?>
        <?php if( $lp_key_visual_pc_url ){?>
          <div class="p-lp__kv u-is-pc">
            <img class="u-is-pc" src="<?php echo $lp_key_visual_pc_url;?>" alt=""/>
          </div>
        <?php } ?>

        <?php if( $lp_key_visual_sp_url ){?>
          <div class="p-lp__kv u-is-sp">
            <img class="u-is-pc" src="<?php echo $lp_key_visual_sp_url;?>" alt=""/>
          </div>
        <?php } ?>


        
        <?php /*  投稿ループ　start */ ?>
          <?php
            $cf_group = SCF::get('投稿グループ');
            foreach ($cf_group as $field_name => $field_value ) {
              $lp_step_blue_title_primary = $field_value['lp_step_blue_title_primary']; // ステップ青_大見出し
              $lp_step_blue_label_1 = $field_value['lp_step_blue_label_1']; // ステップ青_左_ラベル_1
              $lp_step_blue_title_secondary_1 = $field_value['lp_step_blue_title_secondary_1']; // ステップ青_左_中見出し_1
              $lp_step_blue_text_1 = $field_value['lp_step_blue_text_1']; // ステップ青_左_テキスト_1
              $lp_step_blue_image_1 = $field_value['lp_step_blue_image_1']; // ステップ青_右_画像_1
              $lp_step_blue_image_1 = wp_get_attachment_image_src( $lp_step_blue_image_1 , 'full' ); // ステップ青_右_画像_1_fullサイズ
              $lp_step_blue_image_1_url = esc_url($lp_step_blue_image_1[0]); // ステップ青_右_画像_1_url

              $lp_step_blue_label_2 = $field_value['lp_step_blue_label_2']; // ステップ青_左_ラベル_2
              $lp_step_blue_title_secondary_2 = $field_value['lp_step_blue_title_secondary_2']; // ステップ青_左_中見出し_2
              $lp_step_blue_text_2 = $field_value['lp_step_blue_text_2']; // ステップ青_左_テキスト_2
              $lp_step_blue_image_2 = $field_value['lp_step_blue_image_2']; // ステップ青_右_画像_2
              $lp_step_blue_image_2 = $field_value['lp_step_blue_image_2']; // ステップ青_右_画像_2
              $lp_step_blue_image_2 = wp_get_attachment_image_src( $lp_step_blue_image_2 , 'full' ); // ステップ青_右_画像_2_fullサイズ
              $lp_step_blue_image_2_url = esc_url($lp_step_blue_image_2[0]); // ステップ青_右_画像_2_url

              $lp_step_blue_label_3 = $field_value['lp_step_blue_label_3']; // ステップ青_左_ラベル_3
              $lp_step_blue_title_secondary_3 = $field_value['lp_step_blue_title_secondary_3']; // ステップ青_左_中見出し_3
              $lp_step_blue_text_3 = $field_value['lp_step_blue_text_3']; // ステップ青_左_テキスト_3
              $lp_step_blue_image_3 = $field_value['lp_step_blue_image_3']; // ステップ青_右_画像_3
              $lp_step_blue_image_3 = $field_value['lp_step_blue_image_3']; // ステップ青_右_画像_3
              $lp_step_blue_image_3 = wp_get_attachment_image_src( $lp_step_blue_image_3 , 'full' ); // ステップ青_右_画像_3_fullサイズ
              $lp_step_blue_image_3_url = esc_url($lp_step_blue_image_3[0]); // ステップ青_右_画像_3_url

              $lp_step_title_primary = $field_value['lp_step_title_primary']; // ステップ茶_大見出し
              $lp_step_brown_label_1 = $field_value['lp_step_brown_label_1']; // ステップ茶_ラベル_1
              $lp_step_brown_title_secondary_1 = $field_value['lp_step_brown_title_secondary_1']; // ステップ茶_中見出し_1
              $lp_step_brown_title_tertiary_1_1 = $field_value['lp_step_brown_title_tertiary_1_1']; // ステップ茶_小見出し_1_1
              $lp_step_brown_title_tertiary_1_2 = $field_value['lp_step_brown_title_tertiary_1_2']; // ステップ茶_小見出し_1_2
              $lp_step_brown_text_1 = $field_value['lp_step_brown_text_1']; // ステップ茶_テキスト_1
              $lp_step_brown_label_2 = $field_value['lp_step_brown_label_2']; // ステップ茶_ラベル_2
              $lp_step_brown_title_secondary_2 = $field_value['lp_step_brown_title_secondary_2']; // ステップ茶_中見出し_2
              $lp_step_brown_title_tertiary_2_1 = $field_value['lp_step_brown_title_tertiary_2_1']; // ステップ茶_小見出し_2_1
              $lp_step_brown_title_tertiary_2_2 = $field_value['lp_step_brown_title_tertiary_2_2']; // ステップ茶_小見出し_2_2
              $lp_step_brown_text_2 = $field_value['lp_step_brown_text_2']; // ステップ茶_テキスト_2
              $lp_step_brown_label_3 = $field_value['lp_step_brown_label_3']; // ステップ茶_ラベル_3
              $lp_step_brown_title_secondary_3 = $field_value['lp_step_brown_title_secondary_3']; // ステップ茶_中見出し_3
              $lp_step_brown_title_tertiary_3_1 = $field_value['lp_step_brown_title_tertiary_3_1']; // ステップ茶_小見出し_3_1
              $lp_step_brown_title_tertiary_3_2 = $field_value['lp_step_brown_title_tertiary_3_2']; // ステップ茶_小見出し_3_2
              $lp_step_brown_text_3 = $field_value['lp_step_brown_text_3']; // ステップ茶_テキスト_3

              $lp_image_wide = $field_value['lp_image_wide']; // 画像（ワイド幅）
              $lp_image_wide = wp_get_attachment_image_src( $lp_image_wide , 'full' ); // 画像（ワイド幅）_fullサイズ
              $lp_image_wide_url = esc_url($lp_image_wide[0]); // 画像（ワイド幅）_url

              $lp_image = $field_value['lp_image']; // 画像（全幅）
              $lp_image = wp_get_attachment_image_src( $lp_image , 'full' ); // 画像（全幅）_fullサイズ
              $lp_image_url = esc_url($lp_image[0]); // 画像（全幅）_url

              $lp_title_type = $field_value['lp_title_type']; // 見出し種類
              $lp_title_text = $field_value['lp_title_text']; // 見出しテキスト
              $lp_text = $field_value['lp_text']; // 通常テキスト

              $lp_colmn_left_image = $field_value['lp_colmn_left_image']; // 2カラム_左_画像
              $lp_colmn_left_image = wp_get_attachment_image_src( $lp_colmn_left_image , 'full' ); // 画像（全幅）_fullサイズ
              $lp_colmn_left_image_url = esc_url($lp_colmn_left_image[0]); // 画像（全幅）_url

              $lp_colmn_left_title = $field_value['lp_colmn_left_title']; // 2カラム_左_見出し
              $lp_colmn_left_text = $field_value['lp_colmn_left_text']; // 2カラム_左_テキスト
              $lp_colmn_right_image = $field_value['lp_colmn_right_image']; // 2カラム_右_画像
              $lp_colmn_right_image = wp_get_attachment_image_src( $lp_colmn_right_image , 'full' ); // 画像（全幅）_fullサイズ
              $lp_colmn_right_image_url = esc_url($lp_colmn_right_image[0]); // 画像（全幅）_url
              $lp_colmn_right_title = $field_value['lp_colmn_right_title']; // 2カラム_右_見出し
              $lp_colmn_right_text = $field_value['lp_colmn_right_text']; // 2カラム_右_テキスト

              $lp_cv_button_text = $field_value['lp_cv_button_text']; // 下部CVボタン文言
              $lp_cv_button_url = $field_value['lp_cv_button_url']; // 下部CVボタンURL
          ?>



            <?php /*  ステップ青 start */ ?>
            <?php if( $lp_step_blue_title_primary || $lp_step_blue_label_1 || $lp_step_blue_title_secondary_1 || $lp_step_blue_text_1|| $lp_step_blue_image_1) { ?>
              <div class="p-lp__step__blue">

                <?php /*  ステップ青_大見出し */ ?>
                <?php if( $lp_step_blue_title_primary ) { ?>
                  <div class="p-lp__step__blue__title">
                    <h3><?php echo nl2br($lp_step_blue_title_primary);?></h3>
                  </div>
                <?php } ?>

                <?php /*  ステップ青_contents start */ ?>
                <?php if( $lp_step_blue_label_1 || $lp_step_blue_title_secondary_1 || $lp_step_blue_text_1 || $lp_step_blue_image_1_url) { ?>

                  <?php /*  ステップ青_content_1 start */ ?>
                  <div class="p-lp__step__blue__content">
                    <div class="p-lp__step__blue__content__item">

                      <?php if( $lp_step_blue_label_1) { ?>
                        <div class="p-lp__step__blue__content__label">
                          <?php echo nl2br($lp_step_blue_label_1);?>
                        </div>
                      <?php } ?>

                      <?php if( $lp_step_blue_text_1) { ?>
                        <div class="p-lp__step__blue__content__title">
                        <?php echo nl2br($lp_step_blue_text_1);?>
                        </div>
                      <?php } ?>

                      <?php if( $lp_step_blue_text_1) { ?>
                        <div class="p-lp__step__blue__content__text">
                          <?php echo nl2br($lp_step_blue_text_1);?>
                        </div>
                      <?php } ?>
                    </div>
                    <div class="p-lp__step__blue__content__item">
                      <?php if( $lp_step_blue_image_1_url) { ?>
                        <div class="p-lp__step__blue__content__image">
                          <img src="<?php echo $lp_step_blue_image_1_url;?>"/>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                  <?php /*  ステップ青_content_1 end */ ?>

                  <?php /*  ステップ青_content_2 start */ ?>
                  <?php if( $lp_step_blue_label_2 || $lp_step_blue_title_secondary_2 || $lp_step_blue_text_2 || $lp_step_blue_image_2_url) { ?>
                    <div class="p-lp__step__blue__content">
                      <div class="p-lp__step__blue__content__item">

                        <?php if( $lp_step_blue_label_2) { ?>
                          <div class="p-lp__step__blue__content__label">
                            <?php echo nl2br($lp_step_blue_label_2);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_blue_text_2) { ?>
                          <div class="p-lp__step__blue__content__title">
                          <?php echo nl2br($lp_step_blue_text_2);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_blue_text_2) { ?>
                          <div class="p-lp__step__blue__content__text">
                            <?php echo nl2br($lp_step_blue_text_2);?>
                          </div>
                        <?php } ?>
                      </div>
                      <div class="p-lp__step__blue__content__item">
                        <?php if( $lp_step_blue_image_2_url) { ?>
                          <div class="p-lp__step__blue__content__image">
                            <img src="<?php echo $lp_step_blue_image_2_url;?>"/>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  <?php } ?>
                  <?php /*  ステップ青_content_2 end */ ?>

                  <?php /*  ステップ青_content_3 start */ ?>
                  <?php if( $lp_step_blue_label_3 || $lp_step_blue_title_secondary_3 || $lp_step_blue_text_3 || $lp_step_blue_image_3_url) { ?>
                    <div class="p-lp__step__blue__content">
                      <div class="p-lp__step__blue__content__item">

                        <?php if( $lp_step_blue_label_3) { ?>
                          <div class="p-lp__step__blue__content__label">
                            <?php echo nl2br($lp_step_blue_label_3);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_blue_text_3) { ?>
                          <div class="p-lp__step__blue__content__title">
                          <?php echo nl2br($lp_step_blue_text_3);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_blue_text_3) { ?>
                          <div class="p-lp__step__blue__content__text">
                            <?php echo nl2br($lp_step_blue_text_3);?>
                          </div>
                        <?php } ?>
                      </div>
                      <div class="p-lp__step__blue__content__item">
                        <?php if( $lp_step_blue_image_3_url) { ?>
                          <div class="p-lp__step__blue__content__image">
                            <img src="<?php echo $lp_step_blue_image_3_url;?>"/>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  <?php } ?>
                  <?php /*  ステップ青_content_3 end */ ?>

                  <?php /*  ステップ青_contents end */ ?>

                <?php } ?>
              </div>
            <?php } ?>
            <?php /*  ステップ青 end */ ?>



            <?php /*  ステップ茶 start */ ?>
            <?php if( $lp_step_title_primary || $lp_step_brown_label_1 || $lp_step_brown_title_secondary_1 || $lp_step_brown_title_tertiary_1_1|| $lp_step_brown_text_1) { ?>
              <div class="p-lp__step">

                <?php /*  ステップ茶_大見出し */ ?>
                <?php if( $lp_step_title_primary ) { ?>
                  <div class="p-lp__step__title">
                    <h3><?php echo nl2br($lp_step_title_primary);?></h3>
                  </div>
                <?php } ?>

                <?php /*  ステップ茶_contents start */ ?>
                <?php if( $lp_step_brown_label_1 || $lp_step_brown_title_secondary_1 || $lp_step_brown_title_tertiary_1_1 || $lp_step_brown_text_1) { ?>

                  <?php /*  ステップ茶_content_1 start */ ?>
                  <div class="p-lp__step__content">
                    <div class="p-lp__step__content__item">

                      <?php if( $lp_step_brown_label_1) { ?>
                        <div class="p-lp__step__content__label">
                          <?php echo nl2br($lp_step_brown_label_1);?>
                        </div>
                      <?php } ?>

                      <?php if( $lp_step_brown_title_secondary_1) { ?>
                        <div class="p-lp__step__content__title">
                          <?php echo nl2br($lp_step_brown_title_secondary_1);?>
                        </div>
                      <?php } ?>

                      <?php if( $lp_step_brown_title_tertiary_1_1) { ?>
                        <div class="p-lp__step__content__point">
                          <?php echo nl2br($lp_step_brown_title_tertiary_1_1);?>
                        </div>
                      <?php } ?>

                      <?php if( $lp_step_brown_title_tertiary_1_2) { ?>
                        <div class="p-lp__step__content__point">
                          <?php echo nl2br($lp_step_brown_title_tertiary_1_2);?>
                        </div>
                      <?php } ?>

                      <?php if( $lp_step_brown_text_1) { ?>
                        <div class="p-lp__step__content__text">
                          <?php echo nl2br($lp_step_brown_text_1);?>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                  <?php /*  ステップ茶_content_1 end */ ?>

                  <?php /*  ステップ茶_content_2 start */ ?>
                  <?php if( $lp_step_brown_label_2 || $lp_step_brown_title_secondary_2 || $lp_step_brown_title_tertiary_2_1 || $lp_step_brown_text_2) { ?>
                    <div class="p-lp__step__content">
                      <div class="p-lp__step__content__item">

                        <?php if( $lp_step_brown_label_2) { ?>
                          <div class="p-lp__step__content__label">
                            <?php echo nl2br($lp_step_brown_label_2);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_brown_title_secondary_2) { ?>
                          <div class="p-lp__step__content__title">
                            <?php echo nl2br($lp_step_brown_title_secondary_2);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_brown_title_tertiary_2_1) { ?>
                          <div class="p-lp__step__content__point">
                            <?php echo nl2br($lp_step_brown_title_tertiary_2_1);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_brown_title_tertiary_2_2) { ?>
                          <div class="p-lp__step__content__point">
                            <?php echo nl2br($lp_step_brown_title_tertiary_2_2);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_brown_text_2) { ?>
                          <div class="p-lp__step__content__text">
                            <?php echo nl2br($lp_step_brown_text_2);?>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  <?php } ?>
                  <?php /*  ステップ茶_content_2 end */ ?>

                  
                  <?php /*  ステップ茶_content_3 start */ ?>
                  <?php if( $lp_step_brown_label_3 || $lp_step_brown_title_secondary_3 || $lp_step_brown_title_tertiary_3_1 || $lp_step_brown_text_3) { ?>
                    <div class="p-lp__step__content">
                      <div class="p-lp__step__content__item">

                        <?php if( $lp_step_brown_label_3) { ?>
                          <div class="p-lp__step__content__label">
                            <?php echo nl2br($lp_step_brown_label_3);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_brown_title_secondary_3) { ?>
                          <div class="p-lp__step__content__title">
                            <?php echo nl2br($lp_step_brown_title_secondary_3);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_brown_title_tertiary_3_1) { ?>
                          <div class="p-lp__step__content__point">
                            <?php echo nl2br($lp_step_brown_title_tertiary_3_1);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_brown_title_tertiary_3_2) { ?>
                          <div class="p-lp__step__content__point">
                            <?php echo nl2br($lp_step_brown_title_tertiary_3_2);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_brown_text_3) { ?>
                          <div class="p-lp__step__content__text">
                            <?php echo nl2br($lp_step_brown_text_3);?>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  <?php } ?>
                  <?php /*  ステップ茶_content_3 end */ ?>

                  <?php /*  ステップ茶_contents end */ ?>

                <?php } ?>
              </div>
            <?php } ?>
            <?php /*  ステップ茶 end */ ?>


            <?php /*  画像（ワイド幅） */ ?>
            <?php if( $lp_image_wide_url ){?>
              <div class="p-lp__full__image">
                <img src="<?php echo $lp_image_wide_url;?>" alt="" />
              </div>
            <?php } ?>

            <?php /*  画像（全幅） start */ ?>
            <?php if( $lp_image_url ){?>
              <div class="p-lp__image">
                <img src="<?php echo $lp_image_url;?>"/>
              </div>
            <?php } ?>



            <?php /*  見出し start */ ?>
              <?php if( $lp_title_text ) { ?>
                <?php /*  見出し 出し分け */ ?>　
                <?php if( $lp_title_type === 'title_1' ){?>
                  <h2 class="p-lp__header__secondary"><?php echo nl2br($lp_title_text);?></h2>
                <?php }elseif( $lp_title_type === 'title_2' ){?>
                  <h3 class="p-lp__header__tertiary"><?php echo nl2br($lp_title_text);?></h3>
                <?php } ?>
              <?php } ?>
            <?php /*  見出し end */ ?>


            <?php /*  通常テキスト */ ?>　
            <?php if( $lp_text ) { ?>
              <div class="p-lp__text"><?php echo nl2br($full_text);?></div>
            <?php } ?>


            <?php /*  2カラム start */ ?>
            <?php if( $lp_colmn_left_image || $lp_colmn_left_title || $lp_colmn_left_text || $lp_colmn_right_image || $lp_colmn_right_title || $lp_colmn_right_text) { ?>

              <div class="p-lp__column__double">
                <div class="p-lp__column__double__item">

                  <?php /*  2カラム 左 */ ?>
                  <?php if( $lp_colmn_left_image ) { ?>
                    <div class="p-lp__column__double__item__image">
                      <img src="<?php echo $lp_colmn_left_image_url;?>" alt=""/>
                    </div>
                  <?php } ?>

                  <?php if( $lp_colmn_left_title ) { ?>
                    <div class="p-lp__column__double__item__title">
                      <?php echo nl2br($lp_colmn_left_title);?>
                    </div>
                  <?php } ?>

                  <?php if( $lp_colmn_left_text ) { ?>
                    <div class="p-lp__column__double__item__text">
                      <?php echo nl2br($lp_colmn_left_text);?>
                    </div>
                  <?php } ?>

                </div>


                <?php /*  2カラム 右 */ ?>
                <div class="p-lp__column__double__item">

                <?php if( $lp_colmn_right_image ) { ?>
                    <div class="p-lp__column__double__item__image">
                      <img src="<?php echo $lp_colmn_right_image_url;?>" alt=""/>
                    </div>
                  <?php } ?>

                  <?php if( $lp_colmn_right_title ) { ?>
                    <div class="p-lp__column__double__item__title">
                      <?php echo nl2br($lp_colmn_right_title);?>
                    </div>
                  <?php } ?>

                  <?php if( $lp_colmn_right_text ) { ?>
                    <div class="p-lp__column__double__item__text">
                      <?php echo nl2br($lp_colmn_right_text);?>
                    </div>
                  <?php } ?>

                </div>
              </div>

            <?php } ?>
            <?php /*  2カラム end */ ?>






          <?php } ?>
        <?php /*  投稿ループ　end */ ?>


        </div>
        <section>
          <div class="p-lp__breadcrumb">
            <ul class="p-lp__breadcrumb__list">
              <li class="p-lp__breadcrumb__list__item"><a href="">トップ</a></li>
              <li class="p-lp__breadcrumb__list__item"><a href="">トピックス</a></li>
            </ul>
          </div>
        </section>
      </div>



      <?php
        $lp_cv_button_text = SCF::get('lp_cv_button_text');
        $lp_cv_button_url = SCF::get('lp_cv_button_url');
      ?>

      <?php if( $lp_cv_button_text && $lp_cv_button_url ){?>
        <div class="p-top__cv">
          <div class="p-top__cv__link">
            <a class="c-button" href="<?php echo nl2br($lp_cv_button_url);?>">
              <div class="c-button__text">
                <p><?php echo nl2br($lp_cv_button_text);?></p>
              </div>
              <div class="c-button__arrow"></div>
            </a>
          </div>
          <div class="p-top__cv__tori" data-module="scrollAnimation" data-options="{&quot;root&quot;:null,&quot;rootMargin&quot;:&quot;20% 100%&quot;,&quot;threshold&quot;:[0],&quot;animation&quot;:&quot;tori&quot;}"></div>
          <div class="p-top__cv__tori__ashiato step1" data-module-roll="tori_no_ashiato_1"></div>
          <div class="p-top__cv__tori__ashiato step2" data-module-roll="tori_no_ashiato_2"></div>
          <div class="p-top__cv__tori__ashiato step3" data-module-roll="tori_no_ashiato_3"></div>
        </div>
      <?php } ?>



      <div class="c-footer">
        <div class="c-footer__inner">
          <div class="c-footer__logo"><a href="/"><img src="/assets/images/common/logo.png" alt="ロゴ"/></a></div>
          <div class="c-footer__links">
            <div class="c-footer__links__content">
              <p>コスモジュクについて</p>
              <ul class="c-footer__links__list">
                <li class="c-footer__links__item"><a class="c-footer__links__item__text c-footer__hover" href="/about/">コスモジュクとは</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text c-footer__hover" href="/flow/">入塾までの流れ・よくあるご質問</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text c-footer__hover" href="/teachers/">講師・教室紹介</a></li>
              </ul>
            </div>
            <div class="c-footer__links__content">
              <p>コース・料金</p>
              <ul class="c-footer__links__list">
                <li class="c-footer__links__item"><a class="c-footer__links__item__text c-footer__hover" href="/course/?target=original_course">オリジナルコース</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text c-footer__hover" href="/course/?target=tutorial_course">チュートリアルコース</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text c-footer__hover" href="/course/?target=south_junior_high_school_course">南中コース</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text c-footer__hover" href="/course/?target=university_entrance_exam_course">大学受験コース</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text c-footer__hover" href="/course/?target=online_course">オンラインコース</a></li>
              </ul>
            </div>
            <div class="c-footer__links__content is-exception"><a class="c-footer__links__exception c-footer__hover" href="/topics/">コスモニュース</a><a class="c-footer__links__exception c-footer__hover" href="/company/">企業情報</a><a class="c-footer__links__exception c-footer__hover" href="/contact/">お問い合わせ</a>
              <div class="c-footer__sns u-is-pc">
                <ul class="c-footer__sns__list">
                  <li class="c-footer__sns__item"><a href="https://www.youtube.com/channel/UCHZXaBdmvx2uWLJ5u5ZMQNA" target="_blank" rel="noopener"><img src="/assets/images/common/ico-yt.png" alt="YouTube"/></a></li>
                  <li class="c-footer__sns__item"><a href="https://www.facebook.com/4919cosmojuku" target="_blank" rel="noopener"><img src="/assets/images/common/ico-fb.png" alt="Facebook"/></a></li>
                  <li class="c-footer__sns__item"><a href="https://line.me/R/ti/p/%40oga7119c" target="_blank" rel="noopener"><img src="/assets/images/common/ico-line.png" alt="LINE"/></a></li>
                </ul>
              </div>
            </div>
          </div>
          <p class="c-footer__copyright">&copy; 2020 Cosmo Original Co., Ltd.</p>
        </div>
      </div>
    </main>
    <script src="/assets/scripts/app.js"></script>

    <?php endwhile; ?>
<?php else : ?>

        <h3>記事がありません</h3>
        <p>表示する記事はありませんでした。</p>

<?php endif; ?>

  </body>
</html>