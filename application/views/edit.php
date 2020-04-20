
<?php require('header.php'); ?>
			<h1>Update Student Information</h1>
			<hr>
			<form method="post" name="createStudent" action="<?php echo base_url().'index.php/student/edit/'.$student['sid'].'/u' ?>">
				<div class="row">
						<div class="col-sm-10">
							 <div class="form-group">
								<label class="control-label col-sm-2" for="Name">Name</label>
								<div class="col-sm-10">
									<input type="text" name="sname" value="<?php echo set_value('sname',$student['sname']);?>" class="from-control">
									<?php echo form_error('sname');?>
									
								</div>
							</div>

							 <div class="form-group">
								<label class="control-label col-sm-2" for="Name">Stream</label>
								<div class="col-sm-10">
									<input type="text" name="stream" value="<?php echo set_value('stream',$student['stream']);?>" class="form-control">
									<?php echo form_error('stream');?>
								
								</div>
							</div>

							 <div class="form-group">
								<label class="control-label col-sm-2" for="Name">Mobile</label>
								<div class="col-sm-10">
									<input type="text" name="mobile" value="<?php echo set_value('mob',$student['mob']);?>" class="from-control">
									<?php echo form_error('mobile');?>							
								</div>
							</div>
							 <div class="form-group">
								<input type="submit" name="submit" value="Update" class="btn btn-primary"/>
								<a href="<?php echo base_url().'index.php/student/index'; ?>" class="btn-secondary btn">Cancel</a>
							</div>
						</div>				
				</div>
			</form>	
	<?php require('footer.php'); ?>