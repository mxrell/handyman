<?php 
  $id = isset($_GET['id']) ? $_GET['id'] : 0;

  // Set HVIEW to 1
  $sql="UPDATE `tbljobregistration` SET HVIEW=1 WHERE `REGISTRATIONID`='{$id}'";
  $mydb->setQuery($sql);
  $mydb->executeQuery();

  // Get data for display
  $sql = "SELECT * FROM `tblcompany` c,`tbljobregistration` jr,  `tbljob` j  WHERE c.`COMPANYID`=jr.`COMPANYID` AND jr.`JOBID`=j.`JOBID` AND `REGISTRATIONID`='{$id}'";
  $mydb->setQuery($sql);
  $res = $mydb->loadSingleResult();

  $applicant = new Applicants();
  $appl = $applicant->single_applicant($_SESSION['APPLICANTID']);

  // Delete record from tblfeedback via registrationid column
    if(isset($_POST['delete'])) {
    $registrationid = $_POST['feedbackid'];
    $sql = "DELETE FROM `tblfeedback` WHERE `registrationid`='{$registrationid}'";
    $mydb->setQuery($sql);
    $mydb->executeQuery();    
}
?> 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
  <!-- Main content -->
  <section class="content">
    <div class="row"> 
      <!-- /.col -->
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Read Message</h3> 
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-read-info">
              <h3><?php echo $res->OCCUPATIONTITLE; ?></h3>
              <h5>From: <?php echo $res->client_user; ?>
                <span class="mailbox-read-time pull-right"><?php echo date_format(date_create($res->DATETIMEAPPROVED),'d M. Y h:i a'); ?></span></h5>
            </div>    
            <div class="mailbox-controls with-border text-center">
            </div>
            <div class="mailbox-read-message">
              <p>Hello <?php echo $appl->FNAME; ?>,</p>  
                <p><?php echo $res->REMARKS; ?></p>
            </div>           
          </div>
          <div class="box-footer">
            <form method="post">
              <input type="hidden" name="feedbackid" value="<?php echo $res->REGISTRATIONID; ?>">
              <button type="submit" name="delete" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
            </form>
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>