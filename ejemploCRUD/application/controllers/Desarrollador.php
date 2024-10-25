<?php
class Desarrollador extends CI_Controller {

    public function index() {
        $this->load->view('header');
        $this->load->view('desarrollador/index');
        $this->load->view('footer');
    }
}
?>
