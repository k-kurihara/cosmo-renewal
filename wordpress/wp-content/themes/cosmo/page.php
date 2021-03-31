<?php
/*
Template Name: 問い合わせ入力
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


                <?php echo do_shortcode('[mwform_formkey key="218"]'); ?>



                <!-- <ul class="p-contact__form__list">
                  <li class="p-contact__form__list__item" data-module="contactValidation" data-contact-form-check="target">
                    <div class="p-contact__form__error" data-contact-validation-target="name"></div>
                    <div class="p-contact__form__label is-required">おなまえ</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：コスモ太" data-contact-validation="input"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item" data-module="contactValidation" data-contact-form-check="target">
                    <div class="p-contact__form__error" data-contact-validation-target="preferredDate"></div>
                    <div class="p-contact__form__label is-required">体験ご希望日</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：2021/10/10 15:00、2021/10/11 17:00" data-contact-validation="input"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item" data-module="contactValidation" data-contact-form-check="target">
                    <div class="p-contact__form__error" data-contact-validation-target="postalCode"></div>
                    <div class="p-contact__form__label is-required">郵便番号</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text is-small" type="tel" pattern="[d-]*" maxlength="8" placeholder="例：123-4567" data-contact-validation="input"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item" data-module="contactValidation" data-contact-form-check="target">
                    <div class="p-contact__form__error" data-contact-validation-target="address"></div>
                    <div class="p-contact__form__label is-required">ご住所</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：神奈川県横浜市港南区丸山台四丁目9番12号 吉川ビル104" data-contact-validation="input"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item" data-module="contactValidation" data-contact-form-check="target">
                    <div class="p-contact__form__error" data-contact-validation-target="tel"></div>
                    <div class="p-contact__form__label is-required">電話番号</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text is-small" type="tel" pattern="d{2,4}-d{3,4}-d{3,4}" maxlength="12" placeholder="例：123-456-7890" data-contact-validation="input"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item" data-module="contactValidation" data-contact-form-check="target">
                    <div class="p-contact__form__error" data-contact-validation-target="mail"></div>
                    <div class="p-contact__form__label is-required">メールアドレス</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：cosmojuku@com" data-contact-validation="input" data-contact-validation-mail-check-target="1"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item" data-module="contactValidation" data-contact-form-check="target">
                    <div class="p-contact__form__error" data-contact-validation-target="mailCheck"></div>
                    <div class="p-contact__form__label is-required">メールアドレス（確認用）</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：cosmojuku@com" data-contact-validation="input" data-contact-validation-mail-check-trigger="1"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label">お問い合わせ内容</div>
                    <div class="p-contact__form__input">
                      <textarea class="p-contact__form__input__textarea" placeholder="お問い合わせ内容をご記入ください。"></textarea>
                    </div>
                  </li>
                </ul>
                <div class="p-contact__form__agree">
                  <div class="p-contact__form__agree__link"><a class="p-contact__form__agree__link__text" href="" target="_blank">個人情報の取り扱いについて</a></div>
                  <div class="p-contact__form__agree__check">
                    <label for="01-A">
                      <input type="checkbox" id="01-A" name="checkbox01" data-contact-form-check="target" data-contact-form-check-trigger="agree"/>同意する
                    </label>
                  </div>
                </div>
                <div class="p-contact__button__area" data-contact-form-check="submit"><a class="c-button" href="#">
                    <div class="c-button__text">
                      <p>入力内容を確認する</p>
                    </div>
                    <div class="c-button__arrow"></div></a></div> -->


              </div>


              <div class="p-contact__form__area" data-contact-tab="target" data-contact-tab-target="2">
                <div class="p-contact__form__caution">
                  <div class="p-contact__form__caution__text">入力必須</div>
                </div>


                <p>資料請求</p>
                <?php echo do_shortcode('[mwform_formkey key="291"]'); ?>


                <!-- <ul class="p-contact__form__list">
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label is-required">おなまえ</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：コスモ太"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label is-required">郵便番号</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text is-small" type="text" placeholder="例：123-4567"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label is-required">ご住所</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：神奈川県横浜市港南区丸山台四丁目9番12号 吉川ビル104"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label is-required">電話番号</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text is-small" type="text" placeholder="例：123-456-7890"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label is-required">メールアドレス</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：cosmojuku@com"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label is-required">メールアドレス（確認用）</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：cosmojuku@com"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label">お問い合わせ内容</div>
                    <div class="p-contact__form__input">
                      <textarea class="p-contact__form__input__textarea" placeholder="お問い合わせ内容をご記入ください。"></textarea>
                    </div>
                  </li>
                </ul>
                <div class="p-contact__form__agree">
                  <div class="p-contact__form__agree__link"><a class="p-contact__form__agree__link__text" href="" target="_blank">個人情報の取り扱いについて</a></div>
                  <div class="p-contact__form__agree__check">
                    <label for="01-A">
                      <input type="checkbox" id="01-A" name="checkbox01" data-contact-form-check="target" data-contact-form-check-trigger="agree"/>同意する
                    </label>
                  </div>
                </div>
                <div class="p-contact__button__area" data-contact-form-check="submit"><a class="c-button" href="#">
                    <div class="c-button__text">
                      <p>入力内容を確認する</p>
                    </div>
                    <div class="c-button__arrow"></div></a></div> -->
              </div>
              <div class="p-contact__form__area" data-contact-tab="target" data-contact-tab-target="3">
                <div class="p-contact__form__caution">
                  <div class="p-contact__form__caution__text">入力必須</div>
                </div>


                <?php echo do_shortcode('[mwform_formkey key="218"]'); ?>


                <ul class="p-contact__form__list">
                  <li class="p-contact__form__list__item" data-module="contactValidation">
                    <div class="p-contact__form__label is-required">おなまえ</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：コスモ太" data-contact-validation="input"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label is-required">電話番号</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text is-small" type="text" placeholder="例：123-456-7890"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label is-required">メールアドレス</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：cosmojuku@com"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label is-required">メールアドレス（確認用）</div>
                    <div class="p-contact__form__input">
                      <input class="p-contact__form__input__text" type="text" placeholder="例：cosmojuku@com"/>
                    </div>
                  </li>
                  <li class="p-contact__form__list__item">
                    <div class="p-contact__form__label">お問い合わせ内容</div>
                    <div class="p-contact__form__input">
                      <textarea class="p-contact__form__input__textarea" placeholder="お問い合わせ内容をご記入ください。"></textarea>
                    </div>
                  </li>
                </ul>
                <div class="p-contact__form__agree">
                  <div class="p-contact__form__agree__link"><a class="p-contact__form__agree__link__text" href="" target="_blank">個人情報の取り扱いについて</a></div>
                  <div class="p-contact__form__agree__check">
                    <label for="01-A">
                      <input type="checkbox" id="01-A" name="checkbox01" data-contact-form-check="target" data-contact-form-check-trigger="agree"/>同意する
                    </label>
                  </div>
                </div>
                <div class="p-contact__button__area" data-contact-form-check="submit"><a class="c-button" href="#">
                    <div class="c-button__text">
                      <p>入力内容を確認する</p>
                    </div>
                    <div class="c-button__arrow"></div></a></div>
              </div>
            </div>
          </section>
        </div>
        <div class="c-breadcrumb">
          <ul class="c-breadcrumb__list">
            <li class="c-breadcrumb__list__item"><a href="/">トップ</a></li>
            <li class="c-breadcrumb__list__item">お問い合わせ</li>
          </ul>
        </div>
      </div>





<?php get_footer(); ?>