<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2 | View Alumni</title>

    <link rel="stylesheet" href="css/styles.css">
    <!-- Add Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Bootstrap CSS --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons --><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        .card {
            width: 25rem;
            border: none;
            box-shadow: 0 2px 2px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
            transition: 0.2s ease;
        }

        .card:hover{
            background-color: #E4E6E9;
            transition: 0.075s ease;
        }

        .profilePictureThumbnail{
            width: 100px;
            border-radius: 50%;
        }
        .donate-banner{
    height: 500px;
  
    background-color:#facd89;
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    
}
.donate-banner-top{
    text-align:center;
    
}
.donate-button1{
    background-color: #724a0d;
    color: #fff;
    border: 2px solid #724a0d;
    padding: 10px 20px;
    cursor: pointer;
    margin:0 10px;
}
.donate-button2{
    background-color: #fff ;
    color: #724a0d;
    border: 2px solid #724a0d;
    padding: 10px 20px;
    cursor: pointer;
    margin:0 10px;
}

/* banner-2 */
.banner_2{
    display:flex;
    /* width: 100%; */
    background-color: #fff;
    justify-content: space-between;
    padding: 20px 200px;
}
.banner_2_left{
    background-color: #fff;
    width: 50%;
    margin:20px 40px;
    padding:20px;
}
.banner_2_right{
    background-color: #655322;
    width: 50%;
    margin:20px 40px;
}
.banner_2_boxes{
    width:90%;
    display:flex;
    justify-content: flex-start;
}
.banner_2_boxes-list{
    background-color: #876542;
    padding: 15px;
    height:110px;
    border-radius:5px   
}
.banner_2_donation{
  /* background-color:#865649; */
  margin-top:20px;
  width:93% ;
  /* padding:5px; */
}
.banner_2_donation_list{
    background-color:grey;
    border-radius:10px;
    margin:10px 0;
    padding:5px; 
}

 /* popup form */
 .popup_2 {
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0,
                        0,
                        0,
                        0.4);
                display: none;
            }

            .popup-content {
                background-color: white;
                margin: 10% auto;
                padding: 20px;
                border: 1px solid #888888;
                width: 30%;
                font-weight: bolder;
            }

            .popup-content button {
                display: block;
                margin: 0 auto;
            }

            .show {
                display: block;
            }

            #statistics {
               margin: 20px auto;
              width: 70%;
               height: 500px
            }


            /* chart */
            
            .donate-chart-container{
                width:80%;
                margin:20px auto;
                background-color: #FFFFFF;

            }

    </style>
</head>

<body>
    <?php
        include 'db_controller.php';
        $conn->select_db("Alumni");
        
        session_start();

        include 'logged_user.php';
    ?>

    <!-- Top nav bar -->
<nav class="navbar sticky-top navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand mx-0 mb-0 h1" href="main_menu.php">Alumni Portal</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-1">
                        <h4 class="navbar-portal-name">College Full Name with College LOGO</h4>
                    </li>
                    
                </ul>
            </div>
            <?php include 'nav_user.php' ?>
        </div>
</nav>
    
<nav class="bottom-navbar-sticky-apply">

        <div class="bottom-navbar-view">
            <ul class="bottom-navbar-list">
                <li class="bottom-navbar-list-items">
                    <a class="nav-link  px-2" aria-current="page" href="main_menu.php"><i class="bi bi-house bi-icon-color"></i> Home</a>  
                </li>
                
                <li class="bottom-navbar-list-items">
                    <a class="nav-link  px-2" href="view_alumni.php"><i class="bi bi-people bi-icon-color"></i> Alumni Friends</a>           
            </li>
            
            <li class="bottom-navbar-list-items">
                <a class="nav-link px-2" href="view_events.php"><i class="bi bi-calendar-check bi-icon-color"></i> Events/News</a>           
            </li>
            
            <li class="bottom-navbar-list-items">
                <a class="nav-link px-2" href="view_advertisements.php"><i class="bi bi-megaphone bi-icon-color"></i> Advertisement</a>           
            </li>

            <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2 " href="alumni_project.php"><i class="bi bi-credit-card bi-icon-color"></i> Alumni Project</a>           
                </li>

                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2 nav-main-active" href="donation_do.php" ><i class="bi bi-credit-card bi-icon-color"></i> Donation</a>           
                </li>
                <li class="bottom-navbar-list-items">
                    <a class="nav-link px-2" href="mentors_program.php" ><i class="bi bi-person-check  bi-icon-color"></i> Mentors Program</a>           
                </li>
                
            
        </ul> 
    </div>
</nav>



<!-- banner -->
<div class="donate-banner">
      <div class="donate-banner-top">
         <div style="margin-bottom:10px"><p>Alumni</p></div>
         <div style="font-size:50px; font-weight:bold;margin-bottom:20px;line-height:50px">Helping each other<br/> can make world better</div>
         <div> <p style="width:70%; margin:0 auto;margin-bottom:30px;font-size:13.5px"> Lorem ipsum dolor sit amet consectetur adipisicing elit. A eveniet ex labore odit qui dicta illo ratione culpa, quod voluptatibus!</p>
         </div>
      </div>
      
      <div class="donate-banner-bottom">
        <button class="donate-button1" id="myButton" >Donate Now</button>
        <button class="donate-button2">Contact Us</button>
      </div>
  </div>
    
<!-- banner-2 -->
<div class="banner_2">

        <div class="banner_2_left">
            <div style="font-size:13px;font-weight:bold"> Welcome to Charity</div>
            <div style="font-size:23px;font-weight:bold" >Let Us Come Together <br/> To Make A Difference</div>
            <div style="font-size:12px;font-weight:semibold;color:grey;padding-bottom:20px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora voluptatum minus perferendis minima ratione. Fugiat amet nulla, vero temporibus et dolor asperiores obcaecati at unde culpa assumenda inventore excepturi ipsum?</div>

            <div class="banner_2_boxes">
                <div class="banner_2_boxes-list" style="margin-right:20px">
                    <h3 style="font-size:16px;font-weight:bold"><i class="bi bi-people "></i> Our Mission</h3>
                    <p style="font-size:12px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, cupiditate.</p>
                </div>
                <div class="banner_2_boxes-list" style="margin-left:20px">
                    <h3 style="font-size:16px;font-weight:bold"><i class="bi bi-people "></i> Our Mission</h3>
                    <p style="font-size:12px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, cupiditate.</p>
                </div>
            </div>

            <div class="banner_2_donation">
            <div class="banner_2_donation_list">
                Total Donations
                <!-- <p id="total-donations">$0</p> -->
            </div>
            <div class="banner_2_donation_list">
                Highest Donation
                <!-- <p id="highest-donation">$0</p> -->
            </div>
            <div class="banner_2_donation_list">
                Top Donor
                <!-- <p id="top-donor">N/A</p> -->
            </div>
            </div>

        </div>

        <div class="banner_2_right">
            right
         </div>

</div>


<div class="donate-chart-container">

        <!-- Header Section -->
        <header style="display:flex;justify-content:space-between;align-items:center; background-color:grey;padding:10px">
            <h1>Alumni Donation Portal</h1>
            <button id="donate-button" onclick="showForm()" style="padding:6px 20px;border:none;background-color:#765546;color:#fff;cursor: pointer;">Donate</button>
        </header>

        <!-- Total Donation Overview -->
        <section id="overview" style="display:flex;justify-content:space-between;align-items:center;margin:20px 0">
            <div class="stat" style="background-color:#723346;width:390px;text-align:center;color:white">
                <h2>Total Donations</h2>
                <p id="total-donations">$0</p>
            </div>
            <div class="stat" style="background-color:#723346;width:390px;text-align:center;color:white">
                <h2>Highest Donation</h2>
                <p id="highest-donation">$0</p>
            </div>
            <div class="stat" style="background-color:#723346;width:390px;text-align:center;color:white">
                <h2>Top Donor</h2>
                <p id="top-donor">N/A</p>
            </div>
        </section>

        <!-- Donation Statistics Section -->
        <section id="statistics">
            <h2 style="text-align:center">Donation Statistics (2020 - 2023)</h2>
            <canvas id="yearly-chart"></canvas>
        </section>

        <!-- Pop-up News -->
        <!-- <div id="popup-news" class="popup">
            <h3>New Donation Round Open!</h3>
            <p>We need support for upcoming projects and sponsorships. Click here to contribute.</p>
            <button onclick="closePopup()">Close</button>
        </div> -->

</div>


  <!-- popup-form -->
  <div>
    <!-- <button >Click me</button> -->

    <div id="myPopup" class="popup_2">
        <div class="popup-content">

        <form>
            <div>
                <p>Your Donation<p>
                    <div>
                       <input type="text" placeholder="Amount" name="name"/>
                    </div>
            <div> 
            <hr/>
            <div>
                <p>Personal Details</p>
                <div>
                    <div>
                        <input type="text" placeholder="First Name" name="name"/>
                    </div>
                    <div>
                       <input type="text" placeholder="Last Name" name="name"/>
                    </div>
                    <div>
                       <input type="text" placeholder="Email" name="name"/>
                    </div>
                    <div>
                       <input type="text" placeholder="Phone Number" name="name"/>
                    </div>
                </div>
            <div>    

            <hr/>

            <div>
                <p>Payment Method</p>
                <div>
                    <input type="radio" id="html" name="fav_language" value="HTML">
                   <label for="html">Method-1</label><br>
                   <input type="radio" id="css" name="fav_language" value="CSS">
                   <label for="css">Method-2</label><br>                  
                </div>
            <div>    

        </form>


            <div>
            <button id="closePopup_2">
                Close
            </button>
            <button >
                Submit
            </button>
            </div>
        </div>
    </div>


</div>
    
    <!-- Boostrap JS --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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
</body>
<script>
    // Mock donation data
const donationData = {
    total: 50000,
    highestDonation: 10000,
    topDonor: "John Doe",
    yearlyData: {
        2020: 10000,
        2021: 15000,
        2022: 20000,
        2023: 5000
    },
};

// Load initial data and render charts
window.onload = function () {
    // Display totals
    document.getElementById("total-donations").innerText = $${donationData.total};
    document.getElementById("highest-donation").innerText = $${donationData.highestDonation};
    document.getElementById("top-donor").innerText = donationData.topDonor;

    // Render yearly donation chart
    const ctx = document.getElementById('yearly-chart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Donations ($)',
                data: Object.values(donationData.yearlyData),
                backgroundColor: ['#3f51b5', '#2196f3', '#4caf50', '#ff5722']
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Show popup
    document.getElementById('popup-news').style.display = 'block';
};

// Show donation form (for donate button)
function showForm() {
    alert("Redirecting to donation rules and form...");
}

// Close popup
function closePopup() {
    document.getElementById('popup-news').style.display = 'none';
}

</script>
<script>
        myButton.addEventListener(
            "click",
            function () {
                myPopup.classList.add("show");
            }
        );
        closePopup_2.addEventListener(
            "click",
            function () {
                myPopup.classList.remove(
                    "show"
                );
            }
        );
        window.addEventListener(
            "click",
            function (event) {
                if (event.target == myPopup) {
                    myPopup.classList.remove(
                        "show"
                    );
                }
            }
        );
    </script>
</html>
