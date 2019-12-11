<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class AddTopup extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model("topup_model");
    }

    function index_get() {
        $this->response(404);
    }    

    function index_post(){

        $data = array(
                    'TOPUP_ID'   => $this->post('TOPUP_ID'),
                    'ACCOUNT_ID' => $this->post('ACCOUNT_ID'),
                    'NOMINAL'         => $this->post('NOMINAL'),
                    'JENIS_TOPUP'        => $this->post('JENIS_TOPUP')
                );
        $insert = $this->db->insert('TOP_UP', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
}

?>