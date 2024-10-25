<?php $this->load->view('header'); ?>
<div id="container">
    <h2 align="center">Agregar Materia</h2>
    <?php echo form_open('materias/guardar'); ?>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" /><br/>
    <label for="carga_horaria">Carga Horaria:</label>
    <input type="text" name="carga_horaria" /><br/>
    <label for="ciclo">Año:</label>
    <input type="text" name="ciclo" /><br/>
    <input type="submit" value="Guardar" />
    <?php echo form_close(); ?>
</div>
<?php $this->load->view('footer'); ?>
