
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {


	public function index(){
	    $data['debitur'] = $this->tester_model->view_row();
	    $this->load->view('preview', $data);
  }

  
  public function cetak(){
    ob_start();
    $data['debitur'] = $this->tester_model->view_row();
    $this->load->view('print', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
    require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Siswa.pdf', 'D');
  }

	// public function index()
	// {
		
	// 	$holaa = $this->tester_model->fetch_data_debitur();
	// 	$jumlahangsuran = 1;
	// 	foreach ($holaa->result() as $key ) {
			
			
	// 		if ($key->id_pembayaran !=4) {
	// 			$jumlahangsuran = 1+$jumlahangsuran;
	// 		}else{
	// 			break;
	// 		}
	// 	}

	// 	echo $jumlahangsuran;
	
		
	// }

	// public function jumlahpesan()
	// {
	// 	$data['jumlahpesan'] = $this->tester_model->jumlahpesan();

	// 	$this->load->view('test',$data);
	// }

	// public function waktu()
	// {
	// 	date_default_timezone_set("Asia/Jakarta");
	// 	$time = date("G:i:s");
	// 	echo $time."<br>";
	// 	// echo $coba = strtotime($time)+(3600*6);
	// 	// echo "<br>";
	// 	// echo date("h:i:s",$coba);

	// 	echo date('Y-m-d');
	// 	echo "<br>";
 //        echo date('Y-m-d',strtotime($this->input->post('tanggal_selesai_bayar')));	
	// }

	/*public function test($id_debitur)
	{
		$ar=array();
		$ar=$this->admin_model->fetch_detail_debitur($id_debitur);
		echo json_encode($ar);	
	}*/

}

/* End of file Tester.php */
/* Location: ./application/controllers/Tester.php */
