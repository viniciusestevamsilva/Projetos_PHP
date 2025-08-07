document.addEventListener('DOMContentLoaded', function () {
    
    const form = document.getElementById('formulario');
    const mensagemErro = document.getElementById('mensagem-erro');

    form.addEventListener('submit', function (event) {
        mensagemErro.innerHTML = '';

        const operacao = document.getElementById('operacao').value;

        if (operacao === '') {
            event.preventDefault();
            mensagemErro.innerHTML = 'Por favor, escolha uma operação.';
            return;
        }

    });
});