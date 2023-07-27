<?php
class A_penyakit extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_master');
		chek_session();
	}

	//    ======================== INDEX =======================

	function index()
	{
		$data = array('data_penyakit' => $this->model_master->getAllPenyakit());
		// var_dump($data);
		// die;
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_penyakit', $data);
		$this->load->view('admin/v_footer', $data);
	}

	function add()
	{
		$data = array(
			'kd_penyakit' => $this->model_master->getKodePenyakit(),
			'data_penyakit' => $this->model_master->getAllPenyakit()
		);
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/option/v_add_penyakit', $data);
		$this->load->view('admin/v_footer', $data);
	}

	//    ======================== EDIT =======================

	function edit()
	{
		if (isset($_POST['submit'])) {
			// proses edit
			$id		    =   $this->input->post('kd_penyakit');
			$penyakit   =   $this->input->post('nama_penyakit');
			$penyebab	=   $this->input->post('penyebab');
			$solusi		=   $this->input->post('solusi');
			$data		=	array(
				'nama_penyakit' => $penyakit,
				'penyebab' => $penyebab,
				'solusi' => $solusi
			);
			$this->model_master->updatePenyakit($data, $id);
			redirect('a_penyakit');
		} else {
			$id = $this->uri->segment(3);
			$data['baris'] = $this->model_master->getPenyakitById($id)->row_array();
			$this->load->view('admin/v_header', $data);
			$this->load->view('admin/option/v_edit_penyakit', $data);
		}
	}

	//    ===================== INSERT =====================

	function tambahPenyakit()
	{
		// var_dump($this->input->post());
		// die;
		$config['upload_path']          = FCPATH . '/assets/img/img/foto';
		$config['allowed_types']        = 'gif|jpg|png|PNG';
		$config['max_size']             = 10000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
			die;
		} else {
			// $foto = array('upload_data' => $this->upload->data());
			$foto = $this->upload->data();
			$foto = $foto['file_name'];
			$kd_penyakit = $this->input->post('kd_penyakit', TRUE);
			$nama_penyakit = $this->input->post('nama_penyakit', TRUE);
			$penyebab = $this->input->post('penyebab', TRUE);
			$solusi = $this->input->post('solusi', TRUE);

			$data = array(
				'kd_penyakit' => $kd_penyakit,
				'nama_penyakit' => $nama_penyakit,
				'foto' => $foto,
				'penyebab' => $penyebab,
				'solusi' => $solusi,
			);
			// $this->db->insert('sispak', $data);
			$this->model_master->insertPenyakit($data);



			redirect("a_penyakit");
		}
	}

	//    ========================== DELETE =======================
	function hapusPenyakit()
	{
		$id = $this->uri->segment(3);
		$this->model_master->deletePenyakit($id);
		redirect("a_penyakit");
	}
}
