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

    <center><h3><b><u>Home</u></b></h3>
    
            
                
                <?php

                include 'includes/connection.php';
                

$ret=mysqli_query($con,"select * from  tblpage where PageType='home'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                <table class="assistant" border="5pxpx"  contextmenu="outputSample" onresize="img-responsive" width="fullscreen">
                  <h1> <?php  echo $row['PageTitle'];?></h1></center>
                  <tr>
                   <thead> <h1> What is the need and importance of having a virtual assistant</h1></center></thead>
               <center >  
                  <h3 class="para"> Last Updated:<?php  echo $row['date'];?></h3> <br></center>
                  <hr>
                    
                 <td><img src="admin/images/<?php echo $row['image']?>" alt="product" height="250px" width="250px" class="img-responsive about-me"><td>
                 
                    
                    <hr>
                    
                        <td>  <p class="para" rows="10"><?php  echo $row['PageDescription'];?></p></td>
                        
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