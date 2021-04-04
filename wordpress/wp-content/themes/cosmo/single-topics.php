<?php
  $blog_lead = SCF::get('blog_lead');
?>

<html>
  <head>
    <title><?php wp_title('｜', true, 'right'); ?>コスモジュク</title>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0"/>
    <meta name="title" content="<?php wp_title('｜', true, 'right'); ?>コスモジュク"/>
    <meta name="description" content="<?php echo $blog_lead; ?>"/>
    <meta name="keywords" content="塾,個別指導,集団授業,受験,コスモジュク,コスモ,上永谷,日限山,丸山台,舞岡,野庭,別所,上大岡,弘明寺,大久保,芹が谷"/>
    <meta property="og:url" content="http://cosmojuku.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php wp_title('｜', true, 'right'); ?>コスモジュク"/>
    <meta property="og:description" content="<?php echo $blog_lead; ?>"/>
    <meta property="og:image" content="http://cosmojuku.com/assets/images/share/ogp.png"/>
    <meta property="og:site_name" content="コスモジュク"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="<?php wp_title('｜', true, 'right'); ?>コスモジュク"/>
    <meta name="twitter:description" content="<?php echo $blog_lead; ?>"/>
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

    <div class="p-topics is-detail">

      <?php
        $blog_image_pc = SCF::get('blog_image_pc');
        $blog_image_pc = wp_get_attachment_image_src( $blog_image_pc , 'full' );
        $blog_image_pc_url = esc_url($blog_image_pc[0]);

        $blog_image_sp = SCF::get('blog_image_sp');
        $blog_image_sp = wp_get_attachment_image_src( $blog_image_sp , 'full' );
        $blog_image_sp_url = esc_url($blog_image_sp[0]);
      ?>

      <?php
        $terms = get_the_terms( $post->ID, 'topics_cate');
        foreach ( $terms as $term ){
      ?>

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
              $movie = $field_value['movie']; // 動画
              $movie_image = $field_value['movie_image']; // 動画サムネイル
              $movie_image = wp_get_attachment_image_src( $movie_image , 'full' );
              $movie_image_url = esc_url($movie_image[0]);
      
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
                    <video src="<?php echo esc_url(wp_get_attachment_url($movie));?>" poster="<?php echo $movie_image_url;?>" preload="auto" muted="muted" playsinline="playsinline" data-module-playmovie-roll="target"></video>
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
                  <?php query_posts("post_type=topics&posts_per_page=3");//カスタム投稿タイプ名 ?>
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

                    <li class="c-article__list__item">
                      <a href="<?php the_permalink(); ?>">

                        <?php
                          $terms = get_the_terms( $post->ID, 'topics_cate');
                        ?>
                          <?php if( $terms ) : ?>
                            <?php
                              foreach ( $terms as $term ){
                            ?>
                              <?php if( $term->name === 'お知らせ' ){?>
                                <div class="c-article__list__img is-category__info">
                              <?php }elseif( $term->name === '塾長日記' ){?>
                                <div class="c-article__list__img is-category__diary">
                              <?php }elseif( $term->name === 'その他' ){?>
                                <div class="c-article__list__img is-category__other">
                              <?php } ?>

                            <?php } ?>
                          <?php else : ?>
                            <div class="c-article__list__img is-category__other">
                          <?php endif; ?>

                          <?php if( $blog_image_pc_url ){?>
                            <img class="u-is-pc" src="<?php echo $blog_image_pc_url;?>" alt=""/>
                          <?php } ?>

                          <?php if( $blog_image_sp_url ){?>
                            <img class="u-is-sp" src="<?php echo $blog_image_sp_url;?>" alt=""/>
                          <?php } ?>

                        </div>
                        <div class="c-article__list__desc">

                        <div class="c-article__list__desc__label">
                          <?php if( $terms ) : ?>
                            <?php
                              foreach ( $terms as $term ){
                            ?>
                              <?php echo $term->name; ?>
                            <?php } ?>
                          <?php else : ?>
                            その他
                          <?php endif; ?>
                        </div>
                        <div class="c-article__list__desc__title"><?php echo the_title(); ?></div>
                        <div class="c-article__list__desc__text"><?php echo nl2br($blog_lead);?></div>
                        <div class="c-article__list__desc__date"><?php the_time('Y.m.d'); ?></div>
                        </div>
                      </a>
                    </li>

                  <?php endwhile; ?>
              </ul>
              <?php endif; wp_reset_query(); ?>

            <div class="p-topics__latest__article__back"><a href="/topics/"> <span class="p-topics__latest__article__back__arrow"></span>一覧へ戻る</a></div>
          </div>
        </section>
        <section>
          <div class="p-topics__breadcrumb">
            <ul class="p-topics__breadcrumb__list">
              <li class="p-topics__breadcrumb__list__item"><a href="/">トップ</a></li>
              <li class="p-topics__breadcrumb__list__item"><a href="/topics/">トピックス</a></li>
              <li class="p-topics__breadcrumb__list__item"><?php echo the_title(); ?></li>
            </ul>
          </div>
        </section>
      </div>

    <!-- <link rel="stylesheet" href="/assets/styles/app.css"/>

    <script src="/assets/scripts/app.js"></script>
 -->


    <?php endwhile; ?>
<?php else : ?>

        <h3>記事がありません</h3>
        <p>表示する記事はありませんでした。</p>

<?php endif; ?>

<?php get_footer(); ?>