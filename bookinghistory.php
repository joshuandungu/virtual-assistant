<?php  
session_start();
    require("connection.php");

    if(!isset($_SESSION['username'])){
        header("location: login.php");
        die();
    }
    
?>
<?php include_once("bookingpageheader.php");?>


<?php
    include 'connection.php';
    
?>



<body>
    <center font-size="50px" font="bold"><h1> View the current booking history</h1></center>
    <br>
    <div class="container table-responsive-md">
        <table class="table table-bordered table-hover table-striped">
  <thead>
    <tr class="table-danger">
     <th scope="col">ID</th>
      <th scope="col">Client name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Event Name</th>
      <th scope="col">Location</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Photographer Booked</th>
      <th scope="col">Appointment number</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql = "Select * from `bookings`";
  $result= mysqli_query($con,$sql);

  if($result){
    while($row=mysqli_fetch_assoc($result)) {
        $ID = $row['ID'];
        $clientname = $row['clientname']; 
        $email = $row['email'];
        $phone_number = $row['phone_number'];
        $EventName = $row['EventName'];
        $location = $row['location'];
        $date = $row['date'];
        $time = $row['time'];
        $photographer_booked = $row['photographer_booked'];
        $appointment_number = $row['appointment_number'];
        
        echo '
        <tr>
        <th scope="row">'.$ID.'</th>
        <td>'.$clientname.'</td>
        <td>'.$email.'</td>
        <td>'.$phone_number.'</td>
        <td>'.$EventName.'</td>
        <td>'.$location.'</td>
        <td>'.$date.'</td>
        <td>'.$time.'</td>
        <td>'.$photographer_booked.'</td>
        <td>'.$appointment_number.'</td>

        <td>
        
        </td>
      </tr>
            '
            ;
    }
  }
  ?> 
  </tbody> 
</table>
    </div>
<script src="js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>







<?php include_once("footer.php");?>