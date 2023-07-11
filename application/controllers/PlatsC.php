<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlatsC extends CI_Controller {

    public function insertPages(){
        $data['main'] = "ajouteRegime";
		$this->load->view('pages/templateAdmin',$data);
    }

    public function listePages(){
        $data['main'] = "listePlats";
		$this->load->view('pages/templateAdmin',$data);
    }
}
