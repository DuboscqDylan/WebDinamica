$(document).ready(function () {
    var formLogin = $('#login');
    var username = $('#username');
    var password = $('#password');
    var errorUsername = $('#errorUsername');
    var errorPassword = $('#errorPassword');

    formLogin.submit(function (event) {

        var usernameVal = username.val();
        var passwordVal = password.val();

        if (usernameVal === '') {
            errorUsername.text("Ingrese su usuario");
            event.preventDefault();
        } else if (passwordVal === '') {
            errorPassword.text("Ingrese una contraseña");
            event.preventDefault();
        } else if (usernameVal === passwordVal) {
            errorPassword.text("El username y la contraseña no pueden ser iguales.");
            event.preventDefault();
        } else if (passwordVal.length < 8) {
            errorPassword.text("La contraseña debe tener al menos 8 caracteres.");
            event.preventDefault();
        } else if (!passwordVal.match(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+$/)) {
            errorPassword.text("La contraseña debe contener letras y numeros");
            event.preventDefault();
        } else {
            errorUsername.text("");
            errorPassword.text("");
        }
    })
})