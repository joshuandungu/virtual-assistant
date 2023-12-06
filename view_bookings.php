<?php  
session_start();
    require("includes/connection.php");

    if(!isset($_SESSION['username'])){
        header("location: clientlogin1.php");
        die();
    }
    
?>
<?php include_once("includes/header.php");?>





<?php
include 'includes/connection.php';
if($_GET['delid']){
$sid=$_GET['delid'];
mysqli_query($con,"delete from bookings where appointment_number ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='view_bookings.php'</script>";
          }


?>



<body>
    <center font-size="50px" font="bold"><h1> View the current booking history</h1></center>
    <br>
   

    <div class="container table-responsive-md">
        <table class="table table-bordered table-hover table-striped">
            

            <center><h1> View your booking history </h1></center><hr> <br><br>
        

        <center>
            <form class="form-group" action="bookinghistory.php"  method="POST">

                <table class="assistant">
                    <tr>
                        
                        <td>
                            <input type="text" placeholder="search" name="search"></td>
                            <td><button class="btn" value="search" type="submit" placeholder="search">Search</button></td>
                        
                    </tr>
                </table>

            </form>
        </center>
        

        
        <?php

        include'includes/connection.php';
        
if(isset($_POST['search']))
{ 

$sdata=$_POST['search'];
  ?>
  <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> 
  
                        
<?php
$ret=mysqli_query($con,"select  name, email, phone_number,service, package ,date, time, appointment_number from bookings  where name  like'%$sdata%' || email like '%$sdata%' || phone_number like '%$sdata%' || service like '%$sdata%' || package like '%$data%' || date like '%$sdata%' || time like '%$sdata%' || appointment_number  like '%$sdata%'");


$num=mysqli_num_rows($ret);

if($num>0){
    $msg ="Below are records found for your search";
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<table class="assistant" border="20px"  contextmenu="outputSample" onresize="img-responsive" width="fullscreen">
        <center>
        <tr>
            <td>
                <strong><b><u><h3> Name</h3></u></b></strong><br><hr>
                <?php echo $row['name'];?>
            </td>
            <td>
                <strong><b><u><h3> Email</h3></u></b></strong><br><hr>
                <?php echo $row['email'];?>
            </td>
            <td>
                <strong><b><u><h3> Phone Number</h3></u></b></strong><br><hr>
                <?php echo $row['phone_number'];?>
            </td>
            <td>
                <strong><b><u><h3> Service</h3></u></b></strong><br><hr>
                <?php echo $row['service'];?>
            </td>
        
            <td>
                <strong><b><u><h3> Package</h3></u></b></strong><br><hr>
                <?php echo $row['package'];?>
            </td>
            <td>
                <strong><b><u><h3> Date</h3></u></b></strong><br><hr>
                <?php echo $row['date'];?>
            </td>
            <td>
                <strong><b><u><h3> Time</h3></u></b></strong><br><hr>
                <?php echo $row['time'];?>
            </td>
            <td>
                <strong><b><u><h3> Appointment Number</h3></u></b></strong><br><hr>
                <?php echo $row['appointment_number'];?>
            </td>

            <td>
                <button class="btn-btn"><a href="updatebooking.php?updateid=<?php echo $row['appointment_number'];?>"onClick="return confirm('Are you sure you want to update booking?')"></a>

                <button class="btn-danger"><a href="view_bookings.php?delid=<?php echo $row['appointment_number'];?>"onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>


        </tr>
</center>

    </table>



                        

                
                
                <?php 
}?>



                          </tr>   <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
   <td><center><h3>   No record found against this search</h3></center></td>

  </tr>
   
<?php  }?> 
 
  <tbody>

    <hr>  <br><br><br><br><br><br><hr>

    

  <?php
  include 'includes/connection.php';
  $name=$_SESSION['name'];
  $ret=mysqli_query($con,"select * from  bookings where name='$name'");
  $num=mysqli_num_rows($ret);
if($num>0){
    $msg ="Below are records found for your search";
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
    ?>


    <table class="assistant" border="20px"  contextmenu="outputSample" onresize="img-responsive" width="fullscreen">
        <center>

            <tr>
            <td>
                <strong><b><u><h3> Name</h3></u></b></strong><br><hr>
                <?php echo $row['name'];?>
            </td>
            <td>
                <strong><b><u><h3> Email</h3></u></b></strong><br><hr>
                <?php echo $row['email'];?>
            </td>
            <td>
                <strong><b><u><h3> Phone Number</h3></u></b></strong><br><hr>
                <?php echo $row['phone_number'];?>
            </td>
            <td>
                <strong><b><u><h3> Service</h3></u></b></strong><br><hr>
                <?php echo $row['service'];?>
            </td>
        
            <td>
                <strong><b><u><h3> Package</h3></u></b></strong><br><hr>
                <?php echo $row['package'];?>
            </td>
            <td>
                <strong><b><u><h3> Date</h3></u></b></strong><br><hr>
                <?php echo $row['date'];?>
            </td>
            <td>
                <strong><b><u><h3> Time</h3></u></b></strong><br><hr>
                <?php echo $row['time'];?>
            </td>
            <td>
                <strong><b><u><h3> Appointment Number</h3></u></b></strong><br><hr>
                <?php echo $row['appointment_number'];?>
            </td>

            <td>
                <button class="btn-btn"><a href="updatebooking.php?updateid=<?php echo $row['appointment_number'];?>"onClick="return confirm('Are you sure you want to update booking?')"></a>

                <button class="btn-danger"><a href="view_bookings.php?delid=<?php echo $row['appointment_number'];?>"onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>


        </tr>

        </center>
        

    </table>






 <?php }?>

</tr>   <?php 
$cnt=$cnt+1;
}  else { ?>
  <tr>
    <center>
   <td><h3> You have not made any booking </td> <br><br> <br>
    <td><a href="services.php">I want to see services</a></h3></td>
    </center>

  </tr>
   
<?php  }?> 


  
  </tbody> 
</table>
    </div>
<script src="js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>







<?php include_once("includes/footer.php");?>