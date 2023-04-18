<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
        Dashboard
      <small>Control panel</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content" style="margin-bottom: -80px;">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <?php
        // Query to retrieve the number of categories from tbljob
          $sql = "SELECT COUNT(DISTINCT category) AS num_categories FROM tbljob WHERE client_user='{$singleuser->FULLNAME}'";
          $mydb->setQuery($sql);
          $cur = $mydb->loadResultList();

          // Check if the query was successful and if there are any results
          if ($cur && count($cur) > 0) {
            // Retrieve the number of categories
            $num_categories = $cur[0]->num_categories;
          } else {
            // Handle the error or set the number of categories to 0
            $num_categories = 0;
          }

          // Display the number of categories in the h3 tag
          echo '<div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>'.$num_categories.'</h3>
                <p>Job Vacancies</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="../admin/vacancy/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>';
        ?>
        <!-- ./col -->
         <?php
        // Query to retrieve the number of categories from tbljob
          $sql = "SELECT COUNT(DISTINCT c_id) AS num_categories FROM tblemployees WHERE c_id ='{$singleuser->USERID}'";
          $mydb->setQuery($sql);
          $cur = $mydb->loadResultList();

          // Check if the query was successful and if there are any results
          if ($cur && count($cur) > 0) {
            // Retrieve the number of categories
            $num_categories = $cur[0]->num_categories;
          } else {
            // Handle the error or set the number of categories to 0
            $num_categories = 0;
          }

          // Display the number of categories in the h3 tag
          echo '<div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>'.$num_categories.'</h3>
                <p>Hired Freelancers</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="../admin/employee/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>';
        ?>
        <!-- ./col -->
        <?php
        // Query to retrieve the number of categories from tbljob
          $sql = "SELECT COUNT(DISTINCT APPLICANT) AS num_categories FROM tbljobregistration WHERE c_id ='{$singleuser->USERID}'";
          $mydb->setQuery($sql);
          $cur = $mydb->loadResultList();

          // Check if the query was successful and if there are any results
          if ($cur && count($cur) > 0) {
            // Retrieve the number of categories
            $num_categories = $cur[0]->num_categories;
          } else {
            // Handle the error or set the number of categories to 0
            $num_categories = 0;
          }

          // Display the number of categories in the h3 tag
          echo '<div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>'.$num_categories.'</h3>
                <p>Freelancers Applications</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="../admin/applicants/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>';
        ?>

        <!-- ./col -->
        <?php
        // Query to retrieve the number of categories from tbljob
         $sql = "SELECT COUNT(*) AS num_pending FROM tbljobregistration WHERE c_id = '{$singleuser->USERID}' AND STATUS = 'Pending'";

          $mydb->setQuery($sql);
          $cur = $mydb->loadResultList();

          // Check if the query was successful and if there are any results
          if ($cur && count($cur) > 0) {
            // Retrieve the number of categories
            $num_pending = $cur[0]->num_pending;
          } else {
            // Handle the error or set the number of categories to 0
            $num_pending = 0;
          }

          // Display the number of categories in the h3 tag
          echo '<div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3>'.$num_pending.'</h3>
                <p>Pending Applications</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="../admin/applicants/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>';
        ?>
      </div>
    </section>
    <!-- ./col -->
    <section class="content-header">
      <h1>Featured Freelancers</h1>
    </section>
    <div class="row">
      </div>
        <section class="content">
            <div class="col-sm-12">
                <div class="featured-freelancers-container" style="height: 400px; overflow-y: auto;">
                    <?php
                    $sql = "SELECT * FROM `tblapplicants` LIMIT 9";
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                        ?>
                        <div class="col-sm-4">
                            <div class="info-blocks" style="height: 350px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                                    background-color: #f7f7f6; padding: 20px;">
                                <div style="text-align: left;">
                                    <?php
                                    if (!empty($result->APPLICANTPHOTO) && file_exists('../applicant/' . $result->APPLICANTPHOTO)) {
                                        $photo = '../applicant/' . $result->APPLICANTPHOTO;
                                    } else {
                                        $photo = '../applicant/photos/default.png';
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
    </section>

    
    <!-- right col -->


   
  