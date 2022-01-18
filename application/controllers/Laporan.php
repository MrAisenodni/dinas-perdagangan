<?php

/**
 *
 */
class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('models');
        if (empty($this->session->userdata('is_login'))) {
            echo '<script>alert("Anda Harus Login Terlebih Dahulu");window.location.href="' . base_url('login') . '"</script>';
        }
    }

    public function cetakpengaduan()
    {
        $tgl_mulai = (!empty($this->input->get('tgl1'))) ? $this->input->get('tgl1') : null;
        $tgl_selesai = (!empty($this->input->get('tgl2'))) ? $this->input->get('tgl2') : null;
        $jenis = (!empty($this->input->get('jenis'))) ? $this->input->get('jenis') : null;
        $data=[
            'pengaduan' => $this->models->get_laporan_pengaduan($tgl_mulai, $tgl_selesai, $jenis),
            'jenis' => $this->models->jenislayanan()
        ];

        $this->load->view('admin/cetakpengaduan', $data);
    }

    public function cetakbahanpokok()
    {
        // $data['bahanpokok'] = $this->models->bahanpokok(array(), 'bahanpokok');
        // $this->load->view('admin/cetakbahanpokok', $data);
        $tgl_mulai = (!empty($this->input->get('tgl1'))) ? $this->input->get('tgl1') : null;
        $tgl_selesai = (!empty($this->input->get('tgl2'))) ? $this->input->get('tgl2') : null;
        $data['bahanpokok'] = $this->models->get_laporan($tgl_mulai, $tgl_selesai);
        $this->load->view('admin/cetakbahanpokok', $data);
    }

    public function laporanpengaduan()
    {
        $tgl_mulai = (!empty($this->input->get('tgl1'))) ? $this->input->get('tgl1') : null;
        $tgl_selesai = (!empty($this->input->get('tgl2'))) ? $this->input->get('tgl2') : null;
        $jenis = (!empty($this->input->get('jenis'))) ? $this->input->get('jenis') : null;
        $data=[
            'pengaduan' => $this->models->get_laporan_pengaduan($tgl_mulai, $tgl_selesai, $jenis),
            'jenis' => $this->models->jenislayanan()
        ];
        $this->load->view('admin/laporanpengaduan', $data);
    }

    public function cetak($id)
    {

        $data['pengaduan'] = $this->models->get_where(array('idpengaduan' => $id));
        $this->load->view('cetak', $data);
    }

    public function cetak2($id)
    {

        $data['bahanpokok'] = $this->models->get_where2(array('idbahanpokok' => $id));
        $this->load->view('cetak2', $data);
    }

    public function cetaklaporan()
    {
        $tgl_mulai = (!empty($this->input->get('tgl1'))) ? $this->input->get('tgl1') : null;
        $tgl_selesai = (!empty($this->input->get('tgl2'))) ? $this->input->get('tgl2') : null;
        $data['bahanpokok'] = $this->models->get_laporan($tgl_mulai, $tgl_selesai);
        $this->load->view('admin/cetaklaporan', $data);
    }
    public function cetaklaporanpengaduan()
    {
        $tgl_mulai = (!empty($this->input->get('tgl1'))) ? $this->input->get('tgl1') : null;
        $tgl_selesai = (!empty($this->input->get('tgl2'))) ? $this->input->get('tgl2') : null;
        $jenis = (!empty($this->input->get('jenis'))) ? $this->input->get('jenis') : null;
        $data['pengaduan'] = $this->models->get_laporan_pengaduan($tgl_mulai, $tgl_selesai, $jenis);
        $this->load->view('admin/cetaklaporanpengaduan', $data);
    }
}
