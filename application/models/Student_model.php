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
			/*function  fetch_single_details($sid)
			{
				$this->db->where('sid',$sid); 
				 $data=$this->db->get('student_table');
				 $output='<table width="100%" cellspacing="5" cellspacing="5">';
				 foreach ($data->result() as $row) {

				 	$output.='<tr>
				 		
				 		<td width="75%">

				 			<p><b>Name: </b>'.$row->sname'</p>
				 			<p><b>Stream: </b>'.$row->stream'</p>
				 			<p><b>Mobile: </b>'.$row->mob'</p>

				 		</td>

				 	</tr>';
				 }
				 $output.='<tr>
				 			<td colspan="2" align="center"><a href="'.base_url().'list" class="btn btn-primary">Back</a> </td>
				 	</tr>';

				 $output.='</table>';
				 return $output;
			}*/

			function updateStudent($sid,$formArray){
				$this->db->where('sid',$sid);
				$this->db->update('student_table',$formArray);
			}
			function delete($sid)
			{
				
				$this->db->delete('student_table', array('sid' => $sid));
			}


			
			function fetch_data($query)
			{

				$this->db->select("*");
				$this->db->from('student_table');
				if($query!= '')
				{
					$this->db->like('sname',$query);
					$this->db->or_like('mob',$query);

				}
				$this->db->order_by('sid','DESC');
				return $this->db->get();
			}

			

		}


?>