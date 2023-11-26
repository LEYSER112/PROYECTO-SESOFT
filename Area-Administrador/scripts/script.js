
//  INICIO MODAL DE REGISTRO
$(document).ready(function() {
    $('#modalContainer').load('Modal/RegistroModal.php');
});

function abrirModal() {
    $('#modalRegistrar').modal('show');
}

// FIN



// INICIO FUNCION ELIMINAR

var colegioIdToDelete;

// Función para almacenar el ID del colegio a eliminar
$('#modalEliminar').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget);
colegioIdToDelete = button.data('id');
});

// Función para eliminar el colegio
function eliminarColegio() {
// Redirigir a eliminar_colegio.php con el ID del colegio
window.location.href = "eliminar_colegio.php?id=" + colegioIdToDelete;
}
// FIN




//INICIO SCRIPT PARA BARRA DE BUSQUEDA

$(document).ready(function() {
    const itemsPerPage = 4;  // Número de elementos por página

    $('#searchInput').on('input', function() {
        const searchTerm = $(this).val().toLowerCase();

        // Ocultar todas las filas
        $('#tablaColegios tbody tr').hide();

        // Filtrar y mostrar las filas que coincidan con la búsqueda
        $('#tablaColegios tbody tr').filter(function() {
            return $(this).text().toLowerCase().includes(searchTerm);
        }).slice(0, itemsPerPage).show();  // Mostrar solo el número acordado de resultados por página
    });
});


//FIN


//INICIO PARA PAGINACION
const itemsPerPage = 4;  // Número de elementos por página
let currentPage = 1;  // Página actual

function updatePagination() {
    $('#currentPage').text('Página ' + currentPage);

    // Deshabilitar el botón "Anterior" si estamos en la primera página
    $('#prevPage').prop('disabled', currentPage === 1);

    // Obtener la cantidad de filas mostradas actualmente
    const rowsShown = $('#tablaColegios tbody tr:visible').length;

    // Deshabilitar el botón "Siguiente" si no hay más filas por mostrar
    $('#nextPage').prop('disabled', rowsShown < itemsPerPage);
}

function loadPageData() {
    const startIdx = (currentPage - 1) * itemsPerPage;
    const endIdx = startIdx + itemsPerPage;

    $('#tablaColegios tbody tr').hide();
    $('#tablaColegios tbody tr').slice(startIdx, endIdx).show();

    updatePagination();
}

$('#nextPage').on('click', function () {
    currentPage++;
    loadPageData();
});

$('#prevPage').on('click', function () {
    if (currentPage > 1) {
        currentPage--;
        loadPageData();
    }
});

$(document).ready(function () {
    loadPageData();
});


//FIN


