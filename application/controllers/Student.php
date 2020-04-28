<?php
		class Student extends CI_controller
		{
		
		
			function index()
			{


				  $this->load->model('Student_model');
				  $students=$this->Student_model->all();
				  $data=array();
				  $data['students']=$students;
				  $this->load->view('list',$data);
			}

			public  function create()
			{
			 	$this->load->model('Student_model');
			 	$this->form_validation->set_rules('sname','Name','required');
			 	$this->form_validation->set_rules('stream','Stream','required');
			 	$this->form_validation->set_rules('mobile','mobile','required');
			 	if(!($this->form_validation->run())){

			 		$this->load->view('create');
			 	}
			 	else
			 	{
			 		$formArray=array();

			 		$formArray['sname']=$this->input->post('sname');
			 		$formArray['stream']=$this->input->post('stream');
					$formArray['mob']=$this->input->post('mobile');

					$this->Student_model->create($formArray);
					$this->session->set_flashdata('success','Record added!!');

					redirect(base_url().'index.php/student/index');	 			 	
			  	 }	
			}	

			function edit($sid,$s)
			{

				$this->load->model('Student_model');

				$student=$this->Student_model->getStudent($sid);
				$data=array();
				$data['student']=$student;

					$this->form_validation->set_rules('sname','Name','required');
				 	$this->form_validation->set_rules('stream','Stream','required');
				 	$this->form_validation->set_rules('mob','mobile','required');
				 	if($s=="e")
				 	{

				 		$this->load->view('edit',$data);
				 	}
				 	else
				 	{

				 		$formArray=array();
				 		$formArray['sname']= $this->input->post('sname');
				 		$formArray['stream']= $this->input->post('stream');
				 		$formArray['mob']= $this->input->post('mobile');

				 		$this->Student_model->updateStudent($sid,$formArray);
				 		$this->session->set_flashdata('success','Record Updated!!');
				 		redirect(base_url().'index.php/student/index');

				 	} 

			}

			function delete($sid)
			{

				$this->load->model('Student_model');
				$this->Student_model->delete($sid);
				$this->session->set_flashdata('success','Record Deleted!!');
				redirect(base_url().'index.php/student/index');

			}

			function getpdf($sid)
    		{
		        $this->load->model('Student_model');
		        $result=$this->Student_model->getStudent($sid);
		        $html=$this->load->view('pdfReport',['result'=>$result],true);
		        $mpdf = new \Mpdf\Mpdf();
		        $mpdf->WriteHTML($html);
		        $mpdf->Output();
    		}
			/*
			function details()
			{

				if($this->uri->segment(3))
				{

					$sid=$this->uri->segment(3);
					$data['student_details']=$this->Student_model->fetch_single_details($sid);
					$this->load->view('list',$data);
				}
			}*/



}

?>