<?php include_once("../../ESTRUCTURA/header.php") ?>

<div class="card shadow-lg p-4" style="width: 350px">
    <div class="card-body">
        <h3 class="card-title text-center mb-4">Member Login</h3>
        <form id="login" name="login" method="post" action="/WebDinamica/VISTA/ACCION/formAccion.php">

            <input type="hidden" name="accion" id="accion" value="tp2e3">

            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
            </div>
            <div id="errorUsername" class="text-danger small"></div>

            <div class="mb-3 input-group">
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div id="errorPassword" class="text-danger small"></div>

            <div class="d-grid">
            <input type="submit" name="submit" class="btn btn-success" value="Login">
            </div>
        </form>
    </div>
</div>
<script src="/WebDinamica/VISTA/JS/JSTP2/EJ3/formValidacionLogin.js"></script>
<?php include_once("../../ESTRUCTURA/footer.php") ?>