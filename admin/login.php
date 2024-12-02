<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank And Donation</title>
    <!-- Tailwind and DaisyUI CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                        'blood-primary': '#DE3163',
                        'blood-primary-bg': 'rgba(235, 115, 81, 0.10)',
                    }
                }
            }
        }
    </script>

    <!-- Custom Styles -->
    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
        }

        .custom-input-icon {
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>

<body class="flex items-center justify-center h-screen font-poppins form-container"
    style="background-image: url('image/11.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="form-container max-w-md w-full p-6 rounded-2xl shadow-lg">
        <form action="login.php" method="POST" class="space-y-6">
            <!-- Title Section -->
            <div class="mb-8 text-center">
                <h3 class="text-3xl mb-12 font-semibold text-center">Admin/Donor <span class="text-blood-primary">Sign
                        In</span>
                </h3>
            </div>

            <!-- Email Input -->
            <div class="mb-6">
                <div class="relative">
                    <input type="email" name="email" required
                        class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm"
                        placeholder="Enter email" />
                </div>
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <div class="relative">
                    <input type="password" name="password" required
                        class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm"
                        placeholder="Enter password" />
                </div>
            </div>

            <!-- Role Select -->
            <div class="mb-6">
                <select name="role" required
                    class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm">
                    <option value="admin">Admin</option>
                    <option value="donor">Donor</option>
                </select>
            </div>

            <!-- Sign In Button -->
            <div class="mb-6">

                <button type="submit"
                    class="text-white bg-blood-primary hover:bg-[#f82561] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5">
                    Sign In
                </button>

                <div class="text-center">
                    <p>New user? <a href="signup.php" class="text-blood-primary">Sign Up</a>.</p>
                </div>

            </div>

            <?php
            // Start the session to store session variables
            session_start();

            // Include the database connection file
            include 'connection.php';  // Ensure this contains your correct database connection details
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Check if the form data exists
                if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
                    // Get the form data
                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                    $password = mysqli_real_escape_string($conn, $_POST['password']);
                    $role = mysqli_real_escape_string($conn, $_POST['role']);

                    // Check if the role is Admin or Donor
                    if ($role == "admin") {
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
                                echo "<p class='mt-4 text-red-500 text-center'>Invalid password.</p>";
                            }
                        } else {
                            echo "<p class='mt-4 text-red-500 text-center'>No admin found with this email.</p>";
                        }
                    } elseif ($role == "donor") {
                        // SQL query to check if the donor exists
                        $query = "SELECT * FROM users_singup WHERE email = '$email'";

                        // Execute the query
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                            // Donor found, now check the password
                            $row = mysqli_fetch_assoc($result);

                            // Directly compare the password (no hashing used)
                            if ($password == $row['password']) {
                                // Set session variables for the logged-in donor
                                $_SESSION['id'] = $row['id'];
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['loggedin'] = true;  // Set this to indicate the user is logged in
            
                                // Redirect to the donor dashboard (or other page)
                                header("Location: index.php");  // Replace with the actual donor dashboard page
                                exit();
                            } else {
                                echo "<p class='mt-4 text-red-500 text-center'>Invalid password.</p>";
                            }
                        } else {
                            echo "<p class='mt-4 text-red-500 text-center'>No donor found with this email.</p>";
                        }
                    }
                } else {
                    echo "<p class='mt-4 text-red-500 text-center'>Please fill all fields.</p>";
                }

                // Close the connection
                mysqli_close($conn);
            }
            ?>
        </form>
    </div>
</body>

</html>