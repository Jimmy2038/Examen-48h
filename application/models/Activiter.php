<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Activiter extends CI_Model {
  
  public function getActivityUserById($idRegime){
    $sql = "select*from activiteSportif where idRegime=%s ";
    $sql = sprintf($sql,$idRegime);
    $req = $this->db->query($sql);

    return $req->row();
  }

  public function getAllActivity()
  {
    $sql = "select*from activiteSportif  ";
    $sql = sprintf($sql,$idRegime);
    $req = $this->db->query($sql);

    return $req->result_array();
  }

  public function insert($idActivite,$idRegime,$nom){
    $sql ="INSERT INTO activiteSportif(idActivite,idRegime,nom)  VALUES(NULL,%s,'%s')";
    $sql = sprintf($sql,$idActivite,$idRegime,$nom);
    $this->db->query($sql);
  }

  public function deleteActivityById($idActivity){
    $sql = "delet from activiteSportif where idActivite=%s ";
    $sql = sprintf($sql,$idActivity);
     $this->db->query($sql);
  }

  public function updateActivityById($idActivite,$idRegime,$nom)
  {
    $sql = "update from activiteSportif set idRegime=%s and nom=%s where idActivite=%s ";
    $sql = sprintf($sql,$idRegime,$nom,$idActivity);
    $this->db->query($sql);
  }

}