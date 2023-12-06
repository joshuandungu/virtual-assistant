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

    <center><h3><b><u>services</u></b></h3>
    <h1> Whats New today</h1></center>
            
                
                <?php

                include 'includes/connection.php';

$cid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from  tblservices where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <table class="assistant" border="20px" cellspacing="5px" contextmenu="outputSample" onresize="img-responsive" width="fullscreen">
                    <tr>
                 <td><img src="admin/images/<?php echo $row['Image']?>" alt="product" height="250" width="250" class="img-responsive about-me"></td>
                 <td>
                    
                        <strong><u><b><h2 class="para">Service:<?php  echo $row['ServiceName'];?></h2></b></u></strong><br><hr>
                        <h3 class="para">Last Updated:<?php  echo $row['CreationDate'];?></h3><br><hr>
                         <h3 class="para"> Cost $:<?php  echo $row['Cost'];?></h3>
                          
                        <td><button class="btn"><a href="book.php?bookid=<?php  echo $row['ID'];?>" class="btn-danger">Book  Now</a></button>
                            <br><hr>
                        </td>
                    </td>

                        
                </tr>
                </table>
                <table class="assistant" border="10px">
                    <tr><p>
                        <center>
                     <td>
                        <h3 class="para"> What does the service entails</h3>
                        <p><?php  echo $row['ServiceDescription'];?></td></p>
                    </td>
                </center>
                </p>
            </tr>
                </table>
                
                <br>
                <?php 
}?>
                
            
        </table>
    </div>
    
</body>
<?php include_once('includes/footer.php');?>





<?php include_once('includes/footer.php');?>