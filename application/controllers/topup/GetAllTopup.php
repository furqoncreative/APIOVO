<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class GetAllTopup extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model("topup_model");
    }

    function index_get() {
        $this->response(404);
    }    

    function index_post(){

        $r = $this->topup_model->getALlTopup();

        $this->response($r, 200);
    }
    
}

?>