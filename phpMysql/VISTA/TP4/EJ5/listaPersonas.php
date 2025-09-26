<?php
include_once(dirname(__DIR__) . "../../ESTRUCTURA/header.php");
?>
<div class="container my-4">
    <h2 class="text-center mb-4">Listado de Personas</h2>

    <?php if (isset($personas) && count($personas) > 0): ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover mx-auto" style="width: 90%;">
                <thead class="table-dark">
                    <tr>
                        <th>Nro DNI</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Fecha Nacimiento</th>
                        <th>Teléfono</th>
                        <th>Domicilio</th>
                        <th>Autos</th> <!-- Nueva columna -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($personas as $persona): ?>
                        <tr>
                            <td><?= $persona->getNroDni(); ?></td>
                            <td><?= $persona->getApellido(); ?></td>
                            <td><?= $persona->getNombre(); ?></td>
                            <td><?= $persona->getFechaNac(); ?></td>
                            <td><?= $persona->getTelefono(); ?></td>
                            <td><?= $persona->getDomicilio(); ?></td>
                            <td>
                                <a href="../ACCION/formAccion.php?accion=tp4ej5b&NroDni=<?= $persona->getNroDni(); ?>"
                                    class="btn btn-sm btn-primary">
                                    Ver autos
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-warning text-center">
            No se encontraron personas.
        </div>
    <?php endif; ?>
</div>
<?php
include_once(dirname(__DIR__) . "../../ESTRUCTURA/footer.php");
?>