<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mread');
        $this->load->model('models');
    }
    public function index()
    {
        $data['berita'] = $this->models->berita(array(), 'berita');
        // $this->load->view('berita', $data);
        $this->load->view('home', $data);
    }

    public function layanan()
    {
        $this->load->view('layanan');
    }
    public function pengaduan()
    {
        $data = [
            'jenislayanan'  => $this->models->jenislayanan(),
        ];

        $this->load->view('pengaduan', $data);
    }
    public function keputusan()
    {
        $data['keputusan'] = $this->models->keputusan(array(), 'keputusan');
        $this->load->view('keputusan', $data);
    }
    public function bahanpokok()
    {
        $data['bahanpokok'] = $this->models->bahanpokok(array(), 'bahanpokok');
        // $data['report'] = $this->models->report();
        // $data['report'] = $this->mread->report();
        $this->load->view('bahanpokok', $data);
    }
    public function grafikbahanpokok($id)
    {
        $data['bahanpokok'] = $this->models->bahanpokok(array(), 'bahanpokok');
        $pempek = urldecode($this->uri->segment(3));
        $data['report'] = $this->models->report($pempek);
        $this->load->view('grafikbahanpokok', $data);
    }

    public function galeri()
    {
        $this->load->view('galeri');
    }
    public function foto()
    {
        $data['galerifoto'] = $this->models->galerifoto(array(), 'galerifoto');
        $this->load->view('foto', $data);
    }
    public function video()
    {
        $data['galerivideo'] = $this->models->galerivideo(array(), 'galerivideo');
        $this->load->view('video', $data);
    }
    public function berita()
    {
        $data['berita'] = $this->models->berita(array(), 'berita');
        $this->load->view('berita', $data);
    }
    public function detailberita($id)
    {

        $data['berita'] = $this->models->getberitabyid(array('idberita' => $id));
        $this->load->view('detailberita', $data);
    }
    public function media()
    {
        $this->load->view('media');
    }
    public function tentangkami()
    {
        $this->load->view('tentangkami');
    }
}
