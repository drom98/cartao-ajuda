document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
        $notification = $delete.parentNode;

        $delete.addEventListener('click', () => {
            $notification.parentNode.removeChild($notification);
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
    })
});
