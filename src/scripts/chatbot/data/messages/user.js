import { SCHOOL, COURSE, PRICE, EXPERIENCE, DOCUMENT_REQUEST, TEACHER, PRINCIPAL } from './question'

const defaultQuestions = [
  {
    ...SCHOOL,
    isSelected: false,
  },
  {
    ...COURSE,
    isSelected: false,
  },
  {
    ...PRICE,
    isSelected: false,
  },
  {
    ...EXPERIENCE,
    isSelected: false,
  },
  {
    ...DOCUMENT_REQUEST,
    isSelected: false,
  },
  {
    ...TEACHER,
    isSelected: false,
  },
  {
    ...PRINCIPAL,
    isSelected: false,
  },
]

export const createUserMessage = () => {
  return {
    isOwner: false,
    message: defaultQuestions,
    isActive: true,
  }
}
