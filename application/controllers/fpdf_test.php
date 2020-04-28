<?php if(!defined('BASEPATH')) exit ('No access');

class fpdf_test extends CI_controller
{

		public function index()
		{

			$this->load->library('fpdf_gen');

			$this->fpdf->SetFont('Arial','B',30);

			$this->fpdf->Cell(40,10,'my pdf');

			echo $this->fpdf->Output('pdfIMade.pdf','D');

		}
}

