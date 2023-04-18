<?php 
	if (!isset($_SESSION['ADMIN_USERID'])){
		redirect(web_root."admin/index.php");
	} 
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">List of Job Vacancies  <a href="index.php?view=add" class="btn btn-info btn-xs">  <i class="fa fa-plus-circle fw-fa"> </i> Add Job Vacancy</a>  </h1>
	</div>
</div>
<form action="controller.php?action=delete" method="POST">  	
	<div class="table-responsive">					
		<table id="dash-table" class="table table-striped table-bordered table-hover" style="font-size:12px" cellspacing="0">				
			<thead>
				<tr>			 
					<th>Job Title</th> 
					<th>Salary</th> 
					<th>Duration of Employment</th> 
					<th>Qualification/Work Experience</th> 
					<th>Job Description</th> 
					<th>Job Address</th> 
					<th width="10%" align="center">Action</th>
				</tr>	
			</thead> 
			<tbody>
				<?php 
					$mydb->setQuery("SELECT * FROM `tbljob` j WHERE j.CLIENT_ID = '{$singleuser->USERID}'");
					$cur = $mydb->loadResultList(); 
					foreach ($cur as $result) {
						echo '<tr>';
						echo '<td>' . $result->OCCUPATIONTITLE.'</td>';				  			
						echo '<td>' . $result->SALARIES.'</td>';
						echo '<td>' . $result->DURATION_EMPLOYEMENT.'</td>';
						echo '<td>' . $result->QUALIFICATION_WORKEXPERIENCE.'</td>';
						echo '<td>' . $result->JOBDESCRIPTION.'</td>';				  			
						echo '<td>' . $result->job_address.'</td>';
						echo '<td align="center">
							<a title="Edit" href="index.php?view=edit&id='.$result->JOBID.'" class="btn btn-info btn-xs">
								<span class="fa fa-edit fw-fa"></span> Edit
							</a>
							<a title="Delete" href="controller.php?action=delete&id='.$result->JOBID.'" class="btn btn-danger btn-xs" onclick="return confirm(\'Are you sure you want to delete this item?\')">
    							<span class="fa fa-trash-o fw-fa"></span>
							</a></td>';
						echo '</tr>';
					} 
				?>
			</tbody>					
		</table>
	</div>
</form>
<div class="table-responsive"></div>
