<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

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
    	$data['TITLE'] = "Zavalabs - Web Aplication Development Services";
    	$data['DESCRIPTION'] = "Web and Mobile Development, We Don't Just Develop Apps, We Build Dream";
    
		$this->load->view('header',$data);
		$this->load->view('slider_web');
		$this->load->view('web');
		$this->load->view('why');
		$this->load->view('tahapan');
		$this->load->view('service');
		$this->load->view('portofolio_web');
			$this->load->view('partner');
		$this->load->view('footer');
	}

}
