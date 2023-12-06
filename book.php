<?php

session_start();
    require("includes/connection.php");

    if(!isset($_SESSION['username'])){
        header("location: clientlogin1.php");
        die();
    }
?>





<?php

include 'includes/connection.php';
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
     include 'includes/connection.php';
     
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone_number=$_POST['phone_number'];
     $service=$_POST['service'];
     $package=$_POST['package'];


     
     $sql="select * from bookings where email='$email' and service='$service'";
     $result=mysqli_query($con,$sql);
     if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
             echo" You cannot book a one service twice";
             header('location:services.php');

            


        }
        else {
         
     $sql="insert into bookings(name,email,phone_number,service,package) values('$name','$email','$phone_number','$service','$package')";
     $result=mysqli_query($con, $sql);
     if($result){
        // 
        echo("Booking Successfully received");
        header('location:view_bookings.php');
     }
     else{
        die(mysqli_error($con));
     }

        }
     }

    
}
?>

<?php include_once('includes/header.php');?>


<?php
include 'includes/connection.php';
$cid=$_SESSION['user_id'];
$ret=mysqli_query($con,"select * from client where user_id ='$cid' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<form class="form-container"  action="book.php"   method="POST">
   <table class= contenteditable>
      <tr>
         <td>
<div class="form-group">
   <h3> Name</h3>
   <input type="text" name="name" placeholder="name" value="<?php echo $row['name'];?>"
    required>
</div>

<div class="form-group">
   <h3> Email</h3>
   <input type="text" name="email" placeholder="email" value="<?php echo $row['email'];?>"
    required>
</div>

<div class="form-group">
   <h3> Phone Number</h3>
   <input type="text" name="phone_number" placeholder="Phone number" value="<?php echo $row['phone_number'];?>" minlength="10" maxlength="15" required>
</div>


<?php
$cid=$_GET['bookid'];
include 'includes/connection.php';
$ret=mysqli_query($con, "select * from tblservices WHERE ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<div class="form-group">
   <h3> Service Name</h3>
   <input type="text" name="service" placeholder="name" value="<?php echo $row['ServiceName'];?>" required="true">
</div>


<div class="form-group">
                <p> Select your package
                  <select type="text" value="" name="package">
                    <option>Petite Perks Package $15.00  per hour 10 hours a month</option>
                    <option>Balance bliss package $20.00 per hour  20 hours a month</option>
                    <option>Supreme Deluxe Deal $25.00 per hour  30 hours a month</option>
                    
                  </select>
              </div>
           </p>
        </div>

        <center>
           <button class="btn" type="submit" value="submit">Book Now</button>
        </center>

     </td>



                  <?php
}?>

</tr>
</table>





                  <?php
}?>

   </form>



<?php  include_once('includes/footer.php');?>

