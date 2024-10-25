<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materia_model extends CI_Model {

    public function ListarMaterias() {
        $this->db->order_by('ID ASC');
        return $this->db->get('materias')->result();
    }

    public function SaveMateria($arrayMateria) {
        $this->db->trans_start();
        $this->db->insert('materias', $arrayMateria);
        $this->db->trans_complete();
    }

    public function BuscarID($id) {
        $this->db->where('ID', $id);
        return $this->db->get('materias')->row();
    }

    public function Edit($data, $id) {
        $this->db->where('ID', $id);
        $this->db->update('materias', $data);
    }

    public function Eliminar($id) {
        $this->db->where('ID', $id);
        $this->db->delete('materias');
    }
}
?>
