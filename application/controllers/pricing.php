<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
    }

    public function index(){
     $this->load->view('home/layout/pricingheader');
     $this->load->view('home/pricing');
     $this->load->view('home/layout/footer');
        
}

}