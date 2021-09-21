<?php
class Mhs extends CI_Controller
{
    public function index()
    {
        $this->load->model('Model_mhs');
        $data['mahasiswa'] = $this->Model_mhs->get_data();

        $this->load->view('View_mhs', $data);
    }
}
