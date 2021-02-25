import { SCHOOL, COURSE, PRICE, EXPERIENCE, DOCUMENT_REQUEST, TEACHER, PRINCIPAL } from './question'

const owners = [
  {
    isOwner: true,
    message: '<p>どの様な質問でしょうか？</p>',
    questionId: null,
  },
  {
    isOwner: true,
    message: `<p>詳しくは「<a href="${
      SCHOOL.link
    }" class="p-chatbot__message__link">コスモ塾について</a>」よりご覧ください。</p>`,
    questionId: SCHOOL.id,
  },
  {
    isOwner: true,
    message: `<p>詳しくは「<a href="${
      COURSE.link
    }" class="p-chatbot__message__link">コース/料金</a>」よりご覧ください。</p>`,
    questionId: COURSE.id,
  },
  {
    isOwner: true,
    message: `<p>詳しくは「<a href="${
      PRICE.link
    }" class="p-chatbot__message__link">コース/料金</a>」よりご覧ください。</p>`,
    questionId: PRICE.id,
  },
  {
    isOwner: true,
    message: `<p>詳しくは「<a href="${
      EXPERIENCE.link
    }" class="p-chatbot__message__link">お問い合わせ</a>」より希望日時などのご希望を入力の上、ご連絡ください。</p>`,
    questionId: EXPERIENCE.id,
  },
  {
    isOwner: true,
    message: `<p>詳しくは「<a href="${
      DOCUMENT_REQUEST.link
    }" class="p-chatbot__message__link">お問い合わせ</a>」より資料請求ください。</p>`,
    questionId: DOCUMENT_REQUEST.id,
  },
  {
    isOwner: true,
    message: `<p>詳しくは「<a href="${
      TEACHER.link
    }" class="p-chatbot__message__link">講師・教室紹介</a>」よりご覧ください。</p>`,
    questionId: TEACHER.id,
  },
  {
    isOwner: true,
    message: `<p>詳しくは「<a href="${
      PRINCIPAL.link
    }" class="p-chatbot__message__link">コスモNEWSの塾長日記</a>」よりどんな人柄なのか吟味してください。</p>`,
    questionId: PRINCIPAL.id,
  },
]

export default owners
