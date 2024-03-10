<?php
session_start();
include "database.php"; 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- CSS F-->
    <title>Eiselle Briones</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
  

    <!-- Header Begin -->

    <?php
        // Check if there is a notification message and if the message has been sent
        if (isset($_SESSION['notification']) && isset($_SESSION['message_sent'])) {
            // Display JavaScript code to show alert
            echo '<script>';
            echo 'alert("' . $_SESSION['notification'] . '");';
            echo '</script>';
            // Clear session variables
            unset($_SESSION['notification']);
            unset($_SESSION['message_sent']);
        }
    ?>
    <header>

        <!-- profile -->
        <div class="profile">
            <img src='eiselle.png' alt="" width="150px">
            <h1>Eiselle Briones</h1>
            <div class="social-icons">
                <a href="https://www.facebook.com/eiselle.briones.23/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/eiselle-briones-ab6443250/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/Ecbriones" target="_blank"><i class="fa-brands fa-github"></i></a>
            </div>
            
        </div>

        <!-- NAVIGATION BAR -->
        <nav>
            <ul>
                <li><a href="#Home" class="active"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="#About"><i class="fa-solid fa-folder"></i>About Me</a></li>
                <li><a href="#skill"><i class="fa-solid fa-medal"></i>Skills</a></li>
                <li><a href="#resume"><i class="fa-solid fa-book"></i>Resume</a></li>
                <li><a href="#portfolio"><i class="fa-solid fa-hand"></i>Services</a></li>
                <li><a href="#contact"><i class="fa-solid fa-envelope"></i>Feedback</a></li>
            </ul>
        </nav>
     
<!-- Modal container -->
        <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                <!-- Modal close button -->
                <span class="close">&times;</span>
                <!-- Content will be fetched and displayed here -->
            </div>

    </header>

    <!--Mobile Nav Toggle -->
    <i class="fa-solid fa-bars" id="MenuBtn"></i>
    <!-- Header End -->

    <!-- All Body Content -->

    <main>
        <!-- Home Section Start -->
        <section id="Home"> 
            <div class="Home-row">
                <h1>Hello, there!<br> Welcome to my website.<br>This is Eiselle, <span></span></h1>
                <p> I'm <span class="auto-input"> </span></p>
            </div>

        </section>
        <!-- Home Section End -->
        
         <!-- About Section Start -->
         <section id="About">
            <div class="Home-row">
                <h1>Feel free to view my gallery. It's a treasure of snapshots featuring not just myself, but also my cherished friends and beloved pets.<span></span></h1>
                
            </div>

        
            <div class="container">
                <span class="slider" id="slider1"></span>
                <span class="slider" id="slider2"></span>
                <span class="slider" id="slider3"></span>
                <span class="slider" id="slider4"></span>
                <span class="slider" id="slider5"></span>
                <span class="slider" id="slider6"></span>
                <span class="slider" id="slider7"></span>
        
                <div class="imgContainer">
        
                    <div class="slide_div" id="slide_1">
                        <img src="about me.jpg" alt="" class="img" id="img1">
                        <a href="#slider1" class="button" id="button1"></a>
                    </div>
        
        
                    <div class="slide_div" id="slide_2">
                        <img src="pic2.jpg" alt="" class="img" id="img2">
                        <a href="#slider2" class="button" id="button2"></a>
                    </div>
        
        
                    <div class="slide_div" id="slide_3">
                        <img src="pic3.jpg" alt="" class="img" id="img3">
                        <a href="#slider3" class="button" id="button3"></a>
                    </div>
        
        
                    <div class="slide_div" id="slide_4">
                        <img src="pic4.jpg" alt="" class="img" id="img4">
                        <a href="#slider4" class="button" id="button4"></a>
                    </div>
        
        
                    <div class="slide_div" id="slide_5">
                        <img src="pic5.jpg" alt="" class="img" id="img5">
                        <a href="#slider5" class="button" id="button5"></a>
                    </div>
        
        
                    <div class="slide_div" id="slide_6">
                        <img src="pic6.jpg" alt="" class="img" id="img6">
                        <a href="#slider6" class="button" id="button6"></a>
                    </div>
        
        
                    <div class="slide_div" id="slide_7">
                        <img src="pic7.jpg" alt="" class="img" id="img7">
                        <a href="#slider7" class="button" id="button7"></a>
                    </div>

        
                
        
                </div>
            </div>
        
         </section>
         <!-- About Section End -->
         
         <!--  -->

         <!------------------------------------------------>
         <!-- Skills Section Start -->
         <section id="skill">
            <h1 class="sub-heading">Skills</h1>
            <div class="divider"></div>
            <p class="sub-para">The combination of theoretical knowledge and hands-on experience is crucial for developing these skills, <br> which are essential for success in the field of information technology.</p>

        <div class="skill-row">

            <!-- Skill 1 -->
            <div class="skill-box">
                <div class="skill-info">
                    <h2>HTML</h2>
                    <h2>85%</h2>
                </div>
                <div class="skill-outer-line">
                    <div class="skill-inner-line" style="width: 85%;"></div>
                    <h3 class="smaller-text">It serves as the starting point for building knowledge and skills in creating websites.</h3>
                </div>
            </div>


            <!-- Skill 2-->
            <div class="skill-box">
                <div class="skill-info">
                    <h2>CSS</h2>
                    <h2>90%</h2>
                </div>
                <div class="skill-outer-line">
                    <div class="skill-inner-line" style="width:90%; "></div>
                    <h3 class="smaller-text"> It is fundamental for creating visually appealing, accessible, and responsive web pages, making it an essential skill for me and allowing me to control overall designs.</h3>
                </div>
            </div>

             <!-- Skill 3-->
             <div class="skill-box">
                <div class="skill-info">
                    <h2>JavaScript</h2>
                    <h2>50%</h2>
                </div>
                <div class="skill-outer-line">
                    <div class="skill-inner-line" style="width: 50%;"></div>
                    <h3 class="smaller-text"> It is a handy tool for my learning about web development. Allowing me for a more engaging and responsive website user experience.</h3>
                </div>
            </div>

            <!-- Skill 4-->
            <div class="skill-box">
                <div class="skill-info">
                    <h2>Web Design</h2>
                    <h2>92%</h2>
                </div>
                <div class="skill-outer-line">
                    <div class="skill-inner-line" style="width: 92%;"></div>
                    <h3 class="smaller-text">Web design is super important for students because it's all about creating websites that people love to use and for me.</h3>
                </div>
            </div>

               <!-- Skill 4-->
               <div class="skill-box">
                <div class="skill-info">
                    <h2>Time Management</h2>
                    <h2>90%</h2>
                </div>
                <div class="skill-outer-line">
                    <div class="skill-inner-line" style="width: 90%;"></div>
                    <h3 class="smaller-text">
                        I'm good at the process of organizing and planning how to divide my time between specific activities effectively. It involves setting goals, prioritizing tasks.</h3>
                </div>
            </div>



            
        

        </div>

        </section>


        <!-- Skills Section End -->
        <!------------------------------------------------>
        <!-- RESUME SECTION START-->
        <section id="resume">
            <h1 class="sub-heading">Resume</h1>
            <div class="divider"></div>
           

            <div class="resume-row">

                <!--LEFT COL-->
                <div class="resume-cols">



                    <h2> Awards & Achievements</h2>
                    <div class="my-edu">
                        <h3>Academic Excellence in Understanding
                            Culture, Society, and Political</h3>
                        <span class="sp-box">2019</span>
                    </div>

                    <div class="my-edu">

                        <h3>Academic Excellence in Political,  Media and Information Literacy</h3>
                        <span class="sp-box">2021</span>
                    </div>
                    
                    <div class="my-edu">
                        <h3>Academic Excellence in Work Immersion</h3>
                        <span class="sp-box">2021</span>
                    </div>

                    <div class="my-edu">
                        <h3>Academic Excellence in General Physics</h3>
                        <span class="sp-box">2021</span>
                    </div>

                    <div class="my-edu">
                        <h3>Academic Excellence in General Chemistry</h3>
                        <span class="sp-box">2021</span>
                    </div>


                    <div class="my-edu">
                        <h3>Top-ranking position among Grade 11 STEM PLUS students (Batch 2019)</h3>
                        <span class="sp-box">2019</span>
                    </div>


            

                    

                </div>


                <!--RIGHT COL-->
                <div class="resume-cols">

                    <h2>Education History</h2>

                    <div class="pro-exp">
                    <h3> <strong>NATIONAL UNIVERSITY - FAIRVIEW
                        CAMPUS</strong></h3>
                    
                    <p>Bachelor of Science in Information
                        Technology with Specialization of Mobile
                        and Internet Technologies<br>
                        SM Fairview Complex, Quirino Hwy,
                        Quezon City, Metro Manila</p>
                        <span class="sp-box">2021-2025</span>
                </div>

                <div class="pro-exp">
                    <h3> <strong> Our Lady of Fatima University</strong></h3>
                    <p>Senior High School | STEM -PLUS <br>
                        1 Esperanza, Novaliches, Quezon City, 1118 Metro Manila</p>
                        <span class="sp-box">2019-2021</span>
                </div>

                <div class="pro-exp">
                    <h3> <strong>Batasan Hills National School </strong></h3>
                    <p>Junior High School <br>
                        Dakila St., Brgy. Batasan Hills, Quezon City, Philippines</p>
                    <span class="sp-box">2016-2019</span>
                    <!-- Move the resume button here -->
                    

                </div>
                <div class="download_btn">
                    <a href="Eiselle Resume.pdf" download class="btn btn--download">
                <span class="u-bolder">Download resume  </span>
                    </a>
                </div>
                
            </div>
            
    </section>

    


        <!-- RESUME SECTION END-->
        <!------------------------------------------------>
        <!-- PORTFOLIO SECTION START-->
        <section id="portfolio">

            <h1 class="sub-heading">Services</h1>
            <div class="divider"></div>
            <p class="sub-para"> I am enthusiastic about the opportunity to contribute to your team, and I welcome any inquiries or discussions regarding my application.</p>


            <div class="port-row">

                <!---Portfolio Item 1-->
                <div class="port-item">
                    <div class="port-img">
                        <img src="WEB DEVELOPER.png" alt="...">
                    </div>
                    <div class="port-info">
                        <h4>Web Developer</h4>
                        <p> Creating and maintaining web pages through graphic design and technical computer skills. The code, design, and layout of website in compliance with the company’s orders and standards. Most importantly, I always consider user experience and web functionality. </p>
                        <a href="#contact"><i class="fa-solid fa-envelope"></i></a>

                    </div>

                </div>


                 <!---Portfolio Item 2-->
                 <div class="port-item">
                    <div class="port-img">
                        <img src="WEB PROGRAMMING.png" alt="...">

                    </div>
                    <div class="port-info">
                        <h4>Web Programming</h4>
                        <p> Use one or more programming languages to build the structure of an application, website, or software program. </p>
                        <a href="#contact"><i class="fa-solid fa-envelope"></i></a>

                    </div>

                </div>


                 <!---Portfolio Item 3-->
                 <div class="port-item">
                    <div class="port-img">
                        <img src="Support Specialist.png" alt="...">

                    </div>
                    <div class="port-info">
                        <h4>Support Specialist</h4>
                        <p> Reviewing and solving computer network and hardware problems for a business. I can work in a variety of industries to provide general support to a company's employees or at a technology or software provide technical support on user experience issues that require technical assistance.  </p>
                        <a href="#contact"><i class="fa-solid fa-envelope"></i></a>

                    </div>

                </div>

                 <!---Portfolio Item 4-->
                 <div class="port-item">
                    <div class="port-img">
                        <img src="SYSTEM ANALYST.png" alt="...">

                    </div>
                    <div class="port-info">
                        <h4>System Analyst</h4>
                        <p> Review the design components and use my knowledge of information technology to solve business problems. I identify ways that infrastructure needs to change to streamline business and IT operations. I can also assist technicians in training staff to implement the changes they propose. </p>
                        <a href="#contact"><i class="fa-solid fa-envelope"></i></a>

                    </div>

                </div>

                 <!---Portfolio Item 5-->
                 <div class="port-item">
                    <div class="port-img">
                        <img src="Writer.png" alt="...">

                    </div>
                    <div class="port-info">
                        <h4>Writer</h4>
                        <p> Create content on someone else's behalf, capturing the credited author's voice, style, and ideas, making it seem as though the credited author wrote the material.  </p>
                        <a href="#contact"><i class="fa-solid fa-envelope"></i></a>

                    </div>

                </div>

                 <!---Portfolio Item 6-->
                 <div class="port-item">
                    <div class="port-img">
                        <img src="Quality assurance analyst.png" alt="...">

                    </div>
                    <div class="port-info">
                        <h4>Quality Assurance Analyst</h4>
                        <p> Test programs, games, websites, and any software before they are released to the public. This is to ensure if they are fully functional and reliable. I look for errors and flaws in the program, record the issues, and report their findings to developers. </p>
                        <a href="#contact"><i class="fa-solid fa-envelope"></i></a>

                    </div>

                </div>

            </div>


        </section>


         <!--PORTFOLIO SECTION END -->

        <!----------------------------------------------->
        <!--CONTACT Section START -->
        <section id="contact">
            <h1 class="sub-heading">Feedback!</h1>
            <div class="divider"></div>
            <h4 class="sub-para">Feel free to contact me to further discuss how my skills and experiences align with the requirements of the position. I'm open to any suggestions, pieces of information, and reactions about my websites. It can be positive, negative, or neutral.


               <br> <br>Click the button to Fill-up the Registration or Sign-in your Account to Send me Your Feedback</h4><br>


            </div>
            <div class = "contact_btn">
                <button class="redirect-button" onclick="window.location.href = 'registration.php';">Click Here To Register!</button>
            </div>
        </section>

    </main>



    
    <!-- Typed.JS File for typing effect  -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- Main JS File -->
    <script src="script.js"></script>

    <!-- FontAwesome JS File  (Icon File) -->
   <script src="https://kit.fontawesome.com/aa5f332820.js" crossorigin="anonymous"></script>
   


   <footer>
    <p>&copy; 2024 PERSONAL WEBSITE. All RIGHT RESERVED.</p>
    <p> DEVELOPED BY EISELLE CELZO BRIONES</p>
</footer>
   
<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the profile link
            var profileLink = document.querySelector('nav ul li a[href="#"]');
            // Get the modal and close button
            var modal = document.getElementById("myModal");
            var closeBtn = modal.querySelector(".close");

            // When the profile link is clicked
            profileLink.addEventListener("click", function(event) {
                // Prevent default link behavior
                event.preventDefault();
                // Fetch the modal content from modal_content.php
                fetch("modal_content.php")
                    .then(response => response.text())
                    .then(data => {
                        // Set the fetched content as HTML of the modal content
                        modal.querySelector(".modal-content").innerHTML = data;
                        // Display the modal by adding the "show" class
                        modal.style.display = "block";
                    });
            });

            // When the close button is clicked, close the modal
            closeBtn.addEventListener("click", function() {
                modal.style.display = "none";
            });

            // Close the modal when clicking outside of it
            window.addEventListener("click", function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        });
    </script>
    
</body>
</html>
