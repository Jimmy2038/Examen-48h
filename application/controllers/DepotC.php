<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DepotC extends CI_Controller {

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
     * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function index()
	{
        $this->load->model('code');
        $this->load->model('user');
        $this->load->model('infoUser');
        
        //validation
        // $this->load->model('validation');
        // $data['list_validation'] = $this->validation->getAllValidation();

        $data['liste_code'] = $this->code->getAllCode();
        $data['content'] = "depot";
        $data['mess'] = "";
        $idUser = $this->session->userData('userid');
        $info = $this->infoUser->getInfoUser($idUser);
        $data['compte'] = 0;

		$this->load->view('pages/template',$data);
	}
    
    public function validation(){
        $depot = $this->input->post('depot');
        $this->load->model('code');
        $this->load->model('infoUser');

        $code = $this->code->getCodeByCode($depot);
        $data['content'] = "depot";
        $data['liste_code'] = $this->code->getAllCode();

        if ($code !=null) {
            if ($code->etat!=1) {
                $data['mess'] = "en attante";
                // echo $code->code;
                $idUser = $this->session->userData('userid');
                $this->code->inserDepotToValidation($idUser,$code->idCode,'0001-02-01','0001-02-02');
                $data['compte'] = 0;
                $this->load->view('pages/template',$data);
            }
            // $data['mess'] = "code efa Niasa";
        }
        $data['mess'] = "code invalide";
        $idUser = $this->session->userData('userid');
        $info = $this->infoUser->getInfoUser($idUser);
        $data['compte'] = 0;

        $this->load->view('pages/template',$data);
        // echo $idUser;
    }
}
