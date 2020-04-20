<?php

		class Student_model extends CI_model{


			function create($formArray)
			{
					$this->db->insert('student_table',$formArray);
			}
			function all()
			{
				return $students=$this->db->get('student_table')->result_array();
			}

			function getStudent($sid)
			{

					$this->db->where('sid',$sid);
					return $student=$this->db->get('student_table')->row_array();

			}


			function updateStudent($sid,$formArray){
				$this->db->where('sid',$sid);
				$this->db->update('student_table',$formArray);




			}
			function delete($sid)
			{
				
				$this->db->delete('student_table', array('sid' => $sid));
			}

			

		}


?>