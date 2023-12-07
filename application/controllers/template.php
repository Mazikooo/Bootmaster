<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

    
   
    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){

    $data['template']=$this->Madmin->get_all_data('tb_template')->result();
     $this->load->view('home/layout/templateheader');
     $this->load->view('home/template',$data);
     $this->load->view('home/layout/footer');
        
}

}