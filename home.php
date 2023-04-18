<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/01635c9e18.js" crossorigin="anonymous"></script>
</head>
<style>
  .button1 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 12px 25px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 27%;
  height: 50px;
  font-weight: normal;
}

.button1:hover {
  background-color: #555;
  text-decoration: none;
  color: white;
}
</style>
<section id="banner">
  <!-- Slider -->
    <div id="main-slider" class="flexslider">
      <ul class="slides">
        <li>
          <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1.jpg" alt="" />
          <div class="flex-caption">
            <h3>Handyman</h3> 
              <p>We connect freelance job-seekers</p> 
            </div>
        </li>
        <li>
          <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/2.jpg" alt="" />
          <div class="flex-caption">
            <h3>Handyman</h3> 
            <p>Find the perfect freelancer for any project.</p>        
          </div>
        </li>
      </ul>
    </div>
  <!-- end slider -->
  </section> 
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Work Hard Anywhere</h3>
          <p>The availability to work anywhere enables individuals to take their careers to any location of their choosing, granting unparalleled flexibility and independence. Being able to work from anywhere in the world provides the ultimate level of freedom in terms of location. If you're looking to bring your job along with you or work in the place that brings you the most joy, this guide offers all the information you need on work-from-anywhere opportunities, including where to find them.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="content">  
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aligncenter"><h2 class="aligncenter">Latest Job Vacancies</h2></div><br/>
          </div>
        </div>
<?php       
      $sql = "SELECT * FROM `tblcompany` c,`tbljob` j WHERE c.`COMPANYID`=j.`COMPANYID`   ORDER BY DATEPOSTED DESC LIMIT 6" ; // select all data from tbljob table with a limit of 6 rows
      $mydb->setQuery($sql); // set the SQL query in the $mydb object
      $comp = $mydb->loadResultList(); // execute the query and load the result in the $comp variable as a list
      foreach ($comp as $company ) { // iterate through each row in the $comp list
?>
          <div class="col-sm-4 info-blocks">
            <div class="info-blocks-in" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);" >
                  <h3><i class="fa-solid fa-briefcase"></i> <?php echo ($company->OCCUPATIONTITLE);?></h3>
                  <p>Client : <?php echo $company->client_user;?></p>
                  <p>Location : <?php echo ($company->job_address);?></p>
                  <p>Email : <a href = "mailto: <?php echo $company->client_email?>"><?php echo $company->client_email?></a>
                  <p>Contact No. : <?php echo $company->client_no;?></p>
                  <a href="<?php echo web_root; ?>index.php?q=apply&job=<?php echo $company->JOBID;?>&view=personalinfo" class="btn btn-primary">Apply Now !</a>
              </div>
            <br>
          </div>
<?php 
  } // end of foreach loop
?>
    </div>
  </section><br><br>
<?php 
if (isset($_SESSION['APPLICANTID'])) {
?>
<section id="content" style="background-color: #f7f7f6;">
  <section class="section-padding">
    <div class="container">
      <div class="row showcase-section">
        <div class="col-md-6">
          <img src="plugins/home-plugins/img/works/4.jpg" alt="" width="100%">
        </div>
        <div class="col-md-6">
          <div class="about-text" style="font-size: 16px;">
            <h3>Start Earning Today</h3>
            <div style="font-weight: 600;">
              <p><i class="fa-solid fa-check fa-xl"></i> Work on your terms</p>
              <p><i class="fa-solid fa-check fa-xl"></i> Connect with clients and build your career</p>
              <p><i class="fa-solid fa-check fa-xl"></i> Freedom to work anywhere</p>
              <p><i class="fa-solid fa-check fa-xl"></i> Get hired for your skills</p>
              <a href="index.php?q=hiring" class="button1">Start Here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><br>
</section>
<?php }else{ ?>
<section id="content" style="background-color: #f7f7f6;">
  <section class="section-padding">
    <div class="container">
      <div class="row showcase-section">
        <div class="col-md-6">
          <img src="plugins/home-plugins/img/works/7.jpg" alt="" width="100%">
        </div>
        <div class="col-md-6">
          <div class="about-text" style="font-size: 16px;">
            <h3>Join Our Community of Freelancers</h3>
            <div style="font-weight: 600;">
              <p><i class="fa-solid fa-check fa-xl"></i> Work on your terms</p>
              <p><i class="fa-solid fa-check fa-xl"></i> Connect with clients and build your career</p>
              <p><i class="fa-solid fa-check fa-xl"></i> Freedom to work anywhere</p>
              <p><i class="fa-solid fa-check fa-xl"></i> Get hired for your skills</p>
              <a href="index.php?q=register" class="button1">Join Now</a>
            </div>
          </div>
        </div>
      </div>
    </div><br>
  </section>
</section>
<?php } ?>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">Featured Freelancers</h2></div><br/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="featured-freelancers-container" style="height: 360px; overflow-y: auto;">
                    <?php
                    $sql = "SELECT * FROM `tblapplicants` LIMIT 12";
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                        ?>
                        <div class="col-sm-4">
                            <div class="info-blocks" style="height: 350px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                                    background-color: #f7f7f6; padding: 20px;">
                                <div style="text-align: left;">
                                    <?php
                                    if (!empty($result->APPLICANTPHOTO) && file_exists('applicant/' . $result->APPLICANTPHOTO)) {
                                        $photo = 'applicant/' . $result->APPLICANTPHOTO;
                                    } else {
                                        $photo = 'applicant/photos/default.png';
                                    }
                                    ?>
                                    <img src="<?php echo $photo ?>" style="width:40%; border-radius: 50%;">
                                    <h4><?php echo $result->FNAME . ' ' . $result->LNAME; ?></h4>
                                    <p>Email : <a href="mailto:<?php echo $result->EMAILADDRESS ?>"><?php echo $result->EMAILADDRESS ?></a>
                                        <br>Contact No. : <?php echo $result->CONTACTNO; ?>
                                    </p>
                                    <p><b>Featured Skills:</b><br>
                                    <?php
                                    $skills = [];
                                    if (!empty($result->SKILL1)) {
                                        $skills[] = $result->SKILL1;
                                    }
                                    if (!empty($result->SKILL2)) {
                                        $skills[] = $result->SKILL2;
                                    }
                                    if (!empty($result->SKILL3)) {
                                        $skills[] = $result->SKILL3;
                                    }
                                    if (!empty($skills)) {
                                        echo implode(', ', $skills);
                                    } else {
                                        echo 'This user has not provided skills yet.';
                                    }
                                    ?>
                                    </p>
                                </div>
                            </div><br>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br><br>


