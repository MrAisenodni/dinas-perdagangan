<?php

/**
 *
 */
class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('models');
        if (empty($this->session->userdata('is_login'))) {
            echo '<script>alert("Anda Harus Login Terlebih Dahulu");window.location.href="' . base_url('login') . '"</script>';
        }
    }

    public function daftarberita()
    {
        $data['berita'] = $this->models->berita(array(), 'berita');
        $this->load->view('admin/daftarberita', $data);
    }
    public function tambahberita()
    {
        $this->load->view('admin/tambahberita');
    }

    public function simpan()
    {
        $namaberita = $this->input->post('namaberita');
        $tanggalberita = $this->input->post('tanggalberita');
        $deskripsi = $this->input->post('deskripsi');
        $config['upload_path']          = getcwd() . '/upload/'; //letaklokasiyangakandisimpan
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
                'namaberita' => $namaberita,
                'tanggalberita' => $tanggalberita,
                'deskripsi'   => $deskripsi,
                'foto'      => $filename,
            );
            $simpan = $this->models->insert($data_simpan, 'berita'); //namatable
            if ($simpan) {
                redirect('berita/daftarberita');
            }
        }
    }
    public function hapus($id)
    {
        $a = $this->models->delete(array('idberita' => $id), 'berita');
        if ($a) {
            redirect('berita/daftarberita');
        }
    }

    public function edit($id)
    {
        $data['berita'] = $this->models->getberitabyid(array('idberita' => $id));
        $this->load->view('admin/editberita', $data);
    }

    public function simpanedit()
    {
        $idberita = $this->input->post('idberita');
        $namaberita = $this->input->post('namaberita');
        $tanggalberita = $this->input->post('tanggalberita');
        $deskripsi = $this->input->post('deskripsi');

        $config['upload_path']          = getcwd() . '/upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $data_update = array(
                'namaberita' => $namaberita,
                'tanggalberita' => $tanggalberita,
                'deskripsi'   => $deskripsi,

            );
            $simpan = $this->models->update(array('idberita' => $idberita), $data_update, 'berita');
            if ($simpan) {
                redirect('berita/daftarberita');
            }
        } else {
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name'];
            $data_update = array(
                'namaberita' => $namaberita,
                'tanggalberita' => $tanggalberita,
                'deskripsi'   => $deskripsi,
                'foto'      => $filename,
            );
            $simpan = $this->models->update(array('idberita' => $idberita), $data_update, 'berita');
            if ($simpan) {
                redirect('berita/daftarberita');
            }
        }
    }
}
