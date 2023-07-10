<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserC extends CI_Controller {

	public function index() { 
		
	}

	public function signupPages(){
		$this->load->view('pages/signup');
	}


	public function signup() { 
		$this->load->model('user');
		$nom = $this->input->post('nom');
		$mail = $this->input->post('mail');
        $mdp = $this->input->post('mdp');

		$this->user->insertUser($nom,$mail,$mdp,0);

		$this->load->view('pages/login');
	}		

    public function login() {
        $mail = $this->input->post('mail');
        $mdp = $this->input->post('mdp');
        $this->load->model('user');
		$resultat = $this->user->checkUser($mail, $mdp);
		
        if ($resultat!=null) {
			if ($resultat->isAdmin == 1) {
				$this->session->set_userData('userid',$resultat->idUser);
				echo "Admin <br/>";
			}
            echo "Utilisateur trouvé";
        } else {
            echo "Utilisateur non trouvé";
        }
		// $data['content']="Accueil";
		// $this->load->view('templates/index',$data);
    }
}
