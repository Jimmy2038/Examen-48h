<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

    public function checkUser($mail,$mdp) {
        $req = "SELECT * FROM user WHERE mail='%s' AND mdp='%s'";
        $req = sprintf($req, $mail, $mdp);
        $query = $this->db->query($req);
        return $query->row();
    }

    public function insertUser($nom,$mail,$mdp,$isAdmin){
        $data = array(
            'nom' => $nom,
            'mail' => $mail,
            'mdp' => $mdp,
            'isAdmin' => $isAdmin
        );
        $this->db->set($data);
        $this->db->insert('user');
    }

    public function updateSolde($idUser, $solde) {
        $this->db->where('idUser', $idUser);
        $this->db->update('infoUtilisateur', ['solde' => $solde]);
    }

    public function getUserById($idUser){
        $this->db->where('idUser', $idUser);
        $res = $this->db->get('user');
        return $res->row();
    }

    public function getSolde($idUser) {
        $this->db->select('solde');
        $this->db->where('idUser', $idUser);
        $query = $this->db->get('infoUtilisateur');
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->solde;
        } else {
            return 0;
        }
    }

}
?>