<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $party_size = $_POST["party_size"];

        // You can add code here to save the booking details to a database.

        echo "<div class='container'>";
        echo "<h1>Booking Confirmation</h1>";
        echo "<p>Thank you, $name, for booking a table with us!</p>";
        echo "<p>Booking Details:</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
        echo "<p>Date: $date</p>";
        echo "<p>Time: $time</p>";
        echo "<p>Party Size: $party_size</p>";
        echo "</div>";
    } else {
        echo "<div class='container'>";
        echo "<h1>Booking Failed</h1>";
        echo "<p>Sorry, there was an error processing your booking.</p>";
        echo "</div>";
    }
    ?>
</body>
</html>

