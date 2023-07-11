<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Regime extends CI_Model {

    public function insertRegime($idObjectif,$nom,$duree,$poids,$prix){
        $sql = "INSERT INTO `regime`(`idObjectif`,`nom`, `duree`, `poids`, `prix`) VALUES (%s,'%s',%s,%s,%s)";
        $sql = sprintf($sql,$idObjectif,$nom,$duree,$poids,$prix);
        $query = $this->db->query($sql);
    }

    public function insertRegimeUser($idUser,$idRegime,$duree,$prix){
        $sql = "INSERT INTO `regimeUser`(`idUser`, `idRegime`, `duree`,`prix`) VALUES (%s,%s,%s,%s)";
        $sql = sprintf($sql,$idUser,$idRegime,$duree,$prix);
        $query = $this->db->query($sql);
    }
    public function getAllRegime()
    {
      $req = "SELECT * FROM regime";
      $req = sprintf($req);
      $query = $this->db->query($req);
      return $query->result();
    }

    public function listeObjectifAll()
    {
      $req = "SELECT * FROM objectif";
      $req = sprintf($req);
      $query = $this->db->query($req);
      return $query->result_array();
    }
  
    public function  getObjectifById($idObjectif){
      $req = "SELECT * FROM objectif where idObjectif=%s";
      $req = sprintf($req,$idObjectif);
      $query = $this->db->query($req);
      return $query->row();
    }

    public function getRegimeByObjectif($idObjectif){
        $query = $this->db->get_where('regime',array('idObjectif'=>$idObjectif));
        return $query->result();
    }
  
    // public function addObjectifUser($idObjectif,$idUser,$poidsCible){
    //   $data = array(
    //     'idObjectif' = $idObjectif,
    //     'idUser' = $idUser,
    //     'poidsCible' = $poidsCible
    //   );
    //   $this->db->set($d0<ata);4
    //   $this->db->insert('objectfUser');
    // }
}
