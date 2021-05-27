<html>
  <head>
    <title><?php wp_title('｜', true, 'right'); ?>コスモジュク</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0"/>
    <meta name="title" content="<?php wp_title('｜', true, 'right'); ?>コスモジュク"/>
    <meta name="description" content=""/>
    <meta name="keywords" content="塾,個別指導,集団授業,受験,コスモジュク,コスモ,上永谷,日限山,丸山台,舞岡,野庭,別所,上大岡,弘明寺,大久保,芹が谷"/>
    <meta property="og:url" content="http://cosmojuku.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php wp_title('｜', true, 'right'); ?>コスモジュク"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="http://cosmojuku.com/assets/images/share/ogp.png"/>
    <meta property="og:site_name" content="コスモジュク"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="<?php wp_title('｜', true, 'right'); ?>コスモジュク"/>
    <meta name="twitter:description" content=""/>
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
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); 
    /* ループ開始 */ ?>
    <?php the_content(); ?>
    
      <div class="p-lp">
        <div class="p-lp__contents">

        <?php
          $lp_key_visual_pc = SCF::get('lp_key_visual_pc');
          $lp_key_visual_pc = wp_get_attachment_image_src( $lp_key_visual_pc , 'full' );
          $lp_key_visual_pc_url = esc_url($lp_key_visual_pc[0]);
          // $lp_key_visual_sp = SCF::get('lp_key_visual_sp');
          // $lp_key_visual_sp = wp_get_attachment_image_src( $lp_key_visual_sp , 'full' );
          // $lp_key_visual_sp_url = esc_url($lp_key_visual_sp[0]);
        ?>

        <?php /*  KV image */ ?>
        <?php if( $lp_key_visual_pc_url ){?>
          <div class="p-lp__kv">
            <img class="" src="<?php echo $lp_key_visual_pc_url;?>" alt=""/>
          </div>
        <?php } ?>
<!-- 
        <?php if( $lp_key_visual_sp_url ){?>
          <div class="p-lp__kv u-is-sp">
            <img class="u-is-sp" src="<?php echo $lp_key_visual_sp_url;?>" alt=""/>
          </div>
        <?php } ?> -->


        <?php 
            $lp_area_a_count = 0;
            $cf_group = SCF::get('投稿グループ');
            foreach ($cf_group as $field_name => $field_value ) {
              $lp_area_a = $field_value['lp_area_a']; //エリア選択
              if($lp_area_a !== "lp_area0"){
                $lp_area_a_count++;
              }
            }
            if($lp_area_a_count > 0){
            ?>
              <div class="p-lp__step__white">
                <?php
                  $cf_group = SCF::get('投稿グループ');
                  foreach ($cf_group as $field_name => $field_value ) {
                    
                    $lp_area_a = $field_value['lp_area_a']; //エリア選択

                    $lp_step_blue_title_primary = $field_value['lp_step_blue_title_primary']; // ステップ青_大見出し
                    $lp_step_blue_label_1 = $field_value['lp_step_blue_label_1']; // ステップ青_左_ラベル_1
                    $lp_step_blue_title_secondary_1 = $field_value['lp_step_blue_title_secondary_1']; // ステップ青_左_中見出し_1
                    $lp_step_blue_text_1 = $field_value['lp_step_blue_text_1']; // ステップ青_左_テキスト_1
                    $lp_step_blue_image_1 = $field_value['lp_step_blue_image_1']; // ステップ青_右_画像_1
                    $lp_step_blue_image_1 = wp_get_attachment_image_src( $lp_step_blue_image_1 , 'full' ); // ステップ青_右_画像_1_fullサイズ
                    $lp_step_blue_image_1_url = esc_url($lp_step_blue_image_1[0]); // ステップ青_右_画像_1_url

                    $lp_step_brown_label_1 = $field_value['lp_step_brown_label_1']; // ステップ茶_ラベル_1
                    $lp_step_brown_title_secondary_1 = $field_value['lp_step_brown_title_secondary_1']; // ステップ茶_中見出し_1
                    $lp_step_brown_title_tertiary_1_1 = $field_value['lp_step_brown_title_tertiary_1_1']; // ステップ茶_小見出し_1_1
                    $lp_step_brown_title_tertiary_1_2 = $field_value['lp_step_brown_title_tertiary_1_2']; // ステップ茶_小見出し_1_2
                    $lp_step_brown_text_1 = $field_value['lp_step_brown_text_1']; // ステップ茶_テキスト_1

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

                    $lp_textarea_title_text = $field_value['lp_textarea_title_text']; // 見出しテキスト
                    $lp_textare_text = $field_value['lp_textare_text']; // 通常テキスト

                    $lp_link_text = $field_value['lp_link_text']; // リンクテキスト

                    $lp_3column_bigtitle = $field_value['lp_3column_bigtitle']; // 特大見出し

                    $lp_3column_image_a = $field_value['lp_3column_image_a']; // 3カラム
                    $lp_3column_image_a = wp_get_attachment_image_src( $lp_3column_image_a , 'full' ); // 画像（全幅）_fullサイズ
                    $lp_3column_image_a_url = esc_url($lp_3column_image_a[0]); // 画像（全幅）_url

                    $lp_3column_title_a = $field_value['lp_3column_title_a']; // 3カラム
                    $lp_3column_text_a = $field_value['lp_3column_text_a']; // 3カラム

                    $lp_3column_image_b = $field_value['lp_3column_image_b']; // 3カラム
                    $lp_3column_image_b = wp_get_attachment_image_src( $lp_3column_image_b , 'full' ); // 画像（全幅）_fullサイズ
                    $lp_3column_image_b_url = esc_url($lp_3column_image_b[0]); // 画像（全幅）_url

                    $lp_3column_title_b = $field_value['lp_3column_title_b']; // 3カラム
                    $lp_3column_text_b = $field_value['lp_3column_text_b']; // 3カラム

                    $lp_3column_image_c = $field_value['lp_3column_image_c']; // 3カラム
                    $lp_3column_image_c = wp_get_attachment_image_src( $lp_3column_image_c , 'full' ); // 画像（全幅）_fullサイズ
                    $lp_3column_image_c_url = esc_url($lp_3column_image_c[0]); // 画像（全幅）_url

                    $lp_3column_title_c = $field_value['lp_3column_title_c']; // 3カラム
                    $lp_3column_text_c = $field_value['lp_3column_text_c']; // 3カラム
                ?>


                  <?php /*  ステップ青_大見出し */ ?>
                  <?php if( $lp_area_a == "lp_area1") { ?>
                    <?php if( $lp_step_blue_title_primary ) { ?>
                      <div class="p-lp__lead">
                        <div class="p-lp__step__title">
                          <h3><?php echo nl2br($lp_step_blue_title_primary);?></h3>
                        </div>
                      </div>
                    <?php } ?>
                  <?php } ?>

                  <?php /*  ステップ青_contents start */ ?>
                  <?php if( $lp_area_a == "lp_area2") { ?>  
                    <?php if( $lp_step_blue_label_1 || $lp_step_blue_title_secondary_1 || $lp_step_blue_text_1 || $lp_step_blue_image_1_url) { ?>
                      <?php /*  ステップ青_content_1 start */ ?>
                      <div class="p-lp__step__blue__content">
                        <div class="p-lp__step__blue__content__item">

                          <?php if( $lp_step_blue_label_1) { ?>
                            <div class="p-lp__step__blue__content__label">
                              <?php echo nl2br($lp_step_blue_label_1);?>
                            </div>
                          <?php } ?>

                          <?php if( $lp_step_blue_title_secondary_1) { ?>
                            <div class="p-lp__step__blue__content__title">
                            <?php echo nl2br($lp_step_blue_title_secondary_1);?>
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
                    <?php } ?>

                  <?php } ?>
                    
                  <?php /*  ステップ青_contents end */ ?>

                  <?php if( $lp_area_a == "lp_area3") { ?>  
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
                    <?php } ?>
                  <?php } ?>
                  <?php /*  ステップ茶_contents end */ ?>

                  <?php if( $lp_area_a == "lp_area4") { ?>  
                    <div class="p-lp__step__content">
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
                        <h3 class="p-lp__header__tertiary"><?php echo nl2br($lp_title_text);?></h3>
                      <?php } ?>
                      <?php /*  見出し end */ ?>

                      <?php /*  通常テキスト */ ?>　
                      <?php if( $lp_text ) { ?>
                        <div class="p-lp__text"><?php echo nl2br($lp_text);?></div>
                      <?php } ?>
                    </div>
                  <?php } ?>

                  <?php if( $lp_area_a == "lp_area5") { ?>  
                    <div class="p-lp__step__content">
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
                      </div>
                  <?php } ?>

                  <?php if( $lp_area_a == "lp_area6") { ?>  
                    <div class="p-lp__step__content">

                      <?php /*  見出し start */ ?>
                      <?php if( $lp_textarea_title_text ) { ?>
                        <h3 class="p-lp__header__tertiary"><?php echo nl2br($lp_textarea_title_text);?></h3>
                      <?php } ?>
                      <?php /*  見出し end */ ?>

                      <?php /*  通常テキスト */ ?>　
                      <?php if( $lp_textare_text ) { ?>
                        <div class="p-lp__text"><?php echo nl2br($lp_textare_text);?></div>
                      <?php } ?>
                    </div>
                  <?php } ?>

                  <?php if( $lp_area_a == "lp_area7") { ?>  
                    <div class="p-lp__step__content">

                      <?php /*  通常テキスト */ ?>　
                      <?php if( $lp_link_text ) { ?>
                        <div class="p-lp__text">
                          <?php 
                            $lp_link_text = str_replace("<br/>", "", $lp_link_text);
                            $lp_link_text = str_replace("<br />", "", $lp_link_text);
                            $lp_link_text = str_replace("<br>", "", $lp_link_text);
                            echo nl2br($lp_link_text,false); 
                            // echo  nl2br($lp_link_text);
                          ?>
                        </div>
                      <?php } ?>
                    </div>
                  <?php } ?>


                  <?php /*  ステップ青_大見出し */ ?>
                <?php if( $lp_area_a == "lp_area8") { ?>
                  <div class="p-lp__lead">
                    <div class="p-lp__lead__inner">
                      <?php if( $lp_3column_bigtitle ) { ?>
                        <p class="p-lp__lead__text"><?php echo nl2br($lp_3column_bigtitle);?></p>
                      <?php } ?>
                      <?php if( $lp_3column_image_a_url || $lp_3column_title_a || $lp_3column_text_a || $lp_3column_image_b_url || $lp_3column_title_b || $lp_3column_text_b || $lp_3column_image_c_url || $lp_3column_title_c || $lp_3column_text_c) { ?>
                        <div class="p-lp__lead__contents">
                          <ul class="p-lp__lead__points">
                            <?php if( $lp_3column_image_a_url || $lp_3column_title_a || $lp_3column_text_a) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $lp_3column_image_a_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $lp_3column_image_a_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($lp_3column_title_a || $lp_3column_text_a) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $lp_3column_title_a) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($lp_3column_title_a);?></p>
                                    <?php } ?>
                                    <?php if( $lp_3column_text_a) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($lp_3column_text_a);?></p>
                                    <?php } ?>
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                            <?php if( $lp_3column_image_b_url || $lp_3column_title_b || $lp_3column_text_b) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $lp_3column_image_b_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $lp_3column_image_b_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($lp_3column_title_b || $lp_3column_text_b) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $lp_3column_title_b) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($lp_3column_title_b);?></p>
                                    <?php } ?>
                                    <?php if( $lp_3column_text_b) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($lp_3column_text_b);?></p>
                                    <?php } ?>
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                            <?php if( $lp_3column_image_c_url || $lp_3column_title_c || $lp_3column_text_c) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $lp_3column_image_c_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $lp_3column_image_c_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($lp_3column_title_c || $lp_3column_text_c) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $lp_3column_title_c) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($lp_3column_title_c);?></p>
                                    <?php } ?>
                                    <?php if( $lp_3column_text_c) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($lp_3column_text_c);?></p>
                                    <?php } ?>    
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                          </ul>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                <?php } ?>


                <?php /*  ステップ青 end */ ?>
                <?php } /* foreach */?>
              </div>
            <?php } /* if */?>

        
        <?php /*  投稿ループ　start */ ?>

          <?php 
            $lp_area_b_count = 0;
            $cf_group = SCF::get('投稿グループ2');
            foreach ($cf_group as $field_name => $field_value ) {
              $lp_area_b = $field_value['lp_area_b']; //エリア選択
              if($lp_area_b !== "lp_area0"){
                $lp_area_b_count++;
              }
            }
            if($lp_area_b_count > 0){
          ?>
            <div class="p-lp__step__blue">
              <?php
                $cf_group = SCF::get('投稿グループ2');
                foreach ($cf_group as $field_name => $field_value ) {
                  
                  $lp_area_b = $field_value['lp_area_b']; //エリア選択

                  $lp_step_blue_title_primary = $field_value['b_lp_step_blue_title_primary']; // ステップ青_大見出し
                  $lp_step_blue_label_1 = $field_value['b_lp_step_blue_label_1']; // ステップ青_左_ラベル_1
                  $lp_step_blue_title_secondary_1 = $field_value['b_lp_step_blue_title_secondary_1']; // ステップ青_左_中見出し_1
                  $lp_step_blue_text_1 = $field_value['b_lp_step_blue_text_1']; // ステップ青_左_テキスト_1
                  $lp_step_blue_image_1 = $field_value['b_lp_step_blue_image_1']; // ステップ青_右_画像_1
                  $lp_step_blue_image_1 = wp_get_attachment_image_src( $lp_step_blue_image_1 , 'full' ); // ステップ青_右_画像_1_fullサイズ
                  $lp_step_blue_image_1_url = esc_url($lp_step_blue_image_1[0]); // ステップ青_右_画像_1_url

                  $lp_step_brown_label_1 = $field_value['b_lp_step_brown_label_1']; // ステップ茶_ラベル_1
                  $lp_step_brown_title_secondary_1 = $field_value['b_lp_step_brown_title_secondary_1']; // ステップ茶_中見出し_1
                  $lp_step_brown_title_tertiary_1_1 = $field_value['b_lp_step_brown_title_tertiary_1_1']; // ステップ茶_小見出し_1_1
                  $lp_step_brown_title_tertiary_1_2 = $field_value['b_lp_step_brown_title_tertiary_1_2']; // ステップ茶_小見出し_1_2
                  $lp_step_brown_text_1 = $field_value['b_lp_step_brown_text_1']; // ステップ茶_テキスト_1

                  $lp_image_wide = $field_value['b_lp_image_wide']; // 画像（ワイド幅）
                  $lp_image_wide = wp_get_attachment_image_src( $lp_image_wide , 'full' ); // 画像（ワイド幅）_fullサイズ
                  $lp_image_wide_url = esc_url($lp_image_wide[0]); // 画像（ワイド幅）_url

                  $lp_image = $field_value['b_lp_image']; // 画像（全幅）
                  $lp_image = wp_get_attachment_image_src( $lp_image , 'full' ); // 画像（全幅）_fullサイズ
                  $lp_image_url = esc_url($lp_image[0]); // 画像（全幅）_url

                  $lp_title_type = $field_value['b_lp_title_type']; // 見出し種類
                  $lp_title_text = $field_value['b_lp_title_text']; // 見出しテキスト
                  $lp_text = $field_value['b_lp_text']; // 通常テキスト

                  $lp_colmn_left_image = $field_value['b_lp_colmn_left_image']; // 2カラム_左_画像
                  $lp_colmn_left_image = wp_get_attachment_image_src( $lp_colmn_left_image , 'full' ); // 画像（全幅）_fullサイズ
                  $lp_colmn_left_image_url = esc_url($lp_colmn_left_image[0]); // 画像（全幅）_url

                  $lp_colmn_left_title = $field_value['b_lp_colmn_left_title']; // 2カラム_左_見出し
                  $lp_colmn_left_text = $field_value['b_lp_colmn_left_text']; // 2カラム_左_テキスト
                  $lp_colmn_right_image = $field_value['b_lp_colmn_right_image']; // 2カラム_右_画像
                  $lp_colmn_right_image = wp_get_attachment_image_src( $lp_colmn_right_image , 'full' ); // 画像（全幅）_fullサイズ
                  $lp_colmn_right_image_url = esc_url($lp_colmn_right_image[0]); // 画像（全幅）_url
                  $lp_colmn_right_title = $field_value['b_lp_colmn_right_title']; // 2カラム_右_見出し
                  $lp_colmn_right_text = $field_value['b_lp_colmn_right_text']; // 2カラム_右_テキスト

                  
                  $b_lp_textarea_title_text = $field_value['b_lp_textarea_title_text']; // 見出しテキスト
                  $b_lp_textare_text = $field_value['b_lp_textare_text']; // 通常テキスト

                  $b_lp_link_text = $field_value['b_lp_link_text']; // リンクテキスト

                  $b_lp_3column_bigtitle = $field_value['b_lp_3column_bigtitle']; // 特大見出し

                  $b_lp_3column_image_a = $field_value['b_lp_3column_image_a']; // 3カラム
                  $b_lp_3column_image_a = wp_get_attachment_image_src( $b_lp_3column_image_a , 'full' ); // 画像（全幅）_fullサイズ
                  $b_lp_3column_image_a_url = esc_url($b_lp_3column_image_a[0]); // 画像（全幅）_url

                  $b_lp_3column_title_a = $field_value['b_lp_3column_title_a']; // 3カラム
                  $b_lp_3column_text_a = $field_value['b_lp_3column_text_a']; // 3カラム

                  $b_lp_3column_image_b = $field_value['b_lp_3column_image_b']; // 3カラム
                  $b_lp_3column_image_b = wp_get_attachment_image_src( $b_lp_3column_image_b , 'full' ); // 画像（全幅）_fullサイズ
                  $b_lp_3column_image_b_url = esc_url($b_lp_3column_image_b[0]); // 画像（全幅）_url

                  $b_lp_3column_title_b = $field_value['b_lp_3column_title_b']; // 3カラム
                  $b_lp_3column_text_b = $field_value['b_lp_3column_text_b']; // 3カラム

                  $b_lp_3column_image_c = $field_value['b_lp_3column_image_c']; // 3カラム
                  $b_lp_3column_image_c = wp_get_attachment_image_src( $b_lp_3column_image_c , 'full' ); // 画像（全幅）_fullサイズ
                  $b_lp_3column_image_c_url = esc_url($b_lp_3column_image_c[0]); // 画像（全幅）_url

                  $b_lp_3column_title_c = $field_value['b_lp_3column_title_c']; // 3カラム
                  $b_lp_3column_text_c = $field_value['b_lp_3column_text_c']; // 3カラム

              ?>
              <?php /*  ステップ青 start */ ?>

                <?php /*  ステップ青_大見出し */ ?>
                <?php if( $lp_area_b == "lp_area1") { ?>
                  <?php if( $lp_step_blue_title_primary ) { ?>
                    <div class="p-lp__lead">
                      <div class="p-lp__step__blue__title">
                        <h3><?php echo nl2br($lp_step_blue_title_primary);?></h3>
                      </div>
                    </div>
                  <?php } ?>
                <?php } ?>

                <?php /*  ステップ青_contents start */ ?>
                <?php if( $lp_area_b == "lp_area2") { ?>  
                  <?php if( $lp_step_blue_label_1 || $lp_step_blue_title_secondary_1 || $lp_step_blue_text_1 || $lp_step_blue_image_1_url) { ?>
                    <?php /*  ステップ青_content_1 start */ ?>
                    <div class="p-lp__step__blue__content">
                      <div class="p-lp__step__blue__content__item">

                        <?php if( $lp_step_blue_label_1) { ?>
                          <div class="p-lp__step__blue__content__label">
                            <?php echo nl2br($lp_step_blue_label_1);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_blue_title_secondary_1) { ?>
                          <div class="p-lp__step__blue__content__title">
                          <?php echo nl2br($lp_step_blue_title_secondary_1);?>
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
                  <?php } ?>

                <?php } ?>
                  
                <?php /*  ステップ青_contents end */ ?>

                <?php if( $lp_area_b == "lp_area3") { ?>  
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
                  <?php } ?>
                <?php } ?>
                <?php /*  ステップ茶_contents end */ ?>

                <?php if( $lp_area_b == "lp_area4") { ?>  
                  <div class="p-lp__step__content">
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
                      <h3 class="p-lp__header__tertiary"><?php echo nl2br($lp_title_text);?></h3>
                    <?php } ?>
                    <?php /*  見出し end */ ?>

                    <?php /*  通常テキスト */ ?>　
                    <?php if( $lp_text ) { ?>
                      <div class="p-lp__text"><?php echo nl2br($lp_text);?></div>
                    <?php } ?>
                  </div>
                <?php } ?>

                <?php if( $lp_area_b == "lp_area5") { ?>  
                  <div class="p-lp__step__content">
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
                    </div>
                <?php } ?>

                <?php if( $lp_area_b == "lp_area6") { ?>  
                    <div class="p-lp__step__content">

                      <?php /*  見出し start */ ?>
                      <?php if( $lp_textarea_title_text ) { ?>
                        <h3 class="p-lp__header__tertiary"><?php echo nl2br($lp_textarea_title_text);?></h3>
                      <?php } ?>
                      <?php /*  見出し end */ ?>

                      <?php /*  通常テキスト */ ?>　
                      <?php if( $lp_textare_text ) { ?>
                        <div class="p-lp__text"><?php echo nl2br($lp_textare_text);?></div>
                      <?php } ?>
                   </div>
                <?php } ?>

                <?php if( $lp_area_b == "lp_area7") { ?>  
                  <div class="p-lp__step__content">

                    <?php /*  通常テキスト */ ?>　
                    <?php if( $lp_link_text ) { ?>
                      <div class="p-lp__text">
                        <?php 
                          $lp_link_text = str_replace("<br/>", "", $lp_link_text);
                          $lp_link_text = str_replace("<br />", "", $lp_link_text);
                          $lp_link_text = str_replace("<br>", "", $lp_link_text);
                          echo nl2br($lp_link_text,false); 
                          // echo  nl2br($lp_link_text);
                        ?>
                      </div>
                    <?php } ?>
                  </div>
                <?php } ?>

                <?php /*  ステップ青_大見出し */ ?>
                <?php if( $lp_area_b == "lp_area8") { ?>
                  <div class="p-lp__lead">
                    <div class="p-lp__lead__inner">
                      <?php if( $b_lp_3column_bigtitle ) { ?>
                        <p class="p-lp__lead__text"><?php echo nl2br($b_lp_3column_bigtitle);?></p>
                      <?php } ?>
                      <?php if( $b_lp_3column_image_a_url || $b_lp_3column_title_a || $b_lp_3column_text_a || $b_lp_3column_image_b_url || $b_lp_3column_title_b || $b_lp_3column_text_b || $b_lp_3column_image_c_url || $b_lp_3column_title_c || $b_lp_3column_text_c) { ?>
                        <div class="p-lp__lead__contents">
                          <ul class="p-lp__lead__points">
                            <?php if( $b_lp_3column_image_a_url || $b_lp_3column_title_a || $b_lp_3column_text_a) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $b_lp_3column_image_a_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $b_lp_3column_image_a_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($b_lp_3column_title_a || $b_lp_3column_text_a) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $b_lp_3column_title_a) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($b_lp_3column_title_a);?></p>
                                    <?php } ?>
                                    <?php if( $b_lp_3column_text_a) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($b_lp_3column_text_a);?></p>
                                    <?php } ?>
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                            <?php if( $b_lp_3column_image_b_url || $b_lp_3column_title_b || $b_lp_3column_text_b) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $b_lp_3column_image_b_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $b_lp_3column_image_b_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($b_lp_3column_title_b || $b_lp_3column_text_b) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $b_lp_3column_title_b) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($b_lp_3column_title_b);?></p>
                                    <?php } ?>
                                    <?php if( $b_lp_3column_text_b) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($b_lp_3column_text_b);?></p>
                                    <?php } ?>
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                            <?php if( $b_lp_3column_image_c_url || $b_lp_3column_title_c || $b_lp_3column_text_c) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $b_lp_3column_image_c_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $b_lp_3column_image_c_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($b_lp_3column_title_c || $b_lp_3column_text_c) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $b_lp_3column_title_c) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($b_lp_3column_title_c);?></p>
                                    <?php } ?>
                                    <?php if( $b_lp_3column_text_c) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($b_lp_3column_text_c);?></p>
                                    <?php } ?>
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                          </ul>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                <?php } ?>


              <?php /*  ステップ青 end */ ?>
              <?php } /* foreach */?>
            </div>
          <?php } /* if */?>
          
          <?php 
            $lp_area_c_count = 0;
            $cf_group = SCF::get('投稿グループ3');
            foreach ($cf_group as $field_name => $field_value ) {
              $lp_area_c = $field_value['lp_area_c']; //エリア選択
              if($lp_area_c !== "lp_area0"){
                $lp_area_c_count++;
              }
            }
            if($lp_area_c_count > 0){
          ?>
            <div class="p-lp__step">
              <?php
                $cf_group = SCF::get('投稿グループ3');
                foreach ($cf_group as $field_name => $field_value ) {
                  
                  $lp_area_c = $field_value['lp_area_c']; //エリア選択

                  $lp_step_blue_title_primary = $field_value['c_lp_step_blue_title_primary']; // ステップ青_大見出し
                  $lp_step_blue_label_1 = $field_value['c_lp_step_blue_label_1']; // ステップ青_左_ラベル_1
                  $lp_step_blue_title_secondary_1 = $field_value['c_lp_step_blue_title_secondary_1']; // ステップ青_左_中見出し_1
                  $lp_step_blue_text_1 = $field_value['c_lp_step_blue_text_1']; // ステップ青_左_テキスト_1
                  $lp_step_blue_image_1 = $field_value['c_lp_step_blue_image_1']; // ステップ青_右_画像_1
                  $lp_step_blue_image_1 = wp_get_attachment_image_src( $lp_step_blue_image_1 , 'full' ); // ステップ青_右_画像_1_fullサイズ
                  $lp_step_blue_image_1_url = esc_url($lp_step_blue_image_1[0]); // ステップ青_右_画像_1_url

                  $lp_step_brown_label_1 = $field_value['c_lp_step_brown_label_1']; // ステップ茶_ラベル_1
                  $lp_step_brown_title_secondary_1 = $field_value['c_lp_step_brown_title_secondary_1']; // ステップ茶_中見出し_1
                  $lp_step_brown_title_tertiary_1_1 = $field_value['c_lp_step_brown_title_tertiary_1_1']; // ステップ茶_小見出し_1_1
                  $lp_step_brown_title_tertiary_1_2 = $field_value['c_lp_step_brown_title_tertiary_1_2']; // ステップ茶_小見出し_1_2
                  $lp_step_brown_text_1 = $field_value['c_lp_step_brown_text_1']; // ステップ茶_テキスト_1

                  $lp_image_wide = $field_value['c_lp_image_wide']; // 画像（ワイド幅）
                  $lp_image_wide = wp_get_attachment_image_src( $lp_image_wide , 'full' ); // 画像（ワイド幅）_fullサイズ
                  $lp_image_wide_url = esc_url($lp_image_wide[0]); // 画像（ワイド幅）_url

                  $lp_image = $field_value['c_lp_image']; // 画像（全幅）
                  $lp_image = wp_get_attachment_image_src( $lp_image , 'full' ); // 画像（全幅）_fullサイズ
                  $lp_image_url = esc_url($lp_image[0]); // 画像（全幅）_url

                  $lp_title_type = $field_value['c_lp_title_type']; // 見出し種類
                  $lp_title_text = $field_value['c_lp_title_text']; // 見出しテキスト
                  $lp_text = $field_value['c_lp_text']; // 通常テキスト

                  $lp_colmn_left_image = $field_value['c_lp_colmn_left_image']; // 2カラム_左_画像
                  $lp_colmn_left_image = wp_get_attachment_image_src( $lp_colmn_left_image , 'full' ); // 画像（全幅）_fullサイズ
                  $lp_colmn_left_image_url = esc_url($lp_colmn_left_image[0]); // 画像（全幅）_url

                  $lp_colmn_left_title = $field_value['c_lp_colmn_left_title']; // 2カラム_左_見出し
                  $lp_colmn_left_text = $field_value['c_lp_colmn_left_text']; // 2カラム_左_テキスト
                  $lp_colmn_right_image = $field_value['c_lp_colmn_right_image']; // 2カラム_右_画像
                  $lp_colmn_right_image = wp_get_attachment_image_src( $lp_colmn_right_image , 'full' ); // 画像（全幅）_fullサイズ
                  $lp_colmn_right_image_url = esc_url($lp_colmn_right_image[0]); // 画像（全幅）_url
                  $lp_colmn_right_title = $field_value['c_lp_colmn_right_title']; // 2カラム_右_見出し
                  $lp_colmn_right_text = $field_value['c_lp_colmn_right_text']; // 2カラム_右_テキスト

                  
                  $lp_textarea_title_text = $field_value['c_lp_textarea_title_text']; // 見出しテキスト
                  $lp_textare_text = $field_value['c_lp_textare_text']; // 通常テキスト

                  $lp_link_text = $field_value['c_lp_link_text']; // リンクテキスト

                  $c_lp_3column_bigtitle = $field_value['c_lp_3column_bigtitle']; // 特大見出し

                  $c_lp_3column_image_a = $field_value['c_lp_3column_image_a']; // 3カラム
                  $c_lp_3column_image_a = wp_get_attachment_image_src( $c_lp_3column_image_a , 'full' ); // 画像（全幅）_fullサイズ
                  $c_lp_3column_image_a_url = esc_url($c_lp_3column_image_a[0]); // 画像（全幅）_url

                  $c_lp_3column_title_a = $field_value['c_lp_3column_title_a']; // 3カラム
                  $c_lp_3column_text_a = $field_value['c_lp_3column_text_a']; // 3カラム

                  $c_lp_3column_image_b = $field_value['c_lp_3column_image_b']; // 3カラム
                  $c_lp_3column_image_b = wp_get_attachment_image_src( $c_lp_3column_image_b , 'full' ); // 画像（全幅）_fullサイズ
                  $c_lp_3column_image_b_url = esc_url($c_lp_3column_image_b[0]); // 画像（全幅）_url

                  $c_lp_3column_title_b = $field_value['c_lp_3column_title_b']; // 3カラム
                  $c_lp_3column_text_b = $field_value['c_lp_3column_text_b']; // 3カラム

                  $c_lp_3column_image_c = $field_value['c_lp_3column_image_c']; // 3カラム
                  $c_lp_3column_image_c = wp_get_attachment_image_src( $c_lp_3column_image_c , 'full' ); // 画像（全幅）_fullサイズ
                  $c_lp_3column_image_c_url = esc_url($c_lp_3column_image_c[0]); // 画像（全幅）_url

                  $c_lp_3column_title_c = $field_value['c_lp_3column_title_c']; // 3カラム
                  $c_lp_3column_text_c = $field_value['c_lp_3column_text_c']; // 3カラム
              ?>
              <?php /*  ステップ青 start */ ?>

                <?php /*  ステップ青_大見出し */ ?>
                <?php if( $lp_area_c == "lp_area1") { ?>
                  <?php if( $lp_step_blue_title_primary ) { ?>
                    <div class="p-lp__lead">
                      <div class="p-lp__step__title">
                        <h3><?php echo nl2br($lp_step_blue_title_primary);?></h3>
                      </div>
                    </div>
                  <?php } ?>
                <?php } ?>

                <?php /*  ステップ青_contents start */ ?>
                <?php if( $lp_area_c == "lp_area2") { ?>  
                  <?php if( $lp_step_blue_label_1 || $lp_step_blue_title_secondary_1 || $lp_step_blue_text_1 || $lp_step_blue_image_1_url) { ?>
                    <?php /*  ステップ青_content_1 start */ ?>
                    <div class="p-lp__step__blue__content">
                      <div class="p-lp__step__blue__content__item">

                        <?php if( $lp_step_blue_label_1) { ?>
                          <div class="p-lp__step__blue__content__label">
                            <?php echo nl2br($lp_step_blue_label_1);?>
                          </div>
                        <?php } ?>

                        <?php if( $lp_step_blue_title_secondary_1) { ?>
                          <div class="p-lp__step__blue__content__title">
                          <?php echo nl2br($lp_step_blue_title_secondary_1);?>
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
                  <?php } ?>

                <?php } ?>
                  
                <?php /*  ステップ青_contents end */ ?>

                <?php if( $lp_area_c == "lp_area3") { ?>  
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
                  <?php } ?>
                <?php } ?>
                <?php /*  ステップ茶_contents end */ ?>

                <?php if( $lp_area_c == "lp_area4") { ?>  
                  <div class="p-lp__step__content">
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
                      <h3 class="p-lp__header__tertiary"><?php echo nl2br($lp_title_text);?></h3>
                    <?php } ?>
                    <?php /*  見出し end */ ?>

                    <?php /*  通常テキスト */ ?>　
                    <?php if( $lp_text ) { ?>
                      <div class="p-lp__text"><?php echo nl2br($lp_text);?></div>
                    <?php } ?>
                  </div>
                <?php } ?>

                <?php if( $lp_area_c == "lp_area5") { ?>  
                  <div class="p-lp__step__content">
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
                    </div>
                <?php } ?>

                <?php if( $lp_area_c == "lp_area6") { ?>  
                    <div class="p-lp__step__content">

                      <?php /*  見出し start */ ?>
                      <?php if( $lp_textarea_title_text ) { ?>
                        <h3 class="p-lp__header__tertiary"><?php echo nl2br($lp_textarea_title_text);?></h3>
                      <?php } ?>
                      <?php /*  見出し end */ ?>

                      <?php /*  通常テキスト */ ?>　
                      <?php if( $lp_textare_text ) { ?>
                        <div class="p-lp__text"><?php echo nl2br($lp_textare_text);?></div>
                      <?php } ?>
                   </div>
                <?php } ?>

                <?php if( $lp_area_c == "lp_area7") { ?>  
                  <div class="p-lp__step__content">

                    <?php /*  通常テキスト */ ?>　
                    <?php if( $lp_link_text ) { ?>
                      <div class="p-lp__text">
                        <?php 
                          $lp_link_text = str_replace("<br/>", "", $lp_link_text);
                          $lp_link_text = str_replace("<br />", "", $lp_link_text);
                          $lp_link_text = str_replace("<br>", "", $lp_link_text);
                          echo nl2br($lp_link_text,false); 
                          // echo  nl2br($lp_link_text);
                        ?>
                      </div>
                    <?php } ?>
                  </div>
                <?php } ?>

                <?php /*  ステップ青_大見出し */ ?>
                <?php if( $lp_area_c == "lp_area8") { ?>
                  <div class="p-lp__lead">
                    <div class="p-lp__lead__inner">
                      <?php if( $c_lp_3column_bigtitle ) { ?>
                        <p class="p-lp__lead__text"><?php echo nl2br($c_lp_3column_bigtitle);?></p>
                      <?php } ?>
                      <?php if( $c_lp_3column_image_a_url || $c_lp_3column_title_a || $c_lp_3column_text_a || $c_lp_3column_image_b_url || $c_lp_3column_title_b || $c_lp_3column_text_b || $c_lp_3column_image_c_url || $c_lp_3column_title_c || $c_lp_3column_text_c) { ?>
                        <div class="p-lp__lead__contents">
                          <ul class="p-lp__lead__points">
                            <?php if( $c_lp_3column_image_a_url || $c_lp_3column_title_a || $c_lp_3column_text_a) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $c_lp_3column_image_a_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $c_lp_3column_image_a_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($c_lp_3column_title_a || $c_lp_3column_text_a) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $c_lp_3column_title_a) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($c_lp_3column_title_a);?></p>
                                    <?php } ?>
                                    <?php if( $c_lp_3column_text_a) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($c_lp_3column_text_a);?></p>
                                    <?php } ?>
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                            <?php if( $c_lp_3column_image_b_url || $c_lp_3column_title_b || $c_lp_3column_text_b) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $c_lp_3column_image_b_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $c_lp_3column_image_b_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($c_lp_3column_title_b || $c_lp_3column_text_b) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $c_lp_3column_title_b) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($c_lp_3column_title_b);?></p>
                                    <?php } ?>
                                    <?php if( $c_lp_3column_text_b) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($c_lp_3column_text_b);?></p>
                                    <?php } ?>
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                            <?php if( $c_lp_3column_image_c_url || $c_lp_3column_title_c || $c_lp_3column_text_c) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $c_lp_3column_image_c_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $c_lp_3column_image_c_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($c_lp_3column_title_c || $c_lp_3column_text_c) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $c_lp_3column_title_c) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($c_lp_3column_title_c);?></p>
                                    <?php } ?>
                                    <?php if( $c_lp_3column_text_c) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($c_lp_3column_text_c);?></p>
                                    <?php } ?>
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                          </ul>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                <?php } ?>

              <?php /*  ステップ青 end */ ?>
              <?php } /* foreach */?>
            </div>
          <?php } /* if */?>


          <?php 
            $lp_area_d_count = 0;
            $cf_group = SCF::get('投稿グループ4');
            foreach ($cf_group as $field_name => $field_value ) {
              $lp_area_d = $field_value['lp_area_d']; //エリア選択
              if($lp_area_d !== "lp_area0"){
                $lp_area_d_count++;
              }
            }
            if($lp_area_d_count > 0){
            ?>
              <div class="p-lp__step__white">
                <?php
                  $cf_group = SCF::get('投稿グループ4');
                  foreach ($cf_group as $field_name => $field_value ) {
                    
                    $lp_area_d = $field_value['lp_area_d']; //エリア選択

                    $lp_step_blue_title_primary = $field_value['d_lp_step_blue_title_primary']; // ステップ青_大見出し
                    $lp_step_blue_label_1 = $field_value['d_lp_step_blue_label_1']; // ステップ青_左_ラベル_1
                    $lp_step_blue_title_secondary_1 = $field_value['d_lp_step_blue_title_secondary_1']; // ステップ青_左_中見出し_1
                    $lp_step_blue_text_1 = $field_value['d_lp_step_blue_text_1']; // ステップ青_左_テキスト_1
                    $lp_step_blue_image_1 = $field_value['d_lp_step_blue_image_1']; // ステップ青_右_画像_1
                    $lp_step_blue_image_1 = wp_get_attachment_image_src( $lp_step_blue_image_1 , 'full' ); // ステップ青_右_画像_1_fullサイズ
                    $lp_step_blue_image_1_url = esc_url($lp_step_blue_image_1[0]); // ステップ青_右_画像_1_url

                    $lp_step_brown_label_1 = $field_value['d_lp_step_brown_label_1']; // ステップ茶_ラベル_1
                    $lp_step_brown_title_secondary_1 = $field_value['d_lp_step_brown_title_secondary_1']; // ステップ茶_中見出し_1
                    $lp_step_brown_title_tertiary_1_1 = $field_value['d_lp_step_brown_title_tertiary_1_1']; // ステップ茶_小見出し_1_1
                    $lp_step_brown_title_tertiary_1_2 = $field_value['d_lp_step_brown_title_tertiary_1_2']; // ステップ茶_小見出し_1_2
                    $lp_step_brown_text_1 = $field_value['d_lp_step_brown_text_1']; // ステップ茶_テキスト_1

                    $lp_image_wide = $field_value['d_lp_image_wide']; // 画像（ワイド幅）
                    $lp_image_wide = wp_get_attachment_image_src( $lp_image_wide , 'full' ); // 画像（ワイド幅）_fullサイズ
                    $lp_image_wide_url = esc_url($lp_image_wide[0]); // 画像（ワイド幅）_url

                    $lp_image = $field_value['d_lp_image']; // 画像（全幅）
                    $lp_image = wp_get_attachment_image_src( $lp_image , 'full' ); // 画像（全幅）_fullサイズ
                    $lp_image_url = esc_url($lp_image[0]); // 画像（全幅）_url

                    $lp_title_type = $field_value['d_lp_title_type']; // 見出し種類
                    $lp_title_text = $field_value['d_lp_title_text']; // 見出しテキスト
                    $lp_text = $field_value['d_lp_text']; // 通常テキスト

                    $lp_colmn_left_image = $field_value['d_lp_colmn_left_image']; // 2カラム_左_画像
                    $lp_colmn_left_image = wp_get_attachment_image_src( $lp_colmn_left_image , 'full' ); // 画像（全幅）_fullサイズ
                    $lp_colmn_left_image_url = esc_url($lp_colmn_left_image[0]); // 画像（全幅）_url

                    $lp_colmn_left_title = $field_value['d_lp_colmn_left_title']; // 2カラム_左_見出し
                    $lp_colmn_left_text = $field_value['d_lp_colmn_left_text']; // 2カラム_左_テキスト
                    $lp_colmn_right_image = $field_value['d_lp_colmn_right_image']; // 2カラム_右_画像
                    $lp_colmn_right_image = wp_get_attachment_image_src( $lp_colmn_right_image , 'full' ); // 画像（全幅）_fullサイズ
                    $lp_colmn_right_image_url = esc_url($lp_colmn_right_image[0]); // 画像（全幅）_url
                    $lp_colmn_right_title = $field_value['d_lp_colmn_right_title']; // 2カラム_右_見出し
                    $lp_colmn_right_text = $field_value['d_lp_colmn_right_text']; // 2カラム_右_テキスト
                    
                    $lp_textarea_title_text = $field_value['d_lp_textarea_title_text']; // 見出しテキスト
                    $lp_textare_text = $field_value['d_lp_textare_text']; // 通常テキスト

                    $lp_link_text = $field_value['d_lp_link_text']; // リンクテキスト

                    $d_lp_3column_bigtitle = $field_value['d_lp_3column_bigtitle']; // 特大見出し

                    $d_lp_3column_image_a = $field_value['d_lp_3column_image_a']; // 3カラム
                    $d_lp_3column_image_a = wp_get_attachment_image_src( $d_lp_3column_image_a , 'full' ); // 画像（全幅）_fullサイズ
                    $d_lp_3column_image_a_url = esc_url($d_lp_3column_image_a[0]); // 画像（全幅）_url

                    $d_lp_3column_title_a = $field_value['d_lp_3column_title_a']; // 3カラム
                    $d_lp_3column_text_a = $field_value['d_lp_3column_text_a']; // 3カラム

                    $d_lp_3column_image_b = $field_value['d_lp_3column_image_b']; // 3カラム
                    $d_lp_3column_image_b = wp_get_attachment_image_src( $d_lp_3column_image_b , 'full' ); // 画像（全幅）_fullサイズ
                    $d_lp_3column_image_b_url = esc_url($d_lp_3column_image_b[0]); // 画像（全幅）_url

                    $d_lp_3column_title_b = $field_value['d_lp_3column_title_b']; // 3カラム
                    $d_lp_3column_text_b = $field_value['d_lp_3column_text_b']; // 3カラム

                    $d_lp_3column_image_c = $field_value['d_lp_3column_image_c']; // 3カラム
                    $d_lp_3column_image_c = wp_get_attachment_image_src( $d_lp_3column_image_c , 'full' ); // 画像（全幅）_fullサイズ
                    $d_lp_3column_image_c_url = esc_url($d_lp_3column_image_c[0]); // 画像（全幅）_url

                    $d_lp_3column_title_c = $field_value['d_lp_3column_title_c']; // 3カラム
                    $d_lp_3column_text_c = $field_value['d_lp_3column_text_c']; // 3カラム

                ?>
                
                  <?php /*  ステップ青_大見出し */ ?>
                  <?php if( $lp_area_d == "lp_area1") { ?>
                    <?php if( $lp_step_blue_title_primary ) { ?>
                      <div class="p-lp__lead">
                        <div class="p-lp__step__title">
                          <h3><?php echo nl2br($lp_step_blue_title_primary);?></h3>
                        </div>
                      </div>
                    <?php } ?>
                  <?php } ?>

                  <?php /*  ステップ青_contents start */ ?>
                  <?php if( $lp_area_d == "lp_area2") { ?>  
                    <?php if( $lp_step_blue_label_1 || $lp_step_blue_title_secondary_1 || $lp_step_blue_text_1 || $lp_step_blue_image_1_url) { ?>
                      <?php /*  ステップ青_content_1 start */ ?>
                      <div class="p-lp__step__blue__content">
                        <div class="p-lp__step__blue__content__item">

                          <?php if( $lp_step_blue_label_1) { ?>
                            <div class="p-lp__step__blue__content__label">
                              <?php echo nl2br($lp_step_blue_label_1);?>
                            </div>
                          <?php } ?>

                          <?php if( $lp_step_blue_title_secondary_1) { ?>
                            <div class="p-lp__step__blue__content__title">
                            <?php echo nl2br($lp_step_blue_title_secondary_1);?>
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
                    <?php } ?>

                  <?php } ?>
                    
                  <?php /*  ステップ青_contents end */ ?>

                  <?php if( $lp_area_d == "lp_area3") { ?>  
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
                    <?php } ?>
                  <?php } ?>
                  <?php /*  ステップ茶_contents end */ ?>

                  <?php if( $lp_area_d == "lp_area4") { ?>  
                    <div class="p-lp__step__content">
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
                        <h3 class="p-lp__header__tertiary"><?php echo nl2br($lp_title_text);?></h3>
                      <?php } ?>
                      <?php /*  見出し end */ ?>

                      <?php /*  通常テキスト */ ?>　
                      <?php if( $lp_text ) { ?>
                        <div class="p-lp__text"><?php echo nl2br($lp_text);?></div>
                      <?php } ?>
                    </div>
                  <?php } ?>

                  <?php if( $lp_area_d == "lp_area5") { ?>  
                    <div class="p-lp__step__content">
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
                      </div>
                  <?php } ?>

                  <?php if( $lp_area_d == "lp_area6") { ?>  
                    <div class="p-lp__step__content">

                      <?php /*  見出し start */ ?>
                      <?php if( $lp_textarea_title_text ) { ?>
                        <h3 class="p-lp__header__tertiary"><?php echo nl2br($lp_textarea_title_text);?></h3>
                      <?php } ?>
                      <?php /*  見出し end */ ?>

                      <?php /*  通常テキスト */ ?>　
                      <?php if( $lp_textare_text ) { ?>
                        <div class="p-lp__text"><?php echo nl2br($lp_textare_text);?></div>
                      <?php } ?>
                   </div>
                <?php } ?>

                <?php if( $lp_area_d == "lp_area7") { ?>  
                  <div class="p-lp__step__content">

                    <?php /*  通常テキスト */ ?>　
                    <?php if( $lp_link_text ) { ?>
                      <div class="p-lp__text">
                        <?php 
                          $lp_link_text = str_replace("<br/>", "", $lp_link_text);
                          $lp_link_text = str_replace("<br />", "", $lp_link_text);
                          $lp_link_text = str_replace("<br>", "", $lp_link_text);
                          echo nl2br($lp_link_text,false); 
                          // echo  nl2br($lp_link_text);
                        ?>
                      </div>
                    <?php } ?>
                  </div>
                <?php } ?>


                <?php /*  ステップ青_大見出し */ ?>
                <?php if( $lp_area_d == "lp_area8") { ?>
                  <div class="p-lp__lead">
                    <div class="p-lp__lead__inner">
                      <?php if( $d_lp_3column_bigtitle ) { ?>
                        <p class="p-lp__lead__text"><?php echo nl2br($d_lp_3column_bigtitle);?></p>
                      <?php } ?>
                      <?php if( $d_lp_3column_image_a_url || $d_lp_3column_title_a || $d_lp_3column_text_a || $d_lp_3column_image_b_url || $d_lp_3column_title_b || $d_lp_3column_text_b || $d_lp_3column_image_c_url || $d_lp_3column_title_c || $d_lp_3column_text_c) { ?>
                        <div class="p-lp__lead__contents">
                          <ul class="p-lp__lead__points">
                            <?php if( $d_lp_3column_image_a_url || $d_lp_3column_title_a || $d_lp_3column_text_a) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $d_lp_3column_image_a_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $d_lp_3column_image_a_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($d_lp_3column_title_a || $d_lp_3column_text_a) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $d_lp_3column_title_a) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($d_lp_3column_title_a);?></p>
                                    <?php } ?>
                                    <?php if( $d_lp_3column_text_a) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($d_lp_3column_text_a);?></p>
                                    <?php } ?>
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                            <?php if( $d_lp_3column_image_b_url || $d_lp_3column_title_b || $d_lp_3column_text_b) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $d_lp_3column_image_b_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $d_lp_3column_image_b_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($d_lp_3column_title_b || $d_lp_3column_text_b) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $d_lp_3column_title_b) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($d_lp_3column_title_b);?></p>
                                    <?php } ?>
                                    <?php if( $d_lp_3column_text_b) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($d_lp_3column_text_b);?></p>
                                    <?php } ?>
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                            <?php if( $d_lp_3column_image_c_url || $d_lp_3column_title_c || $d_lp_3column_text_c) { ?>
                              <li class="p-lp__lead__points__item">
                                <?php if( $d_lp_3column_image_c_url) { ?>
                                  <div class="p-lp__lead__points__item__image"><img src="<?php echo $d_lp_3column_image_c_url;?>" alt="イラスト"/></div>
                                <?php } ?>
                                <?php if($d_lp_3column_title_c || $d_lp_3column_text_c) { ?>
                                  <div class="p-lp__lead__points__item__text">
                                    <?php if( $d_lp_3column_title_c) { ?>
                                      <p class="p-lp__lead__points__item__text__heading"><?php echo nl2br($d_lp_3column_title_c);?></p>
                                    <?php } ?>
                                    <?php if( $d_lp_3column_text_c) { ?>
                                      <p class="p-lp__lead__points__item__text__lead"><?php echo nl2br($d_lp_3column_text_c);?></p>
                                    <?php } ?>
                                  </div>
                                <?php } ?>
                              </li>
                            <?php } ?>
                          </ul>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                <?php } ?>

                <?php /*  ステップ青 end */ ?>
                <?php } /* foreach */?>
              </div>
            <?php } /* if */?>

          </div>

          <?php /*  投稿ループ　end */ ?>


        </div>
        <section>
          <div class="p-lp__breadcrumb">
            <ul class="p-topics__breadcrumb__list">
              <li class="p-topics__breadcrumb__list__item"><a href="/">トップ</a></li>
              <li class="p-topics__breadcrumb__list__item"><a href="/topics/">トピックス</a></li>
              <li class="p-topics__breadcrumb__list__item"><?php echo the_title(); ?></li>
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



    <?php endwhile; ?>
<?php else : ?>

        <h3>記事がありません</h3>
        <p>表示する記事はありませんでした。</p>

<?php endif; ?>

<?php get_footer(); ?>