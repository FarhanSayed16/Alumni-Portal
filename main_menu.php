<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Network | Main Menu</title>

      <link rel="stylesheet" href="css/styles.css">


    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Bootstrap Icons --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    
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
          /* align-items: center; */
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
    <?php
        session_start();

        include 'logged_user.php';
    ?>
    

    <!-- Top nav bar -->
    <nav class="navbar sticky-top navbar-expand-lg mb-5">
        <div class="container">
            <a class="navbar-brand mx-0 mb-0 h1 " href="main_menu.php">Alumni Portal</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-1">
                        <h4 class="navbar-portal-name"><img src="pillailogo.png" alt="">Insert college logo here</h4>
                    </li>
                </ul>   
            </div>
            <?php include 'nav_user.php'; ?>
        </div>
    </nav>
    

    <nav class="bottom-navbar-sticky-apply"> 
        <div class="bottom-navbar-home">
            <ul class="bottom-navbar-list">
                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2 nav-main-active" href="main_menu.php" ><i class="bi bi-house bi-icon-color"></i> Home</a>  
                </li>
                
                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2" href="view_alumni.php"><i class="bi bi-people bi-icon-color"></i> PCE Alumni</a>           
                </li> 
                
                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2" href="view_events.php"><i class="bi bi-calendar-check bi-icon-color"></i> Events/News</a>           
                </li>
                
                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2" href="view_advertisements.php"><i class="bi bi-megaphone bi-icon-color"></i> Advertisement</a>           
                </li>

                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2" href="alumni_project.php"><i class="bi bi-credit-card bi-icon-color"></i> Alumni Project</a>           
                </li>

                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2" href="donation_do.php" ><i class="bi bi-credit-card bi-icon-color"></i> Donation</a>           
                </li>
                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2" href="mentors_program.php" ><i class="bi bi-person-check  bi-icon-color"></i> Mentors Program</a>           
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
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 3"></button>
          </div>

          <div class="carousel-item active banner-height" style="height:420px" >
              <img src="images/Welcome2.png" class="carousel-item-img "  alt="..." style="width:800px;height:420px;opacity: 0.9;" >
              <div class="carousel-caption ">
                 <h5 class="" style="font-size:40px;color:white">Welcome to Official Alumni Network of PCE, Panvel</h5>
                 <!-- <p class="" style="font-size:20px;color:white">Some representative placeholder content for the first slide.</p> -->
              </div>
          </div>
          <div class="carousel-item banner-height" style="height:420px" >
              <img src="images/award.png" class="carousel-item-img "  alt="..." style="width:800px;height:420px;opacity: 0.9;" >
              <div class="carousel-caption ">
                 <h5 class="" style="font-size:40px;color:white">Alumni Awards Ceremony 2024</h5>
                 <!-- <p class="" style="font-size:20px;color:white">Some representative placeholder content for the first slide.</p> -->
              </div>
          </div>
          <div class="carousel-item  banner-height" style="height:420px" >
              <img src="images/25_years.jpg" class="carousel-item-img "  alt="..." style="width:800px;height:420px;opacity: 0.5;" >
              <div class="carousel-caption ">
                 <h5 class="" style="font-size:40px;color:white">Silver Jubilee <br>Celebration</h5>
                 <!-- <p class="" style="font-size:20px;color:white">Some representative placeholder content for the first slide.</p> -->
              </div>
          </div>

          <div class="carousel-item banner-height" style="height:420px">
               <img src="images/alumini_meet.jpg" class="carousel-item-img"  alt="..." style="width:800px;height:420px;opacity: 0.5;">
               <div class="carousel-caption d-none d-md-block">
                  <h5 class="" style="font-size:40px;color:white">Students and Alumni Interactions

                  </h5>
                  <!-- <p class="" style="font-size:20px;color:white">Some representative placeholder content for the second slide.</p> -->
              </div>
         </div>
         <div class="carousel-item banner-height" style="height:420px">
             <img src="images/Pannel_disc.jpg" class="carousel-item-img" alt="..." style="width:800px;height:420px;opacity: 0.5;">
             <div class="carousel-caption d-none d-md-block">
                <h5 class="" style="font-size:40px;color:white">Alumni Panel Discussion: Vision 2050 for PCE
                </h5>
                <p class="" style="font-size:20px;color:white">Alumni Panel Discussion: Vision 2050 for IIITH.</p>
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
    <!-- Event 1 -->
    <div style="display: flex; justify-content: flex-start; align-items: center ; gap: 10px;">
        <i class="bi bi-boxes"></i>
        <div>
            <h6 class="event_title">Computer Society of India - E-TechNext2024 Global event<br>5th Aug 2024 | 
                ►<a href="https://www.facebook.com/Vidyalankar.VSIT/posts/566491095493637" target="_blank">Explore</a>
            </h6>
        </div>
    </div>
    <!-- Event 2 -->
    <div style="display: flex; justify-content: flex-start; align-items: center ; gap: 10px;">
        <i class="bi bi-boxes"></i>
        <div>
            <h6 class="event_title">Event related to AR/VR by TechVista and <br>23 July 2024 | 
                ►<a href="https://www.facebook.com/Vidyalankar.VSIT/posts/566491095493637" target="_blank">Explore</a>
            </h6>
        </div>
    </div><!-- Event 3 -->
    <div style="display: flex; justify-content: flex-start; align-items: center ; gap: 10px;">
        <i class="bi bi-boxes"></i>
        <div>
            <h6 class="event_title">Maay Marathi<br>7 Jan 2024 | 
                ►<a href="https://www.facebook.com/Vidyalankar.VSIT/posts/566491095493637" target="_blank">Explore</a>
            </h6>
        </div>
    </div>

    <!-- Event 2 -->
    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 10px;">
        <i class="bi bi-boxes"></i>
        <div>
            <h6 class="event_title">Seminar on Academic Resonance<br>30 Jan - 8 Feb 2024 | 
                ►<a href="https://www.facebook.com/Vidyalankar.VSIT/posts/814928150649929" target="_blank">Explore</a>
            </h6>
        </div>
    </div>

    <!-- Event 3 -->
    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 10px;">
        <i class="bi bi-boxes"></i>
        <div>
            <h6 class="event_title">World Entrepreneurship Day<br>30 Jun 2024 | 
                ►<a href="https://www.instagram.com/p/C_TKTMVPH4U/" target="_blank">Explore</a>
            </h6>
        </div>
    </div>

    <!-- Event 4 -->
    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 10px;">
        <i class="bi bi-boxes"></i>
        <div>
            <h6 class="event_title">City Flo - Pioneering Urban Mobility: BUILDING DREAMS<br>9 Aug 2024 | 
                ►<a href="https://www.instagram.com/p/C-nafProD0Q/" target="_blank">Explore</a>
            </h6>
        </div>
    </div>

    <!-- Event 5 -->
    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 10px;">
        <i class="bi bi-boxes"></i>
        <div>
            <h6 class="event_title">Symposium on 'Generative AI'<br>28 Aug 2024 | 
                ►<a href="https://www.instagram.com/p/C_C_o52Nkj5/" target="_blank">Explore</a>
            </h6>
        </div>
    </div>
</div>

 </div>

      
      
  </div >

 </div>

<!-- director message -->
<div class="director-msg" >
   <div class="director-msg-left" >
     <h2>Message from the Principal</h2>
     <p style="font-size:14px; color:#f6f3ee" >PCE aims to be among the world’s foremost academic institutions through the pursuit of excellence in research and promotion of innovation by offering world-class education to train future leaders in science and technology and by applying science and technology breakthroughs for India’s wealth creation and social welfare.</p>
     
     <div>
        <p style="font-weight:600" >Sandeep Joshi.<br/>Principal of Pillai College of Engineering </p>
        
      </div>
    </div>
   <div class="director-msg-right" >
      <img class="director-msg-right-img" src="images/Asif_ramp.png"  />
   </div>
</div>


<!-- gallery slider -->
 <div class="gallery-slider-container">
    <div class="container " style="text-align:center">
      <h2>Gallery Section</h2>
      <p>Stay up-to-date with the latest PCE news and announcements. Get in touch with our team today if you need more information.

<p>
    </div>

      <section class="slider-container">
            <div class="container2">
      
                <div class="swiper card_slider">
                   <div class="swiper-wrapper">
                      <div class="swiper-slide"> 
                         <div class="img_box"><img src="images/Saraswati.jpg"></div> 
                      </div>
                      <div class="swiper-slide"> 
                         <div class="img_box"><img src="images/IIPS_found.jpg"></div>  
                      </div>
                      <div class="swiper-slide"> 
                        <div class="img_box"><img src="images/Techworkers.jpg"></div>  
                      </div>
                      <div class="swiper-slide"> 
                        <div class="img_box"><img src="images/jhanda.jpg"></div>  
                      </div>
                      <div class="swiper-slide"> 
                        <div class="img_box"><img src="images/guitar.jpg "></div>  
                      </div>
                      <div class="swiper-slide"> 
                        <div class="img_box"><img src="images/yoga.jpg"></div>  
                      </div>
                      <div class="swiper-slide"> 
                        <div class="img_box"><img src="images/passout.jpg"></div>  
                      </div>
                      <div class="swiper-slide"> 
                        <div class="img_box"><img src="images/25_years.jpg"></div>  
                      </div>
                      <div class="swiper-slide"> 
                        <div class="img_box"><img src="images/ballons_celebration.jpg"></div>  
                      </div>
                      <div class="swiper-slide"> 
                        <div class="img_box"><img src="images/social_image.jpg"></div>  
                      </div>
                   </div>
                   <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                   <div class="swiper-pagination "></div>
                </div>
      
            </div>
      </section>

 </div>


<!-- Cards Section -->
<div class="container slide-left">
  <div class="row justify-content-center">

    <!-- Alumni Friends -->
    <div class="col-auto mb-5 mx-auto">
                <div class="card text-center">
                  <img src="images/social_image.jpg" class="card-img-top" alt="Social Image">
                    <div class="card-body">
                        <h5 class="card-title">PCE Alumni</h5>
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


<!-- star alumni testimonials -->
<div>
   <div style="width:50%;margin:auto;text-align:center"><h2>Testimonials</h2></div>
   <div class="testimonial-slider" style="width:60%; height:100%;margin:20px auto 80px auto;background-color:#ffebcc;padding:20px;box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">


   <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2" style="width:800px">
    <div class="swiper-wrapper" style="width:100%;height:300px">

      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="images\sahil.png"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2>Sahil Shah</h2>
          <p>Tech Worker</p>
          <p>Innovative tech founder and software developer with 5+ years of experience in designing and developing high-quality software solutions. As a Grand Finalist of SIH 2023, demonstrated strong problem-solving skills and leadership in fast-paced environments. Adept at full-stack development, project management, and building cross-functional teams to deliver cutting-edge technology. Passionate about leveraging programming expertise to create impactful solutions.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>

      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="images/srik.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2>Srikanth</h2>
          <p>Graphic Designer</p>
          <p>Creative and detail-oriented graphic designer with 6+ years of experience in visual storytelling, branding, and digital marketing. Skilled in delivering impactful designs across print and digital platforms, with expertise in Adobe Creative Suite, typography, and UX/UI design. Known for a user-centered design approach and the ability to manage multiple projects efficiently, from concept to execution.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>
      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="images/far.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2>Farhan</h2>
          <p>Team member</p>
          <p>Farhan is ambitious, innovative, and determined. Farhan is passionate about technology, leadership, and making meaningful contributions, whether through projects like MediScan, organizing events, or representing CSI. His blend of creativity, curiosity, and problem-solving skills makes him a forward-thinking leader, always eager to explore new ideas and tackle challenges head-on.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>
      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="images/kau.png"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2>Kaustubh</h2>
          <p >Team member</p>
          <p>Known for a user-centered design approach and the ability to manage multiple projects efficiently, from concept to execution.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>
      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="images/kara.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2>Karna</h2>
          <p>Specialist</p>
          <p>Known for a user-centered design approach and the ability to manage multiple projects efficiently, from concept to execution.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>
      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="https://swiperjs.com/demos/images/nature-6.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2>Full Name of Alumni</h2>
          <p>Specialist</p>
          <p>Description of Alumni Student Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laboriosam nam voluptatem similique accusantium consequatur nulla impedit sit autem provident.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>
      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="https://swiperjs.com/demos/images/nature-7.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2>Full Name of Alumni</h2>
          <p>Specialist</p>
          <p>Description of Alumni Student Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laboriosam nam voluptatem similique accusantium consequatur nulla impedit sit autem provident.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>

      

      
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <div thumbsSlider="" class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/sahil.png" style="height:100px;width:100%" />
      </div>
      <div class="swiper-slide">
        <img src="images/srik.jpg" style="height:100px;width:100%"/>
      </div>
      <div class="swiper-slide">
        <img src="images/far.jpg" style="height:100px;width:100%"/>
      </div>
      <div class="swiper-slide">
        <img src="images/kau.png" style="height:100px;width:100%"/>
      </div>
      <div class="swiper-slide">
        <img src="images/kara.jpg" style="height:100px;width:100%"/>
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-6.jpg" style="height:100px;width:100%""/>
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-7.jpg" style="height:100px;width:100%""/>
      </div>
      
    </div>
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
         
                   <p class="text-start">Pillai College of Engineering is amongst the most popular colleges of the city offering B.Tech and doctoral programmes in IT, Commerce, Management and Mass Media. PCE is a college affiliated to the University of Mumbai and approved by the Government of Maharashtra. </p><div class="ms+15"><a href="#!" style="color:#3b5998; font-size: 24px;"><i cl5ass="bi bi-facebook"></i></a><a href="#!" style="color:#1DA1F2; font-size: 24px;" class="me-2"><i class="bi bi-twitter"></i></a><a href="#!" style="color:#C13584; font-size: 24px;" class="me-2"><i class="bi bi-instagram"></i></a><a href="#!" style="color:#0077B5; font-size: 24px;" class="me-2"><i class="bi bi-linkedin"></i></a><a href="#!" style="color:#0088cc; font-size: 24px;" class="me-2"><i class="bi bi-telegram"></i></a>
                 </div>
    </div>
                 
              <!--Grid column-2-->
                 <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                   <h5 class="text-uppercase">Department</h5>
         
                   <ul class="list-unstyled mb-0">
                     <li class="py-1">
                       <a class="footer-link" href="#!">Mechanical Engineering</a>
                      </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Computer Science Engineering        </a>
                     </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Information Technology</a>
                     </li>
                     <li class="py-1">
                       <a class="footer-link" href="#!">Electrical Engineering</a>
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
             © 2024 Copyright:
             <a class="text-reset fw-bold text-decoration-none" href="#">All Rights Reserved by S.A.A.J</a>
            </div>
           <!-- Copyright -->
    </footer>
<!-- Footer -->




<!--  -->
<!-- <div class="testimonial-slider" style="width:60%; height:100%;margin:50px auto;background-color:#ffebcc;padding:20px;box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;">


 <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2" style="width:800px">
    <div class="swiper-wrapper" style="width:100%;height:300px">

      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="https://swiperjs.com/demos/images/nature-1.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2 style="">Full Name of Alumni</h2>
          <p style="">Specialist</p>
          <p>Description of Alumni Student Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laboriosam nam voluptatem similique accusantium consequatur nulla impedit sit autem provident.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>

      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="https://swiperjs.com/demos/images/nature-2.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2 style="">Full Name of Alumni</h2>
          <p style="">Specialist</p>
          <p>Description of Alumni Student Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laboriosam nam voluptatem similique accusantium consequatur nulla impedit sit autem provident.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>
      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2 style="">Full Name of Alumni</h2>
          <p style="">Specialist</p>
          <p>Description of Alumni Student Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laboriosam nam voluptatem similique accusantium consequatur nulla impedit sit autem provident.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>
      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2 style="">Full Name of Alumni</h2>
          <p style="">Specialist</p>
          <p>Description of Alumni Student Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laboriosam nam voluptatem similique accusantium consequatur nulla impedit sit autem provident.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>
      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="https://swiperjs.com/demos/images/nature-5.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2 style="">Full Name of Alumni</h2>
          <p style="">Specialist</p>
          <p>Description of Alumni Student Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laboriosam nam voluptatem similique accusantium consequatur nulla impedit sit autem provident.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>
      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="https://swiperjs.com/demos/images/nature-6.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2 style="">Full Name of Alumni</h2>
          <p style="">Specialist</p>
          <p>Description of Alumni Student Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laboriosam nam voluptatem similique accusantium consequatur nulla impedit sit autem provident.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>
      <div class="swiper-slide" style="width:100%;height:300px;display:flex;" >
        <div style="width:40%">
          <img src="https://swiperjs.com/demos/images/nature-7.jpg"  style="width:100%;height:100%;padding:20px 30px 20px 50px"/>
        </div>
        <div style="width:60%;padding:20px 50px 20px 0px;height:100%; display:flex; flex-direction:column;  justify-content:center">
          <hr style="border:2px solid black"/>
          <h2 style="">Full Name of Alumni</h2>
          <p style="">Specialist</p>
          <p>Description of Alumni Student Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laboriosam nam voluptatem similique accusantium consequatur nulla impedit sit autem provident.</p>
          <hr style="border:2px solid black"/>
        </div>
      </div>

      

      
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <div thumbsSlider="" class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-1.jpg" style="height:100px;width:100%" />
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-2.jpg" style="height:100px;width:100%""/>
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-3.jpg" style="height:100px;width:100%""/>
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-4.jpg" style="height:100px;width:100%""/>
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-5.jpg" style="height:100px;width:100%""/>
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-6.jpg" style="height:100px;width:100%""/>
      </div>
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-7.jpg" style="height:100px;width:100%""/>
      </div>
      
    </div>f
 </div>
</div> -->




    
    <!-- Boostrap JS --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".card_slider", {
      // slidesPerView: 5,
      spaceBetween: 10,
      loop:true,
      speed:1000,
      autoplay:{
        delay:2000,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        480: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 5,
        },

      },
    });
  </script>

<script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 5,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      loop: true,
      // spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
</script>

    
</body>
</html>
