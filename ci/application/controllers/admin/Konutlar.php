<?php
class Konutlar extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database();
				//$this->load->library("session");
				$this->load->helper(array('form', 'url'));
				$this->load->helper('form');
				$this->load->model('Konutlar_Model');
        }
		public function index()
	{
		$query=$this->db->get("konutlar");
		$data["veri"]=$query->result();
		$data["title"]="Konut listeleme Sayfası";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/konutlar_liste',$data);
		$this->load->view('admin/footer');

	}		
	   public function ekle()
	{
		$data["title"]="Konut Ekleme Sayfası";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/konut_ekle');
		$this->load->view('admin/footer');
		
	}
	public function kaydet()
	{
		$data=array(
		'adi' => $this->input->post('adi'),
		'turu' => $this->input->post('turu'),
		'fiyat' => $this->input->post('fiyat'),
		'miktar' => $this->input->post('miktar'),
		'aciklama' => $this->input->post('aciklama')
		);
		$this->Konutlar_Model->insert_data("konutlar",$data);
		
		redirect(base_url()."admin/konutlar");
	}

  public function sil($id)
	{
		$this->db->query('DELETE FROM konutlar WHERE Id='.$id);
		redirect(base_url()."admin/konutlar");
	}
  public function duzenle($Id)
	{
		$query = $this->db->get_where("konutlar",array("id"=>$Id)); // Veritabanından ilgili kaydı sorgula getir
        $data["veri"] = $query->result(); //Sonuçları $data değişkenine ata
		$data["title"]="Konut Düzenleme Sayfası";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/konut_duzenle',$data);
		$this->load->view('admin/footer');
	}
	
  public function guncelle($id)
	{
		// Form verilerini alacaz
		$data=array(
		'adi' => $this->input->post('adi'),
		'turu' => $this->input->post('turu'),
		'fiyat' => $this->input->post('fiyat'),
		'miktar' => $this->input->post('miktar'),
		'aciklama' => $this->input->post('aciklama')
		);
		$this->Konutlar_Model->update_data("konutlar",$data,$id); // ekleme fonk. dataları gönder
		
		redirect(base_url()."admin/konutlar");
		
	}
  public function resimekle($id)
	{
		$data["title"]="Konut Düzenleme Sayfası";
		$data["id"]=$id;
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/konut_resim',$data);
		$this->load->view('admin/footer');
	}
	
    public function resim_upload($id)
	{
		// Resim uplad ayarları
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
        $config['max_width']            = 1280;
        $config['max_height']           = 768;
		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/konut_resim', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
											
						// UPLOAD EDİLEN RESMİ VERİTABANINA KAYDETME-------------->
						$upload_data = $this->upload->data(); 
						
						echo $file_name =   $upload_data['file_name']; // Yüklediği resmin adı
						//echo "<br> Boyutu :" .$upload_data['file_size'];				
						$data=array(
							'resim' => $file_name 
						);
						
					    $this->Konutlar_Model->update_data("konutlar",$data,$id); //  fonksiypnua dataları id ile  gönder
						
						// <------ VERİ TABANINA KAYDETME--------------
						//print_r($upload_data);
						redirect(base_url()."admin/konutlar");
						
						
                }						
		
	}
}

?>