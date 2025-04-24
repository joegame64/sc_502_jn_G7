$(document).ready(function () {

    // Acción de agregar una nueva práctica
    $('#form-agregar-practica').submit(function (e) {
        e.preventDefault();

        var titulo = $('#titulo').val();
        var descripcion = $('#descripcion').val();
        var curso_id = $('#curso_id').val();
        var fecha = $('#fecha').val();

        // Validaciones
        if (titulo === '' || descripcion === '' || curso_id === '' || fecha === '') {
            Swal.fire('Error', 'Todos los campos son obligatorios.', 'error');
            return;
        }

        $.post('../includes/acciones_practicas.php', {
            accion: 'insertar',
            titulo: titulo,
            descripcion: descripcion,
            curso_id: curso_id,
            fecha: fecha
        }, function (response) {
            const data = JSON.parse(response);
            if (data.exito) {
                Swal.fire('Éxito', 'Práctica agregada correctamente', 'success').then(() => {
                    location.reload(); // Recargar la página
                });
            } else {
                Swal.fire('Error', data.mensaje, 'error');
            }
        });
    });

    // Acción de editar una práctica
    $('.btn-editar').click(function () {
        const id = $(this).data('id');
        $.get('../includes/acciones_practicas.php', { accion: 'editar', id: id }, function (data) {
            const practica = JSON.parse(data);
            if (practica.error) {
                Swal.fire('Error', practica.error, 'error');
                return;
            }

            // Mostrar formulario de edición
            Swal.fire({
                title: 'Editar Práctica',
                html: `
                    <label for="titulo">Título</label>
                    <input id="titulo" class="swal2-input" value="${practica.titulo}">

                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" class="swal2-textarea">${practica.descripcion}</textarea>

                    <label for="fecha">Fecha</label>
                    <input id="fecha" class="swal2-input" type="date" value="${practica.fecha}">
                `,
                confirmButtonText: 'Guardar',
                focusConfirm: false,
                preConfirm: () => {
                    return {
                        id: id,
                        titulo: document.getElementById('titulo').value,
                        descripcion: document.getElementById('descripcion').value,
                        fecha: document.getElementById('fecha').value
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    $.post('../includes/acciones_practicas.php', result.value, function (response) {
                        const data = JSON.parse(response);
                        if (data.exito) {
                            Swal.fire('Actualizado', 'Práctica actualizada correctamente', 'success').then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire('Error', data.mensaje, 'error');
                        }
                    });
                }
            });
        });
    });

    // Acción de eliminar una práctica
    $('.btn-eliminar').click(function () {
        const id = $(this).data('id');

        Swal.fire({
            title: '¿Estás seguro?',
            text: "No podrás recuperar esta práctica después de eliminarla.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.post('../includes/acciones_practicas.php', { accion: 'eliminar', id: id }, function (response) {
                    const data = JSON.parse(response);
                    if (data.exito) {
                        Swal.fire('Eliminado', 'La práctica ha sido eliminada.', 'success').then(() => {
                            location.reload(); // Recargar la página
                        });
                    } else {
                        Swal.fire('Error', data.mensaje, 'error');
                    }
                });
            }
        });
    });

});
