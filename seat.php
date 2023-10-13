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
    <title>Ticket Booking</title>
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
    <link href="css/seat.css" rel="stylesheet"/>
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
              <div class="row">
                <div class="seat">A1</div>
                <div class="seat">A2</div>
                <div class="seat">A3</div>
                <div class="seat">A4</div>
              </div>
              <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>
              <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>
              <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>
              <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>
              <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>
              <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>
              <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>
              <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>
              <div class="row">
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
                <div class="seat"></div>
              </div>
              <div class="row">
                <div class="seat-nokol"></div>
                <div class="seat-nokol"></div>
                <div class="seat-nokol"></div>
                <div class="seat-nokol"></div>
                <div class="seat-nokol"></div>
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
            <div class="times">
              <input type="radio" name="time" id="t1" checked />
              <label for="t1" class="time">11:00</label>
              <input type="radio" id="t2" name="time" />
              <label for="t2" class="time"> 14:30 </label>
              <input type="radio" id="t3" name="time" />
              <label for="t3" class="time"> 18:00 </label>
              <input type="radio" id="t4" name="time" />
              <label for="t4" class="time"> 21:30 </label>
            </div>
          </div>
          <div class="price">
            <div class="total">
              <span> <span class="count">0</span> Tickets </span>
              <div class="amount">0</div>
            </div>
            <button type="button">Book</button>
          </div>
        </div>
      </div>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>