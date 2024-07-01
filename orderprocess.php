<?php
// Database credentials
$servername = "localhost"; // Change if your MySQL server is running on a different host
$username = "root"; // Default username for XAMPP MySQL
$password = ""; // Default password for XAMPP MySQL
$database = "uma_ghee"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch order data from the POST request
$product_name = $_POST['product_name']; // Replace 'product_name' with the actual name attribute of your product input field
$quantity = $_POST['quantity']; // Replace 'quantity' with the actual name attribute of your quantity input field
$total_price = $_POST['total_price']; // Replace 'total_price' with the actual name attribute of your total price input field

// SQL query to insert order data into the database
$sql = "INSERT INTO orders (product_name, quantity, total_price) VALUES ('$product_name', $quantity, $total_price)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
