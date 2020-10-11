<!DOCTYPE html>
<html lang="en">
         
     <?php
       //To connect the my database
       $db = mysqli_connect("sql2.njit.edu");

       //To check datbase connect successfuly.
       if (mysqli_connect_errno()) {
           
           echo "That is failed to connect to mysql: " . mysqli_connect_error();
       }

         //To select database from my database system
         mysqli_select_db($db, $yl854);

         $userName = $_POST['first_name'];
         $userEmail = $_POST['email'];
         $userSubject = $_POST['sub'];
         $userMessage = $_POST['message'];

         if($_POST['contactSubmit']){

            $sql = "INSERT into resumeContact(name, email, subject, message) 
                    VALUES ('$userName','$userEmail','$userSubject','$userMessage')";  

            mysqli_query($db, $sql) or die (mysqli_error($db));
           
         }
         mysqli_close($db);
     ?>
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Trimatrix Lab">
    <meta name="description" content="">
    <meta name="keywords" content="">


    <title>Yao's Profile</title>
    <link rel="icon" href="images/titleLogo/logo.jpg">

    <!--APPLE TOUCH ICON-->
    <link rel="apple-touch-icon" href="images/site/apple-touch-icon.png">


    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>


    <!-- MATERIAL ICON FONT -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="stylesheets/vendors/font-awesome.min.css" rel="stylesheet">


    <!-- ANIMATION -->
    <link href="stylesheets/vendors/animate.min.css" rel="stylesheet">

    <!-- MAGNIFICENT POPUP -->
    <link href="stylesheets/vendors/magnific-popup.css" rel="stylesheet">

    <!-- SWIPER -->
    <link href="stylesheets/vendors/swiper.min.css" rel="stylesheet">


    <!-- MATERIALIZE -->
    <link href="stylesheets/vendors/materialize.css" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="stylesheets/vendors/bootstrap.min.css" rel="stylesheet">


    <!-- CUSTOM STYLE -->
    <link href="stylesheets/style.css" id="switch_style" rel="stylesheet">
    <!--TOGGLE-->

    <!-- fafa icon -->
    <link href="toggle/toggle.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
       #grad1 {
          height: 400px;
        
          background-image: url("images/headerbackground/header.jpg")
    </style>

</head>
<body>


<!--==========================================
                  PRE-LOADER
===========================================-->

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="box-holder animated bounceInDown">
                <span class="load-box"><span class="box-inner"></span></span>
            </div>
            <!-- NAME & STATUS -->
            <div class="text-holder text-center">
                <h2>Yao Ling</h2>
                <h6>Computer Science</h6>
            </div>
        </div>
    </div>
</div>

<!--==========================================
                    HEADER
===========================================-->
<header id="home">
    <nav id="theMenu" class="menu">

        <!--MENU-->
        <div id="menu-options" class="menu-wrap">

            <!--PERSONAL LOGO-->
            <div class="logo-flat">
                <img alt="personal-logo" class="img-responsive" src="images/profile/yao.png">
            </div>
            <br>

            <!--OPTIONS-->
            <a href="#home"><i class="title-icon fa fa-user"></i>Home</a>
            <a href="#about"><i class="title-icon fa fa-dashboard"></i>About</a>
            <a href="#education"><i class="title-icon fa fa-graduation-cap"></i>Education</a>
            <a href="#skills"><i class="title-icon fa fa-sliders"></i>Skills</a>
            <a href="#experience"><i class="title-icon fa fa-suitcase"></i>Experience</a>
            <a href="#portfolios"><i class="title-icon fa fa-archive"></i>Portfolios</a>
            <a href="#interest"><i class="title-icon fa fa-heart"></i>Interest</a>
            <a href="#contact"><i class="title-icon fa fa-envelope"></i>Contact</a>
        </div>

        <!-- MENU BUTTON -->
        <div id="menuToggle">
            <div class="toggle-normal">
                <i class="material-icons top-bar">remove</i>
                <i class="material-icons middle-bar">remove</i>
                <i class="material-icons bottom-bar">remove</i>
            </div>
        </div>
    </nav>

    <!--HEADER BACKGROUND-->
    <div id="grad1"></div>

</header>


<!--==========================================
                   V-CARD
===========================================-->
<div id="v-card-holder" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <!-- V-CARD -->
                <div id="v-card" class="card">

                    <!-- PROFILE PICTURE -->
                    <div id="profile" class="right">
                        <img alt="profile-image" class="img-responsive" src="images/profile/yao2.png">
                        <div class="slant"></div>

                        <!--EMPTY PLUS BUTTON-->
                       
                        <!--VIDEO PLAY BUTTON-->
                        <!--<div id="button-holder" class="btn-holder">
                            <div id="play-btn" class="btn-floating btn-large btn-play">
                                <i id="icon-play" class="material-icons">play_arrow</i>
                            </div>
                        </div>-->
                    </div>
                    <!--VIDEO CLOSE BUTTON-->
                    <!--<div id="close-btn" class="btn-floating icon-close">
                        <i class="fa fa-close"></i>
                    </div>-->

                    <div class="card-content">

                        <!-- NAME & STATUS -->
                        <div class="info-headings">
                            <h4 class="text-uppercase left">Yao Ling</h4>
                            <h6 class="text-capitalize left">Computer Science & Student</h6>
                        </div>

                        <!-- CONTACT INFO -->
                        <div class="infos">
                            <ul class="profile-list">
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">email</i></span>
                                    <a href="mailto:yl854@njit.edu"><span class="content">yl854@njit.edu</span></a>
                                </li>
                              
                                <li class="clearfix">
                                    <span class="title"><i class="fa fa-skype" aria-hidden="true"></i></span>
                                    <span class="content">lingyaojay@gmail.com</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">phone</i></span>
                                    <a href="tel:2017559933"><span class="content">(201)-755-9933</span></a>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">place</i></span>
                                    <span class="content">331 Chestnut Street, NJ 07032</span>
                                </li>

                            </ul>
                        </div>

                        <!--LINKS-->
                        <div class="links">
                            <!-- FACEBOOK-->
                            <a href="https://www.facebook.com" id="first_one"
                               class="social btn-floating indigo"><i
                                    class="fa fa-facebook"></i></a>
                            <!-- TWITTER-->
                            <a href="https://twitter.com/twitter?lang=en" class="social  btn-floating blue"><i
                                    class="fa fa-twitter"></i></a>
                            <!-- GOOGLE+-->
                            <a href="https://mail.google.com" class="social  btn-floating red"><i
                                    class="fa fa-google-plus"></i></a>
                            <!-- LINKEDIN-->
                            <a href="https://www.linkedin.com" class="social  btn-floating blue darken-3"><i
                                    class="fa fa-linkedin"></i></a>
                            <!-- RSS-->
                            <a href="http://rss.org" class="social  btn-floating orange darken-3"><i
                                    class="fa fa-rss"></i></a>
                        </div>
                    </div>
                    <!--HTML 5 VIDEO-->
                    <!-- <video id="html-video" class="video" poster="images/poster/poster.jpg" controls>
                        <source src="videos/b.webm" type="video/webm">
                        <source src="videos/a.mp4" type="video/mp4">
                    </video>-->

                </div>
            </div>
        </div>
    </div>
</div>

<!--==========================================
                   ABOUT
===========================================-->
<div id="about" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- DETAILS -->
                <div id="about-card" class="card">
                    <div class="card-content" >
                        <!-- ABOUT PARAGRAPH -->
                        <p style="text-align:left">
                            Hello! I’m Yao Ling. Senior computer science, and expectd graduate on fall 2018. 
                            I came from China five years ago. So Chinese is my native language. My first associate 
                            science degree received from Country College of Morris with computer science major. Since 2016 
                            transfer to New Jersey Institute of Technology continue my bachelor's degree. For my major, I 
                            have knowledged some computer language; for instance, Java, C/C++, Python, Bash, HTML, PHP, CSS, 
                            and Javascript etc. After graduation, I still plan to pursue master degree at NJIT. If you want 
                            to learn more details about me to click 'download resume' or 'contact me' button.
                        </p>
                    </div>

                    <!-- BUTTONS -->
                    <div id="about-btn" class="card-action">
                        <div class="about-btn">
                            <!-- DOWNLOAD CV BUTTON -->
                            <a href="resume/Resume.pdf" class="btn waves-effect" download>Download Resume</a>
                            <!-- CONTACT BUTTON -->
                            <a href="#contact" class="btn waves-effect">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--==========================================
                   EDUCATION
===========================================-->
<section id="education" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="images/icons/bachelor.jpeg" alt="demo">Education</h4>
        </div>

        <div id="timeline-education">

             <!-- Zero TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><i class="fa fa-graduation-cap"></i></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Computer Science (MS)</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>New Jersey Institute of Technology</small>
                            </h6>
                            <h6>
                                <small><i class="fa fa-calendar" style="font-size:18px;color: #2E86C1"></i> January 2019 - Present</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I just completed my Bacholar of Science degree from NJIT
                            and currently persue Master of Science degree with Computer Science major at NJIT.
                            And expected for graduation on December 2019.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-5">
                            <i class="fa fa-image" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- FIRST TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><i class="fa fa-graduation-cap"></i></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Computer Science (AS)</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>County College of Morris</small>
                            </h6>
                            <h6>
                                <small><i class="fa fa-calendar" style="font-size:18px;color: #2E86C1"></i> Septemper 2013 - May 2016</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I have completed my associate science degree from County College of 
                            Morris with computer science major and received all credits.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-1">
                            <i class="fa fa-image" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- SECOND TIMELINE -->
            

            <!-- THIRD TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><i class="fa fa-graduation-cap"></i></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Computer Science (BS)</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>New Jersey Institute of Technology</small>
                            </h6>
                            <h6>
                                <small><i class="fa fa-calendar" style="font-size:18px;color: #2E86C1"></i> Septemper 2016 - December 2018</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I have completed my Bacholar of Science degree from New Jersey Institute of Technology
                            with Computer Science major and received all credits.
                        </p>

                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-5">
                            <i class="fa fa-image" aria-hidden="true"></i>
                        </a>

                    </div>
                </div>
            </div>

            
            <!-- FIFTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6><i class="fa fa-graduation-cap"></i></h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Architecture (BS)</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Hefei University of Technology</small>
                            </h6>
                            <h6>
                                <small><i class="fa fa-calendar" style="font-size:18px;color: #2E86C1"></i> September 2011 -  January 2012</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed first semester at Hefei University of Technology with 
                            the Architecture major from China.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-2">
                            <i class="fa fa-image" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- SIXTH TIMELINE -->



     <!--Separate foot-->
        </div>
    </div>
</section>


<!--==========================================
                   SKILLS
===========================================-->
<section id="skills" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="images/icons/skill.jpg" alt="demo">Skills</h4>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="skills-card" class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- FIRST SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Web Language</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>HTML5</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>CSS3</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>JavaScript</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="75%">
                                    <div class="skillbar-title"><span>PHP</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">75%</div>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- SECOND SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Personal</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="85%">
                                    <div class="skillbar-title"><span>Communication</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">85%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>Teamwork</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Creativity</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>Dedication</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- THIRD SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Programming Language</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Java</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>C/C++</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="65%">
                                    <div class="skillbar-title"><span>Python</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">65%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="60%">
                                    <div class="skillbar-title"><span>Bash</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">60%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==========================================
                   EXPERIENCE
===========================================-->
<section id="experience" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="images/icons/experiance.jpg" alt="demo">Experience</h4>
        </div>

        <div id="timeline-experience">
        	 <!-- Zero TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>C</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Capstone Project</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Mobile Application Development</small>
                            </h6>
                            <h6>
                                <small><i class="fa fa-calendar" style="font-size:18px;color: #2E86C1"></i> Sep 2018 - Dec 2018</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            For capstone project, follows NJ Courts ITO team to design and implement a mobile application 
                            that assists Probation Officers on field visits to participant’s location who are part of Intensive 
                            Supervision Program (ISP) with courts. In this project, we learned using ionic and AngularJs to deploy an application 
                            on IOS and Android platforms, and also learned development cycle of an application.
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-9">
                            <i class="fa fa-image" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

              <!-- First TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>S</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Senior Project</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>CS490-Design in Software Engineer</small>
                            </h6>
                            <h6>
                                <small><i class="fa fa-calendar" style="font-size:18px; color: #2E86C1"></i> Jan 2018 - May 2018</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I joined here, and I worksed on back-end that to manage database, 
                            the project to simulate a college for stuents taking online exam system. 
                            Other teammates do on front-end and middle-end. click 
                            <a href ="https://web.njit.edu/~day5/CS490/login/login.html"> here </a>to visit.            
                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-8">
                            <i class="fa fa-image" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

             <!-- SECOND TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>W</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Webpage Design</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>IT Department of Panasonic North of America</small>
                            </h6>
                            <h6>
                                <small><i class="fa fa-calendar" style="font-size:18px;color: #2E86C1"></i> Nov 2016 - Oct 2017</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            At IT department, works on front end by usingoffice 365 Sharepoint to 
                            maintain and create webpage for Intranet, and uses Demandwaretool
                            (Salesforce Commerce Cloud)to create product sales pages and how to maintain it.
			            </p>
			            <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-7">
                            <i class="fa fa-image" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- FIRST TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>A</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Architectural Design</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Architectural Design Institute of TCFH</small>
                            </h6>
                            <h6>
                                <small><i class="fa fa-calendar" style="font-size:18px;color: #2E86C1"></i> Jun 2011 - Jun 2012</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I started my first internship at a architecural design institute.
                            At here, my position was a designer to design public buildings and 
                            civil architecture. I can use AutoCAD, 3D Marks, and PhotoShop 
                            auxiliary means and so on.
                            

                        </p>
                        <!-- BUTTON TRIGGER MODAL -->
                        <a href="#" class="modal-dot" data-toggle="modal" data-target="#myModal-6">
                            <i class="fa fa-image" aria-hidden="true"></i>
                        </a>
                        <br><br>
                    </div>
                </div>
            </div>

          
        <!--Sperate foot-->
        </div>
    </div>
</section>

<!--==========================================
                  MODALS
===========================================-->
<section>
    <!--MODAL ONE-->
    <div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-1">County College of Morris</h4>
                    <h6>
                        <small>Founded: 1968</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <img class="img-responsive" alt="graduation" src="images/timeline/school2.jpg">
                    
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--MODAL TWO-->
    <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-2">Hefei University of Technology</h4>
                    <h6>
                        <small>Founded: 1945</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <img class="img-responsive" alt="graduation" src="images/timeline/school1.jpg">
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--MODAL THREE-->
    <div class="modal fade" id="myModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-3">County College of Morris</h4>
                    <h6>
                        <small>Founded: 1968</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <img class="img-responsive" alt="graduation" src="images/timeline/school2.jpg">
                   
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>



    <!--MODAL FIVE-->
    <div class="modal fade" id="myModal-5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-5">New Jersey Institute of Technology</h4>
                    <h6>
                        <small>Founded: 1881</small>
                    </h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <img class="img-responsive" alt="graduation" src="images/timeline/school3.jpg">
                   
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>
     <!--MODAL Eight-->
    <div class="modal fade" id="myModal-9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-1">App Screenshot</h4>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <img class="img-responsive" alt="experience" src="images/timeline/1.png"><br>
                    <img class="img-responsive" alt="experience" src="images/timeline/5.png"><br>      
                    <img class="img-responsive" alt="experience" src="images/timeline/2.png"><br>  
                    <img class="img-responsive" alt="experience" src="images/timeline/3.png">
                         
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--MODAL Six-->
    <div class="modal fade" id="myModal-6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-1">Representative Work</h4>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                    <img class="img-responsive" alt="experience" src="images/timeline/t1.png">       
                    <img class="img-responsive" alt="experience" src="images/timeline/t3.png">  
                    <img class="img-responsive" alt="experience" src="images/timeline/t2.png">     
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>
    <!--MODAL seven-->
    <div class="modal fade" id="myModal-7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-7">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-1">Panasonic North of America</h4>
                    <h6>Headquarter</h6>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                           
                    <img class="img-responsive" alt="experience" src="images/timeline/PNA.jpg">  
                    <img class="img-responsive" alt="experience" src="images/timeline/module7.jpg">   
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>

     <!--MODAL Eight-->
    <div class="modal fade" id="myModal-8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-8">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!--MODAL HEADER-->
                <div class="modal-header  text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    <h4 class="modal-title" id="myModalLabel-1">Screen Shot</h4>
                </div>
                <!--MODAL BODY-->
                <div class="modal-body">
                           
                    <img class="img-responsive" alt="experience" src="images/timeline/project.png">  
                    <img class="img-responsive" alt="experience" src="images/timeline/project2.png">   
                    <img class="img-responsive" alt="experience" src="images/timeline/project3.png">  
                </div>
                <!--MODAL FOOTER-->
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--==========================================
                  PORTFOLIOS
===========================================-->
<section id="portfolios" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="images/icons/folder.jpg" alt="demo">Portfolios</h4>
        </div>
        <div id="portfolios-card" class="row">

            <!--OPTIONS-->
            <ul class="nav nav-tabs">
                <!--ALL CATEGORIES-->
                <li class="active waves-effect list-shuffle"><a id="all-sample" class="active" href="#all"
                                                                data-toggle="tab">ALL</a>
                    <!--CATEGORIES-->
                <li class="waves-effect list-shuffle"><a class="cate" href="#a" data-toggle="tab">LOGO</a></li>
                <li class="waves-effect list-shuffle"><a class="cate" href="#b" data-toggle="tab">DRIBBLE</a></li>  
            </ul>

            <!--CATEGORIES CONTENT-->
            <div class="tab-content">

                <!--All CATEGORIES-->
                <div id="all"></div>

                <!--CATEGORY 1-->
                <div id="a">

                    <!--CATEGORY CONTENT ONE BIG-->
                    <div class="col-md-4 col-sm-12 col-xs-12 grid big inLeft">
                        <figure class="port-effect-scale">
                            <img src="images/portfolios/big-1.jpg" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span>IMAGE</span></h2>
                                <p>Two Hover Effect For Portfolio Grid Blocks. Its Scale</p>
                                <a href="images/portfolios/big-1.jpg" class="popup-image" data-effect="mfp-3d-unfold">View
                                    more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <!--CATEGORY CONTENT TWO SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                             <figure class="port-effect-up">
                            <img src="images/portfolios/portfolio-1.jpg" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span>IMAGE</span></h2>
                                <p>Two Hover Effect For Portfolio Grid Blocks. Its Up</p>
                                <a href="images/portfolios/portfolio-1.jpg" class="popup-image"
                                   data-effect="mfp-move-horizontal">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <!--CATEGORY CONTENT THREE SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inRight">
                        <figure class="port-effect-up">
                            <img src="images/portfolios/portfolio-2.jpg" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span>IMAGE</span></h2>
                                <p>Two Hover Effect For Portfolio Grid Blocks. Its Up</p>
                                <a href="images/portfolios/portfolio-2.jpg" class="popup-image"
                                   data-effect="mfp-move-horizontal">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                </div>

                <!--CATEGORY 2-->
                <div id="b">

                    <!--CATEGORY CONTENT ONE BIG-->
                    <div class="col-md-4 col-sm-12 col-xs-12 grid big inRight">
                        <figure class="port-effect-up">
                            <img src="images/portfolios/big-2.jpg" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>Effect also available for Lightbox Image Check The Doc</p>
                                <a href="images/portfolios/big-2.jpg" class="popup-image"
                                   data-effect="mfp-move-from-top">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                    <!--CATEGORY CONTENT TWO SMALL-->
                    <div class="col-md-4 col-sm-6 col-xs-12 grid inLeft">
                        <figure class="port-effect-scale">
                            <img src="images/portfolios/port.png" class="img-responsive" alt="portfolio-demo"/>
                            <figcaption>
                                <h2>Lightbox <span> IMAGE</span></h2>
                                <p>Used latest material design to make this sample</p>
                                <a href="images/portfolios/port.png" class="popup-image"
                                   data-effect="mfp-3d-unfold">View more</a>
                            </figcaption>
                        </figure>
                    </div>


                

                </div>
            </div>

            <!--PORTFOLIOS ADD GALLERY BUTTON-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button id="add-more" class="center-block btn-large waves-effect"><i id="port-add-icon"
                                                                                         class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<!--==========================================
                   INTEREST
===========================================-->
<section id="interest" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="images/icons/heart.png" alt="demo">Interest</h4>
        </div>

        <div id="interest-card" class="card">
            <!--INTEREST TEXT-->
            <div class="card-content">
                <p style="text-align: left">
                    First of all, I like to listen music, popular music is my favorite. To love playing 
                    basketball, watching movies(expecially science fiction films), reading novels，and 
                    playing games with PC games or video games. Furthermore，I spend quite a lot of time 
                    in traveling and photography, these keeps me fresh for working environment. 
                </p>
            </div>

            <!--INTEREST ICONS-->
            <div class="row no-gutters">

                <!--INTEREST ICON ONE-->
                <div class="col-md-2 col-sm-4 col-xs-6  box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-music"></i>
                        <span>Music</span>
                    </div>
                </div>
                <!--INTEREST ICON TWO-->
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <i class="fa fa-gamepad"></i>
                        <span>Gaming</span>
                    </div>
                </div>
                <!--INTEREST ICON THREE-->
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-camera-retro"></i>
                        <span>Photography</span>
                    </div>
                </div>
                <!--INTEREST ICON FOUR-->
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <i class="fa fa-address-book"></i>
                        <span>Reading</span>
                    </div>
                </div>
                <!--INTEREST ICON FIVE-->
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon">
                        <i class="fa fa-car"></i>
                        <span>Traveling</span>
                    </div>
                </div>
                <!--INTEREST ICON SIX-->
                <div class="col-md-2 col-sm-4 col-xs-6 box text-center">
                    <div class="interest-icon-even">
                        <i class="fa fa-film"></i>
                        <span>Movies</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<!--==========================================
                  CONTACT
===========================================-->
<section id="contact" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><img src="images/icons/Phone.jpg" alt="demo">Contact</h4>
        </div>
        <div class="row">
            <div id="contact-card" class="col-md-5 col-sm-12 col-xs-12">
                <!-- CONTACT FORM -->
                <div class="card">
                    <div class="card-content">
                        <form action ="index.php" method = "POST">
                            <!-- NAME -->
                            <div class="input-field">
                                <input id="first_name" type="text" class="validate" name="first_name" required placeholder="Enter your full name" >
                                <label for="first_name">Name:</label>
                            </div>
                            <!--EMAIL-->
                            <div class="input-field">
                                <input id="email" type="email" class="validate" name="email" required placeholder="example@gmail.com">
                                <label for="email">Email:</label>
                            </div>
                            <!--SUBJECT-->
                            <div class="input-field">
                                <input id="sub" type="text" class="validate" name="sub">
                                <label for="sub">Subject:</label>
                            </div>
                          
                            <!--MESSAGE-->
                            <div class="input-field" >
                                <textarea id="textarea1" class="materialize-textarea" name="message"
                                          required></textarea>
                                <label for="textarea1">Message:</label>
                            </div>
                            <!-- SEND BUTTON -->
                            <div class="contact-send" style="text-align:center">
                                <button id="submit" name="contactSubmit" type="submit" value="Submit"
                                        class="btn waves-effect">Submit
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--FORM LOADER-->
                    <div id="form-loader" class="progress is-hidden">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-sm-12 col-xs-12">
                <!-- CONTACT MAP-->
                <div id="map-card" class="card"> 
                <div id="map" style="width:550;height:418px"></div>
                <script>                	
                   function myMap() {
                      var myCenter = new google.maps.LatLng(40.7629506, -74.1485733);
                      var mapCanvas = document.getElementById("map");
                      var mapOptions = {center: myCenter, zoom: 18};
                      var map = new google.maps.Map(mapCanvas, mapOptions);
                      var marker = new google.maps.Marker({position:myCenter, map: map, draggable:true, title:"Drag me!"}); 
                      marker.setMap(map);
                      }
                     
               </script>

               <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
                </div>
            </div>

        </div>
    </div>
</section>

<!--==========================================
                     SCROLL TO TOP
===========================================-->
<div id="scroll-top">
    <div id="scrollup"><i class="fa fa-angle-up"></i></div>
</div>

<!--==========================================
                      FOOTER
===========================================-->

<footer>
    <div class="container">
     
        <i class="fa fa-angle-up" style="color: #06A763"></i>

        <!--FOOTER DETAILS-->
         <p class="text-center">
            <!-- WeChat -->
             <a href="images/icons/wechat.jpg" alt="wechat"
                class="social btn-floating green"><i class="fa fa-wechat" style="font-size:24px"></i></a>&nbsp;&nbsp;
            <!-- QQ -->
             <a href="images/icons/qq.jpg" alt="wechat" 
                class="social btn-floating blue-darken-1"><i class="fa fa-qq" style="font-size:20px"></i></a>&nbsp;&nbsp;
            <!-- Facebook -->
             <a href="https://www.facebook.com/ling.yao.12177/" 
                class="social btn-floating indigo"><i class="fa fa-facebook" style="font-size:24px"></i></a>&nbsp;&nbsp;
            <!-- Linkedin -->
             <a href="www.linkedin.com/in/YaoLing123" 
                class="social  btn-floating blue darken-3"><i class="fa fa-linkedin" style="font-size:24px"></i></a>&nbsp;&nbsp;
            <!-- Twitter -->
             <a href="https://twitter.com/JustinLing7" 
                class="social  btn-floating blue"><i class="fa fa-twitter" style="font-size:24px"></i></a>&nbsp;&nbsp;
            <!-- Gmail -->
             <a href="mailto:yl854@njit.edu"
                class="social  btn-floating red"><i class="fa fa-google-plus" style="font-size:24px"></i></a>

        </p>
        <p class="text-center" style="font-size:15px;color: white">
            © 2018 Spirng by Yao Ling
        </p>
    </div>
</footer>


<!-- FOR TOGGLE -->


<!--==========================================
                  SCRIPTS
===========================================-->
<script src="javascript/vendors/jquery-2.1.3.min.js"></script>
<script src="javascript/vendors/bootstrap.min.js"></script>
<script src="javascript/vendors/materialize.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
<script src="javascript/vendors/markerwithlabel.min.js"></script>
<script src="javascript/vendors/retina.min.js"></script>
<script src="javascript/vendors/scrollreveal.min.js"></script>
<script src="javascript/vendors/swiper.jquery.min.js"></script>
<script src="javascript/vendors/jquery.magnific-popup.min.js"></script>
<script src="javascript/custom.js"></script>
<script src="toggle/js.js"></script>


</body>
</html>