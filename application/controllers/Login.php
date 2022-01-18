<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Models');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function aksi_login()
    {
        $user = $this->Models->cariadmin(
            array(
                'username'     => $this->input->post('username'),
                'password'  => $this->input->post('password')
            ),
            'admin'
        );
        if (!empty($user)) {
            $this->session->set_userdata('idadmin', $user[0]->idadmin);
            $this->session->set_userdata('username', $user[0]->username);
            $this->session->set_userdata('password', $user[0]->password);
            $this->session->set_userdata('is_login', '1');
            // echo "password benar";
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>Email Atau Password Anda Salah Silahkan Diulangi Lagi</div>');
            redirect('login/login', 'refresh');
            // echo "password salah";
            // $this->session->set_flashdata('msg', '<div class="alert alert-danger fade in alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>Email Atau Password Anda Salah Silahkan Diulangi Lagi</div>');
            // redirect(site_url('login/login'), 'refresh');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('idadmin');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('is_login');
        redirect('home');
    }
}
