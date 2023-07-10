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
        $this->db->insert('User');
    }
}
?>