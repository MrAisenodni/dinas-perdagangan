<?php

/**
 *
 */
class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('models');
        if (empty($this->session->userdata('is_login'))) {
            echo '<script>alert("Anda Harus Login Terlebih Dahulu");window.location.href="' . base_url('login') . '"</script>';
        }
    }

    public function daftarfoto()
    {
        $data['galerifoto'] = $this->models->galerifoto(array(), 'galerifoto');
        $this->load->view('admin/daftarfoto', $data);
    }

    public function simpanfoto()
    {
        $namakegiatan = $this->input->post('namakegiatan');
        $tanggalkegiatan = $this->input->post('tanggalkegiatan');

        $config['upload_path']          = getcwd() . '/upload/'; //letaklokasiyangakandisisimpan
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        // $config['max_size']             = 5024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        // $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name']; //deklarasinamafile
            $data_simpan = array(
                'namakegiatan' => $namakegiatan,
                'tanggalkegiatan' => $tanggalkegiatan,
                'foto'      => $filename,
            );
            $simpan = $this->models->insert($data_simpan, 'galerifoto'); //namatable
            if ($simpan) {
                redirect('galeri/daftarfoto');
            }
        }
    }
    public function tambahfoto()
    {
        $this->load->view('admin/tambahfoto');
    }

    public function hapusfoto($id)
    {
        $a = $this->models->delete(array('idfoto' => $id), 'galerifoto');
        if ($a) {
            redirect('galeri/daftarfoto');
        }
    }
    public function editfoto($id)
    {
        $data['galerifoto'] = $this->models->getfotobyid(array('idfoto' => $id));
        $this->load->view('admin/editfoto', $data);
    }

    public function simpaneditfoto()
    {
        $idfoto = $this->input->post('idfoto');
        $namakegiatan = $this->input->post('namakegiatan');
        $tanggalkegiatan = $this->input->post('tanggalkegiatan');

        $config['upload_path']          = getcwd() . '/upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $data_update = array(
                'namakegiatan' => $namakegiatan,
                'tanggalkegiatan' => $tanggalkegiatan,

            );
            $simpan = $this->models->update(array('idfoto' => $idfoto), $data_update, 'galerifoto');
            if ($simpan) {
                redirect('galeri/daftarfoto');
            }
        } else {
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name'];
            $data_update = array(
                'namakegiatan' => $namakegiatan,
                'tanggalkegiatan' => $tanggalkegiatan,
                'foto'      => $filename,
            );
            $simpan = $this->models->update(array('idfoto' => $idfoto), $data_update, 'galerifoto');
            if ($simpan) {
                redirect('galeri/daftarfoto');
            }
        }
    }

    public function daftarvideo()
    {
        $data['galerivideo'] = $this->models->galerivideo(array(), 'galerivideo');
        $this->load->view('admin/daftarvideo', $data);
    }

    public function simpanvideo()
    {
        $namakegiatan = $this->input->post('namakegiatan');
        $tanggalkegiatan = $this->input->post('tanggalkegiatan');
        $config['upload_path']          = getcwd() . '/upload/'; //letaklokasiyangakandisisimpan
        $config['allowed_types'] = 'mp4|3gp|flv';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('video')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name']; //deklarasinamafile
            $data_simpan = array(
                'namakegiatan' => $namakegiatan,
                'tanggalkegiatan' => $tanggalkegiatan,
                'video'      => $filename,
            );
            $simpan = $this->models->insert($data_simpan, 'galerivideo'); //namatable
            if ($simpan) {
                redirect('galeri/daftarvideo');
            }
        }
    }

    public function tambahvideo()
    {
        $this->load->view('admin/tambahvideo');
    }

    public function hapusvideo($id)
    {
        $a = $this->models->delete(array('idvideo' => $id), 'galerivideo');
        if ($a) {
            redirect('galeri/daftarvideo');
        }
    }
    public function editvideo($id)
    {
        $data['galerivideo'] = $this->models->getvideobyid(array('idvideo' => $id));
        $this->load->view('admin/editvideo', $data);
    }

    public function simpaneditvideo()
    {
        $idvideo = $this->input->post('idvideo');
        $namakegiatan = $this->input->post('namakegiatan');
        $tanggalkegiatan = $this->input->post('tanggalkegiatan');

        $config['upload_path']          = getcwd() . '/upload/';
        $config['allowed_types'] = 'mp4|3gp|flv';
        // $config['max_size']             = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $data_update = array(
                'namakegiatan' => $namakegiatan,
                'tanggalkegiatan' => $tanggalkegiatan,

            );
            $simpan = $this->models->update(array('idvideo' => $idvideo), $data_update, 'galerivideo');
            if ($simpan) {
                redirect('galeri/daftarvideo');
            }
        } else {
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name'];
            $data_update = array(
                'namakegiatan' => $namakegiatan,
                'tanggalkegiatan' => $tanggalkegiatan,
                'video'      => $filename,
            );
            $simpan = $this->models->update(array('idvideo' => $idvideo), $data_update, 'galerivideo');
            if ($simpan) {
                redirect('galeri/daftarvideo');
            }
        }
    }
}
