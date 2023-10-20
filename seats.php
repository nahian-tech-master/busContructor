<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'));
    
    if ($data !== null) {
        $name = $data->name;
        $contact = $data->contact;
        $T = $data->time;
        $am =$data->amount;
        
        // Database connection
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "busconstructor";
        
        $conn = new mysqli($host, $username, $password, $database);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $selectedSeats = implode(', ', $data->selectedSeats);
        $size = count($data->selectedSeats);
        
        $sql = "INSERT INTO `booked_seats` (`Name`, `No_seats`, `Seat_name`, `Contact`, `Time`,`Amount`) VALUES ('$name', '$size', '$selectedSeats', '$contact', '$T','$am')";
        
        if ($conn->query($sql) === TRUE) {
            $response = [
                'success' => true,
                'message' => "Seats booked successfully.",
            ];
        } else {
            $response = [
                'success' => false,
                'message' => "Error: " . $conn->error,
            ];
        }
        
        $conn->close();
    } else {
        $response = [
            'success' => false,
            'message' => 'Invalid JSON data.',
        ];
    }
} else {
    $response = [
        'success' => false,
        'message' => 'Invalid request method.',
    ];
}
?>
<?php
    $con = mysqli_connect("localhost", "root", "","busconstructor");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to get the last row in the table
    $query = "SELECT * FROM userinfo ORDER BY `Serial.no` DESC LIMIT 1";

    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        $From = $row['From'];
        $To = $row['To'];
        $Departure = $row['Departure'];
        $Arrival = $row['Arrival'];
    } else {
        echo "No records found.";
    }
    $query2= "SELECT * FROM Booked_seats ORDER BY `User_id` DESC LIMIT 1";
    $result2 = mysqli_query($con, $query2);

    if (mysqli_num_rows($result2) > 0) {
        $row2 = mysqli_fetch_assoc($result2);

        $Name = $row2['Name'];
        $number = $row2['No_seats'];
        $all = $row2['Seat_name'];
        $Contact = $row2['Contact'];
        $Time = $row2['Time'];
        $amount = $row2['Amount'];
    } else {
        echo "No records found.";
    }
    mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Nahian poribohon</title>
</head>
<body>
    <div class="container">
        <div class="upper-body">
            <h1>Congratulation!!</h1>
            <h2>Your Booking has Completed!</h2>
        </div>
        <div class="lower-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Departure</th>
                    <th scope="col">Arrival</th>
                    <th scope="col">Number_seat</th>
                    <th scope="col">Seats_id</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php
                                echo $Name;
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $Contact;
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $From;
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $To;
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $Departure;
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $Arrival;
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $number;
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $all;
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $amount;
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $Time;
                            ?>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>