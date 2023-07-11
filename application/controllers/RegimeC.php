<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegimeC extends CI_Controller {

    public function insertPages(){
        $data['main'] = "ajouteRegime";
		$this->load->view('pages/templateAdmin',$data);
    }

    public function insert(){
        $idObjectif =  $this->input->post('objectif');
		$nom = $this->input->post('nom');
		$poids = $this->input->post('poids');
		$dure = $this->input->post('dure');
		$prix = $this->input->post('prix');
        $data['main'] = "ajouteRegime";
        $this->load->model('regime');
        $this->regime->insertRegime($idObjectif,$nom,$dure,$poids,$prix);
        $this->load->view('pages/templateAdmin',$data);
    }
    
    public function list(){
        $this->load->model('regime');
        $data['main'] = "listeRegime";
        $data['liste_regime'] =  $this->regime->getAllRegime();
		$this->load->view('pages/templateAdmin',$data);
    }



    public function getRegime(){
        $idObjectif = $this->input->post('objectif');
		$poidsCible = $this->input->post('poidscible');
        $this->load->model('regime');
        $this->load->model('infouser');

        $idUser = $this->session->userData('userid');
        $infoUser = $this->infouser->getUserById($idUser);
        $regime = $this->regime->getRegimeByObjectif($idObjectif);

        $suggest = array();
        // $suggest['id'] = $regime[0]->idRegime;
        echo "<br/><br/><br/><br/><br/>";//.$regime[0]->idRegime;
        // echo $infoUser->poids;
        $suggest['idRegime'] = $regime[0]->idRegime;
        $suggest['idObjectif'] = $regime[0]->idObjectif; 

        if ($idObjectif == 1) {
            $diff = $poidsCible - $infoUser->poids;
        }else {
            $diff = $infoUser->poids - $poidsCible;
        }
        $dure = $diff * 7 / $regime[0]->poids;
        $suggest['prix'] = $dure * $regime[0]->prix;
        $suggest['dure'] = $dure;
        
        $data['suggest'] = $suggest;
		$data['content'] = "resultatSuggestion";
		$this->load->view('pages/template',$data);
    }


    public function accepteRegime(){
        $idRegime = $this->input->post('idRegime');
        $duree = $this->input->post('dure');
        $prix = $this->input->post('prix');
        
        $this->load->model('regime');
        $idUser = $this->session->userData('userid');

        $this->regime->insertRegimeUser($idUser,$idRegime,$duree,$prix);
    }

    

    public function test()
    {
        $this->load->model('RegimeUser');
        $infoUser = $this->RegimeUser->getRegimeUserById(3);

	    for ($i=0; $i <count($infoUser) ; $i++) { 
			echo $infoUser[$i]['duree'];
	    }  
    }
}
