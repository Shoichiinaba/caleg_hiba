<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi extends CI_Controller
{
	var $template = 'templates/index';

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Aspirasi_M');

    }

	public function index()
	{
		$data['content']          = 'aspirasi_v';
		$this->load->view($this->template, $data);
	}

	function get_data() {
        $list = $this->Aspirasi_M->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $asp) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $asp->nama;
            $row[] = $asp->email;
            $row[] = $asp->subject;
            $row[] = $asp->aspirasi;
            $row[] = $asp->tgl_buat;
            // add html for action
            $row[] = '<a href="'.site_url('Aspirasi/hapus/'.$asp->id).'" onclick="return confirm(\'Yakin hapus data?\')"  class="btn btn-danger btn-sm"><i class="ti-trash"></i> Delete</a>';
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->Aspirasi_M->count_all(),
                    "recordsFiltered" => $this->Aspirasi_M->count_filtered(),
                    "data" => $data,
                );
        echo json_encode($output);
    }

	function hapus($params = '')
    {
        $this->Aspirasi_M->delete($params);
        $this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
        return redirect('Aspirasi');
    }
}