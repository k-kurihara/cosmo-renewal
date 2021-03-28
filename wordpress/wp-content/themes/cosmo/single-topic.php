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
                        <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/flow/">入塾までの流れ・よくあるご質問</a></li>
                        <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/teachers/">講師・教室紹介</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="c-header__links__item" data-module="currentActive" data-options="{&quot;name&quot;:&quot;course&quot;}"><a class="c-header__links__page" href="/course/">コース・料金</a></li>
                <li class="c-header__links__item" data-module="currentActive" data-options="{&quot;name&quot;:&quot;topics&quot;}"><a class="c-header__links__page" href="/topics/">コスモNEWS</a></li>
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
                          <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/flow/">入塾までの流れ・よくあるご質問</a></li>
                          <li class="c-header__links__second__item"><a class="c-header__links__second__item__button" href="/teachers/">講師・教室紹介</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="c-header__links__item is-course"><a class="c-header__links__page" href="/course/">コース・料金</a></li>
                <li class="c-header__links__item is-topics"><a class="c-header__links__page" href="/topics/">コスモNEWS</a></li>
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


      <?php
        $blog_image_pc = SCF::get('blog_image_pc');
        $blog_image_pc = wp_get_attachment_image_src( $blog_image_pc , 'full' );
        $blog_image_pc_url = esc_url($blog_image_pc[0]);

        $blog_image_sp = SCF::get('blog_image_sp');
        $blog_image_sp = wp_get_attachment_image_src( $blog_image_sp , 'full' );
        $blog_image_sp_url = esc_url($blog_image_sp[0]);
      ?>

      <?php
        $terms = get_the_terms( $post->ID, 'topic_cate');
        foreach ( $terms as $term ){
      ?>

      <div class="p-topics is-detail">
        <?php if( $term->name === 'お知らせ' ){?>
          <div class="p-topics__keyvisual is-category__info">
        <?php }elseif( $term->name === '塾長日記' ){?>
          <div class="p-topics__keyvisual is-category__diary">
        <?php }elseif( $term->name === 'その他' ){?>
          <div class="p-topics__keyvisual is-category__other">
        <?php } ?>
          
          <?php if( $blog_image_pc_url ){?>
            <img class="u-is-pc" src="<?php echo $blog_image_pc_url;?>" alt=""/>
          <?php } ?>
          <?php if( $blog_image_sp_url ){?>
            <img class="u-is-sp" src="<?php echo $blog_image_sp_url;?>" alt=""/>
          <?php } ?>
        </div>
          <?php if( $term->name === 'お知らせ' ){?>
            <div class="p-topics__header__primary is-category__info">
          <?php }elseif( $term->name === '塾長日記' ){?>
            <div class="p-topics__header__primary is-category__diary">
          <?php }elseif( $term->name === 'その他' ){?>
            <div class="p-topics__header__primary is-category__other">
          <?php } ?>
              <span class="p-topics__header__primary__label">
                <?php echo $term->name; ?>
              </span>
            <h1 class="p-topics__header__primary__title"><?php echo the_title(); ?></h1>
            <p class="p-topics__header__primary__date"><?php the_time("Y.m.j") ?></p>
          </div>
        <?php } ?>
        <div class="p-topics__contents">



        <?php /*  投稿ループ　start */ ?>
          <?php
            $cf_group = SCF::get('投稿グループ');
            foreach ($cf_group as $field_name => $field_value ) {
              $title_type = $field_value['title_type']; // 見出し種類
              $title_text = $field_value['title_text']; // 見出しテキスト
              $full_text = $field_value['full_text']; // 通常テキスト（全幅）
              $full_image = $field_value['full_image']; // 通常画像（全幅）
              $movie = $field_value['movie']; // 通常画像（全幅）
              $column_2_type = $field_value['column_2_type']; // 2カラム種類
              $column_2_text_1 = $field_value['column_2_text_1']; // 2カラム　左テキスト
              $column_2_text_2 = $field_value['column_2_text_2']; // 2カラム　右テキスト
              $column_2_image_1 = $field_value['column_2_image_1']; // 2カラム　左画像
              $column_2_image_2 = $field_value['column_2_image_2']; // 2カラム　右画像
              $info_text = $field_value['info_text']; // 情報エリア＿テキスト
              $info_note = $field_value['info_note']; // 情報エリア＿注意書き
              $info_note_em = $field_value['info_note_em']; // 情報エリア＿注意書き（赤字）
          ?>

            <section>

              <?php /*  見出し start */ ?>
              <?php if( $title_text ) { ?>
                <?php /*  見出し 出し分け */ ?>　
                <?php if( $title_type === 'title_1' ){?>
                  <h2 class="p-topics__header__secondary"><?php echo nl2br($title_text);?></h2>
                <?php }elseif( $title_type === 'title_2' ){?>
                  <h3 class="p-topics__header__tertiary"><?php echo nl2br($title_text);?></h3>
                <?php }elseif( $title_type === 'title_3' ){?>
                  <h4 class="p-topics__header__quaternary"><?php echo nl2br($title_text);?></h4>
                <?php } ?>
              <?php } ?>
              <?php /*  見出し end */ ?>

              <?php /*  通常テキスト（全幅） */ ?>　
              <?php if( $full_text ) { ?>
                <div class="p-topics__text"><?php echo nl2br($full_text);?></div>
              <?php } ?>

              <?php /*  通常画像（全幅） */ ?>　
              <?php if( $full_image ) { ?>
                <?php echo wp_get_attachment_image( $full_image , 'full' );?>
              <?php } ?>

              <?php /*  動画 */ ?>　
              <?php if( $movie ) { ?>
                <div class="p-topics__movie">
                  <div class="p-topics__movie__inner" data-module="playMovie"><a class="p-topics__movie__play" href="javascript:void(0)" data-module-playmovie-roll="trigger"><img src="/assets/images/about/img_play001.png" alt="再生ボタン"/></a>
                    <video src="<?php echo esc_url(wp_get_attachment_url($movie));?>" poster="/assets/images/about/pic_movie-thumb.png" preload="auto" muted="muted" playsinline="playsinline" data-module-playmovie-roll="target"></video>
                  </div>
                </div>
              <?php } ?>


              <?php /*  2カラム start */ ?>
              <?php if( $column_2_type ) { ?>
                <?php /*  2カラム 出し分け */ ?>　
                <?php /*  テキスト + テキスト */ ?>　
                <?php if( $column_2_type === 'column_2_type_1' ){?>
                    <?php if( $column_2_text_1 && $column_2_text_2 ){?>
                      <div class="p-topics__column__double--text">
                        <div class="p-topics__column__double__item"><?php echo nl2br($column_2_text_1);?></div>
                        <div class="p-topics__column__double__item"><?php echo nl2br($column_2_text_2);?></div>
                      </div>
                    <?php } ?>
                <?php /*  テキスト + 画像 */ ?>　
                <?php }elseif( $column_2_type === 'column_2_type_2' ){?>
                    <?php if( $column_2_text_1 && $column_2_image_2 ){?>
                      <div class="p-topics__column__double">
                        <div class="p-topics__column__double__item"><?php echo nl2br($column_2_text_1);?></div>
                        <div class="p-topics__column__double__item--img"><?php echo wp_get_attachment_image( $column_2_image_2 , 'full' );?></div>
                      </div>
                    <?php } ?>
                <?php /* 画像 + テキスト */ ?>　
                <?php }elseif( $column_2_type === 'column_2_type_3' ){?>
                    <?php if( $column_2_image_1 && $column_2_text_2 ){?>
                      <div class="p-topics__column__double">
                      <div class="p-topics__column__double__item--img"><?php echo wp_get_attachment_image( $column_2_image_1 , 'full' );?></div>
                        <div class="p-topics__column__double__item"><?php echo nl2br($column_2_text_2);?></div>
                      </div>
                    <?php } ?>
                <?php /* 画像 + 画像 */ ?>　
                <?php }elseif( $column_2_type === 'column_2_type_4' ){?>
                    <?php if( $column_2_image_1 && $column_2_image_2 ){?>
                      <div class="p-topics__column__double--img">
                        <div class="p-topics__column__double__item"><?php echo wp_get_attachment_image( $column_2_image_1 , 'full' );?></div>
                        <div class="p-topics__column__double__item"><?php echo wp_get_attachment_image( $column_2_image_2 , 'full' );?></div>
                      </div>
                    <?php } ?>
                <?php } ?>
              <?php } ?>
              <?php /*  2カラム end */ ?>

              <?php /*  情報エリア start */ ?>
              <?php if( $info_text || $info_note || $info_note_em ) { ?>
                <div class="p-topics__info">
                  <?php if( $info_text ) { ?>
                    <div class="p-topics__info__title"><?php echo nl2br($info_text);?></div>
                  <?php } ?>

                  <?php if( $info_note || $info_note_em ) { ?>
                    <div class="p-topics__info__detail">
                      <?php if( $info_note_em ) { ?>
                        <div class="p-topics__info__detail__text--em"><?php echo nl2br($info_note_em);?></div>
                      <?php } ?>
                      <?php if( $info_note ) { ?>
                        <div class="p-topics__info__detail__text"><?php echo nl2br($info_note);?></div>
                      <?php } ?>
                    </div>
                  <?php } ?>

                </div>
              <?php } ?>
              <?php /*  情報エリア end */ ?>

            </section>

            <?php
            }
          ?>
        <?php /*  投稿ループ　end */ ?>

            <div class="p-topics__sns"> 
              <div class="p-topics__sns__twitter">
                <a href="http://twitter.com/share?url=<?php echo get_the_permalink(); ?>" target="_blank"><img src="/assets/images/topics/detail/twitter.png" alt=""/></a>
              </div>
              <div class="p-topics__sns__facebook">
                <a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>&amp;t=<?php echo the_title(); ?>" target="_blank"><img src="/assets/images/topics/detail/facebook.png" alt=""/></a>
              </div>
            </div>

        </div>
        <section>
          <div class="p-topics__latest__article">
            <div class="p-topics__latest__article__title">最新記事</div>


            <ul class="p-topics__latest__article__list">
                  <?php query_posts("post_type=topic&posts_per_page=3");//カスタム投稿タイプ名 ?>
                  <?php if(have_posts()): ?>
                  <?php while(have_posts()): 
                    the_post(); 
                    $blog_lead = SCF::get('blog_lead');
                    $blog_image_pc = SCF::get('blog_image_pc');
                    $blog_image_pc = wp_get_attachment_image_src( $blog_image_pc , 'full' );
                    $blog_image_pc_url = esc_url($blog_image_pc[0]);
        
                    $blog_image_sp = SCF::get('blog_image_sp');
                    $blog_image_sp = wp_get_attachment_image_src( $blog_image_sp , 'full' );
                    $blog_image_sp_url = esc_url($blog_image_sp[0]);
                  ?>

                  <?php
                    $terms = get_the_terms( $post->ID, 'topic_cate');
                    foreach ( $terms as $term ){
                  ?>

                    <li class="p-topics__latest__article__list__item">
                      <a href="<?php the_permalink(); ?>">
                        <?php if( $term->name === 'お知らせ' ){?>
                          <div class="p-topics__latest__article__list__img is-category__info">
                        <?php }elseif( $term->name === '塾長日記' ){?>
                          <div class="p-topics__latest__article__list__img is-category__diary">
                        <?php }elseif( $term->name === 'その他' ){?>
                          <div class="p-topics__latest__article__list__img is-category__other">
                        <?php } ?>

                          <?php if( $blog_image_pc_url ){?>
                            <img class="u-is-pc" src="<?php echo $blog_image_pc_url;?>" alt=""/>
                          <?php } ?>

                          <?php if( $blog_image_sp_url ){?>
                            <img class="u-is-sp" src="<?php echo $blog_image_sp_url;?>" alt=""/>
                          <?php } ?>

                        </div>
                        <div class="p-topics__latest__article__list__desc">

                        <div class="p-topics__latest__article__list__desc__label"><?php echo $term->name; ?></div>
                        <div class="p-topics__latest__article__list__desc__title"><?php echo the_title(); ?></div>
                        <div class="p-topics__latest__article__list__desc__text"><?php echo nl2br($blog_lead);?></div>
                        <div class="p-topics__latest__article__list__desc__date"><?php the_time('Y.m.d'); ?></div>
                        </div>
                      </a>
                    </li>
                  <?php } ?>

                  <?php endwhile; ?>
              </ul>
              <?php endif; wp_reset_query(); ?>

            <div class="p-topics__latest__article__back"><a href="/topic"> <span class="p-topics__latest__article__back__arrow"></span>一覧へ戻る</a></div>
          </div>
        </section>
        <section>
          <div class="p-topics__breadcrumb">
            <ul class="p-topics__breadcrumb__list">
              <li class="p-topics__breadcrumb__list__item"><a href="">トップ</a></li>
              <li class="p-topics__breadcrumb__list__item"><a href="">トピックス</a></li>
            </ul>
          </div>
        </section>
      </div>
      <div class="c-footer">
        <div class="c-footer__inner">
          <div class="c-footer__logo"><img src="/assets/images/common/logo.png" alt="ロゴ"/></div>
          <div class="c-footer__links">
            <div class="c-footer__links__content">
              <p>コスモジュクについて</p>
              <ul class="c-footer__links__list">
                <li class="c-footer__links__item"><a class="c-footer__links__item__text" href="/about/">コスモジュクとは</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text" href="/flow/">入塾までの流れ・よくあるご質問</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text" href="/teachers/">講師・教室紹介</a></li>
              </ul>
            </div>
            <div class="c-footer__links__content">
              <p>コース・料金</p>
              <ul class="c-footer__links__list">
                <li class="c-footer__links__item"><a class="c-footer__links__item__text" href="/course/">オリジナルコース</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text" href="/course/">チュートリアルコース</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text" href="/course/">南中コース</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text" href="/course/">大学受験コース</a></li>
                <li class="c-footer__links__item"><a class="c-footer__links__item__text" href="/course/">オンラインコース</a></li>
              </ul>
            </div>
            <div class="c-footer__links__content is-exception"><a class="c-footer__links__exception" href="/topics/">コスモニュース</a><a class="c-footer__links__exception" href="/contact/">企業情報</a><a class="c-footer__links__exception" href="/company/">お問い合わせ</a>
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


    <link rel="stylesheet" href="/assets/styles/app.css"/>

    <script src="/assets/scripts/app.js"></script>



    <?php endwhile; ?>
<?php else : ?>

        <h3>記事がありません</h3>
        <p>表示する記事はありませんでした。</p>

<?php endif; ?>

</body>
</html>