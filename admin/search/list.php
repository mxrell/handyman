<?php
if(!isset($_SESSION['ADMIN_USERID'])){
    redirect(web_root."admin/index.php");
}
?> 
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">List of Freelancer's</h1>
    </div>
</div>
<form class="wow fadeInDown action" action="controller.php?action=delete" method="POST">
    <div class="table-responsive">
    <table id="dash-table" class="table table-striped table-hover table-responsive" style="font-size:12px" cellspacing="0">
        <thead>
            <tr>
                <th>Freelancer</th>
                <th>Featured Skills</th>
            	<th>Contact No.</th>
            	<th>Email</th>
            	<th>Address</th>
                <th>Reviews</th>
            </tr>
        </thead>
        <tbody>
            <?php   
            $mydb->setQuery("SELECT * FROM `tblapplicants`");
            $cur = $mydb->loadResultList();
            foreach ($cur as $result) { 
                echo '<tr>';
                echo '<td>'.$result->FNAME . ' ' . $result->LNAME.'</td>';
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
                    echo '<td>' . implode(', ', $skills) . '</td>';
                } else {
                    echo '<td>This user has not provided skills yet.</td>';
                }
                echo'<td>'.$result->CONTACTNO.'</td>';
                echo '<td><a href="mailto:' . $result->EMAILADDRESS . '">' . $result->EMAILADDRESS . '</a></td>';
                echo '<td><a href="https://www.google.com/maps/search/'.$result->ADDRESS.'" target="_blank">'.$result->ADDRESS.'</a></td>';
                echo '<td align="center">
                            <a title="View" href="index.php?view=view&id='.$result->APPLICANTID.'"  class="btn btn-info btn-xs  "><span class="fa fa-info fw-fa"></span> View</a> 
                            </a></td>';
                echo '</tr>';
            } 
            ?>
        </tbody>
    </table>
    </div> 
</form>
