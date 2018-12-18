<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Barang extends REST_Controller {

    function __construct($config='rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() {
        $id = $this->get('id');
        if($id == '') {
            $barang = $this->db->get('barang')->result();
        } else {
            $barang = $this->db->where('id', $id)
                               ->get('barang')
                               ->result();
        }
        $this->response($barang, 200);
    }

    function index_post() {
        $data = array(
                    'nama'    => $this->post('nama'),
                    'jenis'   => $this->post('jenis'),
                    'stok'    => $this->post('stok'),
                    'harga'   => $this->post('harga'));
        $insert = $this->db->insert('barang', $data);
        if($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
        $id = $this->put('id');
        $data = array(
            'nama'      => $this->put('nama'),
            'jenis'     => $this->put('jenis'),
            'stok'      => $this->put('stok'),
            'harga'     => $this->put('harga'));
        $update = $this->db->where('id', $id)
                           ->update('barang', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id');
        $delete = $this->db->where('id', $id)
                           ->delete('barang');
        if ($delete) {
            $this->response(array('status' => 'success', 201));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}

/* End of file Barang.php */
