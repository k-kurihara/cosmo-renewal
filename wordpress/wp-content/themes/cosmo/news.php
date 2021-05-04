<?php
$args = array(
     'post_type' => 'informations', /* 投稿タイプを指定 */
     'paged' => $paged,
); ?>
<?php query_posts( $args ); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); 
    /* ループ開始 */ ?>
    <div class="post">
        <h3><?php the_title(); ?></h3>
        <p class="post-date"><?php the_time("Y年m月j日") ?></p>
        <?php the_content(); ?>
    </div>
    <?php endwhile; ?>     
<?php else : ?>
    <div class="post">
        <h3>記事がありません</h3>
        <p>表示する記事はありませんでした。</p>
    </div>
<?php endif; ?>