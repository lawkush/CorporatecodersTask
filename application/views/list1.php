<?php require('header.php'); ?>

		<div class="row">
			<div class="col-md-12">

				<?php

					$success=$this->session->userdata('success');
					if($success!=""){
				?>
				<div class="alert alert-success"><?php echo $success;?></div>
				<?php
				}
				?>

				<?php

					$success=$this->session->userdata('failure');
					if($success!=""){
				?>
				<div class="alert alert-success"> <?php echo $failure;?></div>
				<?php
				}
				?>
			</div>
		</div>
			<div class="row">
				<div class="col-md-12">

					<div class="row">
						<div class="col-md-10"><h2 >Student List</h2></div>
							<div class="col-md-2">
								
								<a href="<?php echo base_url().'index.php/student/create'; ?>" class="btn btn-success"> New</a>
							</div>
					</div>
					<hr>
				</div>
			</div>

		<div class="row">			
			<div class="col-md-12">
				
				<div class="search">
		            <input id="myinput" class="form-control" type="text" placeholder="Search..">
		        </div>
			</div>		
		</div>

		<div class="container">   
			<div class="table-responsive">   
				<table class="table table-striped">

					<div class="row">
				        	
						<div class="col-md-12">
							
								<tr>

									<th>Student id</th>
									<th>Name</th>
									<th>Stream</th>
									<th>Mobile number</th>
									<th width="70"> Edit</th>
									<th width="70">Delete</th>

								</tr>

								<tbody id="mytable">

									<?php 

										$cnt=1;
									if(!empty($students)){

										foreach($students as $student) {?>
											<tr>
												<td><?php echo $student['sid']; ?></td>

												<td><?php echo $student['sname']; ?></td>

												<td><?php echo $student['stream']; ?></td>

												<td><?php echo $student['mob']; ?></td>

												

												<!-- <td>
											        <?php
											          //  echo anchor("student/edit/{$student['sid']}",img(array('src'=>'/assets/image/edit.png')))?>       
											        </td>-->

												<td>
													<a href="<?php echo base_url().'index.php/student/edit/'.$student['sid'].'/e' ?>" class="btn btn-primary">Edit</a>
												</td>

												<td>
													<a href="<?php echo base_url().'index.php/student/delete/'.$student['sid']; ?>" class="btn btn-danger">Delete</a>
												</td>
												<td>

													<a href="<?php echo base_url().'index.php/student/getpdf/'.$student['sid'].'/e' ?>" class="btn btn-primary">Generate PDF</a>
												</td>
											</tr>

									<?php } } 

									else { ?>

										<tr>
											<td colspan="5">Record not found</td>

										</tr>

									<?php $cnt++;} ?>

								</tbody>

							</div>
					</div>
				</table>
			</div>	

		</div>	

<?php require('footer.php'); ?>