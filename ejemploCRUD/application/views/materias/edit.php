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
<title>Editar Materia</title>
</head>
<body>
    <center>
        <table border="0" class="ventanas" width="650" cellspacing="0" cellpadding="0">
            <tr>
                <td class="tabla_ventanas_login" colspan="3">
                    <legend align="center">.: Editar Materia :.</legend>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <?php echo form_open('materias/edit/'.$materia->ID, array('class' => 'form-horizontal')); ?>
                    <center>
                        <table border="0">
                            <tr>
                                <td><label for="nombre">Nombre:</label></td>
                                <td>
                                    <input type="text" name="nombre" id="nombre" size="50" value="<?php echo $materia->nombre; ?>" placeholder="Nombre" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('nombre'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="carga_horaria">Carga Horaria:</label></td>
                                <td>
                                    <input type="text" name="carga_horaria" id="carga_horaria" size="50" value="<?php echo $materia->carga_horaria; ?>" placeholder="Carga Horaria" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('carga_horaria'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="ciclo">Año:</label></td>
                                <td>
                                    <input type="text" name="ciclo" id="ciclo" size="50" value="<?php echo $materia->ciclo; ?>" placeholder="Año" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('ciclo'); ?></font></td>
                            </tr>
                            <tr>
                                <td><label for="carrera">Carrera:</label></td>
                                <td>
                                    <input type="text" name="carrera" id="carrera" size="50" value="<?php echo $materia->carrera; ?>" placeholder="Carrera" required class="form-control">
                                </td>
                                <td><font color="red"><?php echo form_error('carrera'); ?></font></td>
                            </tr>
                            <tr>
                                <td colspan="3"><hr/></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <center>
                                        <button type="submit" class="btn btn-success">Actualizar</button>
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
