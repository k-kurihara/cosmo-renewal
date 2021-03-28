
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
                        <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/teachers/">講講師紹介 ＆ 教室紹介</a></li>
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
                          <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/teachers/">講講師紹介 ＆ 教室紹介</a></li>
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

        test
        <?php /*  KV image */ ?>
        <?php if( $blog_image_pc_url ){?>
          <div class="p-lp__kv" class="u-is-pc">
            <img class="u-is-pc" src="<?php echo $lp_key_visual_pc_url;?>" alt=""/>
          </div>
        <?php } ?>

        <?php if( $blog_image_sp_url ){?>
          <div class="p-lp__kv" class="u-is-sp">
            <img class="u-is-pc" src="<?php echo $lp_key_visual_sp_url;?>" alt=""/>
          </div>
        <?php } ?>


        
        <?php /*  投稿ループ　start */ ?>
          <?php
            $cf_group = SCF::get('投稿グループ');
            foreach ($cf_group as $field_name => $field_value ) {
              $lp_key_visual = $field_value['lp_key_visual']; // キービジュアル

              $lp_step_blue_title_primary = $field_value['lp_step_blue_title_primary']; // ステップ青_大見出し
              $lp_step_blue_label_1 = $field_value['lp_step_blue_label_1']; // ステップ青_左_ラベル_1
              $lp_step_blue_title_secondary_1 = $field_value['lp_step_blue_title_secondary_1']; // ステップ青_左_中見出し_1
              $lp_step_blue_text_1 = $field_value['lp_step_blue_text_1']; // ステップ青_左_テキスト_1
              $lp_step_blue_image_1 = $field_value['lp_step_blue_image_1']; // ステップ青_右_画像_1
              $lp_step_blue_label_2 = $field_value['lp_step_blue_label_2']; // ステップ青_左_ラベル_2
              $lp_step_blue_title_secondary_2 = $field_value['lp_step_blue_title_secondary_2']; // ステップ青_左_中見出し_2
              $lp_step_blue_text_2 = $field_value['lp_step_blue_text_2']; // ステップ青_左_テキスト_2
              $lp_step_blue_image_2 = $field_value['lp_step_blue_image_2']; // ステップ青_右_画像_2
              $lp_step_blue_label_3 = $field_value['lp_step_blue_label_3']; // ステップ青_左_ラベル_3
              $lp_step_blue_title_secondary_3 = $field_value['lp_step_blue_title_secondary_3']; // ステップ青_左_中見出し_3
              $lp_step_blue_text_3 = $field_value['lp_step_blue_text_3']; // ステップ青_左_テキスト_3
              $lp_step_blue_image_3 = $field_value['lp_step_blue_image_3']; // ステップ青_右_画像_3

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

              $lp_image = $field_value['lp_image']; // 画像（全幅）

              $lp_title_type = $field_value['lp_title_type']; // 見出し種類
              $lp_title_text = $field_value['lp_title_text']; // 見出しテキスト

              $lp_text = $field_value['lp_text']; // 通常テキスト

              $lp_colmn_left_image = $field_value['lp_colmn_left_image']; // 2カラム_左_画像
              $lp_colmn_left_title = $field_value['lp_colmn_left_title']; // 2カラム_左_見出し
              $lp_colmn_left_text = $field_value['lp_colmn_left_text']; // 2カラム_左_テキスト
              $lp_colmn_right_image = $field_value['lp_colmn_right_image']; // 2カラム_右_画像
              $lp_colmn_right_title = $field_value['lp_colmn_right_title']; // 2カラム_右_見出し
              $lp_colmn_right_text = $field_value['lp_colmn_right_text']; // 2カラム_右_テキスト

              $lp_cv_button_text = $field_value['lp_cv_button_text']; // 下部CVボタン文言
              $lp_cv_button_url = $field_value['lp_cv_button_url']; // 下部CVボタンURL
          ?>





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
      <div class="p-top__cv">
        <div class="p-top__cv__link"><a class="c-button" href="/contact/">
            <div class="c-button__text">
              <p>体験授業・資料請求等はこちら</p>
            </div>
            <div class="c-button__arrow"></div></a></div>
        <div class="p-top__cv__tori" data-module="scrollAnimation" data-options="{&quot;root&quot;:null,&quot;rootMargin&quot;:&quot;20% 100%&quot;,&quot;threshold&quot;:[0],&quot;animation&quot;:&quot;tori&quot;}"></div>
        <div class="p-top__cv__tori__ashiato step1" data-module-roll="tori_no_ashiato_1"></div>
        <div class="p-top__cv__tori__ashiato step2" data-module-roll="tori_no_ashiato_2"></div>
        <div class="p-top__cv__tori__ashiato step3" data-module-roll="tori_no_ashiato_3"></div>
      </div>
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