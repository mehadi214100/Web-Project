<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labor & Machinery - AmaderKrisok</title>
    <link rel="stylesheet" href="css/menu.css"> <!-- Global styles -->
    <link rel="stylesheet" href="css/labor_machinery.css"> <!-- Page-specific styles -->
    <style>
        /* Modal Overlay */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        /* Show the modal when it's active */
        .modal.show {
            opacity: 1;
            visibility: visible;
        }

        /* Modal Content */
        .modal-content {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            max-width: 90%;
            position: relative;
        }

        /* Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 15px;
            cursor: pointer;
            font-size: 28px;
            font-weight: bold;
            color: #333;
            transition: color 0.3s ease;
        }

        .close:hover {
            color: #e74c3c;
        }

        /* Input Fields */
        .modal-content input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .modal-content input[type="text"]:focus {
            border-color: #3498db;
        }

        /* Submit Button */
        .modal-content button[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            width: 100%;
        }

        .modal-content button[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?> <!-- Include the menu bar -->

    <header>
        <h1>Labor & Machinery Booking</h1>
        <form method="GET" class="search-form">
            <input type="text" name="search" placeholder="Search labor or machinery...">
            <button type="submit">Search</button>
            <button type="button" onclick="window.location.href='index.php'">Back</button>
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

    <!-- Booking Form Modal -->
    <div id="booking-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Book Labor/Machinery</h2>
            <form id="booking-form" method="POST" action="book_item.php">
                <input type="hidden" name="item_id" id="item_id">
                <label for="user_name">Your Name:</label>
                <input type="text" name="user_name" id="user_name" required>
                
                <label for="contact_number">Contact Number:</label>
                <input type="text" name="contact_number" id="contact_number" required>
                
                <button type="submit">Submit Booking</button>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
    function bookItem(id) {
        document.getElementById('item_id').value = id;
        document.getElementById('booking-modal').classList.add('show');
    }

    function closeModal() {
        document.getElementById('booking-modal').classList.remove('show');
    }
    </script>
</body>
</html>
