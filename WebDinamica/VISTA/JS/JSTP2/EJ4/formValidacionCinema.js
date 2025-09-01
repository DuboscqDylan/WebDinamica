$(document).ready(function () {

    var formCinema = $("#formCinema");

    var titulo = $("#titulo");
    var actores = $("#actores");
    var director = $("#director");
    var guion = $("#guion");
    var produccion = $("#produccion");
    var anio = $("#anio");
    var nacionalidad = $("#nacionalidad");
    var genero = $("#genero");
    var duracion = $("#duracion");
    var restriccion = $("#restriccion");
    var sinopsis = $("#sinopsis");

    var errorTitulo = $("#errorTitulo");
    var errorActores = $("#errorActores");
    var errorDirector = $("#errorDirector");
    var errorGuion = $("#errorGuion");
    var errorProduccion = $("#errorProduccion");
    var errorAnio = $("#errorAnio");
    var errorNacionalidad = $("#errorNacionalidad");
    var errorGenero = $("#errorGenero");
    var errorDuracion = $("#errorDuracion");
    var errorRestriccion = $("#errorRestriccion");
    var errorSinopsis = $("#errorSinopsis");

    formCinema.submit(function (event) {
        if (titulo.val() === '') {
            errorTitulo.text("Este campo es obligatorio");
            event.preventDefault();
        } else {
            errorTitulo.text("");
        }
        if (actores.val() === '') {
            errorActores.text("Este campo es obligatorio");
            event.preventDefault();
        } else {
            errorActores.text("");
        }
        if (director.val() === '') {
            errorDirector.text("Este campo es obligatorio");
            event.preventDefault();
        } else {
            errorDirector.text("");
        }
        if (guion.val() === '') {
            errorGuion.text("Este campo es obligatorio");
            event.preventDefault();
        } else {
            errorGuion.text("");
        }
        if (produccion.val() === '') {
            errorProduccion.text("Este campo es obligatorio");
            event.preventDefault();
        } else {
            errorProduccion("");
        }
        if (anio.val() === '') {
            errorAnio.text("Este campo es obligatorio");
            event.preventDefault();
        } else if (anio.val().length > 4) {
            errorAnio.text("Este campo debe contener como máximo 4 digitos.")
            event.preventDefault();
        } else if (!anio.val().match(/^\d+$/)) {
            errorAnio.text("Este campo debe contener sólo numeros.");
            event.preventDefault();
        } else {
            errorAnio.text("");
        }
        if (nacionalidad.val() === '') {
            errorNacionalidad.text("Este campo es obligatorio");
            event.preventDefault();
        } else {
            errorNacionalidad.text("");
        }
        if (genero.val() === '') {
            errorGenero.text("Este campo es obligatorio");
            event.preventDefault();
        } else {
            errorGenero.text("");
        }
        if (duracion.val() === '') {
            errorDuracion.text("Este campo es obligatorio");
            event.preventDefault();
        } else if (duracion.val() > 3) {
            errorDuracion.text("Este numero es demasiado grande!.");
            event.preventDefault();
        } else {
            errorDuracion.text("");
        }
        if (restriccion.val() === '') {
            errorRestriccion.text("Este campo es obligatorio");
            event.preventDefault();
        } else {
            errorRestriccion.text("");
        }
        if (sinopsis.val() === '') {
            errorSinopsis.text("Este campo es obligatorio");
            event.preventDefault();
        } else {
            errorSinopsis.text("");
        }
    })
})