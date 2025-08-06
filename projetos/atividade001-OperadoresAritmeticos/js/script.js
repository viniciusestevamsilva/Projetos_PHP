document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formulario');

    form.addEventListener('submit', function(event) {
        const numero1 = document.getElementById('numero1').value;
        const numero2 = document.getElementById('numero2').value;
        const operacao = document.getElementById('operacao').value;

        if (operacao === 'divisao' && parseFloat(numero2) === 0 || operacao === 'divisao' && parseFloat(numero1) === 0) {
            alert("Erro: divisão por zero não é permitida.");
            event.preventDefault();
        }
    });
});
