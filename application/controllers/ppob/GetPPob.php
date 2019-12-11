<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class GetPpob extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model("ppob_model");
    }

    function index_get() {
        $this->response(404);
    }    

    function index_post(){

        $r = $this->ppob_model->getPpob();

        $this->response($r, 200);
    }


    
}

?>