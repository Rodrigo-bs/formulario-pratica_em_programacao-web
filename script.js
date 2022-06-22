const form = document.querySelector('[data-form="form"]');
const buttonForm = form.querySelector('[data-form="button"]');

function verificacao(event) {
    const inputs = Array.from(form.querySelectorAll('[data-input]'));
    let vazio = [];

    vazio = inputs.filter(input => !input.value);

    if (vazio.length) {
        event.preventDefault();
        window.alert('Tá Vazio em');
    }
}

buttonForm.addEventListener('click', verificacao);