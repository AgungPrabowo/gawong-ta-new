<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Karyawan extends REST_Controller {
    function __construct($config='rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() {
        $id = $this->get('id');
        if($id == '') {
            $karyawan = $this->db->get('karyawan')->result();
        } else {
            $karyawan = $this->db->where('id', $id)
                               ->get('karyawan')
                               ->result();
        }
        $this->response($karyawan, 200);
    }

    function index_post() {
        $data = array(
                    'user_id'       => $this->post('user_id'),
                    'ktp'           => $this->post('ktp'),
                    'nama_depan'    => $this->post('nama_depan'),
                    'nama_belakang' => $this->post('nama_belakang'),
                    'posisi'        => $this->post('posisi'),
                    'phone'         => $this->post('phone'),
                    'jenis_kelamin' => $this->post('jenis_kelamin'),
                    'tgl_lahir'     => $this->post('tgl_lahir'),
                    'alamat'        => $this->post('alamat'));
        $insert = $this->db->insert('karyawan', $data);
        if($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'user_id'       => $this->put('user_id'),
                    'ktp'           => $this->put('ktp'),
                    'nama_depan'    => $this->put('nama_depan'),
                    'nama_belakang' => $this->put('nama_belakang'),
                    'posisi'        => $this->put('posisi'),
                    'phone'         => $this->put('phone'),
                    'jenis_kelamin' => $this->put('jenis_kelamin'),
                    'tgl_lahir'     => $this->put('tgl_lahir'),
                    'alamat'        => $this->put('alamat'));        $update = $this->db->where('id', $id)
                           ->update('karyawan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id');
        $delete = $this->db->where('id', $id)
                           ->delete('karyawan');
        if ($delete) {
            $this->response(array('status' => 'success', 201));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}

/* End of file Karyawan.php */
