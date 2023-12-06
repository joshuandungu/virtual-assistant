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

    <center><h3><b><u>Blog</u></b></h3>
    <h1> Whats New today</h1></center>
            
                
                <?php

                include 'includes/connection.php';
                

$ret=mysqli_query($con,"select * from tblpage where PageType='blog'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <table class="assistant" border="20px" cellspacing="5px" contextmenu="outputSample" onresize="img-responsive" width="fullscreen">
                    
                <td> <img src="admin/images/<?php echo $row['image']?>" alt="product" height="500px" width="500px" class="img-responsive about-me"></td>
                 <td>
                    <strong><b><u><h3 class="para"><?php  echo $row['PageTitle'];?></h3></u></b></strong>
                    <hr>
                    <h3 class="para" rows="10"> Last Updated:<?php  echo $row['date'];?></h3> <br>
                          <p class="para"><?php  echo $row['PageDescription'];?></p></td>
                        </td>
                    </td>
                        
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