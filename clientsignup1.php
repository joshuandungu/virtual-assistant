





<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
     include 'includes/connection.php';
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone_number=$_POST['phone_number'];
     $location=$_POST['location'];
     $username=$_POST['username'];
     $password=$_POST['password'];


     $sql="select * from client where email='$email' and password='$password'";
     $result=mysqli_query($con,$sql);
     if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            // echo"User already exist";
            $user=1;


        }
        else {
     $sql="insert into client(name,email,phone_number, location,username,password) values('$name','$email','$phone_number','$location','$username','$password')";
     $result=mysqli_query($con, $sql);
     if($result){
        // 
        $success=1;
        header('location:clientlogin1.php');
     }
     else{
        die(mysqli_error($con));
     }

        }
     }

    
}
?>











<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photographer Website</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
        <center><h1>Virtual Assistant Website</h1></center>
      <nav>
        <div class="container">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="services.php">services</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="view_bookings.php">View Bookings</a></li>
            <li><a href="contact1.php">Contact</a></li>
            <li> <a href="logout.php">Logout</a></li>
            
          </ul>
        </div>
      </nav>

      <div class="hero">
        <div class="container">
          
        
        </div>
      </div>
    </header>




<?php 

if($user){
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong> Oh no sorry</strong> User already exist <button type="button"  class="close" data_dismiss="alert" aria-label="close">
    <span aria-hidden="true"></span>
    </button
    </div>';
} 
?>

<?php 

if($success){
    echo'<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>You have successfully signed up</strong>  <button type="button"  class="close" data_dismiss="alert" aria-label="close">
    <span aria-hidden="true">$times;</span>
    </button
    </div>';
} 
?>



    <h1 align-items="center"> signup as a Client  </h1>
                      

                      
                      
           <align-items-right>
           <!-- Signup Form -->
           <div class="form-container">
             <form class="form" action="clientsignup1.php" method="POST">
               <h2>Sign Up</h2>
               <div class="form-group">
                 <input type="text" name="name" placeholder="Name" required>
               </div>
               
               <div class="form-group">
                 <input type="email" name="email" placeholder="Email" required>
               </div>
               <div class="form-group">
                 <input type="text" name="phone_number" placeholder="Phone Number"  minlength="10" maxlength="15"   required>
               </div>

               <div class="form-group"   >
                   

                   <td><h2>Choose location</h2>

                <select type = "text" value="" name="location">


                 <option>Mombasa</option>
                 <option> Kwale </option>
                 <option>Kilifi </option>
                 <option>Tana River</option>
                 <option>Lamu</option> 
                 <option>Taita Taveta</option>
                 <option>Garissa</option>
                 <option>Wajir</option>
                 <option>Mandera</option>
                 <option>Marsabit</option> 
                 <option>Isiolo</option>
                 <option>Meru</option> 
                 <option> Tharaka Nithi</option>
                 <option>Embu</option>
                 <option>Kitui</option>
                 <option>Machakos</option>
                 <option> Makueni</option>
                 <option>Nyandarua </option>
                 <option>Nyeri</option> 
                 <option>Kirinyaga</option>
                 <option>Murang’a </option>
                 <option>Kiambu</option>
                 <option>Turkana </option>
                 <option>West Pokot</option>
                 <option>Samburu </option>
                 <option>Trans Nzoia</option> 
                 <option>Uasin Gishu</option>
                 <option>Elgeyo/Marakwet</option>
                 <option>Nandi</option>
                 <option>Baringo</option> 
                 <option>Laikipia</option>  
                 <option>Nakuru</option>
                 <option>Narok</option>
                 <option>Kajiado</option>
                 <option>Kericho<option>
                 <option>Bomet</option>
                 <option>Kakamega</option>
                 <option>Vihiga </option>
                 <option>Bung’oma</option>
                 <option>Busia</option> 
                 <option>Siaya</option>
                 <option>Kisumu</option>
                 <option>Homa Bay</option>
                 <option>Migori</option>
                 <option>Kisii.</option>
                 <option>Nyamira</option>
                <option> Nairobi City</option>
                </option></option></select>
               </div>

               <div class="form-group">
                <input type="text" name="username" placeholder="username" required>
              </div>
               <div class="form-group">
                 <input type="password" name="password" placeholder="Password" required>
               </div>
               <button type="submit">Sign Up</button>
               <div class="form-footer">
                 <span>Already have an account?</span>
                 <a href="clientlogin1.php">Login</a>
               </div>
               </form>
              </td>
              </tr>
            </table>
          </align-items-right>
                        </div>

                        
                             <?php include_once('footer.php');?>

                             