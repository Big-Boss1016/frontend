<?php
session_start(); // Start the session

include "db.php"; // Include database connection

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode([
        "status" => "error",
        "message" => "You must be logged in to update your profile."
    ]);
    exit;
}

// Retrieve the logged-in user's ID
$user_id = $_SESSION['user_id'];

// Retrieve form data safely
$f_name = mysqli_real_escape_string($link, $_POST['first_name']);
$l_name = mysqli_real_escape_string($link, $_POST['last_name']);
$s_id = mysqli_real_escape_string($link, $_POST['std_id']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$pass = $_POST['password'];
$phn_num = mysqli_real_escape_string($link, $_POST['phone_num']);
$batch = mysqli_real_escape_string($link, $_POST['batch']);
$dept = mysqli_real_escape_string($link, $_POST['department']);
$enrol = mysqli_real_escape_string($link, $_POST['college_joined']);
$p_out = mysqli_real_escape_string($link, $_POST['college_passout']);
$curs = mysqli_real_escape_string($link, $_POST['current_status']);
$bio = mysqli_real_escape_string($link, $_POST['BIO']);

// Handle file upload if provided
$target_file = '';
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $upload_dir = 'uploads/';
    $file_name = basename($_FILES['photo']['name']);
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $allowed_exts = ['jpg', 'jpeg', 'png', 'gif'];

    if (!in_array(strtolower($file_ext), $allowed_exts)) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid file type. Only JPG, PNG, and GIF are allowed."
        ]);
        exit;
    }

    // Check for file size (5MB max)
    if ($_FILES['photo']['size'] > 5 * 1024 * 1024) {
        echo json_encode([
            "status" => "error",
            "message" => "File size exceeds the limit of 5MB."
        ]);
        exit;
    }

    $target_file = $upload_dir . uniqid() . '_' . $file_name;

    // Ensure the upload directory exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    if (!move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
        echo json_encode([
            "status" => "error",
            "message" => "Error saving the uploaded file."
        ]);
        exit;
    }
}

// Update the database
$hashed_pass = $pass ? password_hash($pass, PASSWORD_DEFAULT) : '';
$sql = "UPDATE user_almuni SET 
    first_name = '$f_name',
    last_name = '$l_name',
    std_id = '$s_id',
    email = '$email',
    phone_num = '$phn_num',
    batch = '$batch',
    department = '$dept',
    college_joined = '$enrol',
    college_passout = '$p_out',
    current_status = '$curs',
    BIO = '$bio',
    photo = IF('$target_file' = '', photo, '$target_file')
    " . ($pass ? ", password = '$hashed_pass'" : "") . "
    WHERE id = '$user_id'";

if ($link->query($sql) === TRUE) {
    echo json_encode([
        "status" => "success",
        "message" => "Profile updated successfully."
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Error updating record: " . $link->error
    ]);
}

$link->close();
?>
