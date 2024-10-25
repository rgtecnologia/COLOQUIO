<?php $this->load->view('header'); ?>
<div id="container">
    <h2 align="center">Materias del Sistema</h2>
    <center>
        <table id="materias" border="0" cellpadding="0" cellspacing="0" class="pretty">
            <thead>
                <tr>
                    <th>ACCION</th>
                    <th>NOMBRE</th>
                    <th>CARGA HORARIA</th>
                    <th>CICLO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materias as $materia): ?>
                <tr>
                    <td>
                        <a href="<?php echo base_url().'index.php/materias/editar/'.$materia->id; ?>" class="btn btn-success">Editar</a>
                        <a href="<?php echo base_url().'index.php/materias/eliminar/'.$materia->id; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                    <td><?php echo $materia->nombre; ?></td>
                    <td><?php echo $materia->carga_horaria; ?></td>
                    <td><?php echo $materia->ciclo; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>
</div>
<?php $this->load->view('footer'); ?>
