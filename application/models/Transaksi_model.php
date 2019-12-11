<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{

    public function getAllTransaksi()
    {
        $q="select * from TRANSAKSI";
        return $this->db->query($q)->result();
    }
}