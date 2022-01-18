<?php

/**
 *
 */
class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('models');
        if (empty($this->session->userdata('is_login'))) {
            echo '<script>alert("Anda Harus Login Terlebih Dahulu");window.location.href="' . base_url('login') . '"</script>';
        }
    }

    public function daftaradmin()
    {
        $data['admin'] = $this->models->admin(array(), 'admin');
        $this->load->view('admin/daftaradmin', $data);
    }
    public function tambahadmin()
    {
        $this->load->view('admin/tambahadmin');
    }

    public function simpanadmin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data_simpan = array(
            'username' => $username,
            'password' => $password,
        );
        $simpan = $this->models->insert($data_simpan, 'admin'); //namatable
        if ($simpan) {
            redirect('admin/daftaradmin');
        }
    }

    public function hapusadmin($id)
    {

        $a = $this->models->delete(array('idadmin' => $id), 'admin');
        if ($a) {
            redirect('admin/daftaradmin');
        }
    }

    public function editadmin($id)
    {
        $data['admin'] = $this->models->getadminbyid(array('idadmin' => $id));
        $this->load->view('admin/editadmin', $data);
    }

    public function simpaneditadmin()
    {
        $idadmin = $this->input->post('idadmin');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data_update = array(
            'username' => $username,
            'password' => $password,

        );

        $simpan = $this->models->update(array('idadmin' => $idadmin), $data_update, 'admin');
        if ($simpan) {
            redirect('admin/daftaradmin');
        }

        $data = array('upload_data' => $this->upload->data());
        $filename = $data['upload_data']['file_name'];
        $data_update = array(
            'username' => $username,
            'password' => $password,

        );
        $simpan = $this->models->update(array('idadmin' => $idadmin), $data_update, 'admin');
        if ($simpan) {
            redirect('admin/daftaradmin');
        }
    }
}
