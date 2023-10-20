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
  mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Google Fonts and Icons-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/seat.css">
    <title>Ticket Booking</title>
  </head>
  <body>
    <div class="center">
      <div class="tickets">
        <div class="ticket-selector">
          <div class="head">
            <div class="title wt">Select your seat</div>
          </div>
          <div class="seats">
            <div class="status">
              <div class="item wt">Available</div>
              <div class="item wt">Booked</div>
              <div class="item wt">Selected</div>
            </div>
            <div class="bus">
            <div class="all-seats">
              <!-- <input type="checkbox" name="tickets" id="s1" />
              <label for="s1" class="seat booked"></label> -->
              <div class="rows">
                <div class="seat" id="A-1">A1</div>
                <div class="seat" id="A-2">A2</div>
                <div class="seat" id="A-3">A3</div>
                <div class="seat" id="A-4">A4</div>
              </div>
              <div class="rows">
                <div class="seat" id="B-1">B1</div>
                <div class="seat" id="B-2">B2</div>
                <div class="seat" id="B-3">B3</div>
                <div class="seat" id="B-4">B4</div>
              </div>
              <div class="rows">
                <div class="seat" id="C-1">C1</div>
                <div class="seat" id="C-2">C2</div>
                <div class="seat" id="C-3">C3</div>
                <div class="seat" id="C-4">C4</div>
              </div>
              <div class="rows">
                <div class="seat" id="D-1">D1</div>
                <div class="seat" id="D-2">D2</div>
                <div class="seat" id="D-3">D3</div>
                <div class="seat" id="D-4">D4</div>
              </div>
              <div class="rows">
                <div class="seat" id="E-1">E1</div>
                <div class="seat" id="E-2">E2</div>
                <div class="seat" id="E-3">E3</div>
                <div class="seat" id="E-4">E4</div>
              </div>
              <div class="rows">
                <div class="seat" id="F-1">F1</div>
                <div class="seat" id="F-2">F2</div>
                <div class="seat" id="F-3">F3</div>
                <div class="seat" id="F-4">F4</div>
              </div>
              <div class="rows">
                <div class="seat" id="G-1">G1</div>
                <div class="seat" id="G-2">G2</div>
                <div class="seat" id="G-3">G3</div>
                <div class="seat" id="G-4">G4</div>
              </div>
              <div class="rows">
                <div class="seat" id="H-1">H1</div>
                <div class="seat" id="H-2">H2</div>
                <div class="seat" id="H-3">H3</div>
                <div class="seat" id="H-4">H4</div>
              </div>
              <div class="rows">
                <div class="seat" id="I-1">I1</div>
                <div class="seat" id="I-2">I2</div>
                <div class="seat" id="I-3">I3</div>
                <div class="seat" id="I-4">I4</div>
              </div>
              <div class="rows">
                <div class="seat" id="J-1">J1</div>
                <div class="seat" id="J-2">J2</div>
                <div class="seat" id="J-3">J3</div>
                <div class="seat" id="J-4">J4</div>
              </div>
              <div class="rows">
               <div class="seat-nokol seat" id="K-1">K1</div>
               <div class="seat-nokol seat" id="K-2">K2</div>
               <div class="seat-nokol seat" id="K-3">K3</div>
               <div class="seat-nokol seat" id="K-4">K4</div>
               <div class="seat-nokol seat" id="K-5">K5</div>
              </div>
            </div>
            </div>
          </div>
          <div class="timings">
            <div class="dates">
              <!-- Inside your HTML -->
                <div class="fetch wt">
                    <h2 class="wt">From</h2>
                    <?php echo $From; ?>
                </div>
                <div class="fetch wt">
                    <h2 class="wt">To</h2>
                    <?php echo $To; ?>
                </div>
                <div class="fetch wt">
                    <h2 class="wt">Departure</h2>
                    <?php echo $Departure; ?>
                </div>
                <div class="fetch wt">
                    <h2 class="wt">Arrival</h2>
                    <?php echo $Arrival; ?>
                </div>
              </div>
            </div>
            <div class="Text">
              <h2 class="wt">Select the time:</h2>
            </div>
            <div class="times">
              <input type="radio" name="time" id="t1" value="11:00" checked />
              <label for="t1" class="time">11:00</label>
              <input type="radio" name="time" id="t2" value="14:30"/>
              <label for="t2" class="time">14:30</label>
              <input type="radio" name="time" id="t3" value="18:00"/>
              <label for="t3" class="time">18:00</label>
              <input type="radio" name="time" id="t4" value="21:30"/>
              <label for="t4" class="time">21:30</label>
            </div>
          </div>
          <form action="seats.php" method="POST" class="my-form">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name..">
            </div>
            <div class="form-group">
              <label for="contact">Contact</label>
               <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Email/phone">
             </div>
            <div class="price">
              <div class="total">
                <span> <span class="count">0</span> Tickets </span>
                <div class="amount">0</div>
              </div>
              <button id="btn" class="btn btn-primary">Book</button>
            </div>
          </form>

        </div>
      </div>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>