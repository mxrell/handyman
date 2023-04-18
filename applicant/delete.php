<?php

if (isset($_POST['ids'])) {
  $ids = $_POST['ids'];
  
  // Connect to the database
  $conn = new mysqli('localhost', '', '', 'handyman');
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }
  
  // Delete the rows from the database
  $sql = "DELETE FROM tbljobregistration WHERE REGISTRATIONID IN (" . implode(',', $ids) . ")";
  $result = $conn->query($sql);
  
  // Close the database connection
  $conn->close();
}

?>