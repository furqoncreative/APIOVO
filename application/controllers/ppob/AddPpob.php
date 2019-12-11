<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class AddPpob extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model("ppob_model");
    }

    function index_get() {
        $this->response(404);
    }    

    function index_post(){

        $data = array(
                    'PPOB_ID'   => $this->post('PPOB_ID'),
                    'ACCOUNT_ID' => $this->post('ACCOUNT_ID'),
                    'JENIS_PPOB'         => $this->post('JENIS_PPOB'),
                    'TOTAL_BIAYA'        => $this->post('TOTAL_BIAYA'),
                    'JENIS_BAYAR'        => $this->post('JENIS_BAYAR')
                );
        $insert = $this->db->insert('PPOB', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
}

?>