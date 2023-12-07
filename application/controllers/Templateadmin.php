<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Templateadmin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index()
    {
        $data['title'] = 'Template';
        $data['template'] = $this->Madmin->get_all_data('tb_template')->result();

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/template/menu_tem', $data);
        $this->load->view('admin/layout/footer');
    }

    public function add()
    {
        $data['title'] = 'Tambah Template';

        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/template/formtambah_tem', $data);
        $this->load->view('admin/layout/footer');
    }




    
    public function aksi_simpan()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $tipe = $this->input->post('tipe');
        $deskripsi = $this->input->post('deskripsi');
        $link = $this->input->post('link');
    
        $gambar = $_FILES['gambar']['name']; // Menggunakan ['name'] untuk mendapatkan nama file gambar
    
        if ($gambar != '') {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png';
    
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal diupload!";
            } else {
                $logo = $this->upload->data('file_name');
            }
        }
    
        $data = array(
            'id' => $id,
            'nama' => $nama,
            'tipe' => $tipe,
            'deskripsi' => $deskripsi,
            'link' => $link,
            'gambar' => $gambar
        );
    
        $this->Madmin->insert_template($data);
        if ($this->db->affected_rows()) {
            redirect('templateadmin');
        } else {
            redirect('templateadmin/add');
        }
    }
    

    public function simpan()
    {
     // $id = $this->session->userdata('id');
      $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $tipe = $this->input->post('tipe');
        $deskripsi = $this->input->post('deskripsi');
        $link = $this->input->post('link');

        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $data_file = $this->upload->data();

            $data_insert = array(
            'id' => $id,
                'nama' => $nama,
                'tipe' => $tipe,
                'deskripsi' => $deskripsi,
                'link' => $link,
                'gambar' => $data_file['file_name']
                
            );

            $this->load->model('Madmin'); // Load model Madmin
            $this->Madmin->insert_template($data_insert); // Panggil metode insert pada model Madmin
            if($this->db->affected_rows()){
                redirect('templateadmin');
            }else{
                redirect('templateadmin/add');
            }
            /*redirect('templateadmin');
        } else {
            $error = $this->upload->display_errors();
            // Handle error here
            redirect('templateadmin/add');
        }*/
    }
}

    /*public function save()
    {
        $id = $this->session->userdata('id');
        $nama= $this->input->post('nama');
        $tipe= $this->input->post('tipe');
        $deskripsi = $this->input->post('deskripsi');

        $config['upload_path'] = './asset/gambar.tem/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $data_file = $this->upload->data();

            $data_insert = array(
                'id' => $id,
                'nama' => $nama,
                'tipe' => $tipe,
                'gambar' => $data_file['file_name'],
                'deskripsi' => $deskripsi,
               // 'statusAktif' => 'Y'
            );

            $this->Madmin->insert('tb_template', $data_insert);
            redirect('templateadmin');
        } else {
            $error = $this->upload->display_errors();
            // Handle error here
            redirect('templateadmin/add');
        }
    }*/

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('main');
    }

    public function get_id($id)
    {
        $datawhere = array('id' => $id);
        $data['template'] = $this->Madmin->get_by_id('tb_template', $datawhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/template/formedit_tem', $data);
        $this->load->view('admin/layout/footer');
    }

    
    public function aksi_edit()
{
    $id = $this->input->post('id');
    $nama = $this->input->post('nama');
    $tipe = $this->input->post('tipe');
    $deskripsi = $this->input->post('deskripsi');
    $link = $this->input->post('link');

    $gambar = $_FILES['gambar']['name']; // Menggunakan ['name'] untuk mendapatkan nama file gambar

    if ($gambar != '') {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            echo "Gambar gagal diupload!";
        } else {
            $gambar = $this->upload->data('file_name');
        }
    }

    $data = array(
        'id' => $id,
        'nama' => $nama,
        'tipe' => $tipe,
        'deskripsi' => $deskripsi,
        'link' => $link,
        'gambar' => $gambar
    );

    $where = array(
        'id' => $id
    );

    $this->Madmin->update_data($where, $data, 'tb_template');
    redirect('templateadmin');
}




    /*public function aksi_edit()
    {
        $id = $this->session->userdata('idKonsumen');
        $idToko = $this->input->post('idToko');
        $namaToko = $this->input->post('namatoko');
        $deskripsi = $this->input->post('deskripsi');
        $config['upload_path'] = './asset/logo_toko/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('logo')) {
            $data_file = $this->upload->data();
            $data_insert = array(
                'idKonsumen' => $id,
                'namatoko' => $namaToko,
                'logo' => $data_file['file_name'],
                'deskripsi' => $deskripsi,
                'statusAktif' => 'Y'
            );
            $where = array(
                'idToko' => $idToko
            );
            $this->Madmin->update_data($where, $dataUpdate, 'tbl_toko');
            redirect('toko');
        } else {
            redirect('toko');
        }
    }*/

    



    public function hapus($id)
    {
        $this->Madmin->delete('tb_template', 'id', $id);
        redirect('Templateadmin');
    }
}
