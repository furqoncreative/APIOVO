<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class GetAllTransaksi extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model("transaksi_model");
    }

    function index_get() {
        $this->response(404);
    }    

    function index_post(){

        $r = $this->transaksi_model->getALlTransaksi();

        $this->response($r, 200);
    }

}

?>