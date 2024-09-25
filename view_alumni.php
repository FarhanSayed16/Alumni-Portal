<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2 | View Alumni</title>

    <link rel="stylesheet" href="css/styles.css">

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
                    <a class="nav-link nav-main-active px-2" href="view_alumni.php"><i class="bi bi-people bi-icon-color"></i> PCE Alumni</a>           
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
    
    

    <!-- Breadcrumb -->
    <div class="container my-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="breadcrumb-link text-secondary link-underline link-underline-opacity-0" href="main_menu.php">Home</a></li>
                <li class="breadcrumb-item breadcrumb-active" aria-current="page">Alumni Friends</li>
            </ol>
        </nav>
    </div>

    <div class="container mb-5">
        <div class="row">
            <h1 class="<?php echo (!isset($_GET['search'])) ? "slide-left" : "" ?>">Alumni Friends</h1>
            
            <!-- Search box -->
            <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "GET">
                <div class="input-group mb-3 <?php echo (!isset($_GET['search'])) ? "slide-left" : "" ?>">
                    <input type="text" class="form-control py-3 my-3" placeholder="Search" name="search" aria-label="Search" aria-describedby="button-addon2" value="<?php echo (isset($_GET['search'])) ? trim($_GET['search']) : ""; ?>">
                    <button class="btn btn-primary px-4 py-3 my-3" type="submit" id="button-addon2" style="background-color: #724a0d"><i class="bi bi-search"></i></button>
                </div>
            </form>

            <?php
                $loggedAccountEmail = $_SESSION['logged_account']['email'];

                // Perform search on query, otherwise simply fetch all
                $searchQuery = "";
                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
                    $searchQuery = trim(strtolower($_GET['search']));

                    if ($searchQuery != ""){
                        $allUsers = $conn->query("SELECT user_table.*, account_table.type FROM user_table JOIN account_table ON user_table.email = account_table.email WHERE user_table.email != '$loggedAccountEmail' AND account_table.type != 'Admin' AND 
                            (LOWER(user_table.email) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.first_name) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.last_name) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.dob) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.gender) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.contact_number) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.hometown) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.current_location) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.job_position) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.qualification) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.year) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.university) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.company) LIKE '%$searchQuery%' OR 
                            LOWER(user_table.resume) LIKE '%$searchQuery%')
                        ");
                    } else 
                        $allUsers = $conn->query("SELECT user_table.*, account_table.type FROM user_table JOIN account_table ON user_table.email = account_table.email WHERE user_table.email != '$loggedAccountEmail' AND account_table.type != 'Admin'");
                } else
                    $allUsers = $conn->query("SELECT user_table.*, account_table.type FROM user_table JOIN account_table ON user_table.email = account_table.email WHERE user_table.email != '$loggedAccountEmail' AND account_table.type != 'Admin'");

                // Display each retrieved alumnus in its card
                if ($allUsers && $allUsers->num_rows > 0) {
                    while ($user = $allUsers->fetch_assoc()) {
                        $listDetails = "<h5 class='card-title'>".$user['first_name']." ".$user['last_name']."</h5>
                            <p class='card-text'>".$user['hometown']."</p>";

                        // Name and hometown
                        if ($user['gender'] == "Male")
                            $listProfilePicture = "profile_images/default-male-user-profile-icon.jpg";
                        elseif ($user['gender'] == "Female")
                            $listProfilePicture = "profile_images/default-female-user-profile-icon.jpg";
                        
                        // Profile photo
                        if ($user['profile_image'] != null)
                            $listProfilePicture = "profile_images/".$user['profile_image'];

                        // Create the card
                        echo '
                            <div class="col-auto mb-3 slide-left">
                                <form action="'.htmlspecialchars('profile_detail.php').'" method="GET">
                                    <input type="hidden" name="email" value="'.$user['email'].'">
                                    <div class="card">
                                        <div class="row align-items-center ps-2 py-2">
                                            <div class="col-auto">
                                                <div class="image-container-alumni"><img src="'.$listProfilePicture.'" class="img-fluid profilePictureThumbnail" alt="profile_picture"></div>
                                            </div>
                                            <div class="col">
                                                <div class="card-body px-2">
                                                    '.$listDetails.'
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="stretched-link btn-hidden"></button>
                                    </div>
                                </form>
                            </div>
                        ';
                    }
                // If not results found with filter
                } elseif($allUsers && $allUsers->num_rows == 0 && $searchQuery != "") {
                    echo '
                        <div class="text-center slide-left">
                            <div class="row align-items-center ps-2 py-2">
                                <div class="col-12"><h5 class="fw-bold text-secondary">No results for: '.$_GET['search'].'</h5></div>
                            </div>
                        </div>
                    ';
                // If no alumnus to retrieve
                } else {
                    echo '
                        <div class="text-center slide-left">
                            <div class="row align-items-center ps-2 py-2">
                                <div class="col-12"><h5 class="fw-bold text-secondary">No other registered alumni friends</h5></div>
                            </div>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- Footer -->
<footer class="footer-bottom text-center">
   
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
    
    <!-- Boostrap JS --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>