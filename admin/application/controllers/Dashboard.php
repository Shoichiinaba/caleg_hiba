<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	var $template = 'templates/index';

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Aspirasi_M');

    }

	public function index()
	{
		$data['content']          = 'page/home';
		$data['aspirasi']      	  = $this->Aspirasi_M->jumlah_asp();
		$this->load->view($this->template, $data);
	}

}