<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class AddTransaksi extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model("transaksi_model");
    }

    function index_get() {
        $this->response(404);
    }    

    function index_post(){

        $data = array(
                    'TRANSFER_ID'   => $this->post('TRANSFER_ID'),
                    'TANGGAL_TRANSFER' => $this->post('TANGGAL_TRANSFER'),
                    'NOMINAL'         => $this->post('NOMINAL'),
                    'SENDER_ID'        => $this->post('SENDER_ID'),
                    'RECEIVER_ID'        => $this->post('RECEIVER_ID')
                );
        $insert = $this->db->insert('TRANSAKSI', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
}

?>