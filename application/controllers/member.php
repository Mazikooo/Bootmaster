<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index(){
        if(empty($this->session->userdata('userName'))){
            redirect('loginadmin');
        }
       $data['member'] = $this->Madmin->get_all_data('tb_member')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/member/menu_mem', $data);
        $this->load->view('admin/layout/footer');
    }

    public function add()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/member/formtambah_mem');
        $this->load->view('admin/layout/footer');
    }

    public function save()
    {
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
    
        $data = array(
            'id' => $id,
            'username' => $username,
            'email' => $email,
          
        );
    
        $this->Madmin->insert_member($data);
        if ($this->db->affected_rows()) {
            redirect('member');
        } else {
            redirect('member/add');
        }
    }

    
    public function aksi_edit()
{
    $id = $this->input->post('id');
        $username = $this->input->post('username');
        $email = $this->input->post('email');

    $data = array(
        'id' => $id,
        'username' => $username,
        'email' => $email,
    );

    $where = array(
        'id' => $id
    );

    $this->Madmin->update_data($where, $data, 'tb_member');
    redirect('member');
}


    public function delete($id){
        if(empty($this->session->userdata('userName'))){
            redirect('loginadmin');
        }
        $this->Madmin->delete('tb_member', 'id', $id);
        redirect('member');
    }

    public function get_by_id($id)
    {
        if(empty($this->session->userdata('userName')))
        {
            redirect('loginadmin');
        }

        $dataWhere = array('id' => $id);
        $data['member'] = $this->Madmin->get_by_id('tb_member', $dataWhere)->row_object();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/member/formedit_mem', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('loginadmin');
        }

        $data['member'] = $this->Madmin->get_by_id('tb_member', array('id' => $id))->row_object();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/admin/formedit_mem', $data);
        $this->load->view('admin/layout/footer');
    }

    
}
?>
