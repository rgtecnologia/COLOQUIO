<script type="text/javascript">
    /*ALUMNOS*/
    $(document).ready(function() {
        $('#alumnos').DataTable().destroy();
        $('#alumnos').dataTable({
            // sDom: hace un espacio entre la tabla y los controles 
            "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
        });
    });
</script>
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
    <title>Listar Alumnos</title>
    <script type="text/javascript">
        /*ALUMNOS*/
        $(document).ready(function() {
            if (!$.fn.DataTable.isDataTable('#alumnos')) {
                $('#alumnos').dataTable({
                    // sDom: hace un espacio entre la tabla y los controles 
                    "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
                });
            }
        });
    </script>
</head>
<body>
    <h1>Alumnos</h1>
    <a href="<?php echo site_url('alumnos/create'); ?>" class="btn btn-primary">Agregar Alumno</a>
    <!-- Asegúrate de que tu tabla tenga el ID "alumnos" -->
    <table id="alumnos" border="0" cellpadding="0" cellspacing="0" class="pretty">
        <thead>
            <tr>
                <th>IDENTIFICACIÓN</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($alumnos)) : ?>
                <?php foreach ($alumnos as $alumno) : ?>
                    <tr>
                        <td><?php echo $alumno->ID; ?></td>
                        <td><?php echo $alumno->nombre; ?></td>
                        <td><?php echo $alumno->apellido; ?></td>
                        <td><?php echo $alumno->dni; ?></td>
                        <td><?php echo $alumno->email; ?></td>
                        <td><?php echo $alumno->telefono; ?></td>
                        <td>
                            <a href="<?php echo site_url('alumnos/edit/'.$alumno->ID); ?>" class="btn btn-success">Editar</a>
                            <a href="<?php echo site_url('alumnos/delete/'.$alumno->ID); ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="7">No hay alumnos.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
