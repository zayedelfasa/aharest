<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of kontakapi
 *
 * @author Lab
 */
require (APPPATH.'/libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;

class kontakapi extends REST_Controller{
    //put your code here
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }
    
    public function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('telepon')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('telepon')->result();
        }
        $this->response($kontak, 200);
    }
    
    public function index_post() {
        $data = array(
                    'id'=> $this->post('id'),
                    'nama'=> $this->post('nama'),
                    'nomor'=> $this->post('nomor'));
        
        $insert = $this->db->insert('telepon', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    public function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'=> $this->put('id'),
                    'nama'=> $this->put('nama'),
                    'nomor'=> $this->put('nomor'));
        $this->db->where('id', $id);
        $update = $this->db->update('telepon', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    public function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('telepon');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
