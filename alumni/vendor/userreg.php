<?php
session_start(); // Start the session

include "db.php";

// Redirect if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: profile.php"); // Redirect to the profile page
    exit;
}

// Retrieve form data safely
$f_name = mysqli_real_escape_string($link, $_POST['first_name']);
$l_name = mysqli_real_escape_string($link, $_POST['last_name']);
$s_id = mysqli_real_escape_string($link, $_POST['std_id']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$pass = $_POST['password'];
$re_pass = $_POST['repassword'];
$phn_num = mysqli_real_escape_string($link, $_POST['phone_num']);
$batch = mysqli_real_escape_string($link, $_POST['batch']);
$dept = mysqli_real_escape_string($link, $_POST['department']);
$enrol = mysqli_real_escape_string($link, $_POST['college_joined']);
$p_out = mysqli_real_escape_string($link, $_POST['college_passout']);
$curs = mysqli_real_escape_string($link, $_POST['current_status']);
$bio = mysqli_real_escape_string($link, $_POST['BIO']);

// Check if passwords match
if ($pass !== $re_pass) {
    echo "<p style='color:red;'>Passwords do not match!</p>";
    exit;
}

// Handle file upload
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $upload_dir = 'uploads/';
    $file_name = basename($_FILES['photo']['name']);
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $allowed_exts = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array(strtolower($file_ext), $allowed_exts)) {
        echo "<p style='color:red;'>Invalid file type. Only JPG, PNG, and GIF are allowed.</p>";
        exit;
    }

    // Check for file size (5MB max)
    if ($_FILES['photo']['size'] > 5 * 1024 * 1024) {
        echo "<p style='color:red;'>File size exceeds the limit of 5MB.</p>";
        exit;
    }

    $target_file = $upload_dir . uniqid() . '_' . $file_name;

    // Ensure the upload directory exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
        // Hash the password using password_hash()
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        // Insert data into database
        $sql = "INSERT INTO user_almuni (first_name, last_name, std_id, email, password, phone_num, batch, department, college_joined, college_passout, current_status, BIO, photo) 
                VALUES ('$f_name', '$l_name', '$s_id', '$email', '$hashed_pass', '$phn_num', '$batch', '$dept', '$enrol', '$p_out', '$curs', '$bio', '$target_file')";
        if ($link->query($sql) === TRUE) {
            // Store session variables
            $_SESSION['user_id'] = $link->insert_id; // Store the newly created user's ID
            $_SESSION['user_name'] = $f_name . " " . $l_name; // Store the user's full name

            // Redirect to login page
            header("Location: login.php");
            exit;
        } else {
            echo "<p style='color:red;'>Error: " . $link->error . "</p>";
        }
    } else {
        echo "<p style='color:red;'>Error saving file.</p>";
    }
} else {
    echo "<p style='color:red;'>Error uploading file.</p>";
}
?>
