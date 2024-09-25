<!-- Dropdown menu on the top nav bar (User button) -->
<div class="d-flex">
    <div class="dropdown">
        <!-- Set profile image or default based on gender -->
        <div class="nav-user" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php
                $profileImage = $_SESSION['logged_user']['profile_image'] ?? '';
                $genderImage = ($_SESSION['logged_user']['gender'] == "Male") ? 'default-male-user-profile-icon.jpg' : 'default-female-user-profile-icon.jpg';

                // Display profile image or gender-based default
                if ($profileImage) {
                    echo '<div class="image-container-nav"><img src="profile_images/'.$profileImage.'" class="img-fluid nav-user" alt="profile_picture"></div>';
                } else {
                    echo '<img src="profile_images/'.$genderImage.'" class="img-fluid nav-user" alt="profile_picture">';
                }

                // Display admin icon if the user is admin
                if ($_SESSION['logged_account']['type'] == 'admin') {
                    echo '<img src="images/admin-icon.png" class="admin-icon" alt="admin">';
                }
            ?>
        </div>

        <!-- Dropdown Menu -->
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-nav mt-1 px-2">
            <?php if ($_SESSION['logged_account']['type'] == 'user') { ?>
                <!-- Your profile and Update profile links -->
                <li><a class="dropdown-item py-2 pe-5" href="profile_detail.php?email=<?= htmlspecialchars($_SESSION['logged_account']['email']) ?>">
                    <div class="circle-container me-2"><i class="bi bi-person-fill nav-user-bi"></i></div><div class="fw-medium">Your profile</div>
                </a></li>
                <li><a class="dropdown-item py-2 pe-5" href="update_profile.php?email=<?= htmlspecialchars($_SESSION['logged_account']['email']) ?>">
                    <div class="circle-container me-2"><i class="bi bi-pencil-fill nav-user-bi"></i></div><div class="fw-medium">Update profile</div>
                </a></li>
                <li><hr class="dropdown-divider border-2 mx-2"></li>
            <?php } ?>
            <!-- Logout -->
            <li><a class="dropdown-item py-2 pe-5" href="logout.php">
                <div class="circle-container me-2"><i class="bi bi-door-open-fill nav-user-bi"></i></div><div class="fw-medium">Log out</div>
            </a></li>
        </ul>
    </div>
</div>
