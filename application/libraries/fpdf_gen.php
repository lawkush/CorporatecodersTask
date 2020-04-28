<?php if(!defined('BASEPATH')) exit('no access');


	
		class  fpdf_gen
		{

				public function __construct()
				{

						require_once APPPATH.'third_party/fpdf/fpdf.php';
						$pdf=new FPDF('p','mm','A4');

						$pdf->AddPage();

						$CI=get_instance();
						$CI->fpdf=$pdf;
					

				}

		}


