<?php

$con = mysqli_connect("localhost", "root", "");
if(!$con){
    echo "No connection";
}

mysqli_select_db($con, 'busconstructor');

$From = $_POST['From'];
$To = $_POST['To'];
$Departure = $_POST['Deperture'];
$Arrival = $_POST['Arrival'];

$query = "INSERT INTO `userinfo` ( `From`, `To`, `Departure`, `Arrival`) VALUES ( '$From', '$To', '$Departure', '$Arrival');";

mysqli_query($con, $query);

header('location:seat.php');

mysqli_close($con);
?>