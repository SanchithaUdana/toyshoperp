<?php
// Retrieve form data
$employeeName = $_POST['EmployeeName'];
$position = $_POST['Position'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$address = $_POST['Address'];
$employeeID = $_POST['EmployeeID'];

// Validate and sanitize the input data as per your requirements

// Perform database insertion
$servername = 'localhost';
$username = "root";
$password = "";
$dbname = "saruerpsystem";

// Create a new MySQLi instance
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$sql = "INSERT INTO employees (Employeename, Position, Email, Phone, Address,EmployeeID) VALUES (?, ?, ?, ?, ?,?)";

// Create a prepared statement
$stmt = $conn->prepare($sql);

// Bind the parameters to the statement
$stmt->bind_param("sssss", $employeeName, $position, $email, $phone, $address);

// Execute the statement
if ($stmt->execute()) {
    // Success! Redirect or show a success message
    header("Location: employees.php"); // Redirect to the employees page after successful submission
    exit();
} else {
    // Error handling
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>