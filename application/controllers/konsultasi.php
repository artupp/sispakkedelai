<?php
class Konsultasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_master');
	}

	//    ======================== INDEX =======================

	function index()
	{

		$data = array(
			'data_pengetahuan' => $this->model_master->getAllGejala(),
			'data_penyakit' => $this->model_master->getAllPenyakit(),
			'data_depot' => $this->model_master->getAllDepot()
		);
		$this->db->empty_table('tmp_relasi');
		$this->db->empty_table('tmp_hasil');
		$this->load->view('pages/v_konsultasi', $data);
	}

	function hasil()
	{
		$data = array(
			'data_hasil' => $this->model_master->getHasil(),
			'data_ps' => $this->model_master->getPS(),
			'data_pg' => $this->model_master->getPG(),
			'data_gj' => $this->model_master->getAllGejala()
		);
		$this->load->view('pages/v_hasil', $data);
	}

	function tambahrelasi()
	{
		$this->model_master->simpanRelasi();
		redirect('konsultasi/pertanyaan');
	}

	function tambahhasil()
	{
		$this->form_validation->set_rules('kd_penyakit[]', 'kd_penyakit', 'required|trim|xss_clean');
		$this->form_validation->set_rules('kd_gejala[]', 'kd_gejala', 'required|trim|xss_clean');
		// $this->form_validation->set_rules('poin_gejala[]', 'poin_gejala', 'required|trim|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			echo validation_errors(); // tampilkan apabila ada error
		} else {

			$nm = $this->input->post('kd_penyakit');
			$result = array();

			$poinGejala = array();
			foreach ($nm as $key => $val) {
				if ($_POST['poin_gejala'][$key] != '') {
					$poinGejala[] = "" . $_POST['poin_gejala'][$key] . "";
				}
			}
			// var_dump($poinGejala);die();
			$totalBobot = 0;
			$totalGejala = 0;
			foreach ( json_decode(json_encode($this->model_master->getAllGejala()), true) as $value) {
				$totalBobot+=$value['bobot_pakar'];
				$totalGejala++;
			}

			$groupKemungkinanPenyakit = $this->model_master->getGroupPengetahuan('"' . implode('","', $poinGejala) . '"');
			$listGejala = $this->model_master->getGejala('"' . implode('","', $poinGejala) . '"');
			$listIdKemungkinan = [];
			$gejala = $this->model_master->distinctGejala('"' . implode('","', $poinGejala) . '"');
			$bobot = [];
			for ($i = 0; $i < count($gejala); $i++) {
				$query = $this->model_master->getGejalaById($gejala[$i]);
				$query = json_decode(json_encode($query->result()), true);
				// var_dump ($query[0]['bobot_pakar']);
				array_push($bobot, $query[0]['bobot_pakar']);
				$kemungkinanPenyakit[] = $this->model_master->getKemungkinanPenyakit('"' . $gejala[$i] . '"');
				for ($j = 0; $j < count($kemungkinanPenyakit[$i]); $j++) {
					for ($k = 0; $k < count($groupKemungkinanPenyakit); $k++) {
						$namaPenyakit = $groupKemungkinanPenyakit[$k]['nama_penyakit'];
						if ($kemungkinanPenyakit[$i][$j]['nama_penyakit'] == $namaPenyakit) {
							// var_dump ($kemungkinanPenyakit[$i][$j]);

							$listIdKemungkinan[$namaPenyakit][] = $kemungkinanPenyakit[$i][$j]['kode_pengetahuan'];
						}
					}
				}
			}
			$hasil = 0; //P(E Hn) x P(Hn) 
			$hitungBayes = []; //(P|H1) 
			for ($i=0; $i < COUNT($bobot); $i++) { 
				// echo ceil(round($bobot[$i]/$totalBobot,2,PHP_ROUND_HALF_DOWN));
				$hitung1 = round((round($bobot[$i]/$totalBobot,2,PHP_ROUND_HALF_DOWN))*$bobot[$i],2,PHP_ROUND_HALF_DOWN);
				array_push($hitungBayes, round($bobot[$i]/$totalBobot,2,PHP_ROUND_HALF_DOWN));
				$hasil+=$hitung1;
			}

			$hasilPerhitungan = 0;
			for ($i=0; $i < COUNT($bobot); $i++) { 
				$hasilPerhitungan += $bobot[$i]*(($bobot[$i]*$hitungBayes[$i])/$hasil);
				$hasilPerhitungan = round($hasilPerhitungan, 2);
			}
			// var_dump(round($hasilPerhitungan,2));


			$daftarCf = [];
			for ($i = 0; $i < count($groupKemungkinanPenyakit); $i++) {
				$namaPenyakit = $groupKemungkinanPenyakit[$i]['nama_penyakit'];
				for ($j = 0; $j < count($listIdKemungkinan[$namaPenyakit]); $j++) {
					$daftarKemungkinanPenyakit = $this->model_master->getListPenyakit('"' . $listIdKemungkinan[$namaPenyakit][$j] . '"');

					for ($k = 0; $k < count($daftarKemungkinanPenyakit); $k++) {
						if (count($listIdKemungkinan) == 1) {
							$mb = $daftarKemungkinanPenyakit[$k]['mb'];
							$md = $daftarKemungkinanPenyakit[$k]['md'];
							$cf = $mb * $md;
							$daftarCf[$namaPenyakit][] = $cf;
						} else {
							if ($j == 0) {
								$mbLama = $daftarKemungkinanPenyakit[$k]['mb'];
								$mdLama = $daftarKemungkinanPenyakit[$k]['md'];

								$mb = $daftarKemungkinanPenyakit[$k]['mb'];
								$md = $daftarKemungkinanPenyakit[$k]['md'];
								$cf = $mb * $md;
								$daftarCf[$namaPenyakit][] = $cf;
							} else {
								$cf2  = $daftarKemungkinanPenyakit[$k]['mb'] * $daftarKemungkinanPenyakit[$k]['md'];
								$cfk1 = $cf + ($cf2 * (1 - $cf));
								$daftarCf[$namaPenyakit][] = $cfk1;
								$cf = $cfk1;
							}
						}
					}
				}
			}

			//var_dump($daftarCf);die();

			// Bayes



			$hasilCfTertinggi = $this->model_master->hasilCFTertinggi($daftarCf, $groupKemungkinanPenyakit);
			$hasilAkhir = $this->model_master->hasilAkhir($daftarCf, $groupKemungkinanPenyakit);
			$getUser = $this->model_master->getUser();

			$dataDiagnosa = array(
				'kd_penyakit' => $hasilAkhir['kd_penyakit'],
				'nilai_cf' => $hasilAkhir['nilai_cf'],
				'id_user' => $getUser[0]->id
			);
			$idDiagnosa = $this->model_master->insertDiagnosa($dataDiagnosa);
			foreach ($listGejala as $list) {
				$dataDiagnosaGejala = array(
					'id_diagnosa' => $idDiagnosa[0]->id,
					'kd_gejala' => $list['kd_gejala']
				);
				$this->model_master->insertDiagnosaGejala($dataDiagnosaGejala);
			}
			$dataPenyakit = $this->model_master->getAllPenyakit();




			$this->load->view('pages/v_hasil', ['hasilAkhir' => $hasilAkhir, 'listGejala' => $listGejala, 'dataPenyakit' => $dataPenyakit,"hasilPerhitungan"=>$hasilPerhitungan]);
			// $test= $this->db->insert_batch('tmp_hasil', $result); // fungsi  untuk menyimpan multi array ke database

			// if($test){
			//  	echo "data sukses di input";
			//  	redirect('konsultasi/hasil');    
			// }else{
			//  	echo "gagal di input";
			// }
		}
	}


	function pertanyaan()
	{

		$nama = $this->input->post('nama');
		$umur = $this->input->post('umur');
		$jenisKelamin = $this->input->post('jenis_kelamin');
		$noTelp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');

		$dataAdd = array(
			'nama' => $nama,
			'umur' => $umur,
			'jenis_kelamin' => $jenisKelamin,
			'no_telpon' => $noTelp,
			'alamat' => $alamat
		);

		if ($this->model_master->insertUser($dataAdd)) {

			$data = array(
				'record' => $this->model_master->getPenyakit(),
				'relasi' => $this->model_master->getRelasi()
			);
			// var_dump($data);
			// die;
			$this->load->view('pages/v_pertanyaan', $data);
		}
	}

	function dataKonsultasi()
	{
		$data = array('dataKonsultasi' => $this->model_master->getDiagnosa());
		$this->load->view('admin/v_header');
		$this->load->view('admin/option/v_data_konsultasi', $data);
		$this->load->view('admin/v_footer');
	}

	function show()
	{
		$idUser = $_GET['id_user'];
		$data = array('dataDiagnosa' => $this->model_master->getDiagnosaAll($idUser));
		$this->load->view('admin/v_header');
		$this->load->view('admin/option/v_show_data_konsultasi', $data);
		$this->load->view('admin/v_footer');
	}
}
