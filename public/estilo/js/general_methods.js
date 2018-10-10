/**
 * Recibe el id del input, para así determinar que input desabilitar
 * @param field El id
 */
function disable(id) {
    $('#'+id).attr("disabled", true);
}