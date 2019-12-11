<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ppob_model extends CI_Model
{

    public function getPpob()
    {
        $q="select * from PPOB";
        return $this->db->query($q)->result();
    }

}