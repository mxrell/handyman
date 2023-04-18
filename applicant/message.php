  <style type="text/css">
    .mailbox-controls .btn {
      padding: 3px 8px;
      margin: 0px 2px;
    }
  </style>
<script>
  $(document).ready(function() {
  // Listen to the click event on the delete button
  $('.delete-button').click(function() {
    // Get all the selected rows
    var selectedRows = $('input[type=checkbox]:checked').closest('tr');
    
    // Get the IDs of the selected rows
    var selectedIDs = selectedRows.map(function() {
      return $(this).find('a').attr('href').split('=')[1];
    }).get();
    
    // Send an AJAX request to delete the selected rows
    $.ajax({
      type: 'POST',
      url: 'delete.php',
      data: { ids: selectedIDs },
      success: function(response) {
        // Refresh the page after deleting the rows
        location.reload();
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
      }
    });
  });
});
</script>
<?php 
if (!isset($_GET['p'])) {
  # code... 
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
              <h3 class="box-title">Messages</h3>
            </div>
            <div class="box-body no-padding">
              <div class="mailbox-controls">                     
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    <?php 
                        $sql = "SELECT * FROM `tblcompany` c,`tbljobregistration` j,`tblfeedback` f, `tbljob` jb 
						WHERE c.`COMPANYID`=j.`COMPANYID` AND j.`REGISTRATIONID`=f.`REGISTRATIONID` 
						AND j.`JOBID`=jb.`JOBID` AND `PENDINGAPPLICATION`=0 AND j.`APPLICANTID`='{$_SESSION['APPLICANTID']}'";

                        $mydb->setQuery($sql);
                        $cur = $mydb->loadResultList();
                        foreach ($cur as $result) {
                          # code...
                          echo '<tr>';
                          echo '<td class="mailbox-name"><a href="index.php?view=message&p=readmessage&id='.$result->REGISTRATIONID.'">'.$result->client_user.'</a></td>';
                          echo '<td class="mailbox-subject">'.$result->REMARKS.'</td>'; 
                          echo '<td class="mailbox-date">'.$result->DATETIMEAPPROVED.'</td>';
                          echo '</tr>';
                        }
                    ?> 
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
               
                </button>
                
                <!-- /.btn-group -->
                <a href="index.php?view=message" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></a>
                <div class="pull-right">
                  <!-- numbering below left n right button *1-50/200-->
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
   
 <?php }else{  
  require_once('readmessage.php');
 } ?>