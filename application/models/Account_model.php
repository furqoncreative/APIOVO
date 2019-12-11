<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model
{

    public function getAllUser()
    {
        $q="select * from ACCOUNT";
        return $this->db->query($q)->result();
    }

    public function getUser($id)
    {
        $q="select * from ACCOUNT where ACCOUNT_ID = ".$id."";
        return $this->db->query($q)->result();
    }

}