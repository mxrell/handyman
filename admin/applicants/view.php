<?php 
global $mydb;
	$red_id = isset($_GET['id']) ? $_GET['id'] : '';

	$jobregistration = New JobRegistration();
	$jobreg = $jobregistration->single_jobregistration($red_id);
	 // `COMPANYID`, `JOBID`, `APPLICANTID`, `APPLICANT`, `REGISTRATIONDATE`, `REMARKS`, `FILEID`, `PENDINGAPPLICATION`


	$applicant = new Applicants();
	$appl = $applicant->single_applicant($jobreg->APPLICANTID);
 // `FNAME`, `LNAME`, `MNAME`, `ADDRESS`, `SEX`, `CIVILSTATUS`, `BIRTHDATE`, `BIRTHPLACE`, `AGE`, `USERNAME`, `PASS`, `EMAILADDRESS`,CONTACTNO

	$jobvacancy = New Jobs();
	$job = $jobvacancy->single_job($jobreg->JOBID);
 // `COMPANYID`, `CATEGORY`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `PREFEREDSEX`, `SECTOR_VACANCY`, `JOBSTATUS`, `DATEPOSTED`

	$company = new Company();
	$comp = $company->single_company($jobreg->COMPANYID);
	 // `COMPANYNAME`, `COMPANYADDRESS`, `COMPANYCONTACTNO`

	$sql = "SELECT * FROM `tblattachmentfile` WHERE `FILEID`=" .$jobreg->FILEID;
	$mydb->setQuery($sql);
	$attachmentfile = $mydb->loadSingleResult();


?> 
<style type="text/css">
.content-header {
	min-height: 50px;
	border-bottom: 1px solid #ddd;
	font-size: 15px;
	font-weight: bold;
}
.content-body {
	min-height: 350px;
	/*border-bottom: 1px solid #ddd;*/
}
.content-body >p {
	padding:10px;
	font-size: 12px;
	font-weight: bold;
	border-bottom: 1px solid #ddd;
}
.content-footer {
	min-height: 100px;
	border-top: 1px solid #ddd;

}
.content-footer > p {
	padding:5px;
	font-size: 15px;
	font-weight: bold; 
}
 
.content-footer textarea {
	width: 100%;
	height: 200px;
}
.content-footer  .submitbutton{  
	margin-top: 20px;
	/*padding: 0;*/

}
</style>
<form action="controller.php?action=approve" method="POST">
<div class="col-sm-12 content-header" style="">View Details</div>
<div class="col-sm-6 content-body" > 
	<p style="font-size: 20px; font-weight: bold;">Job Details</p>
	<h3><b><?php echo $job->OCCUPATIONTITLE; ?></b></h3>
	<input type="hidden" name="JOBREGID" value="<?php echo $jobreg->REGISTRATIONID;?>">
	<input type="hidden" name="APPLICANTID" value="<?php echo $appl->APPLICANTID;?>">

	<div class="col-sm-6">
		<ul>
            <li><i class="fp-ht-food"></i>Salary : <?php echo number_format($job->SALARIES,2);  ?></li>
            <li><i class="fa fa-sun-"></i>Duration of Employment : <?php echo $job->DURATION_EMPLOYEMENT; ?></li>
        </ul>
	</div> 
	<div class="col-sm-6">
		<ul> 

        </ul>
	</div>
	<div class="col-sm-12">
		<p><b>Job Description : </b></p>   
		<p style="margin-left: 15px;"><?php echo $job->JOBDESCRIPTION;?></p>
	</div>
	<div class="col-sm-12"> 
		<p><b>Qualification/Work Experience : </b></p>
		<p style="margin-left: 15px;"><?php echo $job->QUALIFICATION_WORKEXPERIENCE; ?></p>
	</div>
	<div class="col-sm-12"> 
		<p><b>Client : </b></p>
		<p style="margin-left: 15px;"><?php echo $job->client_user ; ?></p> 
		<p style="margin-left: 15px;">@ <?php echo $job->job_address ; ?></p>
	</div>
</div>
<div class="col-sm-6 content-body" >
	<p style="font-size: 20px; font-weight: bold;">Applicant Information</p> 
	<h3> <?php echo $appl->LNAME. ', ' .$appl->FNAME . ' ' . $appl->MNAME;?></h3>
	<ul> 
		<li><b>Address: </b><a href="https://www.google.com/maps/search/<?php echo urlencode($appl->ADDRESS); ?>" target="_blank"><?php echo htmlspecialchars($appl->ADDRESS); ?></a></li>

		<li><b>Contact No. : </b><?php echo $appl->CONTACTNO;?></li>
		<li><b>Email : </b><a href="mailto:<?php echo $appl->EMAILADDRESS ?>"><?php echo $appl->EMAILADDRESS ?></a></li>
		<li><b>Sex: </b><?php echo $appl->SEX;?></li>
		<li><b>Age : </b><?php echo $appl->AGE;?></li> 
	</ul>
</div> 
<div class="col-sm-12 content-footer">

<p><i class="fa fa-paperclip"></i> Attachment Files</p>
	<div class="col-sm-12 slider">
		 <p style="margin-left: 15px">Download Resume<a href="<?php echo web_root.'applicant/'.$attachmentfile->FILE_LOCATION; ?>"> Here.</a></p>
	</div> 
	<div class="col-sm-12">
    <p><label for="STATUS">Application Status</label></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="STATUS" id="STATUS">
        <option value="Pending">Pending</option>
        <option value="Hired">Hired</option>
        <option value="For Interview">For Interview</option>
    </select><br><br>
</div>
	<p>Message</p>		
		<textarea name="REMARKS" style="width: 300px; height: 100px; overflow-x: auto; resize: none;"></textarea>
	<div class="col-sm-12  submitbutton "> 
		<button type="submit" name="submit" class="btn btn-primary">Update</button>
	</div> 
</div>
</form>