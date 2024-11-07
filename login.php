<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            text-align: center;
            font-family: 'Arial', sans-serif;
        }
        /*navbar*/
        .navbar {
            background-color: #1d1c1c;
        }
        .navbar-nav .nav-link {
            color: #b8bdc2;
        }
        .navbar-nav .nav-link:hover {
            color: #f4f1f1;
        }
        .hero-section {
            position: relative;
            height:600px;
            background-color: #6c8c7b;
            color: #fff;
            padding: 60px 0;
        }
        .hero-section .content {
            max-width: 600px;
            margin-bottom: 80px;
        }
        .hero-section .content h1 {
            font-size: 48px;
            font-weight: bold;
        }
        .hero-section .content p {
            font-size: 18px;
            margin-top: 20px;
        }
        .hero-section .content .btn {
            margin-top: 30px;
            padding: 10px 20px;
            border-radius: 50px;
        }
        .hero-section .contact-info {
            margin-top: 30px;
        }
        .hero-section .contact-info p {
            margin: 0;
        }
        .hero-section .image {
            position: relative;
            top: 0;
            bottom: 400px;
            right:-48;
            height:590px;
            width: 80%;
            background: url('image/doc.jpg') no-repeat center center;
            background-size: cover;
            border-radius: 50px;
            border-bottom-left-radius: 50px;
        }
        .side-buttons {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
        }
        .side-buttons .btn {
            display: block;
            margin-bottom: 10px;
            border-radius: 0;
        }
        @media  screen and (min-width:760px) {
            .hero-section .image {
                width: 45%;
                position: relative;
                right:-57;
                height:581px;
                background: url('image/doc.jpg') no-repeat center center;
                background-size: cover;
                border-radius: 50px;
                border-bottom-left-radius: 50px;
            }
        }
        /*jobs*/
        @media  screen and (min-width:10px) and (max-width:760px) {
            .hero-section .image{
                left:40px;
            }
        }
        /*login*/
        .login{
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            overflow: hidden;
            width: 800px;
        }
        .login-form {
            padding: 40px;
            flex: 1;
        }
        .login-form h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .login-form .form-control {
            border-radius: 5px;
            margin-bottom: 20px;
            height: 45px;
        }
        .login-form .form-check-label {
            margin-left: 10px;
        }
        .login-form .btn {
            background-color: #6c8c7b;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            height: 45px;
            width: 100%;
        }
        .login-form .btn:hover {
            background-color: #6c8c7b;
        }
        .login-form .forgot-password {
            color: #6c8c7b;
            font-weight:300;
            text-decoration: none;
        }
        .login-form .forgot-password:hover {
            text-decoration: underline;
        }
        .login-image {
            background-color: #00b894;
            background: url('image/doct.jpg') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
            position: relative;
        }
        .login-image img {
            max-width: 100%;
            height: auto;
        }
        /*foot*/
        .foot{
            background-color: #1d1c1c;
            color: #FFFFFF;
        }
        .footer {
            padding: 50px 0;
        }
        .footer .col {
            margin-bottom: 30px;
        }
        .footer h5 {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .footer p, .footer a {
            color: #FFFFFF;
            font-size: 14px;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .social-icons a {
            color: #FFFFFF;
            font-size: 24px;
            margin-right: 15px;
        }
        .footer .social-icons a:hover {
            color: #A3C1AD;
        }
        .footer .email-form input[type="email"] {
            border: none;
            padding: 10px;
            border-radius: 20px 0 0 20px;
            width: 250px;
        }
        .footer .email-form .btnn {
            border: none;
            padding: 10px 20px;
            border-radius: 0 20px 20px 0;
            background-color: #A3C1AD;
            color: #FFFFFF;
        }
        .footer .email-form .btnn:hover {
            background-color: #8FAF8F;
        }
        .footer .bottom-text {
            font-size: 12px;
            margin-top: 30px;
        }
    </style>
  </head>
  <body>
    <!---Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light" id="home">
        <div class="container">
         <a class="navbar-brand" href="#">
          <img alt="PhysioZen Logo" height="50" src="image/logo.png" width="100"/>
         </a>
         <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
          <span class="navbar-toggler-icon" style="color:white">
          </span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
           <li class="nav-item">
            <a class="nav-link" href="index.php">
             Home
            </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="index.php#about">
             About Us
            </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="index.php#expertise">
             Services
            </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="jobs.php">
             Jobs
            </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="https://maps.apple.com/place?address=34%20Bowen%20St,%20Deagon%20QLD%204017,%20Australia&ll=-27.332543,153.059755&q=34%20Bowen%20St&t=m">
             Location
            </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="index.php#appointment">
             Contact Us
            </a>
           </li>
          </ul>
          <a class="btn btn-outline-success ms-3" href="index.php#appointment">
           Book Appointment
          </a>
          <a class="btn btn-outline-success ms-3" href="login.php">
            Log-in
          </a>
         </div>
        </div>
       </nav>
       <!--hero section-->
       <section class="hero-section">
        <div class="container">
         <div class="row">
          <div class="col-md-6 content">
           <h1>
            Join the Zenith Physiotherapy Team
           </h1>
           <p>
            Zenith Physiotherapy is dedicated to enhancing quality of life through personalized, evidence-based care, helping patients achieve optimal health and mobility.
           </p>
           <a class="btn btn-light" href="jobs.php">
            Apply Now
           </a>
           <div class="contact-info mt-4">
            <p>
             Give us a call:
            </p>
            <p>
             <strong>
                 +61 468 370 387
             </strong>
            </p>
           </div>
          </div>
          <div class="col-md-6 image">
          </div>
         </div>
        </div>
       </section>
       <div class="side-buttons">
        <a class="btn btn-warning" href="#expertise">
         Services
        </a>
        <a class="btn btn-success" href="#appointment">
         Contact
        </a>
        <a class="btn btn-success" href="#home">
         <i class='fas fa-angle-up'></i>
        </a>
       </div>
       <br><br><br><br>
    <!---login page--->
    <section class="login">
        <div class="login-container">
            <div class="login-form">
                <h2>
                Login To Your Account!
                </h2>
                <form>
                <div class="mb-3">
                <input class="form-control" placeholder="Username" id="uname" type="text"/>
                </div>
                <div class="mb-3">
                <input class="form-control" placeholder="Password" id="pass" type="password"/>
                </div>
                <button class="btn" id="login" onclick="check()">
                Login
                </button>
                </form>
            </div>
            <div class="login-image">
            </div>
            </div>
        </section>
    <!--Database-->
       <!---foot-->
       <br><br>
   <section class="foot">
    <div class="container footer">
        <div class="row text-center">
         <div class="col-12">
          <h2>
           Get a special 50% new patient discount and unleash your health.
          </h2>
          <form class="email-form d-inline-flex mt-3">
           <input placeholder="Email*" required="" type="email"/>
           <a class="btnn" href="mailto:zenithphysiotherapy2024@gmail.com?subject=Client query" target="_blank">
            <i class="fas fa-arrow-right"></i>
           </a>
          </form>
         </div>
        </div>
        <hr class="my-5" style="border-color: rgba(255, 255, 255, 0.2);"/>
        <div class="row text-center text-md-start">
         <div class="col-md-3">
          <img alt="logo" class="mb-3" height="50" src="image/logo.png" width="100"/>
          <h5>
           ZENITH PHYSIOTHERAPY QLD
          </h5>
          <div class="social-icons">
           <a href="https://www.facebook.com/zenithphysiotherapy2024?mibextid=kFxxJD">
            <i class="fab fa-facebook">
            </i>
           </a>
           <a href="https://www.instagram.com/Zenithphysiotherapy">
            <i class="fab fa-instagram">
            </i>
           </a>
          </div>
         </div>
         <div class="col-md-2">
          <h5>
           Pages
          </h5>
          <p>
           <a href="#about">
            About Us
           </a>
          </p>
          <p>
           <a href="#expertise">
            Our Services
           </a>
          </p>
          <p>
           <a href="jobs.php">
            Jobs
           </a>
          </p>
          <p>
           <a href="https://maps.apple.com/place?address=34%20Bowen%20St,%20Deagon%20QLD%204017,%20Australia&ll=-27.332543,153.059755&q=34%20Bowen%20St&t=m">
            Location
           </a>
          </p>
          <p>
           <a href="#appointment">
            Contact us
           </a>
          </p>
         </div>
         <div class="col-md-2">
            <h5>
             Our Services
            </h5>
            <p>
             Manual Therapy
            </p>
            <p>
             Lymphatic Drainage
            </p>
            <p>
             Pilates
            </p>
            <p>
             Dry needling
            </p>
            <p>
             Massage
            </p>
            <p>
             Prenatal and Postnatal massage
            </p>
           </div>
         <div class="col-md-2">
          <h5>
           Our Team
          </h5>
          <p>
           Dr. Rakesh
          </p>
          <p>
            Dr. Rupinder Kaur
           </p>
         </div>
         <div class="col-md-3">
          <h5>
           Contact Us
          </h5>
          <p>
            34 Bowen street, Deagon, QLD 4017
          </p>
          <p>
            48 Kauri CresPeregian Springs QLD 4573
          </p>
          <p>
           <a href="https://maps.apple.com/place?address=34%20Bowen%20St,%20Deagon%20QLD%204017,%20Australia&ll=-27.332543,153.059755&q=34%20Bowen%20St&t=m">
            View Directions
           </a>
          </p>
          <p>
            +61 468 370 387
          </p>
          <p>
            +61 424 411 103 
          </p>
          <p>
            zenithphysiotherapy2024@gmail.com
          </p>
         </div>
        </div>
       </div>
   </section>
   <script>
     function check(e){
        let uname = document.getElementById('uname').value
        let pass = document.getElementById('pass').value
        
        if(uname == "root456" && pass =="local67physio"){
            alert('Login Successfuly');
            window.location.href = "http://localhost/zenith_physio/index.php";
        }
        else{
            alert('Invalid Username or Password');
        }
    }
   </script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>