<?php include_once("../../ESTRUCTURA/header.php") ?>
<form id="login" name="login" method="post" action="/WebDinamica/VISTA/ACCION/formAccion.php">
    <input type="hidden" name="accion" id="accion" value="tp2e3">
    <input type="text" name="username" id="username" placeholder="Username">
    <div id="errorUsername"></div>
    <input type="password" name="password" id="password" placeholder="Password">
    <div id="errorPassword"></div>
    <input type="submit" name="submit" value="Login">
</form>

<script src="/WebDinamica/VISTA/JS/JSTP2/EJ3/formValidacionLogin.js"></script>
<?php include_once("../../ESTRUCTURA/footer.php") ?>