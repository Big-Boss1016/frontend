<?php
// Connect to the database
$link = new mysqli("localhost", "root", "", "almuni");

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

// Retrieve the name from the URL query string
$name = $_GET['name'] ?? '';

// Ensure the name is properly split into first_name and last_name
if ($name) {
    list($first_name, $last_name) = explode('-', $name);

    // Fetch the user's profile based on first_name and last_name
    $sql = "SELECT * FROM user_almuni WHERE first_name = '$first_name' AND last_name = '$last_name'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<p>No profile found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid profile request.</p>";
    exit;
}

$link->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="csss/main.css">
   
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<div class="navbar">
		<a href="../index.php"><h2 class="logo">KDU Alumni</h2></a>
			<ul>
				<li><a href="profile.php">Home</a></li>
                <li><a href="logout.php">Log-Out</a></li>
	</div>
	<div class="uni">
		<p class="unam">KDU Alumni</p>
		<p class="dpt">Update Information</p>
	</div>
    <div class="sign_frm">
        <div class="edit-form">
            <h1>Edit Profile</h1>
            <form action="userreg.php" method="POST" enctype="multipart/form-data">
                <div>
                    <input type="text" name="first_name" placeholder="First Name" value="<?= htmlspecialchars($row['first_name']) ?>" required>
                    <input type="text" name="last_name" placeholder="Last Name" value="<?= htmlspecialchars($row['last_name']) ?>" required>
                    <input type="text" name="std_id" placeholder="Student ID" value="<?= htmlspecialchars($row['std_id']) ?>" required>
                    <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($row['email']) ?>" required>
                 </div>
                <div>
                    <input type="password" name="password" placeholder="Password" value="<?= htmlspecialchars($row['password']) ?>" required>
                    <input type="password" name="repassword" placeholder="Re-Password" value="<?= htmlspecialchars($row['repassword']) ?>" required>
                    <input type="text" name="phone_num" placeholder="Phone Number" value="<?= htmlspecialchars($row['phone_num']) ?>" required>
                    <input type="text" name="batch" placeholder="Batch" value="<?= htmlspecialchars($row['batch']) ?>" required>
                    
                </div>
                <div>
                    <input type="text" name="department" value="<?= htmlspecialchars($row['department']) ?>" required>
                    <input type="year" name="college_joined" value="<?= htmlspecialchars($row['college_joined']) ?>" required>
                </div>
                <div>
                    <input type="year" name="college_passout" value="<?= htmlspecialchars($row['college_passout']) ?>" required>
                    <input type="text" name="current_status" value="<?= htmlspecialchars($row['current_status']) ?>" required>
                </div>
                <div class="full-width">
                    
                    <textarea name="BIO"><?= htmlspecialchars($row['BIO']) ?></textarea>
                    <input type="file" name="photo" accept=".jpg, .jpeg, .png, .gif">
                <button type="submit">Update Profile</button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>
