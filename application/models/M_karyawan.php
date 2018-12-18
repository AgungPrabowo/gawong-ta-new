<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {

    function insert($data)
    {
        $this->db->insert('karyawan', $data);
    }
}

/* End of file M_karyawan.php */
