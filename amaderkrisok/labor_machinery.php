<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labor & Machinery - AmaderKrisok</title>
    <link rel="stylesheet" href="css/menu.css"> <!-- Global styles -->
    <link rel="stylesheet" href="css/labor_machinery.css"> <!-- Page-specific styles -->

</head>
<body>
    <?php include 'menu.php'; ?> <!-- Include the menu bar -->

    <header>
        <h1>Labor & Machinery Booking</h1>
        <form method="GET" class="search-form">
            <input type="text" name="search" placeholder="Search labor or machinery...">
            <button type="submit">Search</button>
            <button type="submit">Back</button>
        </form>
    </header>

    <main>
        <div class="listing-container">
            <?php
            include 'database.php';
            $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';
            $sql = "SELECT * FROM labor_machinery WHERE name LIKE ?";
            $stmt = $conn->prepare($sql);
            $searchParam = "%" . $searchQuery . "%";
            $stmt->bind_param("s", $searchParam);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <div class='item'>
                            <img src='image/{$row['image']}' alt='{$row['name']}'>
                            <div class='details'>
                                <h2>{$row['name']}</h2>
                                <p>{$row['description']}</p>
                                <p><strong>Price:</strong> {$row['price']} BDT</p>
                                <button class='book-btn' onclick='bookItem({$row['id']})'>Book Now</button>
                            </div>
                        </div>
                    ";
                }
            } else {
                echo "<p>No labor or machinery found.</p>";
            }
            $stmt->close();
            ?>
        </div>
    </main>

    <script>
        function bookItem(id) {
            alert('Booking feature coming soon for item ID: ' + id);
        }
    </script>
</body>
</html>
