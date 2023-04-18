
    <section id="content">
        <div class="container content">      
     
 <?php
 if (isset($_GET['search'])) {
     # code...
    $jobid = $_GET['search'];
 }else{
     $jobid = '';

 }

    $sql = "SELECT * FROM tblcompany c, tbljob j WHERE c.COMPANYID = j.COMPANYID AND j.JOBID = '" . $jobid . "' ORDER BY j.DATEPOSTED DESC";
    $mydb->setQuery($sql);
    $cur = $mydb->loadResultList();


    foreach ($cur as $result) {
        # code...
 
 // `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `PREFEREDSEX`, `SECTOR_VACANCY`, `DATEPOSTED`
  ?> 
           <div class="container">
             <div class="mg-available-rooms">
                    <h5 class="mg-sec-left-title">Date Posted :  <?php echo date_format(date_create($result->DATEPOSTED),'M d, Y'); ?></h5>
                        <div class="mg-avl-rooms">
                            <div class="mg-avl-room">
                                <div class="row">
                                   
                                    <div class="col-sm-10">
                                       <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;"><?php echo ($result->OCCUPATIONTITLE); ?>
 
                                        </div> 
                                        <div class="row contentbody">
                                            <div class="col-sm-6">
                                                <ul>
                                                    <li>Salary : <?php echo number_format($result->SALARIES,2);  ?></li>
                                                    <li>Duration of Employment : <?php echo $result->DURATION_EMPLOYEMENT; ?></li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-12">
                                                <p>Qualification/Work Experience :</p>
                                                 <ul style="list-style: none;"> 
                                                    <li><?php echo ($result->QUALIFICATION_WORKEXPERIENCE); ?></li>

                                                </ul> 
                                            </div>
                                            <div class="col-sm-12"> 
                                                <p>Job Description:</p>
                                                <ul style="list-style: none;"> 
                                                     <li><?php echo ($result->JOBDESCRIPTION); ?></li>

                                                </ul> 
                                             </div>
                                            <div class="col-sm-12">											 
                                               <p>Client: </p>
											   <ul style="list-style: none;">
													<li><?php echo ($result->client_user); ?></li>
											   </ul>
                                               <p>Location:</p>
											   <ul style="list-style: none;">
													<li> <?php echo ($result->job_address); ?></li>
											   </ul>
                                            </div>
                                        </div>
                                          <a href="<?php echo web_root; ?>index.php?q=apply&job=<?php echo $result->JOBID;?>&view=personalinfo" class="btn btn-main btn-next-tab">Apply Now !</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
            </div>                        

     
<?php  } ?>    </div>
    </section> 