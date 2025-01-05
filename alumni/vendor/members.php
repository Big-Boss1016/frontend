<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members of KDU Alumni</title>
    <link rel="stylesheet" type="text/css" href="csss/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
        }

        
        h1 {
            text-align: center;
            color: whitesmoke;
            font-size: 20px;
        }

        .search-bar {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 20px;
            padding-left: 10%;
        }

        .search-bar input[type="text"] {
            padding: 8px;
            font-size: 16px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-bar button {
            padding: 8px 12px;
            font-size: 16px;
            color: white;
            background-color: #344352;
            border: none;
            border-radius: 4px;
            margin-left: 10px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #0056b3;
        }

        table {
            background-color: #f0f8ff;
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #344352;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="navbar">
		<a href="../index.php"><h2 class="logo">KDU Alumni</h2></a>
			<ul>
				<li><a href="../index.php">Home</a></li>
				
    </ul>
    </div>

    <h1>Members of KDU Alumni</h1>

    <!-- Search Bar -->
    <div class="search-bar">
        <form method="GET" action="">
            <input type="text" name="search" placeholder="Search by name..." value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
            <button type="submit">Search</button>
        </form>
    </div>

    <?php
    // Connect to the database
    $link = new mysqli("localhost", "root", "", "almuni");

    // Check connection
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }

    // Initialize the search query
    $search = $_GET['search'] ?? '';
    $search = $link->real_escape_string($search);

    // Fetch users with an optional search filter
    $sql = "SELECT first_name, last_name,std_id, email, phone_num, batch, department FROM user_almuni";
    if (!empty($search)) {
        $sql .= " WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR std_id LIKE '%$search%' OR email LIKE '%$search%' OR department LIKE '%$search%'";
    }

    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Name</th>
                <th>Student ID</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Batch</th>
                <th>Department</th>
              </tr>";

        // Output data for each row
        while ($row = $result->fetch_assoc()) {
            $name_url = urlencode($row['first_name']) . '-' . urlencode($row['last_name']); // To use the name in the URL

            echo "<tr>";
            echo "<td><a href='login.php'>" . htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['last_name']) . "</a></td>";
            echo "<td>" . htmlspecialchars($row['std_id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['phone_num']) . "</td>";
            echo "<td>" . htmlspecialchars($row['batch']) . "</td>";
            echo "<td>" . htmlspecialchars($row['department']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p style='text-align: center;'>No members found.</p>";
    }

    $link->close();
    ?>

</body>
</html>
