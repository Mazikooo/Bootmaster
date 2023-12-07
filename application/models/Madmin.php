<?php

class Madmin extends CI_Model{
	
	public function cek_login($u, $p){
		
		$q = $this->db->get_where('tb_admin', array('userName'=>$u, 'password'=>$p));
		return $q;
	}

    /*public function cek_login($u, $p){
        $q = $this->db->get_where('tb_admin', array('userName'=>$u));
        $user = $q->row_array();

        if ($user && password_verify($p, $user['password'])) {
            return $q;
        } else {
            return false;
        }
    }*/


	public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}

    public function get_member_data($id)
{
    $this->db->where('id', $id);
    $query = $this->db->get('tb_member');

    if ($query->num_rows() > 0) {
        return $query->row_array();
    } else {
        return false;
    }
}



  /*  public function insert($tabel, $data){
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }
        $this->db->insert($tabel, $data);
    }*/

	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}


    public function get_user_by_username($username)
{
    return $this->db->get_where('tb_admin', ['userName' => $username])->row();
}


	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}

	public function update($table, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($table, $data);
	}

	public function delete($tabel, $id, $val){
		$this->db->delete($tabel, array($id => $val)); 
	}

    public function cek_username($table, $username)
{
    $this->db->where('username', $username);
    $query = $this->db->get($table);
    return $query->num_rows() > 0;
}



	public function cek_loginmember($u,$p){
        $q = $this->db->get_where('tb_member',array('username'=>$u,'password'=>$p));
        return $q;
    }

	


    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function insert_template($data){
        
        $this->db->insert('tb_template', $data);
    }

    public function insert_member($data){
        
        $this->db->insert('tb_member', $data);
    }

}
