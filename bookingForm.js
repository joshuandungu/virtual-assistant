// Function to open the booking form
function openBookingForm() {
  document.getElementById("bookingForm").style.display = "block";

  <button onclick="openBookingForm()">Book Now</button>

<!-- The booking form as a modal dialog box -->
<div id="bookingForm" style="display: none;">
  <h2>Booking Form</h2>
  <center>
    <h1 align-items="center">Wow!  i think you liked Esther"s job<br>
    
    Book her now by filling the booking form below  </h1>
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
                 <select type = "text" value="" name="EventName">
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
                <input type="date" name="date" placeholder="Date  DD/MM/YYYY" required>
              </div>
              <div class="form-group">
                <input type="time" name="time" placeholder="Time  HRS/MIN/SEC" required>
              </div>
               </div>
              <button type="submit">Book now </button>
              </div>
             </form>
            </center>
</div>
}

// Function to close the booking form
function closeBookingForm() {
  document.getElementById("bookingForm").style.display = "none";
}

// Add event listener to the submit button
document.getElementById("bookingFormSubmitButton").addEventListener("click", function() {
  // Process the booking form here
  // ...
  // Close the booking form
  closeBookingForm();

});
