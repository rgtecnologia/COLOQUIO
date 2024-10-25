<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="http://localhost/ejemploCRUD/css/bootstrap.css">
    <link href="http://localhost/ejemploCRUD/css/Estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/ejemploCRUD/css/Tablas.css">
    <script type="text/javascript" language="javascript" src="http://localhost/ejemploCRUD/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="http://localhost/ejemploCRUD/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="http://localhost/ejemploCRUD/js/jquery.dataTables.js"></script>
    <title>Lista de Materias</title>
    <script type="text/javascript">
        /*MATERIAS*/
        $(document).ready(function() {
            if (!$.fn.DataTable.isDataTable('#materias')) {
                $('#materias').dataTable({
                    // sDom: hace un espacio entre la tabla y los controles
                    "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
                });
            }
        });
    </script>
</head>
<body>
    <h1>Materias</h1>
    <a href="<?php echo site_url('materias/create'); ?>" class="btn btn-primary">Agregar Materia</a>
    <!-- Asegúrate de que tu tabla tenga el ID "materias" -->
    <table id="materias" border="0" cellpadding="0" cellspacing="0" class="pretty table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Carga Horaria</th>
                <th>Ciclo</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($materias)) : ?>
                <?php foreach ($materias as $materia) : ?>
                    <tr>
                        <td><?php echo $materia->ID; ?></td>
                        <td><?php echo $materia->nombre; ?></td>
                        <td><?php echo $materia->carga_horaria; ?></td>
                        <td><?php echo $materia->ciclo; ?></td>
                        <td><?php echo $materia->carrera; ?></td>
                        <td>
                            <a href="<?php echo site_url('materias/edit/'.$materia->ID); ?>" class="btn btn-success">Editar</a>
                            <a href="<?php echo site_url('materias/delete/'.$materia->ID); ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="6">No hay materias.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
