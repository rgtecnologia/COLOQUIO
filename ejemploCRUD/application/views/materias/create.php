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
    <title>Agregar Materia</title>
</head>
<body>
    <center>
        <table border="0" class="ventanas" width="650" cellspacing="0" cellpadding="0">
            <tr>
                <td class="tabla_ventanas_login" colspan="3">
                    <legend align="center">.: Agregar Materia :.</legend>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <?php echo form_open('materias/create', array('class' => 'form-horizontal')); ?>
                    <center>
                        <table border="0">
                            <tr>
                                <td><label for="nombre">Nombre:</label></td>
                                <td>
                                    <input type="text" name="nombre" id="nombre" size="50" placeholder="Nombre" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('nombre'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="carga_horaria">Carga Horaria:</label></td>
                                <td>
                                    <input type="text" name="carga_horaria" id="carga_horaria" size="50" placeholder="Carga Horaria" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('carga_horaria'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="ciclo">Ciclo:</label></td>
                                <td>
                                    <input type="text" name="ciclo" id="ciclo" size="50" placeholder="Ciclo" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('ciclo'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="carrera">Carrera:</label></td>
                                <td>
                                    <input type="text" name="carrera" id="carrera" size="50" placeholder="Carrera" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('carrera'); ?></font></td>
                            </tr>
                            <tr>
                                <td colspan="3"><hr/></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <center>
                                        <button type="submit" class="btn btn-success">Agregar</button>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </center>
                    <?php echo form_close(); ?>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
