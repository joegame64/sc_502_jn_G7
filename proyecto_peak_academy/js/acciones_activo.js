$(document).ready(function() {
    // Insertar nuevo activo
    $("#btn-agregar").on("click", function() {
        Swal.fire({
            title: 'Agregar Nuevo Activo',
            html: `
                <input id="swal-input1" class="swal2-input" placeholder="Nombre del activo">
                <input id="swal-input2" class="swal2-input" placeholder="Cantidad" type="number">
            `,
            showCancelButton: true,
            confirmButtonText: 'Agregar',
            preConfirm: () => {
                const nombre = $('#swal-input1').val();
                const cantidad = $('#swal-input2').val();
                if (!nombre || !cantidad) {
                    Swal.showValidationMessage('Por favor ingresa todos los campos');
                    return false;
                }
                return { nombre: nombre, cantidad: cantidad };
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '../includes/acciones_activo.php',
                    type: 'POST',
                    data: {
                        nombre: result.value.nombre,
                        cantidad: result.value.cantidad
                    },
                    success: function(response) {
                        Swal.fire('¡Agregado!', 'El activo ha sido agregado.', 'success')
                            .then(() => location.reload()); // Recargar después de mostrar el mensaje
                    },
                    error: function() {
                        Swal.fire('Error', 'Ocurrió un error al agregar el activo.', 'error');
                    }
                });
            }
        });
    });

    // Editar activo
    $(".btn-editar").on("click", function() {
        var id = $(this).data("id");
        var nombre = $(this).data("nombre");
        var cantidad = $(this).data("cantidad");

        // Pedir los nuevos valores
        Swal.fire({
            title: 'Editar Activo',
            html: `
                <input id="swal-input1" class="swal2-input" placeholder="Nombre del activo" value="${nombre}">
                <input id="swal-input2" class="swal2-input" placeholder="Cantidad" type="number" value="${cantidad}">
            `,
            showCancelButton: true,
            confirmButtonText: 'Actualizar',
            preConfirm: () => {
                const nombreNuevo = $('#swal-input1').val();
                const cantidadNueva = $('#swal-input2').val();
                if (!nombreNuevo || !cantidadNueva) {
                    Swal.showValidationMessage('Por favor ingresa todos los campos');
                    return false;
                }
                return { nombre: nombreNuevo, cantidad: cantidadNueva };
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '../includes/acciones_activo.php',
                    type: 'POST',
                    data: {
                        action: 'editar', // Agregar acción de edición
                        id: id,
                        nombre: result.value.nombre,
                        cantidad: result.value.cantidad
                    },
                    success: function(response) {
                        Swal.fire('¡Actualizado!', 'El activo ha sido actualizado.', 'success')
                            .then(() => location.reload()); // Recargar después de mostrar el mensaje
                    },
                    error: function() {
                        Swal.fire('Error', 'Ocurrió un error al actualizar.', 'error');
                    }
                });
            }
        });
    });

    // Eliminar activo
    $(".btn-eliminar").on("click", function() {
        var id = $(this).data("id");

        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás revertir esta acción.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '../includes/acciones_activo.php',
                    type: 'POST',
                    data: {
                        action: 'eliminar', // Agregar acción de eliminación
                        id: id
                    },
                    success: function(response) {
                        Swal.fire('¡Eliminado!', 'El activo ha sido eliminado.', 'success')
                            .then(() => location.reload()); // Recargar después de mostrar el mensaje
                    },
                    error: function() {
                        Swal.fire('Error', 'Ocurrió un error al eliminar.', 'error');
                    }
                });
            }
        });
    });
});
