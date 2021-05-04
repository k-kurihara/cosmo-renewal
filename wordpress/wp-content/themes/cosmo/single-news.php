<div class="post">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); 
    /* ループ開始 */ ?>
        <h3><?php the_title(); ?></h3>
        <p class="post-date"><?php the_time("Y年m月j日") ?></p>
        <?php the_content(); ?>

    <?php endwhile; ?>
<?php else : ?>

        <h3>記事がありません</h3>
        <p>表示する記事はありませんでした。</p>

<?php endif; ?>