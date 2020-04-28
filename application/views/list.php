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
		            <input id="myInput" class="form-control" type="text" placeholder="Search..">
		        </div>
			</div>		
		</div>

<div class="container">
<div class="table-responsive">
    <table class="table table-stripped">
        <thead class="thead-dark col-md-12" >
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Student Name</th>
                <th scope="col">Stream</th>
                <th scope="col">Mobile</th>
               
            </tr>
        </thead>
        <tbody id="myTable">
        <?php
            $cnt=1;
            foreach($students as $data)
            {
        ?>
            <tr>
                <td><?php echo $data['sid']; ?></td>
                 <td><?php echo $data['sname'];?></td>
                 <td><?php echo $data['stream']; ?></td>
                <td><?php echo $data['mob'];?></td>
   
               <td>
		        <a href="<?php echo base_url().'index.php/student/edit/'.$data['sid'].'/e' ?>"? class="btn btn-primary">Edit</a>
		       </td>
		        <td>
		        <a href="<?php echo base_url().'index.php/student/delete/'.$data['sid']; ?>"? class="btn btn-primary">Delete</a>
		       </td>
		        <td>
		        <a href="<?php echo base_url().'index.php/student/getpdf/'.$data['sid'].'/e' ?>"? class="btn btn-primary">View In PDF</a>
		       </td>

    		</tr>
        
        <?php $cnt++; }?>
        </tbody>
    </table>
</div>
</div>

<?php require('footer.php'); ?>