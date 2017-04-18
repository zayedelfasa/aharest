<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of api
 *
 * @author Lab
 */

require (APPPATH.'/libraries/REST_Controller.php');
use Restserver\Libraries\REST_Controller;

class api extends REST_Controller {
    //put your code here
    public function index_get() {
        $data = array('returned: '. $this->get('id'));
        $this->response($data);
    }   
}
