<script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include './db_conn.php';

// Validate input fields
$type = $_POST['type'];
$username = $_POST['username'];
$password = $_POST['password'];

// Sanitize input fields to prevent SQL injection
$type = mysqli_real_escape_string($con, $type);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

// Select query to check if the user exists
$query = "SELECT * FROM users WHERE type='$type' AND username='$username' AND password='$password'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 1) {
    header("Location: http://localhost:8888/toyshoperp/public/dashboard.php");
} else {
    header("Location: http://localhost:8888/toyshoperp");
?>
    <script>
        Swal.fire({
            icon: 'question',
            title: 'Enter Username and password',
            text: 'Empty Login Details',
            position: 'center',
            padding: '30px',
            allowEnterKey: true,
            allowOutsideClick: false,

        })
    </script>
<?php
}

mysqli_close($con);
