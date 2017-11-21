<?php
class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database();
				$this->load->library("session");
				$this->load->helper(array('form','url'));
				$this->load->model('Admin_Model');
        }
		
        public function index()
	   {
		$this->load->view('admin/login_form');

	   }		
	   
	   public function login_ol()
	   {
		$kullanici=$this->input->post('kullanici');
		$sifre=$this->input->post('sifre');

		$result = $this->Admin_Model->login($kullanici,$sifre);
		if($result) {
				// Kullanıcı var ise bilgileri diziye aktarılıyor
				$sess_array = array();
				foreach($result as $row) {
                 $sess_array = array(
				 'id' => $row->Id,
				 'kullanici' => $row->kullanici,
				 'sifre' => $row->sifre,
				 'yetki' => $row->yetki
				 );
                 // Dizi verileri Codeigniter Session kütüphanesi değişkenlerine aktarılıoyor
                 $this->session->set_userdata('logged_in', $sess_array);
				 
				 redirect(base_url()."admin/home");
			
				 
                 }
          		return TRUE;
          } 
		  else 
		  {
            $this->session->set_flashdata("login_hata","Geçersiz Kullanıcı Adı yada Şifre");   
          		
			$this->load->view('admin/login_form');
			
            return FALSE;
          }
	   }		
	   
	   public function logout()
	{
		 $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect(base_url()."admin/login");
	}
}
?>