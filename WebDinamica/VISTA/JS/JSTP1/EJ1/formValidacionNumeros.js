$(document).ready(function () {
    $("#formNum").validate({
        rules: {
            numero: {
                required: true
            }
        },
        messages: {
            numero: "Ingrese un numero"
        }
    })
})