<?php
/*
Template Name: 問い合わせ-完了（お問い合わせ）
Template Post Type: page
*/
?>
<?php get_header(); ?>




<div class="p-contact-finish">

<?php echo do_shortcode('[mwform_formkey key="294"]'); ?>


<div class="p-contact-finish__text">お問い合わせいただき、<br class="u-is-sp"/>ありがとうございました。<br/>内容確認後、<br class="u-is-sp"/>担当者より改めてご連絡いたします。</div>
  <div class="p-contact-finish__button"><a class="c-button" href="/">
      <div class="c-button__text">
        <p>トップページに戻る</p>
      </div>
      <div class="c-button__arrow"></div></a></div>
</div>
<div class="p-contact__breadcrumb">
  <ul class="p-contact__breadcrumb__list">
    <li class="p-contact__breadcrumb__list__item"><a href="">トップ</a></li>
    <li class="p-contact__breadcrumb__list__item"><a href="">お問い合わせ</a></li>
  </ul>
</div>




<?php get_footer(); ?>