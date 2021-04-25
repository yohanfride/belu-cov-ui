<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('qrcode_m');
		$this->load->model('gugustugas_m');
		$this->load->model('user_m');
		$this->load->model('qrcode_m');
		$this->load->model('gugustugas_m');
		$this->load->model('homeslide_m');
		$this->load->model('infografis_m');
		$this->load->model('faskes_m');
		$this->load->model('video_m');
		$this->load->model('daily_m');
		//if(!$this->session->userdata('covid-admin')) redirect(base_url() . "auth/login");
	}	

	function hari($i){
		$days = ['Minggu','Senin', 'Selasa','Rabu','Kamis','Jumat','Sabtu'];
		return $days[$i];
	}

	function bulan($i){
		$days = array("Januari","Februaru","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		return $days[$i-1];
	}

	public function index(){
		$data=array();
		///get dailes///
		$data['dailes'] = $this->daily_m->search(array('sort'=>'date_add'))->data;
		$data['current'] = $data['dailes'][count($data['dailes'])-1];
		$w = date("w", strtotime($data['current']->date_add)); // you must add 1 to for Sunday
		$dd = date("d", strtotime($data['current']->date_add));
		$mm = (int)date("m", strtotime($data['current']->date_add));
		$yy = date("Y", strtotime($data['current']->date_add));	
		$data['day'] = $this->hari($w);
		$data['tanggal'] = $dd.' '.$this->bulan($mm).' '.$yy;
		$data['jam'] = date("H:i", strtotime($data['current']->date_add))." WIB";
		//-----------///
		$data['homeslide'] = $this->homeslide_m->search(array('status'=>1))->data;
		$data['video'] = $this->video_m->search(array('status'=>1))->data;
		$data['infografis'] = $this->infografis_m->search(array('status'=>1))->data;
		// echo "<pre>";
		// print_r($data['current']);
		// echo "</pre>";
		// exit();
		$this->load->view('index_v', $data);
	}

	public function faskes(){
		$data = $this->faskes_m->get_all()->data;
		$res = array();
		foreach ($data as $key => $value) {
			$res[] = array(
				'nama' => $value->nama,
				'phone' => $value->phone,
				'alamat' => $value->alamat,
				'latitude' => $value->lokasi->coordinates[1],
				'longitude' => $value->lokasi->coordinates[0],
			);
		}
		header('Content-Type: application/json');
    	echo json_encode( $res );
	}

	public function getNasional (){
		$json_url = 'https://api.kawalcorona.com/indonesia/';
		$json = file_get_contents($json_url);
		$obj = json_decode($json);
		header('Content-Type: application/json');
		if($obj[0])
			echo json_encode( $obj[0] );
	}

	public function getJatim (){
		$json_url = 'https://api.kawalcorona.com/indonesia/provinsi/';
		$json = file_get_contents($json_url);
		$obj = json_decode($json);
		$red = array();
		foreach ($obj as $key => $value) {
			if($value->attributes->Provinsi == "Nusa Tenggara Timur"){
				$res = $value->attributes;
				break;
			}
		}
		header('Content-Type: application/json');
		echo json_encode( $res );
	}

}

/* End of file  */
/* Location: ./application/controllers/ */
