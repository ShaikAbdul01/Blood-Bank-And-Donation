
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        .font-poppins { font-family: 'Poppins', sans-serif; }
        .form-container { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px); }
        .custom-input-icon { top: 50%; transform: translateY(-50%); }
    </style>
</head>
<body class="flex items-center justify-center h-screen font-poppins form-container" style="background-image: url('image/11.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="form-container max-w-md w-full p-6 rounded-2xl shadow-lg">
        <form action="login.php" method="POST">
            <!-- Title Section -->
            <div class="mb-8 text-center">
                <h2 class="text-3xl font-bold text-gray-800">Admin Sign In</h2>
            </div>

            <!-- Email Input -->
            <div class="mb-6">
                <div class="relative">
                    <input type="email" name="email" required class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm" placeholder="Enter email" />
                </div>
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <div class="relative">
                    <input type="password" name="password" required class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm" placeholder="Enter password" />
                </div>
            </div>

            <!-- Sign In Button -->
            <div class="mb-6">
                <button type="submit" class="w-full py-2.5 bg-gray-800 text-white rounded-full font-semibold text-sm hover:bg-gray-700 focus:outline-none">
                    Sign in
                </button>
            </div>
        </form>
    </div>
</body>
</html>
<?php
// Start the session to store session variables
session_start();

// Include the database connection file
include 'connection.php';  // Ensure this contains your correct database connection details

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form data exists
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Get the form data
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // SQL query to check if the admin exists
        $query = "SELECT * FROM admins WHERE email = '$email'";

        // Execute the query
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Admin found, now check the password
            $row = mysqli_fetch_assoc($result);

            // Directly compare the password (no hashing used)
            if ($password == $row['password']) {
                // Set session variables for the logged-in admin
                $_SESSION['id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['loggedin'] = true;  // Set this to indicate the user is logged in

                // Redirect to the admin dashboard
                header("Location: dashboard.php");  // Replace with the actual dashboard page
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No admin found with this email.";
        }
    } else {
        echo "Email or password is missing.";
    }

    // Close the connection
    mysqli_close($conn);
}
?>