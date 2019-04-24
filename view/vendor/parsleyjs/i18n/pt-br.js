// Validation errors messages for Parsley
// Load this after Parsley

Parsley.addMessages('pt-br', {
  defaultMessage: "Valor inválido.",
  type: {
    email:        "Email inválido.",
    url:          "URL inválida.",
    number:       "Número inválido.",
    integer:      "Inteiro inválido.",
    digits:       "Permitido apenas dígitos.",
    alphanum:     "Permitido apenas alfa numérico."
  },
  notblank:       "Não pode ficar vazio.",
  required:       "Campo obrigatório.",
  pattern:        "Campo inválido.",
  min:            "Deve ser >= a %s.",
  max:            "Deve ser <= a %s.",
  range:          "Deve estar entre %s e %s.",
  minlength:      "Deveria ter %s caracteres ou mais.",
  maxlength:      "Deveria ter %s caracteres ou menos.",
  length:         "Deveria ter entre %s e %s caracteres.",
  mincheck:       "Deve escolher pelo menos %s opções.",
  maxcheck:       "Deve escolher %s opções ou menos.",
  check:          "Deve escolher entre %s e %s opções.",
  equalto:        "Valor deveria ser igual."
});

Parsley.setLocale('pt-br');