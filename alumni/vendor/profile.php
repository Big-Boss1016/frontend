<?php
session_start();
include('db.php');

// Retrieve the name from the URL query string
$name = $_GET['name'] ?? '';

// Ensure the name is properly split into first_name and last_name
if ($name) {
    list($first_name, $last_name) = explode('-', $name);

    // Fetch the user's profile based on first_name and last_name
    $sql = "SELECT * FROM user_almuni WHERE first_name = '$first_name' AND last_name = '$last_name'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        // Output the user data
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="csss/main.css">
  
   
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <style>
        /* Root Variables for Color Palette */
        :root {
            --primary-color: #4B6C9E;
            --accent-color: #F1C40F;
            --bg-color: #f4f7f6;
            --card-bg: #ffffff;
            --gradient : linear-gradient(to bottom right, #2a305f,#242a5652);
            --border-radius: 12px;
            --font-family: 'Playfair Display', serif;
            --shadow: rgba(0, 0, 0, 0.1);
        }

        body {
            margin: 0;
            padding: 0;
            font-family: var(--font-family);
            background:var(--gradient);
            justify-content: center;
            height: 100vh;
        }

        .profile-card {
            width: 100%;
            height: auto;
            background-color: var(--card-bg);
            border-radius: var(--border-radius);
            box-shadow: 0px 6px 12px var(--shadow);
            overflow: hidden;
  
            margin: 20px;
        }

        .header {
            background-color: var(--primary-color);
            color: #fff;
            padding: 20px 20px;
            text-align: center;
            position: relative;
        }

        .profile-photo {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            border: 4px solid #fff;
            object-fit: cover;
            margin-top: 5px;
            transition: transform 0.3s ease-in-out;
        }

        .profile-photo:hover {
            transform: scale(1.1);
        }

        h1 {
            margin: 10px 0;
            font-size: 24px;
            font-weight: 600;
        }

        p {
            font-size: 14px;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.8);
        }

    
        .details {
            padding: 25px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: var(--border-radius);
            box-shadow: 0px 4px 8px var(--shadow);
            flex: 1;
        }

        h3 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            margin: 10px 0;
            border-collapse: collapse;
        }

        table td {
            padding: 10px;
            vertical-align: top;
            font-size: 14px;
        }

        table td strong {
            font-weight: 600;
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin: 10px 0;
        }

        ul li a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        ul li a:hover {
            text-decoration: underline;
        }

        .skills{
            grid-column: span 2;
        }
        .skills ul {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .skills ul li {
            background-color: var(--primary-color);
            color: white;
            padding: 10px;
            border-radius: 5px;
            font-size: 13px;
        }

        .edit-btn {
      
            top: 20px;
            right: 20px;
            padding: 8px 15px;
            background-color: #344352;
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .edit-btn:hover {
            background-color: #062b64;
        }

    </style>
    
</head>
<body>
<div class="navbar">
		<a href="../index.php"><h2 class="logo">KDU Alumni</h2></a>
			<ul>
				<li><a href="../index.php">Home</a></li>
                <li><a href="logout.php" >Log Out</a></li>
				
			</ul>
			
		</div>
<div class="container">

    <div class="profile-card">
        <div class="header">
            <!-- Profile Picture -->
            <img src="<?= htmlspecialchars($row['photo']) ?>" alt="Profile Photo" class="profile-photo">
            <h1><?= htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['last_name']) ?></h1>
            <p><?= htmlspecialchars($row['std_id']) ?></p>
           <button class="edit-btn"><a href="edit.php?name=<?= urlencode($row['first_name'] . '-' . $row['last_name']) ?>" class="edit-btn">Edit Profile</a>
           </button>
        </div>
        
        <div class="details">
            <div class="card">
                <h3>Contact Details</h3>
                <table>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Phone:</strong></td>
                        <td><?= htmlspecialchars($row['phone_num']) ?></td>
                    </tr>
                    <tr>
                        <td><strong>Status:</strong></td>
                        <td><?= htmlspecialchars($row['current_status']) ?></td>
                    </tr>
                    
                    <tr>
                        <td><strong>Batch:</strong></td>
                        <td><?= htmlspecialchars($row['batch']) ?></td>
                    </tr>
                </table>
            </div>
            <div class="card">
                <h3>Enroll & Pass-out</h3>
                <ul>
                    <li><strong>Enrolled :</strong><?= htmlspecialchars($row['college_joined']) ?></li>
                    <li><strong>Passed Out :</strong><?= htmlspecialchars($row['college_passout']) ?></li>
                </ul>
            </div>
            <div class="card skills">
                <h3>BIO</h3>
                <?= htmlspecialchars($row['BIO']) ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
