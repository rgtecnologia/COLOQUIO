<!DOCTYPE html>
<html>
<head>
    <title>Editar Alumno</title>
</head>
<body>
    <h1>Editar Alumno</h1>
    <form method="post" action="<?php echo site_url('alumnos/edit/'.$alumno[0]->ID); ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $alumno[0]->NOMBRE; ?>">
        <label>Apellido:</label>
        <input type="text" name="apellido" value="<?php echo $alumno[0]->APELLIDO; ?>">
        <label>DNI:</label>
        <input type="text" name="dni" value="<?php echo $alumno[0]->DNI; ?>">
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $alumno[0]->EMAIL; ?>">
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?php echo $alumno[0]->TELEFONO; ?>">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
