<?php
session_start();
include('db.php'); // Ensure db.php connects to your database

if (isset($_POST['log_btn'])) {
    // Sanitize inputs
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    // Prepare and execute query
    $sql = "SELECT * FROM user_almuni WHERE email = ?";
    $stmt = $link->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $user['password'])) {
                // Set session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                // Redirect to profile
                $name = urlencode($user['first_name'] . '-' . $user['last_name']);
                header("Location: profile.php?name=$name");
                exit;
            } else {
                echo "<script>alert('Invalid password. Please try again.'); window.location.href = 'login.php';</script>";
            }
        } else {
            echo "<script>alert('No account found with that email.'); window.location.href = 'login.php';</script>";
        }
        $stmt->close();
    } else {
        echo "<script>alert('Database error. Please try again later.'); window.location.href = 'login.php';</script>";
    }
}
?>
