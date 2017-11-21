<?php
class Home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database();
				$this->load->helper(array('form','url'));
				$this->load->library("session");
				$this->load->model('Admin_Model');
        }
		
        public function index()
	   {
		$data["title"]="Anasayfa";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/content');
		$this->load->view('admin/footer');

	   }		
	   public function hakkimizda()
	   {
		$query=$this->db->get("ayarlar"); // urunler tablasonu veritananından çek
        $data["veri"]=$query->result(); // Sorgu verilerini "veri" değişkenine yükle
		$data["title"]="Hakkımızda";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/hakkimizda_ekle',$data);
		$this->load->view('admin/footer');
	   }
	

	public function hakkimizda_guncelle($id)
	   {
		// Form verilerini alacaz
		$data=array(
			'hakkimizda' => $this->input->post('aciklama')
		);
		$this->Admin_Model->update_data("ayarlar",$data,$id); // ekleme fonk. dataları gönder
		
		redirect(base_url()."admin/home");
	   }
	   
	
	   public function mesajlar()
	{
		$query=$this->db->get("mesajlar"); // 
        $data["veri"]=$query->result(); // Sorgu verilerini "veri" değişkenine yükle
		
		$data["title"]="Müşteri Mesajları";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mesajlar_liste',$data);
		$this->load->view('admin/footer');
	}
	public function mesajoku($id)
	{
		$query = $this->db->get_where("mesajlar",array("id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
        $data['veri'] = $query->result(); 							//Sonuçları $data değişkenine atadık
		$data["title"]="Ayrintili Mesaj Sayfasi";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mesaj_okuma_formu',$data);
		$this->load->view('admin/footer');
	}
	
	  public function mesaj_sil($id)
	{
		$this->db->query('DELETE FROM mesajlar WHERE id='.$id);
		redirect(base_url()."admin/home/mesajlar");
	}
}
?>