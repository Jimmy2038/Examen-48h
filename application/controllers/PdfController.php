<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PdfController extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('fpdf183/fpdf');
		$this->load->helper('Fpdf_helper');
		$this->load->model('RegimeUser');
		$this->load->model('Activiter');
	}
	public function index()
	{
		$this->load->view('pdf/export');
	}
	public function Exporter() {
		$id = $_GET['id'];
	 $infoUser = $this->RegimeUser->getRegimeUserById($id);
	 $infoActivite = $this->Activiter->getActivityUserById($infoUser->idRegime);
	 
			// echo $infoUser->duree;
	 
		// http://[::1]/Examen2j/index.php/PdfController/Exporter?id=1
		// Génération du fichier PDF
		$pdf = new Fpdf_helper();
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$titre = "Information du regime";
		$width = $pdf->GetStringWidth($titre) + 20;
		$pdf->SetX((210-$width)/2);
		$pdf->Cell($width, 9, $titre, 0, 1, 'C');
		
		// En-tête du tableau
		$pdf->SetFont('Arial', 'B', 14);
		$pdf->SetX($pdf->GetX() + 20);
		$pdf->Cell(60, 7, 'Regime', 1, 0, 'C'); // Largeur de cellule augmentée à 60
		$pdf->Cell(50, 7, 'Activitee Physique', 1, 0, 'C'); // Largeur de cellule augmentée à 50
		$pdf->Cell(50, 7, 'duree', 1, 0, 'C'); // Largeur de cellule augmentée à 50
		$pdf->Cell(40, 7, 'Prix', 1, 0, 'C');
		$pdf->Ln();
		
		// Contenu du tableau (données de test)
		$pdf->SetFont('Arial', '', 12);
		// $data = [
		//     ['Végétarien', '15 €', '2023-07-12'],
		//     ['Végétalien', '18 €', '2023-07-14'],
		//     ['Sans gluten', '12 €', '2023-07-16'],
		// ];
		
		// foreach ($data as $row) { 
		    $pdf->SetX($pdf->GetX() + 20); 
		    $pdf->Cell(60, 6, $infoUser->idRegime, 1, 0, 'C');
		    $pdf->Cell(40, 6, $infoActivite->nom, 1, 0, 'C');
		    $pdf->Cell(50, 6, $infoUser->duree, 1, 0, 'C');
		    $pdf->Cell(50, 6, $infoUser->prix, 1, 0, 'C');
		    $pdf->Ln();
		// }
		
		$pdf->Output();
		
		// Affichage de $id
		// echo $id;
	 }
	 
	 
}
?>
