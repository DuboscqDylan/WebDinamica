<?php
include_once(dirname(__DIR__) . "../../ESTRUCTURA/header.php");
?>
<div class="container my-4">
    <?php if ($persona): ?>
        <h2 class="text-center mb-4">Datos de <?= $persona->getNombre() . " " . $persona->getApellido(); ?></h2>
        <ul class="list-group mb-4">
            <li class="list-group-item"><strong>DNI:</strong> <?= $persona->getNroDni(); ?></li>
            <li class="list-group-item"><strong>Apellido:</strong> <?= $persona->getApellido(); ?></li>
            <li class="list-group-item"><strong>Nombre:</strong> <?= $persona->getNombre(); ?></li>
            <li class="list-group-item"><strong>Fecha Nacimiento:</strong> <?= $persona->getFechaNac(); ?></li>
            <li class="list-group-item"><strong>Teléfono:</strong> <?= $persona->getTelefono(); ?></li>
            <li class="list-group-item"><strong>Domicilio:</strong> <?= $persona->getDomicilio(); ?></li>
        </ul>

        <h3 class="mb-3">Autos asociados</h3>
        <?php if (!empty($autos)): ?>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Patente</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($autos as $auto): ?>
                        <tr>
                            <td><?= $auto->getPatente(); ?></td>
                            <td><?= $auto->getMarca(); ?></td>
                            <td><?= $auto->getModelo(); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-warning">Esta persona no tiene autos asociados.</div>
        <?php endif; ?>

        <div class="mt-3">
            <a href="/phpMysql/VISTA/ACCION/formAccion.php?accion=tp4ej5" class="btn btn-secondary">Volver al listado</a>
        </div>

    <?php else: ?>
        <div class="alert alert-danger text-center">
            No se encontró la persona con DNI <?= htmlspecialchars($dni); ?>
        </div>
        <div class="text-center mt-3">
            <a href="/phpMysql/VISTA/ACCION/formAccion.php?accion=tp4ej5" class="btn btn-secondary">Volver al listado</a>
        </div>
    <?php endif; ?>
</div>
<?php
include_once(dirname(__DIR__) . "../../ESTRUCTURA/footer.php");
?>