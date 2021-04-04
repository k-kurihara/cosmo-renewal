<?php
/*
Template Name: ホーム
Template Post Type: page
*/
?>
<?php get_header(); ?>

  <div class="p-top">
    <div class="c-section">
      <div class="c-section__inner">
        <div class="c-mainvisual">
          <div class="c-mainvisual__content">
            <div class="c-mainvisual__movie" data-module="autoPlayMovie">
              <video class="u-is-pc" src="/assets/images/top/mainvisual/movie-pc.mp4" muted="muted" loop="loop" playsinline="playsinline"></video>
              <video class="u-is-sp" src="/assets/images/top/mainvisual/movie-sp.mp4" poster="/assets/images/top/mainvisual/movie-poster.jpg" muted="muted" loop="loop" playsinline="playsinline"></video>
            </div>
            <div class="c-mainvisual__heading">
              <div class="c-mainvisual__heading__copy"><img src="/assets/images/top/mainvisual/txt-main.svg" alt=""/></div>
              <div class="c-mainvisual__heading__lead">今日の「出来た」が未来を作る。<br/>何年経っても価値の続く教育を。<br/>日限山・丸山台・野庭・南舞岡で<br class="u-is-sp"/>塾をお探しならコスモジュク</div>
            </div>
            <div class="c-mainvisual__slide">
              <ul class="c-mainvisual__slide__list" data-module="slick" data-options="{&quot;hasTrigger&quot;:false,&quot;dots&quot;:true,&quot;dotsClass&quot;:&quot;small-window-dots&quot;}">


                <?php
                    $posts = new WP_Query( array(
                            'post_type' => 'lp',
                            'posts_per_page' => 3
                        )
                    );
                    if ( have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post();
                ?>
                  <?php
                    $lp_key_visual_pc = SCF::get('lp_key_visual_pc');
                    $lp_key_visual_pc = wp_get_attachment_image_src( $lp_key_visual_pc , 'full' );
                    $lp_key_visual_pc_url = esc_url($lp_key_visual_pc[0]);

                    $lp_key_visual_sp = SCF::get('lp_key_visual_sp');
                    $lp_key_visual_sp = wp_get_attachment_image_src( $lp_key_visual_sp , 'full' );
                    $lp_key_visual_sp_url = esc_url($lp_key_visual_sp[0]);
                  ?>

                  <li class="c-mainvisual__slide__item">
                    <a href="<?php the_permalink(); ?>">
                      <?php if( $lp_key_visual_pc_url ){?>
                        <img src="<?php echo $lp_key_visual_pc_url;?>" alt=""/>
                      <?php } ?>
                    </a>
                  </li>


                <?php endwhile; endif; wp_reset_query(); ?>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section>
      <div class="p-top__about" data-module="scrollAnimation" data-options="{&quot;root&quot;:null,&quot;rootMargin&quot;:&quot;-25% 0%&quot;,&quot;threshold&quot;:[0],&quot;animation&quot;:&quot;fadeUp&quot;}">
        <div class="p-top__about__contents">
          <div class="p-top__about__item--title">
            <h2 class="p-top__about__title">コスモジュクへ<br/>ようこそ</h2>
            <div class="p-top__about__link u-is-pc"><a class="c-button" href="/about/">
                <div class="c-button__text">
                  <p>コスモジュクについて</p>
                </div>
                <div class="c-button__arrow"></div></a></div>
          </div>
          <div class="p-top__about__item--desc">
            <p class="p-top__about__desc">試験や受験を経て、社会に出た時に<br/>さらに価値が高まる能力を<br class="u-is-sp"/>学ぶ場所を提供する、<br/>そんな塾でありたい。<br/>「何のために勉強するの？」<br/>こんな疑問をお持ちの方は<br/>ぜひ一緒に学ぶ楽しさを感じてみませんか？</p>
          </div>
          <div class="p-top__about__link u-is-sp"><a class="c-button" href="/about/">
              <div class="c-button__text">
                <p>コスモジュクについて</p>
              </div>
              <div class="c-button__arrow"></div></a></div>
        </div>
        <div class="p-top__about__img"><img class="u-is-pc" src="/assets/images/top/pc/about_img.png" alt=""/><img class="u-is-sp" src="/assets/images/top/sp/about_img.png" alt=""/></div>
      </div>
    </section>
    <section>
      <div class="p-top__course" data-module="scrollAnimation" data-options="{&quot;root&quot;:null,&quot;rootMargin&quot;:&quot;-25% 0%&quot;,&quot;threshold&quot;:[0],&quot;animation&quot;:&quot;fadeUp&quot;}">
        <div class="p-top__header__title">コース・料金</div>
        <div class="p-top__header__text">コスモジュクでは生徒ひとりひとりに適した学習指導ができるよう、3つのコースをご用意しております。<br class="u-is-pc"/>それぞれのコースをかけ合わせることも可能です。ぜひ教室までご相談ください。</div>
        <div class="p-top__course__introduction">
          <ul class="p-top__course__introduction__list">
            <li class="p-top__course__introduction__list__item is-001">
              <div class="p-top__course__introduction__list__title">オリジナルコース</div>
              <div class="p-top__course__introduction__list__image"><img src="/assets/images/top/pc/course_introduction_1.png" alt=""/></div>
              <div class="p-top__course__introduction__list__text">集団授業の形態です。1クラス8人を定員として、少人数でコミュニケーションの取りやすいスタイルを取っています。生徒自身が発表する場を設けたり、生徒同士で質問し合ったりすることで、対教師だけの授業では生まれない新たな角度からの理解や発想と出会うことができます。</div><a class="p-top__course__introduction__list__anchor" href="/course/?target=original_course"><span class="p-top__course__introduction__list__anchor__arrow"></span>コース詳細をみる</a>
            </li>
            <li class="p-top__course__introduction__list__item is-002">
              <div class="p-top__course__introduction__list__title">チュートリアルコース</div>
              <div class="p-top__course__introduction__list__image"><img src="/assets/images/top/pc/course_introduction_2.png" alt=""/></div>
              <div class="p-top__course__introduction__list__text">講師1人に対して生徒が最大2名までの個別指導の形態です。個人の学習状況（進度、学力、意欲、提出物の状況など）に合わせてカリキュラムを作成するため、自分のペースで学習することができます。自身の予定に合わせて通塾することが可能なのもポイントです。</div><a class="p-top__course__introduction__list__anchor" href="/course/?target=tutorial_course"><span class="p-top__course__introduction__list__anchor__arrow"></span>コース詳細をみる</a>
            </li>
            <li class="p-top__course__introduction__list__item is-003">
              <div class="p-top__course__introduction__list__title">南中コース</div>
              <div class="p-top__course__introduction__list__image"><img src="/assets/images/top/pc/course_introduction_3.png" alt=""/></div>
              <div class="p-top__course__introduction__list__text">横浜市立南中学校を目指すコースです。合格に必要とされる「読解力」「思考力」「表現力」を習得するためのカリキュラムを採用。基礎から応用、発展まで、長年培った経験と対策でじっくりと指導していきます。チュートリアルコースから南中コースへの変更も可能です。</div><a class="p-top__course__introduction__list__anchor" href="/course/?target=south_junior_high_school_course"><span class="p-top__course__introduction__list__anchor__arrow"></span>コース詳細をみる</a>
            </li>
            <li class="p-top__course__introduction__list__item is-004">
              <div class="p-top__course__introduction__list__title">大学受験コース</div>
              <div class="p-top__course__introduction__list__image"><img src="/assets/images/top/pc/course_introduction_4.png" alt=""/></div>
              <div class="p-top__course__introduction__list__text">大学受験を目標にした、映像授業と個別指導を組み合わせたハイブリットなコースです。映像授業で単元の内容を確認してから、講師との個別授業で問題演習から内容理解を深めていきます。また、映像は何度でも視聴することが可能です。</div><a class="p-top__course__introduction__list__anchor" href="/course/?target=university_entrance_exam_course"><span class="p-top__course__introduction__list__anchor__arrow"></span>コース詳細をみる</a>
            </li>
            <li class="p-top__course__introduction__list__item is-005">
              <div class="p-top__course__introduction__list__title">オンラインコース</div>
              <div class="p-top__course__introduction__list__image"><img src="/assets/images/top/pc/course_introduction_5.png" alt=""/></div>
              <div class="p-top__course__introduction__list__text">オンラインによる、講師1名に対して生徒1名の完全個別授業になります。1対1での授業となるため自身のペースで学習を進めることができます。また、分からない問題があった際には、オンライン上で質問をすることもできます。</div><a class="p-top__course__introduction__list__anchor" href="/course/?target=online_course"><span class="p-top__course__introduction__list__anchor__arrow"></span>コース詳細をみる</a>
            </li>
          </ul>
        </div>
        <div class="p-top__course__link" data-module="ashiato" data-options="{&quot;target&quot;:&quot;ashiato1&quot;,&quot;setting&quot;:{&quot;root&quot;:null,&quot;rootMargin&quot;:&quot;0% 0%&quot;,&quot;threshold&quot;:[0]}}"><a class="c-button" href="/course/">
            <div class="c-button__text">
              <p>コースの一覧を見る</p>
            </div>
            <div class="c-button__arrow"></div></a></div>
        <div class="p-top__footprints is-1 u-is-pc" data-module-ashiato-roll="ashiato1">
          <div class="p-top__footprints__ashiato is-0" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/pc/ashiato-1_0.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-1" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/pc/ashiato-1_1.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-2" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/pc/ashiato-1_2.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-3" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/pc/ashiato-1_3.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-4" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/pc/ashiato-1_4.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-5" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/pc/ashiato-1_5.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-6" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/pc/ashiato-1_6.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-7" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/pc/ashiato-1_7.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-8" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/pc/ashiato-1_8.png" alt="足跡"/></div>
        </div>
        <div class="p-top__footprints is-1 u-is-sp" data-module-ashiato-roll="ashiato1">
          <div class="p-top__footprints__ashiato is-0" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/sp/ashiato-1_0.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-1" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/sp/ashiato-1_1.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-2" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/sp/ashiato-1_2.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-3" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/sp/ashiato-1_3.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-4" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/sp/ashiato-1_4.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-5" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/sp/ashiato-1_5.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-6" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/sp/ashiato-1_6.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-7" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/sp/ashiato-1_7.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-8" data-module-ashiato-roll="ashiato1-children"><img src="/assets/images/top/sp/ashiato-1_8.png" alt="足跡"/></div>
        </div>
      </div>
    </section>
    <section>
      <div class="p-top__news" data-module="scrollAnimation" data-options="{&quot;root&quot;:null,&quot;rootMargin&quot;:&quot;-25% 0%&quot;,&quot;threshold&quot;:[0],&quot;animation&quot;:&quot;fadeUp&quot;}">
        <div class="p-top__header__title">コスモニュース</div>
        <div class="p-top__header__text">コスモジュクからのお知らせや、<br class="u-is-sp"/>塾長・田野井のちょっと笑える日記も公開中！</div>
          <ul class="c-article__list">
            <?php
                $posts = new WP_Query( array(
                        'post_type' => 'topics',
                        'posts_per_page' => 3
                    )
                );
                if ( have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post();
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

            <?php endwhile; endif; wp_reset_query(); ?>

          </ul>

        <div class="p-top__news__link" data-module="ashiato" data-options="{&quot;target&quot;:&quot;ashiato2&quot;,&quot;setting&quot;:{&quot;root&quot;:null,&quot;rootMargin&quot;:&quot;0% 0%&quot;,&quot;threshold&quot;:[0]}}"><a href="/topics/"><span class="p-top__news__link__arrow"></span>記事一覧をみる</a></div>
        <div class="p-top__footprints is-2 u-is-pc" data-module-ashiato-roll="ashiato2">
          <div class="p-top__footprints__ashiato is-0" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/pc/ashiato-2_0.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-1" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/pc/ashiato-2_1.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-2" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/pc/ashiato-2_2.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-3" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/pc/ashiato-2_3.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-4" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/pc/ashiato-2_4.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-5" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/pc/ashiato-2_5.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-6" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/pc/ashiato-2_6.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-7" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/pc/ashiato-2_7.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-8" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/pc/ashiato-2_8.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-9" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/pc/ashiato-2_9.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-10" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/pc/ashiato-2_10.png" alt="足跡"/></div>
        </div>
        <div class="p-top__footprints is-2 u-is-sp" data-module-ashiato-roll="ashiato2">
          <div class="p-top__footprints__ashiato is-0" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/sp/ashiato-2_0.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-1" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/sp/ashiato-2_1.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-2" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/sp/ashiato-2_2.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-3" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/sp/ashiato-2_3.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-4" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/sp/ashiato-2_4.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-5" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/sp/ashiato-2_5.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-6" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/sp/ashiato-2_6.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-7" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/sp/ashiato-2_7.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-8" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/sp/ashiato-2_8.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-9" data-module-ashiato-roll="ashiato2-children"><img src="/assets/images/top/sp/ashiato-2_9.png" alt="足跡"/></div>
        </div>
      </div>
    </section>
    <section>
      <div class="p-top__activity" data-module="scrollAnimation" data-options="{&quot;root&quot;:null,&quot;rootMargin&quot;:&quot;-25% 0%&quot;,&quot;threshold&quot;:[0],&quot;animation&quot;:&quot;fadeUp&quot;}">
        <div class="p-top__activity__contents" data-module="ashiato" data-options="{&quot;target&quot;:&quot;ashiato3&quot;,&quot;setting&quot;:{&quot;root&quot;:null,&quot;rootMargin&quot;:&quot;0% 0% -70% 0%&quot;,&quot;threshold&quot;:[0]}}">
          <div class="p-top__activity__lead" data-activity="target">
            <div class="p-top__activity__lead__title">コスモジュクの活動</div>
            <div class="p-top__activity__lead__text">授業風景やイベント時の様子をFacebookに<br class="u-is-sp"/>上げています。<br/>塾内のイメージや、お子様の日頃のご様子をぜひご覧ください！</div>
            <div class="p-top__activity__lead__link"><a class="c-button" href="https://www.facebook.com/4919cosmojuku" target="_blank">
                <div class="c-button__text">
                  <p>公式facebookはこちら</p>
                </div>
                <div class="c-button__arrow"></div></a></div>
          </div>
          <div class="p-top__activity__body" data-module="FbActivity"></div>
        </div>
        <div class="p-top__footprints is-3 u-is-pc" data-module-ashiato-roll="ashiato3">
          <div class="p-top__footprints__ashiato is-0" data-module-ashiato-roll="ashiato3-children"><img src="/assets/images/top/pc/ashiato-3_0.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-1" data-module-ashiato-roll="ashiato3-children"><img src="/assets/images/top/pc/ashiato-3_1.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-2" data-module-ashiato-roll="ashiato3-children"><img src="/assets/images/top/pc/ashiato-3_2.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-3" data-module-ashiato-roll="ashiato3-children"><img src="/assets/images/top/pc/ashiato-3_3.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-4" data-module-ashiato-roll="ashiato3-children"><img src="/assets/images/top/pc/ashiato-3_4.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-5" data-module-ashiato-roll="ashiato3-children"><img src="/assets/images/top/pc/ashiato-3_5.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-6" data-module-ashiato-roll="ashiato3-children"><img src="/assets/images/top/pc/ashiato-3_6.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-7" data-module-ashiato-roll="ashiato3-children"><img src="/assets/images/top/pc/ashiato-3_7.png" alt="足跡"/></div>
          <div class="p-top__footprints__ashiato is-8" data-module-ashiato-roll="ashiato3-children"><img src="/assets/images/top/pc/ashiato-3_8.png" alt="足跡"/></div>
        </div>
      </div><div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v10.0" nonce="cRV3lJ5n"></script>
    </section>
    <section>
      <div class="p-top__access" data-module="scrollAnimation" data-options="{&quot;root&quot;:null,&quot;rootMargin&quot;:&quot;-25% 0%&quot;,&quot;threshold&quot;:[0],&quot;animation&quot;:&quot;fadeUp&quot;}">
        <div class="p-top__access__contents">
          <div class="p-top__access__lead">
            <div class="p-top__access__lead__title">アクセス</div>
            <div class="p-top__access__lead__name">日限丸山台スクール</div>
            <div class="p-top__access__lead__address">横浜市港南区丸山台4-9-12 吉川ビル104</div>
            <ul class="p-top__access__lead__business">
              <li class="p-top__access__lead__business__item"><span class="p-top__access__lead__business__label">平日</span><span class="p-top__access__lead__business__time">13：30～22：00</span></li>
              <li class="p-top__access__lead__business__item"><span class="p-top__access__lead__business__label">土曜</span><span class="p-top__access__lead__business__time">13：30～18：00</span></li>
            </ul>
            <div class="p-top__access__lead__caption">※日曜、祝日は休塾日</div>
          </div>
          <div class="p-top__access__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26014.30479555428!2d139.55647369923452!3d35.41050258651411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f1.1!3m3!1m2!1s0x60185b0f1de942ed%3A0x3a8da88d9718f461!2z44Kz44K544Oi44K444Ol44Kv!5e0!3m2!1sja!2sjp!4v1614094321236!5m2!1sja!2sjp" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <div class="p-top__access__contents">
          <div class="p-top__access__lead">
            <div class="p-top__access__lead__title u-is-pc">アクセス</div>
            <div class="p-top__access__lead__name mb-0">別所弘明寺スクール</div>
            <div class="p-top__access__lead__address">横浜市南区別所3-3-20</div>
            <ul class="p-top__access__lead__business">
              <li class="p-top__access__lead__business__item"><span class="p-top__access__lead__business__label">平日</span><span class="p-top__access__lead__business__time">13：30～22：00</span></li>
              <li class="p-top__access__lead__business__item"><span class="p-top__access__lead__business__label">土曜</span><span class="p-top__access__lead__business__time">13：30～18：00</span></li>
            </ul>
            <div class="p-top__access__lead__caption">※日曜、祝日は休塾日</div>
          </div>
          <div class="p-top__access__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1132.3597837926948!2d139.59022106036278!3d35.41452770882106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f7.1!3m3!1m2!1s0x60185b6aea1e6131%3A0x968508b6101c9665!2z44CSMjMyLTAwNjQg56We5aWI5bed55yM5qiq5rWc5biC5Y2X5Yy65Yil5omA77yT5LiB55uu77yT4oiS77yS77yQ!5e0!3m2!1sja!2sjp!4v1614969796761!5m2!1sja!2sjp" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </section>
    <section>
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
    </section>
    <div>
      <div class="p-chatbot" id="chatbot"></div>
    </div>
  </div>


<?php get_footer(); ?>