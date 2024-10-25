<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
    <link href="<?php echo base_url();?>css/Estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/Tablas.css">
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>js/jquery.dataTables.js"></script>    
    <title>Agregar Alumno</title>
</head>
<body>
    <center>
        <table border="0" class="ventanas" width="650" cellspacing="0" cellpadding="0">
            <tr>
                <td class="tabla_ventanas_login" colspan="3">
                    <legend align="center">.: Agregar Alumno :.</legend>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <?php echo form_open('alumnos/create', array('class' => 'form-horizontal')); ?>
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
                                <td><label for="apellido">Apellido:</label></td>
                                <td>
                                    <input type="text" name="apellido" id="apellido" size="50" placeholder="Apellido" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('apellido'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="dni">DNI:</label></td>
                                <td>
                                    <input type="text" name="dni" id="dni" size="50" placeholder="DNI" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('dni'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="email">Email:</label></td>
                                <td>
                                    <input type="email" name="email" id="email" size="50" placeholder="Email" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('email'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="telefono">Teléfono:</label></td>
                                <td>
                                    <input type="text" name="telefono" id="telefono" size="50" placeholder="Teléfono" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('telefono'); ?></font></td>
                            </tr>
                            <tr>
                                <td colspan="3"><hr/></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <center>
                                        <button type="submit" class="btn btn-success">Guardar</button>
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
