<?php

/**
 *
 */
class Layanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('models');
        // if (empty($this->session->userdata('is_login'))) {
        //     echo '<script>alert("Anda Harus Login Terlebih Dahulu");window.location.href="' . base_url('login') . '"</script>';
        // }
    }

    public function daftarpengaduan()
    {
        $data['pengaduan'] = $this->models->pengaduan(array(), 'pengaduan');

        $this->load->view('admin/daftarpengaduan', $data);
    }
    public function simpanpengaduan()
    {
        date_default_timezone_set("Asia/Jakarta");
        // $idpengaduan = $this->input->post('idpengaduan');
        // $NIK = $this->input->post('NIK');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $nomorhp = $this->input->post('nomorhp');
        $email = $this->input->post('email');
        $pekerjaan = $this->input->post('pekerjaan');
        $hal = $this->input->post('hal');
        $jenislayanan = $this->input->post('jenislayanan');
        $status = "Belum di proses";

        $data_simpan = array(
            'NIK' => $NIK,
            'nama' => $nama,
            'alamat' => $alamat,
            'nomorhp' => $nomorhp,
            'email' => $email,
            'pekerjaan' => $pekerjaan,
            'hal' => $hal,
            'idadmin' => $this->session->userdata('idadmin'),
            'idjenis' => $jenislayanan,
            'status' => $status,
            'created_date_time' => date('Y-m-d h:i:s a', time()),
        );
        $simpan = $this->models->insert($data_simpan, 'pengaduan'); //namatable
        $this->session->set_flashdata('msg', '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>Pengajuan berhasil dikirim.</div>'); 
        redirect('home/pengaduan');
    }
    // public function tambahpengaduan()
    // {
    //     $this->load->view('admin/tambahbahanpokok');
    // }

    public function cari()
    {

        $NIK = $this->input->post('NIK');
        $data['pengaduan'] = $this->models->pengaduan(array('NIK' => $NIK), 'pengaduan');
        $this->load->view('hasilpengaduan', $data);
    }

    public function hapuspengaduan($id)
    {
        $a = $this->models->delete(array('idpengaduan' => $id), 'pengaduan');
        if ($a) {
            redirect('layanan/daftarpengaduan');
        }
    }

    // Commended by Fiqri 18/01/2022
    // public function statuspengaduan()
    // {
    //     $data['pengaduan'] = $this->models->pengaduan(array(), 'pengaduan');
    //     $this->load->view('statuspengaduan', $data);
    // }
    public function statuspengaduan()
    {
        $data['pengaduan'] = $this->models->pengaduan(array('idadmin' => $this->session->userdata('idadmin')), 'pengaduan');
        $this->load->view('statuspengaduan', $data);
    }
    public function verifikasi($id)
    {
        $data['pengaduan'] = $this->models->getpengaduanbyid(array('idpengaduan' => $id));
        $this->load->view('admin/verifikasipengaduan', $data);
    }

    public function simpanverifikasi()
    {
        $idpengaduan = $this->input->post('idpengaduan');
        $status = $this->input->post('status');

        $config['upload_path']          = getcwd() . '/upload/';
        $config['allowed_types']        = 'pdf|doc|docx';
        // $config['max_size']             = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        // $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $data_update = array(
                'status' => $status,

            );
            $simpan = $this->models->update(array('idpengaduan' => $idpengaduan), $data_update, 'pengaduan');
            if ($simpan) {
                redirect('layanan/daftarpengaduan');
            }
        } else {
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name'];
            $data_update = array(
                'status' => $status,
                'berkas'      => $filename,
            );
            $simpan = $this->models->update(array('idpengaduan' => $idpengaduan), $data_update, 'pengaduan');
            if ($simpan) {
                redirect('layanan/daftarpengaduan');
            }
        }
    }

    public function daftarsop()
    {

        $data['keputusan'] = $this->models->keputusan(array(), 'keputusan');
        $this->load->view('admin/daftarsop', $data);
    }

    public function simpansop()
    {
        $nama = $this->input->post('nama');
        $tahun = $this->input->post('tahun');
        $config['upload_path']          = getcwd() . '/upload/'; //letaklokasiyangakandisisimpan
        $config['allowed_types']        = 'pdf|doc|docx';
        // $config['max_size']             = 5024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        // $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('berkas')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name']; //deklarasinamafile
            $data_simpan = array(
                'nama' => $nama,
                'tahun' => $tahun,
                'berkas'      => $filename,
            );
            $simpan = $this->models->insert($data_simpan, 'keputusan'); //namatable
            if ($simpan) {
                redirect('layanan/daftarsop');
            }
        }
    }
    public function tambahsop()
    {
        $this->load->view('admin/tambahsop');
    }

    public function hapussop($id)
    {
        $a = $this->models->delete(array('idkeputusan' => $id), 'keputusan');
        if ($a) {
            redirect('layanan/daftarsop');
        }
    }
    public function editsop($id)
    {
        $data['keputusan'] = $this->models->getsopbyid(array('idkeputusan' => $id));
        $this->load->view('admin/editsop', $data);
    }

    public function simpaneditsop()
    {
        $idkeputusan = $this->input->post('idkeputusan');
        $nama = $this->input->post('nama');

        $config['upload_path']          = getcwd() . '/upload/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $data_update = array(
                'nama' => $nama,

            );
            $simpan = $this->models->update(array('idkeputusan' => $idkeputusan), $data_update, 'keputusan');
            if ($simpan) {
                redirect('layanan/daftarsop');
            }
        } else {
            $data = array('upload_data' => $this->upload->data());
            $filename = $data['upload_data']['file_name'];
            $data_update = array(
                'nama' => $nama,
                'berkas'      => $filename,
            );
            $simpan = $this->models->update(array('idkeputusan' => $idkeputusan), $data_update, 'keputusan');
            if ($simpan) {
                redirect('layanan/daftarsop');
            }
        }
    }
    public function daftarbahanpokok()
    {
        $data['bahanpokok'] = $this->models->bahanpokok(array(), 'bahanpokok');
        $this->load->view('admin/daftarbahanpokok', $data);
    }


    public function simpanbahanpokok()
    {

        $namabarang = $this->input->post('namabarang');
        $satuan = $this->input->post('satuan');
        $hargakemarin = $this->input->post('hargakemarin');
        $hargahariini = $this->input->post('hargahariini');
        $perubahanrp = $this->input->post('perubahanrp');
        $perubahanpersen = $this->input->post('perubahanpersen');
        $tanggalbahan = $this->input->post('tanggalbahan');

        $data_simpan = array(
            'namabarang' => $namabarang,
            'satuan' => $satuan,
            'hargakemarin' => $hargakemarin,
            'hargahariini' => $hargahariini,
            'perubahanrp' => $perubahanrp,
            'perubahanpersen' => $perubahanpersen,
            'tanggalbahan' => $tanggalbahan,

        );
        $simpan = $this->models->insert($data_simpan, 'bahanpokok'); //namatable
        if ($simpan) {
            redirect('layanan/daftarbahanpokok');
        }
    }
    public function tambahbahanpokok()
    {
        $this->load->view('admin/tambahbahanpokok');
    }

    public function hapusbahanpokok($id)
    {
        $a = $this->models->delete(array('idbahanpokok' => $id), 'bahanpokok');
        if ($a) {
            redirect('layanan/daftarbahanpokok');
        }
    }

    public function editbahanpokok($id)
    {
        $data['bahanpokok'] = $this->models->getbahanpokokbyid(array('idbahanpokok' => $id));
        $this->load->view('admin/editbahanpokok', $data);
    }

    public function simpaneditbahanpokok()
    {
        $idbahanpokok = $this->input->post('idbahanpokok');
        $namabarang = $this->input->post('namabarang');
        $satuan = $this->input->post('satuan');
        $hargakemarin = $this->input->post('hargakemarin');
        $hargahariini = $this->input->post('hargahariini');
        $perubahanrp = $this->input->post('perubahanrp');
        $perubahanpersen = $this->input->post('perubahanpersen');
        $tanggalbahan = $this->input->post('tanggalbahan');
        $data_update = array(
            'namabarang' => $namabarang,
            'satuan' => $satuan,
            'hargakemarin' => $hargakemarin,
            'hargahariini' => $hargahariini,
            'perubahanrp' => $perubahanrp,
            'perubahanpersen' => $perubahanpersen,
            'tanggalbahan' => $tanggalbahan,
        );

        $simpan = $this->models->update(array('idbahanpokok' => $idbahanpokok), $data_update, 'bahanpokok');
        if ($simpan) {
            redirect('layanan/daftarbahanpokok');
        }

        $data = array('upload_data' => $this->upload->data());
        $filename = $data['upload_data']['file_name'];
        $data_update = array(
            'namabarang' => $namabarang,
            'satuan' => $satuan,
            'hargakemarin' => $hargakemarin,
            'hargahariini' => $hargahariini,
            'perubahanrp' => $perubahanrp,
            'perubahanpersen' => $perubahanpersen,
            'tanggalbahan' => $tanggalbahan,

        );
        $simpan = $this->models->update(array('idkeputusan' => $idbahanpokok), $data_update, 'bahanpokok');
        if ($simpan) {
            redirect('layanan/daftarbahanpokok');
        }
    }
}
