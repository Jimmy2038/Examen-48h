<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Validation extends CI_Model {
    public function getAllValidation(){
        $req = "SELECT * FROM `validationcode` WHERE dateValidation IS NULL";
        $query = $this->db->query($req);
        return $query->result();
    }

    public function getValidationById($id){
        $req = "SELECT * FROM `validationcode` WHERE idValidation=".$id;
        $query = $this->db->query($req);
        return $query->row(); 
    }
 
    // public function delete($id){
    //     $req = "DELETE From validation where  nx";
    // }

    public function deleteByCode($code) {
        $this->db->where('code', $code);
        $this->db->delete('validationCode');
    }
}
?>