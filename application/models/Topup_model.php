<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Topup_model extends CI_Model
{

    public function getAllTopup()
    {
        $q="select * from TOP_UP";
        return $this->db->query($q)->result();
    }

    public function getTopup($id)
    {
        $q="select * from TOP_UP where ACCOUNT_ID = ".$id."";
        return $this->db->query($q)->result();
    }

}