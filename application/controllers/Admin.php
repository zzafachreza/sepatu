<?php
defined('BASEPATH') OR exit('No direct script access allowed');






class Admin extends CI_Controller {


	public function index()
	{	



		error_reporting(0);
    $useragent = $_SERVER['HTTP_USER_AGENT']; 
    $iPod = stripos($useragent, "iPod"); 
    $iPad = stripos($useragent, "iPad"); 
    $iPhone = stripos($useragent, "iPhone");
    $Android = stripos($useragent, "Android"); 
    $iOS = stripos($useragent, "iOS");
    //-- You can add billion devices 
    $DEVICE = ($iPod||$iPad||$iPhone||$Android||$iOS||$webOS||$Blackberry||$IEMobile||$OperaMini);

    	$data['DEVICE'] = $DEVICE;
    	$data['TITLE'] = "Shoes - Reparasi Sepatu";
    	$data['DESCRIPTION'] = "Reparasi Sepatu Terbaik";
    	
		$this->load->view('admin_header',$data);

		if (!empty($_SESSION['email'])) {
			# code...
			$this->load->view('admin_nav');
			$this->load->view('admin_home');
		}else{

			$this->load->view('admin_login');

		}
		
    	
		
		$this->load->view('admin_footer');
	}


    public function profile()
    {   



        error_reporting(0);
    $useragent = $_SERVER['HTTP_USER_AGENT']; 
    $iPod = stripos($useragent, "iPod"); 
    $iPad = stripos($useragent, "iPad"); 
    $iPhone = stripos($useragent, "iPhone");
    $Android = stripos($useragent, "Android"); 
    $iOS = stripos($useragent, "iOS");
    //-- You can add billion devices 
    $DEVICE = ($iPod||$iPad||$iPhone||$Android||$iOS||$webOS||$Blackberry||$IEMobile||$OperaMini);

        $data['DEVICE'] = $DEVICE;
        $data['TITLE'] = "Shoes - Reparasi Sepatu";
        $data['DESCRIPTION'] = "Reparasi Sepatu Terbaik";
        
        $this->load->view('admin_header',$data);

        if (!empty($_SESSION['email'])) {
            # code...
            $this->load->view('admin_nav');
            $this->load->view('admin_profile');
        }else{

            $this->load->view('admin_login');

        }
        
        
        
        $this->load->view('admin_footer');
    }


	function validasi(){
        
        // print_r($_POST);

       $email = $_POST['email'];
        $password = sha1($_POST['password']);

echo   $sql = "SELECT * FROM master_user WHERE email='$email' AND password='$password'";
        $hasil = $this->db->query($sql);

        print_r($hasil);

        if ($hasil->num_rows()>0) {
            # code...
             $i = $hasil->row_array();




             $_SESSION['id'] = $i['id'];
             $_SESSION['nama_lengkap'] = $i['nama_lengkap'];
             $_SESSION['email'] = $i['email'];
             $_SESSION['telepon'] = $i['alamat'];
             $_SESSION['level'] = $i['level'];
             
                      
            redirect('admin');
        }
        else{

            echo $msg = "Maaf email atau password salah !";
            redirect('admin?err='.$msg);
        }
       





    }

    function logout(){

        unset($_SESSION['username']);
        unset($_SESSION['level']);
        session_destroy(); 

         redirect('./');


    }

}
