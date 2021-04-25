<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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

    		$data['TITLE'] = "Zavalabs - About";
    	$data['DESCRIPTION'] = "Web and Mobile Development, We Don't Just Develop Apps, We Build Dream";
    	
    	$data['bawah'] = "none";


		$this->load->view('header',$data);
		$this->load->view('slider_contact');
		$this->load->view('bisnis2');
		// $this->load->view('contact');
		$this->load->view('footer');
	}
	

}
