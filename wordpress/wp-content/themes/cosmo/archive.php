<?php get_header(); ?>
  <div class="p-topics">
    <div class="c-section">
      <div class="c-section__inner">
        <div class="c-section__contents">
          <h1 class="p-heading">
            <p class="p-heading__en">NEWS</p>
            <div class="p-topics__heading">
              <div class="p-topics__heading__jp">
                <p class="p-heading__jp">コスモニュース</p>
              </div>
              <div class="p-topics__heading__sort">
                <div class="p-topics__heading__sort__item is-active">
                  <a href="/topics/">
                    すべて
                  </a>
                </div>

                <?php
                  $terms = get_terms( 'topic_cate');
                  foreach ( $terms as $term ) {
                  $term_link = get_term_link($term->slug, 'topic_cate');
                ?>
                  <div class="p-topics__heading__sort__item">
                    <a href="<?php echo esc_url( $term_link ); ?>">
                      <?php echo esc_html($term->name);?>
                    </a>
                  </div>

                <?php } ?>

                <!-- <div class="p-topics__heading__sort__item">お知らせ</div>
                <div class="p-topics__heading__sort__item">塾長日記</div>
                <div class="p-topics__heading__sort__item">その他</div> -->


              </div>
            </div>
          </h1>
        </div>
      </div>
    </div>



    <section>
      <div class="p-topics__article">
        <ul class="c-article__list">


    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();

      ?>

                <li class="c-article__list__item">
                  <a href="<?php the_permalink(); ?>">

                    <?php
                      $terms = get_the_terms( $post->ID, 'topic_cate');
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

    <?php 
        endwhile;
      endif;
    ?>

        </ul>
      </div>

      <?php
      if( function_exists('pagenation') ){ // 関数が定義されていたらtrueになる
          pagenation();
      }?>

    </section>




    <section>
      <div class="p-topics__article">
        <div class="c-breadcrumb">
          <ul class="c-breadcrumb__list">
            <li class="c-breadcrumb__list__item"><a href="/">トップ</a></li>
            <li class="c-breadcrumb__list__item">コスモニュース</li>
          </ul>
        </div>
      </div>
    </section>
  </div>

  <?php get_footer(); ?>