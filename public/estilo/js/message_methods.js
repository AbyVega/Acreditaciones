/**
 * Constante para una alerta tipo confirm
 */
const swalWithBootstrapButtons = swal.mixin({
    confirmButtonClass: 'btn btn-success',
    cancelButtonClass: 'btn btn-danger',
    buttonsStyling: false,
})

/**
 * constante para una alerta tipo toast
 */
const toast_top = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
})
function fadeMessage() {
    $("#message").fadeOut('slow');
}

/**
 * Recibe el id del input, para así determinar el div que se ocultará al hacer focus en el input
 * @param field El id
 */
function hideError(field) {
    $("#error_"+field).fadeOut('fast');
}

/**
 * Función para mostrar el mensaje de confirmación de eliminación.
 * @param message Texto del mensaje
 * @param id Id del form del metodo destroy del controlador, dado que se requiere dicho formulario para eliminar
 */

function deleteElement(message, id, event) {
   console.log("aqui esta");
    event.preventDefault();

    swalWithBootstrapButtons({
        title: '¡Atención!',
        text: message,
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: '¡Sí, Eliminaló!',
        cancelButtonText: '¡No, cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            document.getElementById(id).submit();
        }/* else if (
            // Read more about handling dismissals
            result.dismiss === swal.DismissReason.cancel
        ) {
            toast_top({
                type: 'error',
                title: 'No se elimino'
            })
        }*/
    })
}

function cancelElement(message, url, event) {
    event.preventDefault();

    swal({
        title: 'Atención',
        text: message,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33333',
        confirmButtonText: 'Sí, cancelarla',
        cancelButtonText: 'Regresar'
    }, function() {
        window.location.href=url;
    });
}