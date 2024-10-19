<?php
session_start();

// Check if car_name is set
if (!isset($_SESSION['car_name'])) {
    header("Location: cars_list.php");
    exit();
}

// Get car name from the session
$car_name = $_SESSION['car_name'];

// Get form data
$booking_date = $_POST['booking-date'];
$booking_time = $_POST['booking-time'];
$return_date = $_POST['return-date'];
$return_time = $_POST['return-time'];
$user= $_SESSION['user'];

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'emp';
// Database connection (Update these details)
$conn = new mysqli($servername, $username ,$password , $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the bookings table
$stmt = $conn->prepare("INSERT INTO bookings (username,car_name, booking_date, booking_time, return_date, return_time) VALUES (?,?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss",$user, $car_name, $booking_date, $booking_time, $return_date, $return_time);

if ($stmt->execute()) {
    echo "Booking successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

// Clear the session data for the car name
unset($_SESSION['car_name']);
?>
