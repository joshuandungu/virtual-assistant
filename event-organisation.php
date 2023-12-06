<?php  
session_start();
    require("includes/connection.php");
     

    if(!isset($_SESSION['username'])){
        header("location: login.php");
        die();
    }
    
?>

<?php include_once('includes/header.php');?>





    <body>

      <h1> Adaptable business solutions</h1>
      <h2> Virtual assistant services</h2>

      
      <div class="container" >
        <table class="assistant" border="20px" cellspacing="20px">
          <tr>

        <center><h1> Event Organising & Management</h1><br></center>
        <td>
        <img src="images/images/event-organisation.jpg"  width="410px"  height="350px"  alt="Service 3">
        </td>
        <td>

      <p>
        <strong><u><b>The Event Planning Process and steps</b></u></strong><br>

<ul>
<li>Determine your event goals and objectives.</li>
<li>Assemble your team.</li>
<li>Establish an event budget.</li>
<li>Choose a date & venue.</li>
<li>Select the speakers.</li>
<li>Event marketing & advertising.</li>
<li>Execute your event.</li>
</ul>
      
 
        </p>
<br> 
<div class="hero">
        <div class="container">
          <!-- Button to open the booking form -->
<button class="btn" onclick="openBookingForm()">Book Now</button>

<!-- The booking form as a modal dialog box -->
<div id="bookingForm" style="display: none;">
  
  <center>
    
                      <!-- Book form -->
                      

                      
                      <div class="form-container">
                        
                <form class="form" action="book.php" method="POST">
               <h2>Book Now</h2>
               <div class="form-group">
                 <input type="text" name="first_name" placeholder="First Name" required>
               </div>
               <div class="form-group">
                 <input type="text" name="last_name" placeholder="Last Name"      required>
               </div>

               <div class="form-group">
                 <input type="email" name="email" placeholder="Email" required>
               </div>
               <div class="form-group">
                <input type="text" name="phone_number" placeholder="Phone number" maxlength="15" required>
              </div>
              <div class="form-group">
                <div class="form-group">
                <p> SELECT SERVICE
                 <select type = "text" value="" name="service">
                 <option>Email Management</option>
                 <option>Diary Management</option>
                 <option>Social Media Support $ Management</option>
                <option>Calendar Management</option>
                <option> Photoshop</option>
                <option> Video Editing & Videography</option>
                <option> Graphics Design</option>
                <option>  Travel & Booking</option>
                <option> Administration & Data Entry</option>
                <option> Research Assistance</option>
                <option>  Real Estate Listings</option>
                <option> Event Organisation</option>
                <option> Employee Onboard Support</option>
                <option> Other Customised Solutions you may need</option>



                </select></p><br><br>
              </div>
              </div>
              <div class="form-group">
                <p> Select your package
                  <select type="text" value="" name="package">
                    <option>Petite Perks Package $15.00  per hour 10 hours a month</option>
                    <option>Balance bliss package $20.00 per hour  20 hours a month</option>
                    <option>Supreme Deluxe Deal $25.00 per hour  30 hours a month</option>
                    
                  </select>
              </div>
              
              <div class="form-group">
                <input type="date" name="date" placeholder="Date  DD/MM/YYYY" required>
              </div>
              <div class="form-group">
                <input type="time" name="time" placeholder="Time  HRS/MIN/SEC" required>
              </div>
              
              <button type="submit">Book now </button>
              </div>
             </form>
            </center>
</div>

<!-- JavaScript to open and close the booking form -->
<script>
function openBookingForm() {
  document.getElementById("bookingForm").style.display = "block";
}

function closeBookingForm() {
  document.getElementById("bookingForm").style.display = "none";
}
</script>
        </div>
      </div>

</tr>
<br>
</table>
    </div>

      
    </body>

    <section class="contact">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Get in touch with us for more information</p>
        </div></section>
        <?php include_once('includes/footer.php');?>
