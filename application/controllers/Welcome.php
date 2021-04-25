<?php
defined('BASEPATH') OR exit('No direct script access allowed');






class Welcome extends CI_Controller {


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
		$this->load->view('slider');
        $this->load->view('home');
		
		$this->load->view('footer');
	}

}
