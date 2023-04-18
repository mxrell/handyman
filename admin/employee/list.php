<?php
	 if(!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
	<div class="row">
    	<div class="col-lg-12">
            <h1 class="page-header"> List of Hired Freelancer's</h1>
       		</div>
   	</div>
	<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">
		<div class="table-responsive">   		
		<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">
			<thead>
				<tr>
					<th width="15%">Freelancer ID No.</th>
					<th>Name</th>
					<th>Job Title</th>
					<th>Contact No.</th>
					<th>Work Status</th>
					<th width="10%" align="center">Action</th> 
				</tr>	
			</thead> 
			<tbody>
			<?php   
				$mydb->setQuery("SELECT * FROM `tblemployees` WHERE c_id = {$singleuser->USERID}");
				$cur = $mydb->loadResultList();
				foreach ($cur as $result){ 
					echo '<tr>';
					echo '<td>'. $result->EMPLOYEEID.'</a></td>';
					echo '<td>'. $result->F_LNAME.', '. $result->F_FNAME.'</td>';
					echo '<td>'. $result->POSITION.'</td>';
					echo '<td>'. $result->F_CONTACTNO.'</td>';
					echo '<td>'. $result->WORKSTATS.'</td>'; 
					echo '<td align="center" >
						<a title="Update" href="index.php?view=edit&id='.$result->EMPLOYEEID.'"  class="btn btn-info btn-xs"><span class="fa fa- fw-fa"></span>Update</a> 
					  	<a title="Delete" href="controller.php?action=delete&id='.$result->EMPLOYEEID.'" class="btn btn-danger btn-xs" onclick="return confirm(\'Are you sure you want to delete this item?\')"><span class="fa fa-trash-o fw-fa"></span>
    						</a></td>';
					echo '</tr>';
				} 
			?>
			</tbody>	
		</table>
		</div>		 
	</form>
       
                 
 