<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign-up</title>
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
				<li><a href="../index.php">Home</a></li>
	</div>
	<div class="uni">
		<p class="unam">KDU Alumni</p>
		<p class="dpt">New Member Sign Up</p>
	</div>
    <div class="sign_frm">
        <h1>New Member Sign Up</h1>
        <form action="userreg.php" method="POST" enctype="multipart/form-data">
            <!-- Column 1 -->
            <div>
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <input type="text" name="std_id"placeholder="Student ID Number"required>
                <input type="email" name="email" placeholder="Email" required>
                
            </div>
            <!-- Column 2 -->
            <div>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="repassword" placeholder="Re-password" required>
                <input type="text" name="phone_num" placeholder="Phone Number" required>
                <input type="text" name="batch" placeholder="Passed Out Batch" required>
                
            </div>
            <div>
                <input type="text" name="department" placeholder="Department" required>
                <input type="year" name="college_joined" placeholder="College Enrolled Year" required>
            </div>
            <div>
                <input type="year" name="college_passout" placeholder="College Passout Year" required>
                <input type="text" name="current_status" placeholder="Current Status" required>
            </div>
            <!-- Full Width -->
            <div class="full-width">
                <textarea name="BIO" placeholder="Your Bio"></textarea>
                <input type="file" name="photo" accept=".jpg, .jpeg, .png, .gif" required>
                <button type="submit" name="Signup_btn">Sign Up</button>
            </div>
        </form>
        <div class="member">
            Already a member? <a href="login.php">Login Here</a>
        </div>
    </div>
</body>
</html>
