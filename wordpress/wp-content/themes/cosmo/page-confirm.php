<?php
/*
Template Name: 問い合わせ-確認
Template Post Type: page
*/
?>
<?php get_header(); ?>




<div class="p-contact-confirmation">
        <div class="p-contact-confirmation__inner">




        <?php echo do_shortcode('[mwform_formkey key="218"]'); ?>

          <section>
            <div class="p-contact-confirmation__header__primary">
              <h1 class="p-contact-confirmation__header__primary__title">入力内容のご確認</h1>
            </div>
            <div class="p-contact-confirmation__contact__type">
              <div class="p-contact-confirmation__contact__type__label">お問い合わせ種別</div>
              <div class="p-contact-confirmation__contact__type__text">教室見学・体験申込</div>
            </div>
            <div class="p-contact-confirmation__content">
              <ul class="p-contact-confirmation__content__list">
                <li class="p-contact-confirmation__content__list__item">
                  <dl>
                    <dt class="p-contact-confirmation__content__list__lead">おなまえ</dt>
                    <dd class="p-contact-confirmation__content__list__text">コスモ太郎</dd>
                  </dl>
                </li>
                <li class="p-contact-confirmation__content__list__item">
                  <dl>
                    <dt class="p-contact-confirmation__content__list__lead">体験ご希望日時</dt>
                    <dd class="p-contact-confirmation__content__list__text">2021/10/10 15:00、2021/10/11 17:00</dd>
                  </dl>
                </li>
                <li class="p-contact-confirmation__content__list__item">
                  <dl>
                    <dt class="p-contact-confirmation__content__list__lead">郵便番号</dt>
                    <dd class="p-contact-confirmation__content__list__text">123-4567</dd>
                  </dl>
                </li>
                <li class="p-contact-confirmation__content__list__item">
                  <dl>
                    <dt class="p-contact-confirmation__content__list__lead">ご住所</dt>
                    <dd class="p-contact-confirmation__content__list__text">神奈川県横浜市港南区丸山台四丁目9番12号 吉川ビル104</dd>
                  </dl>
                </li>
                <li class="p-contact-confirmation__content__list__item">
                  <dl>
                    <dt class="p-contact-confirmation__content__list__lead">電話番号</dt>
                    <dd class="p-contact-confirmation__content__list__text">123-456-7890</dd>
                  </dl>
                </li>
                <li class="p-contact-confirmation__content__list__item">
                  <dl>
                    <dt class="p-contact-confirmation__content__list__lead">メールアドレス</dt>
                    <dd class="p-contact-confirmation__content__list__text">cosmojuku@com</dd>
                  </dl>
                </li>
                <li class="p-contact-confirmation__content__list__item">
                  <dl>
                    <dt class="p-contact-confirmation__content__list__lead">メールアドレス（確認用）</dt>
                    <dd class="p-contact-confirmation__content__list__text">cosmojuku@com</dd>
                  </dl>
                </li>
                <li class="p-contact-confirmation__content__list__item">
                  <dl>
                    <dt class="p-contact-confirmation__content__list__lead">お問い合わせ内容</dt>
                    <dd class="p-contact-confirmation__content__list__text">お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。お問い合わせ内容が入ります。</dd>
                  </dl>
                </li>
              </ul>
            </div>
            <div class="p-contact-confirmation__button__area">
              <div class="p-contact-confirmation__button__item"><a class="c-button" href="#">
                  <div class="c-button__text">
                    <p>送信する</p>
                  </div>
                  <div class="c-button__arrow"></div></a></div>
              <div class="p-contact-confirmation__button__item"><a class="p-contact-confirmation__button" href="#">
                  <p>内容を修正する</p></a></div>
            </div>
          </section>
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