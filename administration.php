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

        <center><h1> Administration &  Data Entry</h1><br></center>
        <td>
        <img src="images/images/data-entry.jpg"  width="410px"  height="350px"  alt="Service 3">
        </td>
        <td>

      <p>
        <strong><u><b>Streamline Your Data and Administrative Processes </b></u></strong><br>

Managing data and administrative tasks can be time-consuming and overwhelming. Let me take care of it, so you can focus on strategic initiatives and core business functions. With my expertise in data entry and administration, you can enhance productivity and efficiency.<br><br>


<b>Data Entry and Management: </b>I am proud to excel in accurate data entry, ensuring that your information is inputted precisely into databases, spreadsheets, or other systems. I also offer data cleaning, validation, and organisation services to maintain data integrity.<br>

<b>Administrative Support:</b> Beyond data entry, our team provides comprehensive administrative support. We can assist with tasks such as managing emails, organizing files and documents, scheduling appointments, coordinating meetings, and handling other administrative responsibilities.<br>

<b>Report Generation:</b> Need accurate and visually appealing reports? I can help you create professional reports by analyzing data, organizing information, and presenting it in a clear and concise manner.<br>

<b>Attention to Detail and Accuracy:</b> I prioritise accuracy and precision in every task I handle.  At Adaptable Business Solutions I pay meticulous attention to detail, ensuring that data is entered accurately, and administrative tasks are executed flawlessly.<br>

<b>Efficiency and Timeliness:</b> Time is valuable, and I understand the importance of timely completion of tasks. I will ensure work is efficiently completed to meet deadlines and deliver results promptly, enabling you to stay ahead of your operational requirements.<br>

<b>Confidentiality and Trust:</b> We uphold strict confidentiality and data security measures. Your sensitive information is treated with the utmost care, and I adhere to stringent privacy protocols to ensure confidentiality.<br>
      
 
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
