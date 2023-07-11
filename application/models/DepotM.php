<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class DepotM extends CI_Model {

  public function getAllCode()
  {
    $req = "SELECT * FROM code";
    $req = sprintf($req);
    $query = $this->db->query($req);
    return $query->row();
  }

  public function verifieCode($code){
    
  }
}