<?php

require_once('_conn.php');
session_start();

if (isset($_POST['mine']) && isset($_POST['submit'])) {

  $_uid = $_SESSION['id']; // the user's id

  $currentDate = date('Y-m-d H:i:s'); // today's date

  // update the users table in the database
  // it will update the [last_mine] column and set it to today's date
  $sql = mysqli_query($conn, "UPDATE users SET last_mine = '$currentDate' WHERE id = '$_uid'");

  header('location: ./');
} else {
  header('location: https://www.google.com');
}
