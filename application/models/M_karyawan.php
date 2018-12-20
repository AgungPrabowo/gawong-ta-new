<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {

    function insert($data)
    {
        $this->db->insert('karyawan', $data);
    }

    function edit($id,$data)
    {
        $this->db->where('id', $id)
                 ->update('karyawan', $data);
    }

    function delete($id)
    {
        $this->db->where('id', $id)
                 ->delete('karyawan');
    }
}

/* End of file M_karyawan.php */
