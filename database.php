<?php
// Connect to Database
$con = mysqli_connect("localhost", "yourUsername", "yourPassword", "databaseName", "thePort");

// text connection
if(mysqli_connect_errno()) {
    echo 'Connection to database failed! '.mysqli_connect_error();
}