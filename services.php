<?php

session_start();
    require("includes/connection.php");

    if(!isset($_SESSION['username'])){
        header("location: clientlogin1.php");
        die();
    }
?>







<?php include_once('includes/header.php');?>



    <div>

    <center><h3><b><u>Sevices We Offer</u></b></h3></center>
            
                <div class="gallery">
                <?php

                include 'includes/connection.php';
                

$ret=mysqli_query($con,"select * from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

<div class="gallery-items">
                <table class="assistant" border="20px" cellspacing="5px" contextmenu="outputSample" onresize="img-responsive" width="fullscreen">
                    <tr><td>
                        <center>
                 <img src="admin/images/<?php echo $row['Image']?>" alt="product" height="300px" width="400px" class="img-responsive about-me">
                 
                    <hr>
                        <strong><u><b><h2 class="para">Service:<?php  echo $row['ServiceName'];?></h2></b></u></strong><br><hr>
                        <h3 class="para">Last Updated:<?php  echo $row['CreationDate'];?></h3><br><hr>
                         <h3 class="para"> Cost $:<?php  echo $row['Cost'];?></h3>
                        <button class="btn"><a href="view.php?viewid=<?php  echo $row['ID'];?>" class="btn-danger">View More</a></button>
                            <br><hr>
                        </td></center>
                        
                    
                        
                </tr>
                </table>
                
                <br>
            </div>
                <?php 
}?>

</div>
                
            
        </table>
    </div>
    
</body>
<?php include_once('includes/footer.php');?>