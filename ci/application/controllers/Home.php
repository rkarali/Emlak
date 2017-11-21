<?php
class Home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database();
				$this->load->helper(array('form','url'));
				$this->load->library("session");
				$this->load->model('Home_Model');
        }
		
        public function index()
	   {
		$data["title"]="Aksekili Emlak";
        $query=$this->db->get("konutlar");
        $data["veri"]=$query->result(); 
		
		$query=$this->db->get("ayarlar"); 
        $veriler=$query->result(); 
		$data["veri2"]=$query->result();
		foreach($veriler as $rs)
		{
		$data["title"]=$rs->title;
		$data["description"]=$rs->description;
		$data["keywords"]=$rs->keywords;
		}
		
		$this->load->view('_header',$data);
		$this->load->view('_slider',$data);
		$this->load->view('_content');
		$this->load->view('_footer',$data);
	   }
	   
	   public function konutdetay($id)
	{
		$query = $this->db->get_where("konutlar",array("id"=>$id)); 
        $data['veri'] = $query->result(); 
		$veriler=$query->result();
		$query=$this->db->get("ayarlar");
        
		$data["veri2"]=$query->result();

		
		
		
		
		$this->load->view('_header',$data);
		//$this->load->view('_slider');
		$this->load->view('urun_dahafazla',$data);
		$this->load->view('_footer',$data);
		
	}
	
	   public function hakkimizda()
	{
		$query=$this->db->get("ayarlar"); 
        $veriler=$query->result(); 
		$data["veri2"]=$query->result(); 
		foreach($veriler as $rs)
		{
		$data["title"]="Hakkımızda ".$rs->title;
		$data["description"]=$rs->description;
		$data["keywords"]=$rs->keywords;
		$data["hakkimizda"]=$rs->hakkimizda;
		}
	
		
		$this->load->view('_header',$data);
		$this->load->view('hakkimizda',$data);
		$this->load->view('_footer',$data);
		
	}
	
	public function bize_yazin()
	{
		$query=$this->db->get("ayarlar");
        $veriler=$query->result(); 
		$data["veri2"]=$query->result();
		foreach($veriler as $rs)
		{
		$data["title"]="Bize Ulaşın ".$rs->title;
		$data["description"]=$rs->description;
		$data["keywords"]=$rs->keywords;
		}
		
		$this->load->view('_header',$data);
		$this->load->view('bize_yazin_formu',$data);
		$this->load->view('_footer',$data);
		
		
	}
	
	
	public function bizeyazin_ekle()
	{
		$data=array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'mesaj' => $this->input->post('mesaj')
		
		);
		
		$this->Home_Model->insert_data("mesajlar",$data); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("mesaj_sent","Mesajınınz Başarılı bir şekilde alındı."); 
		redirect(base_url()."home/bize_yazin");
	}
	public function galeri()
	{
		$query=$this->db->get("konutlar");
        $veriler=$query->result();
		$data["veri"]=$query->result();
		$query=$this->db->get("ayarlar");
		$data["veri2"]=$query->result();
		
		$this->load->view('_header',$data);
		$this->load->view('galeri',$data);
		$this->load->view('_footer',$data);
		
		
	}
	
}
?>