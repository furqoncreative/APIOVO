<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class GetRiwayatTopup extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model("topup_model");
    }

    function index_get() {
        $this->response(404);
    }    

    function index_post(){
        $id = $this->post('ID');
        $r = $this->topup_model->getTopup($id);

        $this->response($r, 200);
    }
    
}

?>