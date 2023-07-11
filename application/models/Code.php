<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Code extends CI_Model {
    
    public function inserDepotToValidation($idUser,$idCode,$dateArriver){
        $req = "INSERT INTO `validationcode`(`idUser`, `code`, `dateArriver`) VALUES (%s,'%s','%s')";
        $req1 = sprintf($req,$idUser,$idCode,$dateArriver);
        $query = $this->db->query($req1);
    }

    public function getAllCode(){
        $req = "SELECT * FROM code";
        $query = $this->db->query($req);
        return $query->result();
    }

    public function getCodeByCode($code){
        $req = "SELECT * FROM code where code=".$this->db->escape($code);
        $query = $this->db->query($req);
        return $query->row();
    }

    public function getCodeById($idCode){
        $req = "SELECT * FROM code where idcode=".$this->db->escape($idCode);
        $query = $this->db->query($req);
        return $query->row();
    }

    public function updateEtat($idCode,$etat){
        $this->db->where('idCode', $idCode);
        $this->db->update('code', ['etat' => $etat]);
    }

}