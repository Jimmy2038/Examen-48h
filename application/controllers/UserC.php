<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserC extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		
		$resultat = $this->user->checkUser($mail, $mdp);
		$this->session->set_userData('userid',$resultat->idUser);

		$this->load->view('pages/infoUser');
	}		

    public function loginUser() {
        $mail = $this->input->post('mail');
        $mdp = $this->input->post('mdp');
        $this->load->model('user');
		$resultat = $this->user->checkUser($mail, $mdp);
		
        if ($resultat!=null) {
			if ($resultat->isAdmin == 0) {
				$this->session->set_userData('userid',$resultat->idUser);
				$data['content'] = "accueil";
				$this->load->view('pages/template',$data);
			} else {
				$this->load->view('pages/loginAdmin');
			}
        } else {
			//echo "Utilisateur non trouvé"
			$this->load->view('pages/loginUser');
        }
    }
	public function loginAdmin() {
        $mail = $this->input->post('mail');
        $mdp = $this->input->post('mdp');
        $this->load->model('user');
		$resultat = $this->user->checkUser($mail, $mdp);
		
        if ($resultat!=null) {
			if ($resultat->isAdmin == 1) {
				// $this->session->set_userData('userid',$resultat->idUser);
				//validation
				$this->load->model('validation');
				$data['list_validation'] = $this->validation->getAllValidation();
				$data['main'] = "dashboard";
				$this->load->view('pages/templateAdmin',$data);
				// $this->load->view('pages/accueilAdmin',$data);
			}
        } else {
			//echo "Utilisateur non trouvé"
			$this->load->view('pages/loginAdmin');
        }
    }

	public function deco(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/Welcome'));
	}

	public function valideInfo(){
		$this->load->model('infoUser');
		$idUser = $this->session->userData('userid');
		// echo $idUser;
		$age = $this->input->post('age');
        $taille = $this->input->post('taille');
		$poids = $this->input->post('poids');

		$idUser = $this->session->userData('userid');

		$this->infoUser->insertInfoUser($idUser,1,$age,$taille,$poids);

		$data['content'] = "accueil";
		$this->load->view('pages/template',$data);
	}


}
