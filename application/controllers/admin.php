<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        if(empty($this->session->userdata('userName'))){
            redirect('loginadmin');
        }
       $data['admin'] = $this->Madmin->get_all_data('tb_admin')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/admin/menu_adm', $data);
        $this->load->view('admin/layout/footer');
    }

    public function add()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('loginadmin');
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/admin/formtambah_adm');
        $this->load->view('admin/layout/footer');
    }

    public function save()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('loginadmin');
        }

        $this->load->library('form_validation');

        // Set rules untuk validasi input field
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, tampilkan kembali formAdd dengan pesan error
            $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/admin/formtambah_adm');
        $this->load->view('admin/layout/footer');
        } else {
            // Validasi berhasil, cek apakah username sudah ada
            $username = $this->input->post('username');
            $cek_username = $this->Madmin->cek_username('tb_admin', $username);

            if ($cek_username) {
                // Jika username sudah ada, tampilkan pesan error
                $data['error'] = 'Username sudah ada';
                $this->load->view('admin/layout/header');
                $this->load->view('admin/layout/sidebar');
                $this->load->view('admin/admin/formtambah_adm', $data);
                
                $this->load->view('admin/layout/footer');
            } else {
                // Jika username belum ada, simpan data admin
                $dataInput = array(
                    'username' => $username,
                    'password' => $this->input->post('password')
                );
                $this->Madmin->insert('tb_admin', $dataInput);
                redirect('admin');
            }
        }
    }

    public function delete($id){
        if(empty($this->session->userdata('userName'))){
            redirect('loginadmin');
        }
        $this->Madmin->delete('tb_admin', 'id', $id);
        redirect('admin');
    }

    public function get_by_id($id)
    {
        if(empty($this->session->userdata('userName')))
        {
            redirect('loginadmin');
        }

        $dataWhere = array('id' => $id);
        $data['admin'] = $this->Madmin->get_by_id('tb_admin', $dataWhere)->row_object();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/admin/formedit_adm', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }

        $data['admin'] = $this->Madmin->get_by_id('tb_admin', array('id' => $id))->row_object();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/admin/formedit_adm', $data);
        $this->load->view('admin/layout/footer');
    }

    public function update_password()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }

        $this->load->library('form_validation');

        // Atur aturan validasi untuk field passwordBaru
        $this->form_validation->set_rules('passwordBaru', 'Password Baru', 'required', array(
            'required' => 'Password Baru Harus Diisi'
        ));

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, tampilkan kembali formEdit dengan pesan error
            $id = $this->input->post('id');
            $data['admin'] = $this->Madmin->get_by_id('tb_admin', array('id' => $id))->row_object();

            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/sidebar');
            $this->load->view('admin/admin/formedit_adm', $data);
            $this->load->view('admin/layout/footer');
        } else {
            // Validasi berhasil, update password admin
            $id = $this->input->post('id');
            $passwordBaru = $this->input->post('passwordBaru');

            $dataUpdate = array('password' => $passwordBaru);
            $this->Madmin->update('tb_admin', $dataUpdate, 'id', $id);

            redirect('admin');
        }
    }
}
?>
