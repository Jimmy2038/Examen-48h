<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class InfoUser extends CI_Model {

  public function insertInfoUser($idUser,$genre,$age,$taille,$poids){
    // $data = array(
    //   'idUser' = $idUser,
    //   'genre' = $genre,
    //   'age' = $age,
    //   'taille' = $taille,
    //   'poids' = $poids
    // );
    // $this->db->set($data);
    // $this->db->insert('infoUtilisateur');
    $sql = "INSERT INTO `infoutilisateur`(`idUser`, `genre`, `age`, `taille`, `poids`, `solde`) VALUES (%s,%s,%s,%s,%s,0)";
    $sql = sprintf($sql,$idUser,$genre,$age,$taille,$poids);
    $query = $this->db->query($sql);
  }

  public function updatInfoUser($iduser,$genre,$age,$taille,$poids){
    $sql = " update infoUtilisateur set genre= %s and age=%s and taille=%s and poids=%s where idUser=%s";
    $sql = sprintf($sql,$genre,$age,$taille,$poids,$iduser);
    $query = $this->db->query($sql);
  }

  public function getInfoUser($idUser)
  {
    $req = "SELECT * FROM infoUtilisateur where idUser=%s";
    $req = sprintf($req,$idUser);
    $query = $this->db->query($req);
    return $query->row();
  }


  public function getUserById($idUser){
    $this->db->where('idUser', $idUser);
    $res = $this->db->get('infoUtilisateur');
    return $res->row();
  }
  
}