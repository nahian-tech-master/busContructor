<?php
  $con = mysqli_connect("localhost", "root", "","busconstructor");
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT Seat_name FROM booked_seats";
  $seatNames = array();
  $result = mysqli_query($con, $sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      // Split the Seat_name string by a comma and trim each element
      $names = explode(',', $row["Seat_name"]);
      $names = array_map('trim', $names);
      $seatNames = array_merge($seatNames, $names);
    }
  }
    $jsonData = json_encode($seatNames);
    echo $jsonData;
?>