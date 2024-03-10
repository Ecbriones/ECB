<?php
session_start();
include "database.php"; // Include the database connection file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- CONTACT Section START -->
    <section id="contact">
        <h1 class="sub-heading">Send Your Feedback</h1><br> 
        <div class="divider"></div>
        <h4 class="sub-para">Feel free to contact me to further discuss how my skills and experiences align with the requirements of the position. I'm open to any suggestions, pieces of information, and reactions about my websites. It can be positive, negative, or neutral. Let me know if there's anything else you need!</h4>

        <div class="contact-row">

            <!-- Left col -->
            <div class="contact-left">
            
                <!-- Email Box -->
                <div class="icon-box">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="info">
                        <h4>Email:</h4>
                        <p>Eiselle0623@gmail.com</p>
                    </div>
                </div>

                <!-- Call Box -->
                <div class="icon-box">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>  
                    </div>
                    <div class="info">
                        <h4>Call:</h4>
                        <p>0921-755-3684</p>
                    </div>
                </div>

                <!-- Location Box -->
                <div class="icon-box">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>  
                    </div>
                    <div class="info">
                        <h4>Location:</h4>
                        <p>Quezon City, Philippines</p>
                    </div>
                </div>

                <!-- Maps -->
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.5136608452376!2d121.0965194748745!3d14.683519485812774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba19ab8ca37d%3A0xb96e3073bb06f60d!2s64%20Hills%20Street%2C%20Quezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1705513610410!5m2!1sen!2sph" width="400" height="300" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                </div>
            </div>

            <!-- Right col -->
            <div class="contact-right">
                <form method="post" action="process_form.php">
                    <?php
                    // Check if the user is logged in
                    if(isset($_SESSION['account_ID'])) {
                        // User is logged in
                        // Populate the form fields with user information
                        $first_name = $_SESSION['first_name'];
                        $last_name = $_SESSION['last_name'];
                        $email_address = $_SESSION['email_address'];
                        echo '<input type="text" name="first_name" id="first_name" placeholder="Your First Name" value="' . $first_name . '">';
                        echo '<input type="text" name="last_name" id="last_name" placeholder="Your Last Name" value="' . $last_name . '">';
                        echo '<input type="email" name="email" id="email_address" placeholder="Your Email" value="' . $email_address . '">';
                    } else {
                        // User is not logged in
                        // Show a form without pre-filled information
                        echo '<input type="text" name="first_name" id="first_name" placeholder="Your First Name">';
                        echo '<input type="text" name="last_name" id="last_name" placeholder="Your Last Name">';
                        echo '<input type="email" name="email" id="email_address" placeholder="Your Email">';
                    }
                    ?>
                    <input type="text" name="subject" id="subject" placeholder="Subject">
                    <textarea name="msg" id="msg" rows="9" placeholder="Your Message/Feedback"></textarea>
                    <input type="submit" value="Send Message">
                </form>
            </div>
        </div>
    </section>

    <script>
        // JavaScript code to display an alert after form submission
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission
            alert("Message sent. Thank you!"); // Display alert
            this.submit(); // Submit the form
        });
    </script>

</body>
<!-- Typed.JS File for typing effect  -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<!-- Main JS File -->
<script src="script.js"></script>

<!-- FontAwesome JS File  (Icon File) -->
<script src="https://kit.fontawesome.com/aa5f332820.js" crossorigin="anonymous"></script>
</html>
