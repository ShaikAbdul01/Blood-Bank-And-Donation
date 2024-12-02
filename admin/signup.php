<?php
// Start the session to store session variables
session_start();

// Include the database connection file
include 'connection.php';  // Ensure this contains your correct database connection details
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Sign Up</title>
    <!-- Tailwind and DaisyUI CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
        }
    </style>

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
</head>

<body class="flex items-center justify-center h-screen font-poppins form-container"
    style="background-image: url('image/11.jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="form-container max-w-md w-full p-6 rounded-2xl shadow-lg">
        <form action="signup.php" method="POST" class="space-y-6">
            <!-- Title Section -->
            <div class="mb-8 text-center">
                <h3 class="text-3xl mb-12 font-semibold text-center">User <span class="text-blood-primary">Sign
                        Up</span>
                </h3>
            </div>

            <!-- Name Input -->
            <div class="mb-6">
                <input type="text" name="name" required
                    class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm"
                    placeholder="Enter your name" />
            </div>

            <!-- Email Input -->
            <div class="mb-6">
                <input type="email" name="email" required
                    class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm"
                    placeholder="Enter your email" />
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <input type="password" name="password" required
                    class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm"
                    placeholder="Enter your password" />
            </div>

            <!-- Phone Input -->
            <div class="mb-6">
                <input type="text" name="phone" required
                    class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm"
                    placeholder="Enter your phone number" />
            </div>

            <!-- Gender Select -->
            <div class="mb-6">
                <select name="gender" required
                    class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Age Input -->
            <div class="mb-6">
                <input type="number" name="age" required
                    class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm"
                    placeholder="Enter your age" />
            </div>

            <!-- Address Input -->
            <div class="mb-6">
                <textarea name="address" required
                    class="w-full border-b-2 border-gray-400 bg-transparent text-gray-800 placeholder-gray-800 focus:border-gray-800 focus:outline-none px-2 py-3 text-sm"
                    placeholder="Enter your address" rows="3"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="mb-6">
                <button type="submit"
                    class="mb-12 hover:bg-[#f82561] font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center border-solid border-2 border-[#f82561]">
                    Sign Up
                </button>
            </div>

            <!-- Login Redirect -->
            <div class="text-center">
                <p>Already have an account? <a href="login.php" class="text-blood-primary">Login here</a>.</p>
            </div>
            <?php
            // The session_start() call should be at the top, before any HTML output
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Check if the form data exists
                if (
                    isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) &&
                    isset($_POST['phone']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['address'])
                ) {
                    // Get the form data
                    $name = mysqli_real_escape_string($conn, $_POST['name']);
                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                    $password = mysqli_real_escape_string($conn, $_POST['password']);
                    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
                    $age = mysqli_real_escape_string($conn, $_POST['age']);
                    $address = mysqli_real_escape_string($conn, $_POST['address']);
                    $role = 'donor';  // Set the role to "donor" directly
            
                    // Check if the user with the same email already exists
                    $check_email_query = "SELECT * FROM users_singup WHERE email = '$email'";
                    $result = mysqli_query($conn, $check_email_query);

                    if (mysqli_num_rows($result) > 0) {
                        // Email already exists
                        echo "<p class='text-red-500 text-center'>Email is already registered. Please login.</p>";
                    } else {
                        // Insert the new user into the database with plain text password
                        $query = "INSERT INTO users_singup (name, email, password, phone, gender, age, address) 
                          VALUES ('$name', '$email', '$password', '$phone', '$gender', '$age', '$address')";

                        if (mysqli_query($conn, $query)) {
                            // User registration successful
                            echo "<p class='text-green-500 text-center'>Registration successful! Please <a href='login.php' class='text-blood-primary'>login</a>.</p>";
                        } else {
                            echo "<p class='text-red-500 text-center'>Error: " . mysqli_error($conn) . "</p>";
                        }
                    }

                    // Close the connection
                    mysqli_close($conn);
                } else {
                    echo "<p class='text-red-500 text-center'>Please fill all fields.</p>";
                }
            }
            ?>

        </form>
    </div>

</body>

</html>