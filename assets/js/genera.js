function generateNumber() {
    $.ajax({
        url: 'actions/generate.php',
        type: 'POST',
        success: function (response) {
            localStorage.setItem('number', response);
            $('#result').text(localStorage.getItem('number'));
            console.log(response);
        }
    });
    
    $('#btn-save').prop('disabled', false);
    $('#btn-last').prop('disabled', false);
}


function saveMoney() {
    if (localStorage.getItem('number')) {
        let number = localStorage.getItem('number')
        Swal.fire({
            title: 'Serán $' + (number * 2) + ' a guadar',
            text: "¿Estas segure?",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'actions/save-money.php',
                    type: 'POST',
                    data: { 'number': number },
                    success: function (response) {
                        console.log(response);
                        alertsSwalSimple(response, "", 'success');
                    }
                });
            }
        });
    } else {
        alertsSwalSimple('No se encontro cantidad!', 'Intenta generar un nuevo numero', 'error');
    }
  
}

function alertsSwalSimple(title, text, icon) {
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        confirmButtonColor: '#435EBE'
    });
}

(function () {
    $('#btn-save').prop('disabled', true);
    $('#btn-last').prop('disabled', true);
}())