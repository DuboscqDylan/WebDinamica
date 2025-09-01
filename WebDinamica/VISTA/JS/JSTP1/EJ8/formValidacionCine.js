$(document).ready(function () {
    $("#calculoPrecio").validate({
        rules: {
            edad: { required: true },
            estudios: { required: true }
        },
        messages: {
            edad: "Este campo es obligatorio",
            estudios: "Este campo es obligatorio"
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") === "edad") {
                error.appendTo("#errorEdad");
            } else if (element.attr("name") === "estudios") {
                error.appendTo("#errorEstudios");
            }
        }
    })
})