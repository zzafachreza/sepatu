<?php
defined('BASEPATH') OR exit('No direct script access allowed');






class Register extends CI_Controller {


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
        
        $this->load->view('header',$data);
        
    $this->load->view('register');
        
        
        $this->load->view('footer');
    }


      public function insert()
    {   

       
        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $telepon = $_POST['telepon'];
        $level = 'MEMBER';

        $sqlCek = "SELECT email FROM master_user WHERE email='$email'";
        $hasil = $this->db->query($sqlCek);
       if ($hasil->num_rows() > 0) {


           # code...
        echo $msg = "Maaf Alamat email sudah tedaftar !";
        redirect('register?err='.$msg);
       }
       else{

        $sql = "INSERT INTO master_user(nama_lengkap,email,password,telepon,level) VALUES('$nama_lengkap','$email','$password','$telepon','$level')";
        $this->db->query($sql);


       echo $msg = "Terima kasih, silahkan login !";
        redirect('register?msg='.$msg);
       }



       


               
        //        if ($this->db->query($sql)) {
        //            # code...
        //         echo "berhasil";
        //        }else{
        //         echo "gagal";
        //        }
           

    }

}
