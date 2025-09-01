$(document).ready(function () {
    $("#formDatos").validate({
        rules: {
            nombre: { required: true },
            apellido: { required: true },
            edad: { required: true },
            direccion: { required: true },
            estudios: { required: true },
            genero: { required: true },
        },
        messages: {
            nombre: {
                required: "Este campo es obligatorio"
            },
            apellido: {
                required: "Este campo es obligatorio"
            },
            edad: {
                required: "Este campo es obligatorio"
            },
            direccion: {
                required: "Este campo es obligatorio"
            },
            estudios: {
                required: "Este campo es obligatorio"
            },
            genero: {
                required: "Este campo es obligatorio"
            },
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") === "estudios") {
                error.appendTo("#errorEstudios");
            } else if (element.attr("name") === "genero") {
                error.appendTo("#errorGenero");
            } else {
                error.insertAfter(element);
            }
        }

    })
})