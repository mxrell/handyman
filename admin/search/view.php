<?php
if (!isset($_SESSION['ADMIN_USERID'])) {
    redirect(web_root."admin/index.php");
}
if(isset($_GET['id'])) {
  // Get the value of the id parameter
  $id = $_GET['id'];
}
function getStars($rating) {
    switch($rating) {
        case 1:
            return "⭐";
        case 2:
            return "⭐⭐";
        case 3:
            return "⭐⭐⭐";
        case 4:
            return "⭐⭐⭐⭐";
        case 5:
            return "⭐⭐⭐⭐⭐";
        default:
            return "";
    }
}
?>
<style>
.dataTables_filter {
    display: none;
}
.dataTables_length {
  display: none;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Reviews</h1>
    </div>
</div>

<?php
$sql = "SELECT * FROM tblreviews WHERE applicant_id = $id";
$mydb->setQuery($sql);
$cur = $mydb->loadResultList();

if (count($cur) == 0) {
    echo "<p>No reviews to show.</p>";
} else {
?>
<div class="table-responsive">
    <table id="dash-table" class="table table-striped table-hover table-responsive" style="font-size:12px" cellspacing="0">
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Feedback</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($cur as $result) {
            ?>
            <tr>
                <td><?php echo $result->client_name; ?></td>
                <td><?php echo $result->fdmsg; ?></td>
                <td><?php echo getStars($result->rating); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php } ?>
