<?php
// Connect to the database
$link = new mysqli("localhost", "root", "", "almuni");

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

// Fetch all gallery images
$sql = "SELECT * FROM gallery ORDER BY id DESC";
$result = $link->query($sql);
$link->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="csss/main.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #4B6C9E;
            color: white;
            padding: 10px 20px;
            text-align: center;
            position: sticky;
            top: 0;
        }
        .gallery-container {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .gallery-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
        }
        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .gallery-item .details {
            padding: 10px;
            text-align: center;
        }
        .gallery-item h3 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }
        .gallery-item p {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h2>KDU Alumni Gallery</h2>
    </div>

    <div class="gallery-container">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="gallery-item">
                    <img src="<?= htmlspecialchars($row['image_path']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
                    <div class="details">
                        <h3><?= htmlspecialchars($row['title']) ?></h3>
                        <p><?= htmlspecialchars($row['description']) ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No images found.</p>
        <?php endif; ?>
    </div>
</body>
</html>
