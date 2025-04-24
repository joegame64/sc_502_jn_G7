$(document).ready(function() {
    // Eliminar estudiante
    $(document).on('click', '.btn-eliminar', function() {
        var id = $(this).data('id');

        Swal.fire({
            title: '¿Estás seguro?',
            text: 'El estudiante será marcado como inactivo.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: '../includes/acciones_estudiante.php',
                    data: {
                        accion: 'eliminar',
                        id: id
                    },
                    success: function(response) {
                        try {
                            var data = JSON.parse(response);
                            if (data.success) {
                                Swal.fire('Eliminado!', data.mensaje, 'success').then(() => location.reload());
                            } else {
                                Swal.fire('Error!', data.mensaje, 'error');
                            }
                        } catch (e) {
                            console.error('Respuesta no válida:', response);
                            Swal.fire('Error!', 'Error inesperado al procesar la respuesta.', 'error');
                        }
                    }
                });
            }
        });
    });

    // Editar estudiante
    $(document).on('click', '.btn-editar', function() {
        var id = $(this).data('id');
        var fila = $(this).closest('tr');

        var nombre = fila.find('.nombre').text().trim();
        var apellido = fila.find('.apellido').text().trim();
        var correo = fila.find('.correo').text().trim();
        var cedula = fila.find('.cedula').text().trim();
        var edad = fila.find('.edad').text().trim();
        var carrera = fila.find('.carrera').text().trim();
        var sede = fila.find('.sede').text().trim();

        Swal.fire({
            title: 'Editar Estudiante',
            html: `
                <input id="nombre" class="swal2-input" placeholder="Nombre" value="${nombre}">
                <input id="apellido" class="swal2-input" placeholder="Apellido" value="${apellido}">
                <input id="correo_estudiantil" class="swal2-input" placeholder="Correo" value="${correo}">
                <input id="cedula" class="swal2-input" placeholder="Cédula" value="${cedula}">
                <input id="edad" class="swal2-input" placeholder="Edad" value="${edad}">
                <input id="carrera" class="swal2-input" placeholder="Carrera" value="${carrera}">
                <input id="sede" class="swal2-input" placeholder="Sede" value="${sede}">
            `,
            focusConfirm: false,
            preConfirm: () => {
                const nombre = $('#nombre').val().trim();
                const apellido = $('#apellido').val().trim();
                const correo = $('#correo_estudiantil').val().trim();
                const cedula = $('#cedula').val().trim();
                const edad = $('#edad').val().trim();
                const carrera = $('#carrera').val().trim();
                const sede = $('#sede').val().trim();

                if (!nombre || !apellido || !correo || !cedula || !edad || !carrera || !sede) {
                    Swal.showValidationMessage('Todos los campos son obligatorios');
                    return false;
                }

                return {
                    id: id,
                    nombre,
                    apellido,
                    correo_estudiantil: correo,
                    cedula,
                    edad,
                    carrera,
                    sede
                };
            }
        }).then((result) => {
            if (result.isConfirmed && result.value) {
                $.ajax({
                    type: 'POST',
                    url: '../includes/acciones_estudiante.php',
                    data: {
                        accion: 'editar',
                        id: result.value.id,
                        nombre: result.value.nombre,
                        apellido: result.value.apellido,
                        correo_estudiantil: result.value.correo_estudiantil,
                        cedula: result.value.cedula,
                        edad: result.value.edad,
                        carrera: result.value.carrera,
                        sede: result.value.sede
                    },
                    success: function(response) {
                        try {
                            var data = JSON.parse(response);
                            if (data.success) {
                                Swal.fire('Actualizado!', data.mensaje, 'success').then(() => location.reload());
                            } else {
                                Swal.fire('Error!', data.mensaje, 'error');
                            }
                        } catch (e) {
                            console.error('Respuesta no válida:', response);
                            Swal.fire('Error!', 'Error inesperado al procesar la respuesta.', 'error');
                        }
                    }
                });
            }
        });
    });
});
