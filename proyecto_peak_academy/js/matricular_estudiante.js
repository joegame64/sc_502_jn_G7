$(document).ready(function() { 
    $('#form-estudiante').on('submit', function(e) {
        e.preventDefault();

        var correo = $('#correo_estudiantil').val();
        var cedula = $('#cedula').val();
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var edad = $('#edad').val();
        var carrera = $('#carrera').val();
        var sede = $('#sede').val();
        var cursoId = $('#curso_id').val();

        var correoRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!correoRegex.test(correo)) {
            Swal.fire({
                title: 'Error',
                text: 'Por favor, ingresa un correo electrónico válido.',
                icon: 'error',
                confirmButtonText: 'Aceptar',
                allowOutsideClick: false
            });
            return;
        }

        if (cedula.trim() === '') {
            Swal.fire({
                title: 'Error',
                text: 'La cédula es obligatoria.',
                icon: 'error',
                confirmButtonText: 'Aceptar',
                allowOutsideClick: false
            });
            return;
        }

        if (edad < 18 || edad > 100) {
            Swal.fire({
                title: 'Error',
                text: 'La edad debe estar entre 18 y 100 años.',
                icon: 'error',
                confirmButtonText: 'Aceptar',
                allowOutsideClick: false
            });
            return;
        }

        if (nombre.trim() === '' || apellido.trim() === '' || carrera.trim() === '' || sede.trim() === '') {
            Swal.fire({
                title: 'Error',
                text: 'Todos los campos son obligatorios.',
                icon: 'error',
                confirmButtonText: 'Aceptar',
                allowOutsideClick: false
            });
            return;
        }

        if (cursoId === '') {
            Swal.fire({
                title: 'Error',
                text: 'Por favor selecciona un curso.',
                icon: 'error',
                confirmButtonText: 'Aceptar',
                allowOutsideClick: false
            });
            return;
        }

        var formData = {
            correo_estudiantil: correo,
            cedula: cedula,
            nombre: nombre,
            apellido: apellido,
            edad: edad,
            carrera: carrera,
            sede: sede,
            curso_id: cursoId
        };

        $.ajax({
            type: 'POST',
            url: '../includes/matricular_estudiante.php',
            data: formData,
            success: function(response) {
                if (response.includes('insertado correctamente')) {
                    Swal.fire({
                        title: 'Éxito',
                        text: 'Estudiante insertado correctamente.',
                        icon: 'success',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                    $('#form-estudiante')[0].reset();
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: 'Hubo un error al insertar el estudiante.',
                        icon: 'error',
                        confirmButtonText: 'Aceptar',
                        allowOutsideClick: false
                    });
                }
            },
            error: function() {
                Swal.fire({
                    title: 'Error',
                    text: 'Hubo un problema al procesar la solicitud.',
                    icon: 'error',
                    confirmButtonText: 'Aceptar',
                    allowOutsideClick: false
                });
            }
        });
    });
});
