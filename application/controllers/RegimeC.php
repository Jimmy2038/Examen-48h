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
}
