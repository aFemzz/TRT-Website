<?php 
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "milestone");

    $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    if(!$connection){
        die("Connection Failed");
    }
    else{
        echo "Succeed!!";
        $query = "select * from 'students' ";
    }

?>

<!-- $query = "select * from 'students' ";

$result = mysqli_query($connection, $query); -->