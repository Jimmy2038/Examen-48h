<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ValidationC extends CI_Controller {

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

    public function accepte($idValidation){
        $this->load->model('validation');
        $this->load->model('user');
        $this->load->model('code');
        $validation = $this->validation->getValidationById($idValidation);

		$code = $this->code->getCodeById($validation->code);
		// echo $validation->idUser;
		// echo $code->montant;
		$solde = $this->user->getSolde($validation->idUser)+$code->montant;
		$this->user->updateSolde($validation->idUser, $solde);
		$this->code->updateEtat($validation->code,1);
		$this->validation->deleteByCode($validation->code);
		$this->load->model('validation');
		$data['list_validation'] = $this->validation->getAllValidation();
		$data['main'] = "listValidation";
		$this->load->view('pages/templateAdmin',$data);
    }

	public function list(){
		$this->load->model('validation');
		$data['list_validation'] = $this->validation->getAllValidation();
		$data['main'] = "listValidation";
		$this->load->view('pages/templateAdmin',$data);
	}

}
