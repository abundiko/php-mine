<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$conn ? $connected = "connected" : $connected = "disconnected";
