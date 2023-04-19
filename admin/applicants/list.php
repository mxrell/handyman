<?php
	 if(!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
	<div class="row">
    	<div class="col-lg-12">
            <h1 class="page-header">List of Applicant's   </h1>
       		</div>
   		</div>       
			<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST"> 
				<div class="table-responsive">  		
				<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">
					<thead>
						<tr>
							<th>Applicant</th>
							<th>Job Title</th>
							<th>Applied Date</th> 
							<th>Feedback</th>
							<th>Application Status</th>
							<th width="10%" align="center">Action</th> 
						</tr>	
					</thead> 
					<tbody>
					<?php   
						$mydb->setQuery("SELECT * FROM `tblcompany` c, `tbljobregistration` j, `tbljob` j2, `tblapplicants` a WHERE c.`COMPANYID` = j.`COMPANYID` AND j.`JOBID` = j2.`JOBID` AND j.`APPLICANTID` = a.`APPLICANTID` AND j2.`CLIENT_ID` = '{$singleuser->USERID}'");
						$cur = $mydb->loadResultList();
							foreach ($cur as $result) { 
							  	echo '<tr>';
							  	echo '<td>'. $result->APPLICANT.'</td>';
							  	echo '<td>' . $result->OCCUPATIONTITLE.'</a></td>'; 
							  	echo '<td>'. $result->REGISTRATIONDATE.'</td>';
							  	echo '<td>'. $result->REMARKS.'</td>';
							  	echo '<td>'. $result->STATUS.'</td>';  
					  			echo '<td align="center" >    
					  		            <a title="View" href="index.php?view=view&id='.$result->REGISTRATIONID.'"  class="btn btn-info btn-xs  "><span class="fa fa-info fw-fa"></span> View</a> 
					  		            <a href="delete.php?id='.$result->REGISTRATIONID.'"class="btn btn-danger btn-xs" onclick="return confirm(\'Are you sure you want to delete this item?\')"><span class="fa fa-trash-o fw-fa"></span></a></td>';
							  	echo '</tr>';
							} 
					?>
					</tbody>		
				</table> 
				</div>
			</form>
       
                 
 