<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Alumno_model');
    }

    public function index() {
        $this->load->view('header');
        $data['alumnos'] = $this->Alumno_model->ListarAlumnos();
        $this->load->view('alumnos/index', $data);
        $this->load->view('footer');
    }

    public function create() {
        $this->load->view('header');
     
        if ($this->input->post()) {

            $data = array(
                'id' => $this->input->post('id'),
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'dni' => $this->input->post('dni'),
                'email' => $this->input->post('email'),
                'telefono' => $this->input->post('telefono')
            );
            $this->Alumno_model->SaveAlumno($data);
            redirect('alumnos');

        } else {
            $this->load->view('alumnos/create');
        }
        $this->load->view('footer');
    }

    public function delete($id) {
        $this->load->view('header');
        $this->Alumno_model->Eliminar($id);
        redirect('alumnos');
        $this->load->view('footer');
    }

    public function edit($id) {
        $this->load->view('header');
        if ($this->input->post()) {
            $data = array(
                'id' => $this->input->post('id'),
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'dni' => $this->input->post('dni'),
                'email' => $this->input->post('email'),
                'telefono' => $this->input->post('telefono')
            );
            $this->Alumno_model->Edit($data, $id);
            redirect('alumnos');
        } else {
            $data['alumno'] = $this->Alumno_model->BuscarID($id);
            $this->load->view('alumnos/edit', $data);
        }
        $this->load->view('footer');
    }
    
}
?>
