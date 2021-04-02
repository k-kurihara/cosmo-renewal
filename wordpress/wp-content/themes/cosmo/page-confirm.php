<?php
/*
Template Name: 問い合わせ-確認
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
          <div class="p-contact-confirmation__contact__type__text">教室見学・体験申込</div>
        </div>


          <?php echo do_shortcode('[mwform_formkey key="218"]'); ?>

        </div>
      </div>
      <section>
        <div class="p-contact__breadcrumb">
          <ul class="p-contact__breadcrumb__list">
            <li class="p-contact__breadcrumb__list__item"><a href="/">トップ</a></li>
            <li class="p-contact__breadcrumb__list__item"><a href="/contact/">お問い合わせ</a></li>
          </ul>
        </div>
      </section>





<?php get_footer(); ?>