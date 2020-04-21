document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
        $notification = $delete.parentNode;

        $delete.addEventListener('click', () => {
            $notification.parentNode.removeChild($notification);
        });
    });

    document.querySelectorAll('#btnVerCodigo').forEach(function (el) {
        el.addEventListener('click', () => {

            fetch('/cartao/getCodigo/' + el.name)
                .then(function (response) {
                    response.json().then(function (data) {
                        document.querySelector('#codigoCartao').innerHTML = data;
                    });
                });
            document.querySelector('#modalVerCodigo').classList.toggle('is-active');
            document.querySelector('html').classList.toggle('is-clipped');
        });
    });
    document.querySelectorAll('#btnAtivar').forEach(function (el) {
        el.addEventListener('click', () => {

            fetch('/cartao/ativarCartao/' + el.name)
                .then(function (response) {
                    response.json().then(function (data) {
                        location.reload();
                    });
                });
        });
    });
    document.querySelector('.modal-close').addEventListener('click', () => {
        document.querySelector('#modalVerCodigo').classList.toggle('is-active');
        document.querySelector('html').classList.toggle('is-clipped');
        document.querySelector('#codigoCartao').innerHTML = '<i class="fa-spin fas fa-spinner"></i>';
    });
    document.querySelector('.modal-background').addEventListener('click', () => {
        document.querySelector('#modalVerCodigo').classList.toggle('is-active');
        document.querySelector('html').classList.toggle('is-clipped');
        document.querySelector('#codigoCartao').innerHTML = '<i class="fa-spin fas fa-spinner"></i>';
    });
});

$(function () {

    $(document).ready(function() {

        // Check for click events on the navbar burger icon
        $(".navbar-burger").click(function() {

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            $(".navbar-burger").toggleClass("is-active");
            $(".navbar-menu").toggleClass("is-active");

        });
    });

    var opcoes = $('#opcoes').find(':input');
    var valores = $('#opcoes').find('label');

    opcoes.each(function (index) {
        $(this).on('click', function () {
            switch (this.value) {
                case '1':
                    $('#valor').text(valores[index].textContent);
                    break;
                case '2':
                    $('#valor').text(valores[index].textContent);
                    break;
                case '3':
                    $('#valor').text(valores[index].textContent);
                    break;
            }
        })
    });
});
