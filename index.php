<?php
require_once('_conn.php');
require_once('_functions.php');
session_start();
$_uid = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="_.php" method="POST">
    <input type="hidden" hidden value="mine" name="mine">
    <?php
    // get the [last_mine] date-time from the database for this user
    $sql = mysqli_query($conn, "SELECT last_mine FROM users WHERE id = '$_uid'");

    // get the last time this user clicked the mine button
    $lastMine = mysqli_fetch_assoc($sql)['last_mine'];

    // check if the last time mined is up to 24 hours
    $canMine = isMoreThan24HoursPast($lastMine);
    ?>
    <input type="submit" value="mine" name="submit" <?= !$canMine ? "disabled" : '' ?>>
  </form>
</body>

</html>