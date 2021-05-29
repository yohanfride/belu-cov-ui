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
		$data['dailes'] = $this->daily_m->search(array('limit'=>14,'sort'=>'date_add,DESC'))->data;
		// $data['current'] = $data['dailes'][count($data['dailes'])-1];
		$data['current'] = $data['dailes'][0];
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
		$query2 = array('status_pantau' => 1);
		$data['limit'] = 100;
		$data['total'] = $this->user_m->search_count($query2)->data;
		$data['total'] = ($data['total'])?$data['total']:0;

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

	public function get_data_user(){
		$data=array();
		$hal = $this->input->get('hal');
		if( $this->input->get('hal') == '' ) $hal = 1;
		$limit = 200;
		$query = array(
			'status_pantau' => 1,
			'limit' => $limit,
			'skip' => ($hal-1) * $limit
		);
		if($this->input->get('kec')){
			$query['kecamatan'] = $this->input->get('kec');
		}
		if($this->input->get('kel')){
			$query['kelurahan'] = $this->input->get('kel');
		}
		if($this->input->get('lvl')){
			$query['level'] = $this->input->get('lvl');
		}
		if($this->input->get('lvlstat')){
			$query['level_status'] = $this->input->get('lvlstat');
		}
		if($this->input->get('gejala')){
			$query['konfirmasi_gejala'] = $this->input->get('gejala');
		}

		$data['data'] = $this->user_m->search($query)->data;
		$res = array();
		foreach ($data['data'] as $key => $value) {
			if(!empty($value->lokasi)){
				$lvlstat = $value->level_status;
				if($value->level_status == "Dipantau")
					$lvlstat = "Dalam Pemantauan";
				if($value->level_status == "Dirawat")
					$lvlstat = "Dalam Perawatan";
				if($value->level_status == "Pengawasan")
					$lvlstat = "Dalam Pengawasan";
				if($value->level_status == "Selesai dipantau")
					$lvlstat = "Selesai Pemantauan";

				if($value->tgl_lahir)
					$umur = date_diff(date_create(date( "Y-m-d", strtotime( $value->tgl_lahir))), date_create('today'))->y;
				else 
					$umur = $value->umur;

				$res[] = array(
					'nama' => $value->nama,
					'umur' => $umur,
					'phone' => $value->phone,
					'alamat' => $value->alamat,
					'level' => $value->level,
					'levelstat' => $lvlstat,
					'konfirmasi_gejala' =>  $value->konfirmasi_gejala,
					'jenis_kelamin' => $value->jenis_kelamin,
					'kelurahan' => $value->kelurahan,
					'kecamatan' => $value->kecamatan,
					'last_update' => date( "Y-m-d H:i:s", strtotime( $value->date_updated)) ,
					'latitude' => $value->lokasi->coordinates[1],
					'longitude' => $value->lokasi->coordinates[0],
				);
			}
		}
		header('Content-Type: application/json');
    	echo json_encode( $res );
	}

	public function get_grafik(){
		$data=array();
		$query = array('sort'=>'date_add,DESC');
		if($this->input->post('start')){
			$query['str_date'] = $this->input->post('start');
			$query['end_date'] = $this->input->post('end');
		} else if($this->input->post('month')){
			$month = $this->input->post('month');
			$year = $this->input->post('year');
			$query['str_date'] = "$year-$month-1";
			$query['end_date'] = date("Y-m-t", strtotime($query['str_date']));
		}
		///get dailes///
		$dailes = $this->daily_m->search($query)->data;

		$hari = array(); 
        $summary_kontak_erat = array(); $summary_probable = array(); $summary_suspek = array(); $summary_konfirmasi = array();
        $kontak_erat_dipantau = array(); $kontak_erat_selesai_dipantau = array();
        $probable_dipantau = array(); $probable_selesai_dipantau = array(); $probable_meninggal = array();
        $suspek_isolasi = array(); $suspek_sembuh = array(); $suspek_meninggal = array();
        $konfirmasi_isolasi = array(); $konfirmasi_sembuh = array(); $konfirmasi_pengawasan = array();  $konfirmasi_meninggal = array();
        $i = 0;
        for($n=count($dailes) - 1;$n>=0; $n--){
          $dl = $dailes[$n];
          $hari[] = $dl->date_only;
          $summary_kontak_erat[] = $dl->kontak_erat->total;
          $summary_probable[] = $dl->probable->total;
          $summary_suspek[] = $dl->suspek->total;
          $summary_pelaku_perjalanan[] = $dl->pelaku_perjalanan->total;
          $summary_konfirmasi[] = $dl->terkonfirmasi->total;
          $kontak_erat_dipantau[] = $dl->kontak_erat->isolasi;
          $kontak_erat_selesai_dipantau[] = $dl->kontak_erat->{"selesai-isolasi"};
          $probable_dipantau[] = $dl->probable->isolasi;
          $probable_selesai_dipantau[] = $dl->probable->{"selesai-isolasi"};
          $probable_meninggal[] = $dl->probable->meninggal;
          $suspek_isolasi[] = $dl->suspek->isolasi;
          $suspek_selesai_isolasi[] = $dl->suspek->{"selesai-isolasi"};
          $suspek_meninggal[] = $dl->suspek->meninggal;
          $konfirmasi_isolasi[] = $dl->terkonfirmasi->dirawat;
          $konfirmasi_sembuh[] = $dl->terkonfirmasi->sembuh;
          $konfirmasi_meninggal[] = $dl->terkonfirmasi->meninggal;
          $konfirmasi_pengawasan[] = $dl->terkonfirmasi->pengawasan;
          $pelaku_perjalanan_isolasi[] = $dl->pelaku_perjalanan->isolasi;
          $pelaku_perjalanan_selesai_isolasi[] = $dl->pelaku_perjalanan->{"selesai-isolasi"};
        }
        $data = array(
          'hari' => $hari,
          'summary_kontak_erat' => $summary_kontak_erat,
          'summary_probable' => $summary_probable,
          'summary_suspek' => $summary_suspek,
          'summary_pelaku_perjalanan' => $summary_pelaku_perjalanan,
          'summary_konfirmasi' => $summary_konfirmasi,
          'kontak_erat_dipantau' => $kontak_erat_dipantau,
          'kontak_erat_selesai_dipantau' => $kontak_erat_selesai_dipantau,
          'probable_dipantau' => $probable_dipantau,
          'probable_selesai_dipantau' => $probable_selesai_dipantau,
          'probable_meninggal' => $probable_meninggal,
          'suspek_isolasi' => $suspek_isolasi,
          'suspek_selesai_isolasi' => $suspek_selesai_isolasi,
          'suspek_meninggal' => $suspek_meninggal,
          'konfirmasi_isolasi' => $konfirmasi_isolasi,
          'konfirmasi_sembuh' => $konfirmasi_sembuh,
          'konfirmasi_meninggal' => $konfirmasi_meninggal,
          'konfirmasi_pengawasan' => $konfirmasi_pengawasan,
          'pelaku_perjalanan_isolasi' => $pelaku_perjalanan_isolasi,
          'pelaku_perjalanan_selesai_isolasi' => $pelaku_perjalanan_selesai_isolasi
        );
		header('Content-Type: application/json');
    	echo json_encode( $data );	
	}

	public function cek(){
		$this->load->view('cek', $data);
	}
}

/* End of file  */
/* Location: ./application/controllers/ */
