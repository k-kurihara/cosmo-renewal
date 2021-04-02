<?php
/*
Template Name: 問い合わせ-確認（お問い合わせ）
Template Post Type: page
*/
?>
<?php get_header(); ?>




<div class="p-contact-confirmation">
        <div class="p-contact-confirmation__inner">


        <div class="p-contact-confirmation__header__primary">
          <h1 class="p-contact-confirmation__header__primary__title">入力内容のご確認</h1>
        </div>
        <div class="p-contact-confirmation__contact__type">
          <div class="p-contact-confirmation__contact__type__label">お問い合わせ種別</div>
          <div class="p-contact-confirmation__contact__type__text">お問い合わせ</div>
        </div>


          <?php echo do_shortcode('[mwform_formkey key="294"]'); ?>

        </div>
      </div>
      <section>
        <div class="p-contact__breadcrumb">
          <ul class="p-contact__breadcrumb__list">
            <li class="p-contact__breadcrumb__list__item"><a href="">トップ</a></li>
            <li class="p-contact__breadcrumb__list__item"><a href="">お問い合わせ</a></li>
          </ul>
        </div>
      </section>





<?php get_footer(); ?>