
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


		<form class="form-inline" action="<?php echo base_url() . 'index.php/student'; ?>" method="post">
	        <select class="form-control" name="field">
	            <option selected="selected" disabled="disabled" value="">Filter By</option>
	            <option value="first_name">First Name</option>
	            <option value="mobile">Mobile Number</option>
	        </select>
	        <input class="form-control" type="text" name="search" value="" placeholder="Search...">
	        <input class="btn btn-default" type="submit" name="filter" value="Go">
    	</form>





















			<div class="row">

				<div class="col-md-12">
					<table class="table table-striped">
						<tr>

							<th>Student id</th>
							<th>Name</th>
							<th>Stream</th>
							<th>Mobile number</th>
							<th width="70"> Edit</th>
							<th width="70">Delete</th>

						</tr>

						<?php if(!empty($students)){

							foreach($students as $student) {?>
							<tr>
								<td><?php echo $student['sid']; ?></td>

								<td><?php echo $student['sname']; ?></td>

								<td><?php echo $student['stream']; ?></td>

								<td><?php echo $student['mob']; ?></td>

								<td>

									<a href="<?php echo base_url().'index.php/student/edit/'.$student['sid'].'/e' ?>" class="btn btn-primary">Edit</a>
								</td>

								<td>
									<a href="<?php echo base_url().'index.php/student/delete/'.$student['sid']; ?>" class="btn btn-danger">Delete</a>
								</td>
							</tr>

						<?php } } 

						else { ?>

							<tr>
								<td colspan="5">Record not found</td>

							</tr>

						<?php } ?>

					</table>

				</div>
			</div>
<?php require('footer.php'); ?>