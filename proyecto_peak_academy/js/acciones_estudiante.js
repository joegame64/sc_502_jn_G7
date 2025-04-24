$(document).ready(function () {
    $('.btn-editar').click(function () {
        const id = $(this).data('id');
        const tareas = $(this).data('tareas');
        const examen = $(this).data('examen');
        const proyecto = $(this).data('proyecto');

        Swal.fire({
            title: 'Editar Notas',
            html:
                `<label for="tareas">Tareas</label>
                 <input id="tareas" class="swal2-input" value="${tareas}">

                 <label for="examen">Examen</label>
                 <input id="examen" class="swal2-input" value="${examen}">

                 <label for="proyecto">Proyecto</label>
                 <input id="proyecto" class="swal2-input" value="${proyecto}">`,
            confirmButtonText: 'Guardar',
            focusConfirm: false,
            preConfirm: () => {
                return {
                    tareas: document.getElementById('tareas').value,
                    examen: document.getElementById('examen').value,
                    proyecto: document.getElementById('proyecto').value
                };
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.post('../includes/acciones_estudiante.php', {
                    accion: 'editar', // Acción a realizar
                    id: id,
                    tareas: result.value.tareas,
                    examen: result.value.examen,
                    proyecto: result.value.proyecto
                }, function (response) {
                    const data = JSON.parse(response);
                    if (data.exito) {
                        Swal.fire('Actualizado', 'Notas guardadas correctamente', 'success').then(() => {
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
