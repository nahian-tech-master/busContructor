<?php

$con = mysqli_connect('localhost', 'root');
if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'buscontructor');

$From = $_POST['From'];
$To = $_POST['To'];
$Deperture = $_POST['Deperture'];
$Arrival = $_POST['Arrival'];

$query = "insert into userinfodata (From, To, Deperture, Arrival) values('$From','$To','$Deperture','$Arrival')";

mysqli_query($con, $query);

header('location:index.php');

?>