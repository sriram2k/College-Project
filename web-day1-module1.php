<?php
session_start();
$name = $_SESSION['username'];
$email = $_SESSION['email'];
require_once('connection.php');
$sql = "update registration_details set day1att=1 WHERE email= '$email'";
mysqli_query($conn, $sql);
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Web - Day1 - Lesson1</title>
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <script src="assets/js/popper.js" charset="utf-8"></script>
    <script src="assets/js/jquery.min.js" charset="utf-8"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="bg-dark">
            <div class="sidebar-header b-dark" >
                <h5>Lesson 1:</h5>
                <h5><i class="fa fa-html5" aria-hidden="true"></i>&nbsp Introduction to HTML</h5>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="web-day1-course.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Course Objective</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 5min 42secs </p>

                </li>
                <br>
                <li class="active">
                    <a href="web-day1-module1.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Introduction to HTML</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 1min 20secs </p>

                </li>
                <br>
                <li>
                  <a href="web-day1-module2.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Elements & Attributes</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 15secs</p>

                </li>
                <br>
                <li>
                  <a href="web-day1-module3.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Headings & Paragraphs</a>
                  <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 52secs</p>

                 </li>
                 <br>
                 <li>
                   <a href="web-day1-module4.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Styles & Formatting</a>
                   <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 34secs</p>

                  </li>
                  <br>
                  <li>
                    <a href="web-day1-module5.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Links & Images</a>
                    <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 46secs</p>

                   </li>
                   <br>
                   <li>
                     <a href="web-day1-module6.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Tables & Lists</a>
                     <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 45secs</p>

                    </li>
                    <br>
                    <li>
                      <a href="web-day1-module7.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Class & Id</a>
                      <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 2min 18secs</p>

                     </li>
                     <br>
                     <li>
                       <a href="web-day1-module8.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp  JavaScript</a>
                       <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 51secs</p>

                      </li>
                      <br>
                      <li>
                        <a href="web-day1-module9.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Inputs</a>
                        <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 3min 39secs</p>

                       </li>
                       <br>
                       <li>
                         <a href="web-day1-module10.php" class="course"><i class="fa fa-circle-o-notch" aria-hidden="true"></i>&nbsp Forms</a>
                         <p class="float-right time"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp 4min 3secs</p>

                        </li>
                        <br>
                <li>
                  <a href="web/day1-mcq.html"><i class="fa fa-certificate" aria-hidden="true"></i>&nbsp MCQ</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="web.php" class="article"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp Back to Course</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-secondary" style="margin-top:-20px; margin-left:-20px; margin-right:-20px; box-border: 2px 2px solid black">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn bg-secondary">
                        <span class="bg-white"></span>
                        <span class="bg-white"></span>
                        <span class="bg-white"></span>
                    </button>
                    <h6 class="text-white d-none d-lg-block">Introduction to html</h6>
                    <h6 class="text-white"><?php echo "$name";?></h6>
                </div>
            </nav>

            <h2>Introduction to HTML</h2>
            <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="text-dark">HTML stands for Hyper Text Markup Language. It is the backbone of all the webpages. Every website you see has a HTML code behind it, which describes the structure and appearance of the webpage. The HTML code tells the browser how to display the content. Whenever you go to a website, the web server sends you a HTML file and it is executed by the browser. In this video, we’ll see a basic HTML program and the course syllabus for this video series.
</p><!--
            <p class="text-dark">It is used for:
            <ul>
              <li>Mobile applications (specially Android apps)</li>
              <li>Desktop applications</li>
              <li>Web applications</li>
              <li>Web servers and application servers</li>
              <li>Games</li>
              <li>Database connection</li>
              <li>And much, much more!</li>
            </ul>
            </p>-->
            </div>
            </div>
            <iframe width="100%" height="415" src="https://www.youtube.com/embed/fXdVuf-wYps?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
             <br>
                <br>
                
                <a href="web-day1-course.php">
                    <button class="btn btn-dark" style="float: left;"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Prev</button>
                </a>
                <a href="web-day1-module2.php">
                    <button class="btn btn-dark" style="float: right;border-radius: 0px;"> Next&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </a>
            

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
