<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Chart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mread');
    }
    public function index()
    {
        $data['report'] = $this->mread->report();
        $this->load->view('report', $data);
    }
}
