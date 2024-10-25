<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumno_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function ListarAlumnos() {
        $this->db->order_by('ID ASC');
        return $this->db->get('alumnos')->result();
    }

    public function ExisteEmail($email) {
        $this->db->from('alumnos');
        $this->db->where('email', $email);
        return $this->db->count_all_results();
    }

    public function SaveAlumno($arrayAlumno) {
        $this->db->trans_start();
        $this->db->insert('alumnos', $arrayAlumno);
        $this->db->trans_complete();    
    }

    public function BuscarID($id) {
        $this->db->where('ID', $id);
        return $this->db->get('alumnos')->row();
    }

    public function Edit($data, $id) {
        $this->db->where('ID', $id);
        $this->db->update('alumnos', $data);
    }

    public function Eliminar($id) {
        $this->db->where('ID', $id);
        $this->db->delete('alumnos');
    }
    public function index() {
        $data['alumnos'] = $this->Alumno_model->ListarAlumnos();
        echo "<pre>";
        print_r($data['alumnos']);
        echo "</pre>";
        $this->load->view('alumnos/index', $data);
    }
    
}
?>
