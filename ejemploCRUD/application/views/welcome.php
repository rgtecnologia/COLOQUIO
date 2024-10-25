<?php
class Welcome extends CI_Controller {

    public function index() {
        $data['content_view'] = 'inicio';
        $this->load->view('menu', $data);
    }
}
?>
