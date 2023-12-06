<?php  
session_start();
    require("includes/connection.php");
     

    if(!isset($_SESSION['username'])){
        header("location: login.php");
        die();
    }
    
?>

<?php include_once('header.php');?>





    <body>

      <h1> Adaptable business solutions</h1>
      <h2> Virtual assistant services</h2>

      
      <div class="container" >
        <table class="assistant" border="20px" cellspacing="20px">
          <tr>

        <center><h1> Email Management</h1><br></center>
        <td>
        <img src="images/images/email.jpg"  width="410px"  height="350px"  alt="Service 3">
        </td>
        <td>

      <p> 
        Managing a flooded inbox can be overwhelming, time-consuming, and detrimental to your productivity. Our virtual email assistants are here to simplify your life by taking charge of your inbox, allowing you to focus on what truly matters - your business and personal growth.<br> <br>

<strong> <b> <u><h3>Comprehensive Email Management Services</h3></u></b></strong>
<br>

At Adaptable Business Solutions I offer a wide range of email management services tailored to your specific needs. <br>

<b>Inbox Organisation:</b> I will categorise your emails, create folders, and implement an efficient labeling system to ensure that important messages are easily accessible, and clutter is minimised.
<br>

<b>Email Filtering and Prioritisation:</b> I understand the importance of separating urgent emails from non-essential ones.  I will filter and prioritize your emails based on your preferences, ensuring that you never miss critical information.
<br>

<bold>Email Sorting and Archiving:</bold> I can sort and archive your emails systematically, maintaining a tidy and well-organized inbox. This allows for quick retrieval of important information whenever you need it.
<br>

<b>Email Responses and Drafting:</b> We can handle routine email responses on your behalf, saving you time and providing consistent communication to your contacts. Our virtual assistants can also draft professional and personalised email templates that reflect your unique style and voice.
<br>

<b>Spam and Unsubscribe Management:</b> Tired of spam cluttering your inbox? I will diligently manage spam emails, unsubscribe you from unwanted mailing lists, and implement robust spam filters to keep your inbox clean and secure.
<br>

<b>Confidentiality and Efficiency: </b>  Adaptable Business Solutions prioritise confidentiality and efficiency in all our email management services. I am a highly skilled professional who adhere to strict privacy protocols. Your sensitive information and communications are treated with the utmost confidentiality and discretion.</p>
<br> 
<div class="hero">
        <div class="container">
          <!-- Button to open the booking form -->
<button  class="btn"  onclick="openBookingForm()">Book Now</button>

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
