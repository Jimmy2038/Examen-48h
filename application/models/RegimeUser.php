<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class RegimeUser extends CI_Model {

    public function getRegimeUserById($idUser){
        $sql = "select*from regimeUser where idUser=%s ";
        $sql = sprintf($sql,$idUser);
        $req = $this->db->query($sql);

        return $req->row();
    }

    

}