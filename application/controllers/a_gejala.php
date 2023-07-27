<?php
class A_gejala extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_master');
		chek_session();
	}
	
	//    ======================== INDEX =======================
	
	function index()
	{
		$data=array('data_gejala'=>$this->model_master->getAllGejala());
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_gejala',$data);
		$this->load->view('admin/v_footer');
	}
	
	function add()
	{
		$data=array('kd_gejala'=>$this->model_master->getKodeGejala(),
					'data_gejala'=>$this->model_master->getAllGejala()
        );
		$this->load->view('admin/v_header');
		$this->load->view('admin/option/v_add_gejala',$data);
		$this->load->view('admin/v_footer');
	}
	
	//    ======================== EDIT =======================
    
	function edit()
	{
        if(isset($_POST['submit']))
		{
			// proses edit
			$id		    =   $this->input->post('kd_gejala');
			$gejala   =   $this->input->post('nama_gejala');
			$bobot   =   $this->input->post('bobot_pakar');
			
			$data		=	array('nama_gejala'=>$gejala,'bobot_pakar'=>$bobot);
			$this->model_master->updateGejala($data,$id);
			redirect('a_gejala');
        }
		else
		{ 
            $id = $this->uri->segment(3);
            $data['baris'] = $this->model_master->getGejalaById($id)->row_array();
			$this->load->view('admin/v_header',$data);
			$this->load->view('admin/option/v_edit_gejala',$data);
        }		
    }
	
	//    ======================== INSERT =======================
	
    function tambahGejala() {
		$this->load->library('upload');
	
		// Konfigurasi untuk upload gambar
		$config['upload_path'] = './assets/img/gejala/'; 
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 2048; 
	
		$this->upload->initialize($config);
	
		$data = array(
			'kd_gejala' => $this->model_master->getKodeGejala(),
			'nama_gejala' => $this->input->post('nama_gejala'),
			'bobot_pakar' => $this->input->post('bobot_pakar'),
		);
	
		// Upload gambar jika ada yang diunggah
		if ($this->upload->do_upload('gambar_gejala')) {
			$upload_data = $this->upload->data();
	
			// Ubah nama file menjadi kode gejala
			$old_file_path = $upload_data['full_path']; // Path file gambar lama
			$new_file_name = $data['kd_gejala'] . '.' . pathinfo($upload_data['file_name'], PATHINFO_EXTENSION); // Buat nama baru
			$new_file_path = $config['upload_path'] . $new_file_name; // Path file gambar baru
	
			rename($old_file_path, $new_file_path); // Ubah nama file
	
			$data['gambar'] = $new_file_name; // Simpan nama file gambar ke dalam array $data
		} else {
			$error = $this->upload->display_errors();
			// Tindakan yang sesuai jika terjadi kesalahan saat mengunggah gambar
			// Misalnya, tampilkan pesan kesalahan atau berikan nilai default untuk gambar
			$data['gambar'] =  $data['kd_gejala'] . '.jpg'; // Contoh memberikan nilai default
		}
	
		// Memasukkan data gejala ke dalam database menggunakan model_master
		$this->model_master->insertGejala($data);
		redirect("a_gejala");
	}
	
	
	//    ======================== DELETE =======================
    function hapusGejala(){
        $id = $this->uri->segment(3);
        $this->model_master->deleteGejala($id);
        redirect("a_gejala");
    }
}
?>