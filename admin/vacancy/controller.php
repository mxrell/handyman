
<?php
require_once ("../../include/initialize.php");
 	 if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }


$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

 
	}
   
	function doInsert(){
		global $mydb;
		if(isset($_POST['save'])){
 
 
		if ( $_POST['COMPANYID'] == "None") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$sql = "SELECT * FROM tblcategory where CATEGORYID = {$_POST['CATEGORY']}";
			$mydb->setQuery($sql);
			$cat = $mydb->loadSingleResult();
			$_POST['CATEGORY']=$cat->CATEGORY;
			$job = New Jobs();
			$job->client_user						= $_POST['client_user']; 
			$job->job_address						= $_POST['job_address'];
			$job->client_id							= $_POST['client_id'];
			$job->client_no							= $_POST['client_no'];
			$job->client_email							= $_POST['client_email'];
			$job->CATEGORY							= $_POST['CATEGORY']; 			 
			$job->OCCUPATIONTITLE					= $_POST['OCCUPATIONTITLE'];
			$job->SALARIES							= $_POST['SALARIES'];
			$job->DURATION_EMPLOYEMENT				= $_POST['DURATION_EMPLOYEMENT'];
			$job->QUALIFICATION_WORKEXPERIENCE		= $_POST['QUALIFICATION_WORKEXPERIENCE'];
			$job->JOBDESCRIPTION					= $_POST['JOBDESCRIPTION'];			
			$job->COMPANYID							= $_POST['COMPANYID'];			
			$job->DATEPOSTED						= date('Y-m-d H:i');
			$job->create();

			message("New Job Vacancy created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
		global $mydb;
		if(isset($_POST['save'])){
			if ( $_POST['COMPANYID'] == "None") {
				$messageStats = false;
				message("All field is required!","error");
				redirect('index.php?view=add');
			}else{	
				$sql = "SELECT * FROM tblcategory where CATEGORYID = {$_POST['CATEGORY']}";
				$mydb->setQuery($sql);
				$cat = $mydb->loadSingleResult();
				$_POST['CATEGORY']=$cat->CATEGORY;
				$job = New Jobs();

				$job->CATEGORY							= $_POST['CATEGORY']; 
				$job->OCCUPATIONTITLE					= $_POST['OCCUPATIONTITLE'];
				$job->SALARIES							= $_POST['SALARIES'];
				$job->DURATION_EMPLOYEMENT				= $_POST['DURATION_EMPLOYEMENT'];
				$job->QUALIFICATION_WORKEXPERIENCE		= $_POST['QUALIFICATION_WORKEXPERIENCE'];
				$job->JOBDESCRIPTION					= $_POST['JOBDESCRIPTION'];

				$job->update($_POST['JOBID']);

				message("Job Vacancy has been updated!", "success");
				redirect("index.php");
			}
		}

	}


	function doDelete(){
		// if (isset($_POST['selector'])==''){
		// message("Select a records first before you delete!","error");
		// redirect('index.php');
		// }else{

			$id = $_GET['id'];

			$job = New Jobs();
			$job->delete($id);

			message("Job Vacancy has been Deleted!","info");
			redirect('index.php');

		// $id = $_POST['selector'];
		// $key = count($id);

		// for($i=0;$i<$key;$i++){

		// 	$category = New Category();
		// 	$category->delete($id[$i]);

		// 	message("Category already Deleted!","info");
		// 	redirect('index.php');
		// }
		// }
		
	}
?>