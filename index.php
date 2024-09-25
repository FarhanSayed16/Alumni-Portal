<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2 | Index</title>

    <link rel="stylesheet" href="css/styles.css">

    <!-- Bootstrap CSS --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        .card {
            width: 22rem;
            border: none;
            box-shadow: 0 4px 4px rgba(0,0,0,.2);
        }

        .card:hover{
            /* scale:5px; */
            transform:scale(1.03)
        }

        .card-btn {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .btn{
           /* background: rgb(250,170,65); */
           margin: 0 10px 10px 10px;
           background: linear-gradient(90deg, rgba(250,170,65,1) 0%, rgba(234,158,41,1) 35%, rgba(197,125,17,1) 100%);
           border:none;
        }
        .btn:hover{
            background:#f9de9e;
            color: rgba(197,125,17,1);
            transition: .3s;  
            font-size: 18px;

        }
        .footer-bottom{
           background: #212529;
           color:white;
        }
        .footer-link{
            color:#c0c3c7;
        }

     
        /* carousel banner */
        .banner{
          display:flex;
          justify-content: space-between;
          padding: 0 130px 20px 130px;
        }

        .banner-left{
          width:750px;
          height:420px;
          box-shadow:0 0 3px grey;
          box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
          background-color:orange;    
        }

     

        .banner-right{
          width:440px;
          height:420px;
          display:flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          /* box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset; */
          /* box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;  */
          box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
          /* background-color:orange; */
          padding:0 30px;
          text-align:start;
        }
        


      
      /* director mssg */
      .director-msg{
        margin:20px 0 50px 0;
        padding:0 140px 0 140px;
        background-color: #724a0d;
        display: flex;
        justify-content: space-between;
        color: #ffffff;
      }
      .director-msg-left{
        width: 70%;
        padding:20px
      }
      .director-msg-right{
        width:30%;
        padding:20px
      }
      .director-msg-right-img{
        width:250px;
        height:250px;
        border-radius:50%;       
      }



      /* gallery slides */
      .gallery-slider-container{
        background-color:#e6e6e6;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        margin:50px 0;
        padding:50px 0;
        /* display:flex;
        flex-direction: column;
        gap:20 */
      }
      .img_box img{
          max-width: 100%;
          height: 250px;
      }
      .img_box img:hover{
        transform: scale(1.06);
      }
      .slider-container .container2{
        padding:0 15px;
        max-width:1330px;
        margin:0 auto;
      }
      .card_slider{
        padding:50px 0 80px 0;
        /* position: relative; */
      }
      /* .swiper-button-prev{
        position: absolute;
        right:50px
      } */


    </style>
</head>
<body>
   
<!-- navbar -->
<nav class="navbar sticky-top navbar-expand-lg mb-5" style="display:flex;justify-content: space-between;">
        <div class="container " >
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div>
                 <a class="navbar-brand mx-0 mb-0 h1 " href="main_menu.php">Alumni Portal</a>
            </div>
            
            <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-1">
                        <h4 class="navbar-portal-name">College Full Name with College LOGO</h4>
                    </li>
                </ul>   
            </div>

            <div class="">
                    <div class="">
                        <div class="col-auto">
                        <input class="form-check-input d-none" type="checkbox" value="" aria-label="Checkbox for assignment declaration" checked disabled >
                        <a role="button" href="main.php" class="btn btn-primary py-2" style="background-color: #724a0d;border:#724a0d">Login | Register</a>
                    </div>
                </div>
            </div>


        </div>
</nav>

<!--bottom navbar  -->
<nav class="bottom-navbar-sticky-apply"> 
        <div class="bottom-navbar-home">
            <ul class="bottom-navbar-list">
                <li class="bottom-navbar-list-items">
                    <a class="nav-link nav-main-active px-2" aria-current="page" href="main_menu.php"><i class="bi bi-house bi-icon-color"></i> Home</a>  
                </li>
                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2" href="view_alumni.php"><i class="bi bi-people bi-icon-color"></i> Alumni Friends</a>           
                </li>
                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2" href="view_events.php"><i class="bi bi-calendar-check bi-icon-color"></i> Events/News</a>           
                </li>
                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2" href="view_advertisements.php"><i class="bi bi-megaphone bi-icon-color"></i> Advertisement</a>           
                </li>
                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2" href="#accordionExample" ><i class="bi bi-megaphone bi-icon-color"></i> FAQ</a>           
                </li> 
            </ul>
        </div>
</nav>


<!-- banner -->
<div class="banner" >

 <div class="banner-left">       
     <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
         
     <div class="carousel-inner" style="background-color:gray">

        <div class="carousel-indicators">
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-item active banner-height" style="height:420px" >
            <img src="images/social_image.jpg" class="carousel-item-img "  alt="..." style="width:800px;height:420px;opacity: 0.5;" >
            <div class="carousel-caption ">
               <h5 class="" style="font-size:40px;color:white">First Slide</h5>
               <p class="" style="font-size:20px;color:white">Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item banner-height" style="height:420px">
             <img src="images/social_event.jpg" class="carousel-item-img"  alt="..." style="width:800px;height:420px;opacity: 0.5;">
             <div class="carousel-caption d-none d-md-block">
                <h5 class="" style="font-size:40px;color:white">Second slide labelll</h5>
                <p class="" style="font-size:20px;color:white">Some representative placeholder content for the second slide.</p>
            </div>
       </div>
       <div class="carousel-item banner-height" style="height:420px">
           <img src="images/advertisement_photo.jpeg" class="carousel-item-img" alt="..." style="width:800px;height:420px;opacity: 0.5;">
           <div class="carousel-caption d-none d-md-block">
              <h5 class="" style="font-size:40px;color:white">Third slide label</h5>
              <p class="" style="font-size:20px;color:white">Some representative placeholder content for the third slide.</p>
       </div>

    </div>

    </div>
          <button class="carousel-control-prev" style="width:8%" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden" >Previous</span>
          </button>
          <button class="carousel-control-next" style="width:8%" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
          </button>
    </div>  
  
 </div >
   

 <div class="banner-right">
    <div style="display:flex;justify-content: center;align-items: center;gap:10px">
       <p><i class="bi bi-boxes"></i></p>
       <p> Lorem ipsum dolor sit amet consectetur adipisic elit. Quidem, nemo. </p>
    </div>
    <div style="display:flex;justify-content: center;align-items: center;;gap:10px">
       <p><i class="bi bi-boxes"></i></p>
       <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, nemo. </p>
    </div>
    <div style="display:flex;justify-content: center;align-items: center;;gap:10px">
       <p><i class="bi bi-boxes"></i></p>
       <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, nemo. </p>
    </div>
    <div style="display:flex;justify-content: center;align-items: center;;gap:10px">
       <p><i class="bi bi-boxes"></i></p>
       <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, nemo. </p>
    </div>
    <div style="display:flex;justify-content: center;align-items: center;;gap:10px">
       <p><i class="bi bi-boxes"></i></p>
       <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, nemo. </p>
    </div>
    
    
 </div >

</div>

<!-- director message -->
<div class="director-msg" >
   <div class="director-msg-left" >
     <h2>Message from the director</h2>
     <p style="font-size:14px; color:#f6f3ee" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id justo nec velit faucibus facilisis vel non ex. Donec fermentum, metus sit amet pellentesque consectetur, velit ipsum sodales massa, vitae dapibus mi dolor non lectus. Sed facilisis, purus in iaculis fermentum, justo velit condimentum nulla</p>
     
     <div>
        <p style="font-weight:600" >Full Name of President.<br/>President of Alumni Association </p>
        
      </div>
    </div>
    <div class="director-msg-right" >
        <img class="director-msg-right-img" src="images/advertisement_photo.jpeg"  />
    </div>
</div>


<!-- Cards Section -->
<div class="container slide-left">
  <div class="row justify-content-center">

    <!-- Alumni Friends -->
    <div class="col-auto mb-5 mx-auto">
                <div class="card text-center">
                  <img src="images/social_image.jpg" class="card-img-top" alt="Social Image">
                    <div class="card-body">
                        <h5 class="card-title">Alumni Friends</h5>
                        <p class="card-text">Expand your network. Reconnect with your alma mater</p>
                    </div>
                    <div class="d-grid gap-2"> <a role="button" class="btn card-btn btn-primary fw-medium py-2" href="view_alumni.php"><i class="bi bi-arrow-up-right-square"></i>  View Alumni</a> </div>
                </div>
            </div>

            <!-- Events/News -->
            <div class="col-auto mb-5 mx-auto">
                <div class="card text-center">
                    <img src="images/social_event.jpg" class="card-img-top" alt="Social Event">
                    <div class="card-body">
                      <h5 class="card-title">Events/News</h5>
                        <p class="card-text">Keep an eye out below for our evolving list of events</p>
                      </div>
                      <div class="d-grid gap-2"> <a role="button" class="btn card-btn btn-primary fw-medium py-2" href="view_events.php"><i class="bi bi-arrow-up-right-square"></i> View News/Events</a> </div>
                </div>
            </div>
            
            <!-- Advertisements -->
            <div class="col-auto mb-5 mx-auto">
              <div class="card text-center">
                    <img src="images/advertisement_photo.jpeg" class="card-img-top" alt="Advertisement Photo">
                    <div class="card-body">
                      <h5 class="card-title">Advertisements</h5>
                        <p class="card-text">Access exclusive job listings, workshops, seminars to nurture your professional growth</p>
                      </div>
                      <div class="d-grid gap-2"> <a role="button" class="btn card-btn btn-primary fw-medium py-2" href="view_advertisements.php"><i class="bi bi-arrow-up-right-square"></i> View Advertisements</a> </div>
                    </div>
            </div>
            
            <!-- Update Profile -->
            <div class="col-auto mb-5 mx-auto">
              <div class="card text-center">
                    <img src="images/profile_picture.jpg" class="card-img-top" alt="Profile Picture">
                    <div class="card-body">
                        <h5 class="card-title">Update Profile</h5>
                        <p class="card-text">Highlight your latest professional achievements and relevant skills</p>
                    </div>
                    <div class="d-grid gap-2"> <a role="button" class="btn card-btn btn-primary fw-medium py-2" href="<?php echo 'update_profile.php?email='.htmlspecialchars($_SESSION['logged_account']['email'])?>"><i class="bi bi-arrow-up-right-square"></i> View Profile</a> </div>
                </div>
            </div>

            <!-- card-5 -->
            <div class="col-auto mb-5 mx-auto">
                <div class="card text-center">
                    <img src="images/profile_picture.jpg" class="card-img-top" alt="Profile Picture">
                    <div class="card-body">
                        <h5 class="card-title">Update Profile</h5>
                        <p class="card-text">Highlight your latest professional achievements and relevant skills</p>
                    </div>
                    <div class="d-grid gap-2"> <a role="button" class="btn card-btn btn-primary fw-medium py-2" href="<?php echo 'update_profile.php?email='.htmlspecialchars($_SESSION['logged_account']['email'])?>"><i class="bi bi-arrow-up-right-square"></i> View Profile</a> </div>
                </div>
              </div>

            <!-- card-6 -->
            <div class="col-auto mb-5 mx-auto">
                <div class="card text-center">
                    <img src="images/profile_picture.jpg" class="card-img-top" alt="Profile Picture">
                    <div class="card-body">
                        <h5 class="card-title">Update Profile</h5>
                        <p class="card-text">Highlight your latest professional achievements and relevant skills</p>
                    </div>
                    <div class="d-grid gap-2"> <a role="button" class="btn card-btn btn-primary fw-medium py-2" href="<?php echo 'update_profile.php?email='.htmlspecialchars($_SESSION['logged_account']['email'])?>"><i class="bi bi-arrow-up-right-square"></i> View Profile</a> </div>
                </div>
            </div>
            
            <!-- Placeholder cards -->
            <div class="col-auto mb-5 mx-auto">
              <div class="card text-center"></div>
            </div>
            <div class="col-auto mb-5 mx-auto">
              <div class="card text-center"></div>
            </div>
            
        </div>
</div>

<!-- FAQ SECTION -->
<div style="display:flex;justify-content: space-between ;padding: 0 130px 20px 130px;">
  <div style="width:30%">
    <img src="images/faq_image.png" style="width:500px">
  </div> 

  <div class="accordion" id="accordionExample" >


  <h2>FQA Section</h2>

  <div class="accordion-item" style="width:700px">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item" style="width:700px">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item" style="width:700px">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>

  <div class="accordion-item" style="width:700px">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #4
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  
  </div>

</div>



<!-- Footer -->
<footer class="footer-bottom text-center ">
      <!-- Grid container -->
      <div class="container p-4">
         
        <!-- Section: Links -->
             <section class="">
         
               <!--Grid row-->
               <div class="row">
                 <!--Grid column-1-->
                 <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                   <h2 class="text-uppercase text-start">COLLEGE LOGO</h2>
         
                   <p class="text-start">Small College Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam </p>
         
                   <section class="mb-4 text-start">
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button" ><i class="bi bi-facebook"></i></a>
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="bi bi-twitter"></i></a>
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="bi bi-instagram"></i></a>
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="bi bi-linkedin"></i></a>
                    <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="bi bi-whatsapp"></i></a>
                  </section>
                 </div>
             
                 
                 <!--Grid column-2-->
                 <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                   <h5 class="text-uppercase">Links</h5>
         
                   <ul class="list-unstyled mb-0">
                     <li class="py-1">
                       <a class="footer-link" href="#!">Link 1</a>
                      </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Link 2</a>
                     </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Link 3</a>
                     </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Link 4</a>
                      </li>
                   </ul>
                 </div>
                 
         
                 <!--Grid column-3-->
                 <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                   <h5 class="text-uppercase">Quick Links</h5>
         
                   <ul class="list-unstyled mb-0">
                     <li class="py-1">
                       <a class="footer-link" href="#!">Home</a>
                     </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Events/News</a>
                     </li>
                     <li class="py-1"> 
                       <a class="footer-link" href="#!">Advertisements</a>
                     </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Help</a>
                     </li>
                    </ul>
                 </div>
                 
         
                 <!--Grid column-4-->
                 <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                   <h5 class="text-uppercase">Contact Us</h5>
         
                   <ul class="list-unstyled mb-0 ">
                     <li class="py-2 ">
                       <a class="footer-link text-decoration-none" href="#!"><i class="bi bi-bank"></i> College Full Name</a>
                     </li>
                     <li class="py-2">
                       <a class="footer-link text-decoration-none" href="#!"><i class="bi bi-envelope"></i> saaj@gmail.com</a>
                     </li>
                     <li class="py-2">
                       <a class="footer-link text-decoration-none" href="#!"><i class="bi bi-telephone-fill"></i> 9876543210</a>
                     </li>
                     <li class="py-2">
                       <a class="footer-link text-decoration-none" href="#!"><i class="bi bi-geo-alt"></i> Location </a>
                      </li>
                   </ul>
                 </div>
                 
               </div>
               <!--Grid row-->
               
         
             </section>
             <!-- Section: Links -->
           </div>
           <!-- Grid container -->
         
           <!-- Copyright -->
           <div class="text-center p-1" style="background-color: #e99519">
             © 2020 Copyright:
             <a class="text-reset fw-bold text-decoration-none" href="#">All Rights Reserved by College Full Name</a>
            </div>
           <!-- Copyright -->
</footer>
<!-- Footer -->




    
    <!-- Boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>