<?php
/*
Template Name: テスト
Template Post Type: page
*/
?>
<?php get_header(); ?>




      <div class="p-contact">
        <div class="p-contact__inner">
          <section>
            <div class="c-section">
              <div class="c-section__inner">
                <div class="c-section__contents">
                  <h1 class="p-heading">
                    <p class="p-heading__en">CONTACT</p>
                    <p class="p-heading__jp">お問い合わせ</p>
                  </h1>
                </div>
              </div>
            </div>
            <div class="p-contact__header__primary__text">当塾に関するご相談、教室見学や体験申込、資料のご請求など、何でもお気軽にお問い合わせください。<br/>内容を確認後、担当者より改めてご連絡いたします。</div>
          </section>
          <section>
            <div class="p-contact__line__contact">
              <div class="p-contact__line__contact__desc">
                <div class="p-contact__line__contact__title"><span class="p-contact__line__contact__title__name">LINE</span>でカンタンお問い合わせも！</div>
                <div class="p-contact__line__contact__text">
                   「友だち追加」ボタンのクリック、もしくは「QRコード」を読み取り。<br/>その後、LINEアプリが起動しますので、「追加」ボタンをクリック！<br/>友だち追加メッセージが届いたら、お気軽にメッセージをお送りください。</div>
                <div class="p-contact__line__contact__button"><a> <img src="/assets/images/contact/pc/line_contact_button.png" alt=""/></a></div>
              </div>
              <div class="p-contact__line__contact__reader">
                <div class="p-contact__line__contact__reader__img"><img src="/assets/images/contact/pc/line_contact_reader.png" alt=""/></div>
              </div>
            </div>
          </section>
          <section data-module="contactTab">
            <div class="p-contact__choicetype">
              <div class="p-contact__choicetype__title">まずは、お問い合わせの種別をご選択ください</div>
              <div class="p-contact__choicetype__buttons">
                <ul class="p-contact__choicetype__buttons__list">
                  <li class="p-contact__choicetype__buttons__list__item is-active" data-contact-tab="trigger" data-contact-tab-trigger="1">
                    <div class="p-contact__choicetype__buttons__list__item__check"></div>
                    <div class="p-contact__choicetype__buttons__list__item__text">教室見学・体験申込</div>
                  </li>
                  <li class="p-contact__choicetype__buttons__list__item" data-contact-tab="trigger" data-contact-tab-trigger="2">
                    <div class="p-contact__choicetype__buttons__list__item__check"></div>
                    <div class="p-contact__choicetype__buttons__list__item__text">資料請求</div>
                  </li>
                  <li class="p-contact__choicetype__buttons__list__item" data-contact-tab="trigger" data-contact-tab-trigger="3">
                    <div class="p-contact__choicetype__buttons__list__item__check"></div>
                    <div class="p-contact__choicetype__buttons__list__item__text">お問い合わせ</div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="p-contact__form">
              <div class="p-contact__form__area is-active" data-contact-tab="target" data-contact-tab-target="1" data-module="contactFormCheck" data-contact-validation="eventHandler">
                <div class="p-contact__form__caution">
                  <div class="p-contact__form__caution__text">入力必須</div>
                </div>

                <!-- 教室見学・体験申込 -->
                <?php echo do_shortcode('[mwform_formkey key="218"]'); ?>

              </div>


              <div class="p-contact__form__area" data-contact-tab="target" data-contact-tab-target="2" data-module="contactFormCheck" data-contact-validation="eventHandler">
                <div class="p-contact__form__caution">
                  <div class="p-contact__form__caution__text">入力必須</div>
                </div>

                <!-- 資料請求 -->
                <?php echo do_shortcode('[mwform_formkey key="291"]'); ?>

              </div>


              <div class="p-contact__form__area" data-contact-tab="target" data-contact-tab-target="3" data-module="contactFormCheck" data-contact-validation="eventHandler">
                <div class="p-contact__form__caution">
                  <div class="p-contact__form__caution__text">入力必須</div>
                </div>

                <?php echo do_shortcode('[mwform_formkey key="294"]'); ?>

              </div>
            </div>
          </section>
          <div class="c-breadcrumb">
          <ul class="c-breadcrumb__list">
            <li class="c-breadcrumb__list__item"><a href="/">トップ</a></li>
            <li class="c-breadcrumb__list__item">お問い合わせ</li>
          </ul>
        </div>
        </div>
      </div>





<?php get_footer(); ?>