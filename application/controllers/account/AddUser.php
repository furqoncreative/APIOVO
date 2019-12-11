<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class AddUser extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model("account_model");
    }

    function index_get() {
        $this->response(404);
    }    

    function index_post(){

        $data = array(
                    'ACCOUNT_ID'   => $this->post('ACCOUNT_ID'),
                    'NAMA_LENGKAP' => $this->post('NAMA_LENGKAP'),
                    'UMUR'         => $this->post('UMUR'),
                    'EMAIL'        => $this->post('EMAIL'),
                    'SALDO'        => $this->post('SALDO')
                );
        $insert = $this->db->insert('ACCOUNT', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
}

?>