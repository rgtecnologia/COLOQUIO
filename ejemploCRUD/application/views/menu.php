<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Gestión</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?php echo site_url('materias'); ?>">Listar Materias</a></li>
            <li><a href="<?php echo site_url('materias/create'); ?>">Agregar Materias</a></li>
            <li><a href="<?php echo site_url('alumnos'); ?>">Listar Alumnos</a></li>
            <li><a href="<?php echo site_url('alumnos/create'); ?>">Agregar Alumnos</a></li>
            <li><a href="<?php echo site_url('desarrollador'); ?>">Desarrollador</a></li>
        </ul>
    </nav>
    <?php $this->load->view($content_view); ?>
</body>
</html>
