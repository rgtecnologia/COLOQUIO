<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materias extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Materia_model');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index() {
        $this->load->view('header');
        $data['materias'] = $this->Materia_model->ListarMaterias();
        $this->load->view('materias/index', $data);
        $this->load->view('footer');
    }

    public function create() {
        $this->load->view('header');
        if ($this->input->post()) {
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'carga_horaria' => $this->input->post('carga_horaria'),
                'ciclo' => $this->input->post('ciclo'),
                'carrera' => $this->input->post('carrera')
            );
            $this->Materia_model->SaveMateria($data);
            redirect('materias');
        } else {
            $this->load->view('materias/create');
        }
        $this->load->view('footer');
    }

    public function edit($id) {
        $this->load->view('header');
        if ($this->input->post()) {
            $data = array(
                'nombre' => $this->input->post('nombre'),
                'carga_horaria' => $this->input->post('carga_horaria'),
                'ciclo' => $this->input->post('ciclo'),
                'carrera' => $this->input->post('carrera')
            );
            $this->Materia_model->Edit($data, $id);
            redirect('materias');
        } else {
            $data['materia'] = $this->Materia_model->BuscarID($id);
            $this->load->view('materias/edit', $data);
        }
        $this->load->view('footer');
    }

    public function delete($id) {
        $this->load->view('header');
        $this->Materia_model->Eliminar($id);
        redirect('materias');
        $this->load->view('footer');
    }
    
}
?>
