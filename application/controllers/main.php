<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }

    public function index(){
        $this->load->view('home/layout/header');
        $this->load->view('home/home');
        $this->load->view('home/layout/footer');
 
}

public function register(){
   
    $this->load->view('home/registermember');
    
    
    }


    public function save(){
        $this->load->model('Madmin');
        if(isset($_POST['btnsubmit'])){
            $pesanerror = ['required' => '<span style=" color : red">%s wajib diisi </span>'];

            $this->form_validation->set_rules('email',
            $this->model->labels['email'],
            'requred',$pesanerror
        );
        }
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
      

        $datainput=array(
            'username' => $username,
            'password' => $password,
            'email' => $email,
           
        );
        $this->Madmin->insert('tb_member',$datainput);
        $this->session->set_flashdata('not', '<div class="alert alert-success" role="alert">
         Berhasil Registrasi.Silahkan Login Didasboard Member.
      </div>');
        redirect('main/login');
    }


    public function login(){
        $this->load->view('home/loginmember');
        
    }

    public function login_member()
{
    $this->load->model('Madmin');
    $u = $this->input->post('username');
    $p = $this->input->post('password');

    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'required', array(
        'required' => 'The Email/Username field is required.'
    ));
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() === FALSE) {
        // Validasi gagal, kembali ke halaman login dengan pesan error
        $this->load->view('home/loginmember');
    } else {
        $cek = $this->Madmin->cek_loginmember($u, $p);

        if ($cek->num_rows() == 1) {
            $data_user = $cek->row_array(); // Ambil data user dari hasil query
            $data_session = array(
                'id' => $data_user['id'], // Set data "id" dari hasil query ke dalam sesi
                'member' => $u,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('main');
        } else {
            // Validasi sukses, tetapi login gagal, tampilkan pesan error
            $data['error'] = 'Invalid username or password.';
            $this->load->view('home/loginmember', $data);
        }
    }
}




    
/*
    public function login_member(){
        $u = $this->input->post('usernama');
        $p = $this->input->post('password');

        $this->load->library('form_validation');
    $this->form_validation->set_rules('usernama', 'Usernama', 'required', array(
        'required' => 'The Email/Username field is required.'
    ));
    $this->form_validation->set_rules('password', 'Password', 'required');

        $cek = $this->Madmin->cek_login_member($u,$p,)->num_rows();
        $result = $this->Madmin->cek_login_member($u,$p)->row_object();

        if($cek == 1){
            $data_session = array(
                'idkonsumen' => $result->idkonsumen,
                'member' => $u,
                'status'=> 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('main/dasboard_member');
        }else{
            $this->session->set_flashdata('not', '<div class="alert alert-danger" role="alert">
            Maaf !! username atau password salah !! 
            ( status akun anda tidak aktif!! )
         </div>');
            redirect('main/login');
            
        }
    }*/


    public function dasboard_member(){
        $this->load->view('home2/layout/header');
        $this->load->view('home/dasboard_member');
        $this->load->view('home2/layout/footer');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('main');
    }

}