<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900 font-poppins">

    <?php
    include 'connection.php';
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        ?>
        <div class="flex">
            <?php include('sidebar.php'); ?>

            <!-- Main Content Section -->
            <div class="flex-1 p-6">
                <h1 class="text-3xl font-bold mb-6 px-10">Dashboard</h1>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Blood Donors Available -->
                    <div class="bg-emerald-400 text-white rounded-lg shadow p-6 text-center">
                        <h2 class="text-xl font-semibold">Blood Donors Available</h2>
                        <p class="text-4xl mt-4">
                            <?php
                            $sql = "SELECT * FROM donar_details";
                            $result = mysqli_query($conn, $sql) or die("Query failed.");
                            $row = mysqli_num_rows($result);
                            echo $row; // Display the number of blood donors
                            ?>
                        </p>
                        <br>
                        <a href="add_donor.php" class="btn bg-red-600 text-white rounded-full py-2 px-4 hover:bg-red-700">
                            Full Detail <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- All User Queries -->
                    <div class="bg-amber-400 text-white rounded-lg shadow p-6 text-center">
                        <h2 class="text-xl font-semibold">All User Queries</h2>
                        <p class="text-4xl mt-4">
                            <?php
                            $sql1 = "SELECT * FROM contact_us";
                            $result1 = mysqli_query($conn, $sql1) or die("Query failed.");
                            $row1 = mysqli_num_rows($result1);
                            echo $row1; // Display the number of user queries
                            ?>
                        </p>
                        <br>
                        <a href="query.php" class="btn bg-red-600 text-white rounded-full py-2 px-4 hover:bg-red-700">
                            Full Detail <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Pending Queries -->
                    <div class="bg-rose-400 text-white rounded-lg shadow p-6 text-center">
                        <h2 class="text-xl font-semibold">Pending Queries</h2>
                        <p class="text-4xl mt-4">Comeing Soon...</p>
                        <br>
                        <a href="pending_query.php"
                            class="btn bg-red-600 text-white rounded-full py-2 px-4 hover:bg-red-700">
                            Full Detail <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo '<div class="flex items-center justify-center h-screen bg-gray-100">
                <div class="bg-white p-8 rounded-lg shadow-md w-96 text-center">
                    <div class="text-lg text-red-500 mb-6">
                        <b>Please Login First To Access Admin Portal.</b>
                    </div>
                    <form method="post" action="login.php" class="space-y-4">
                        <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:outline-none">
                            Go to Login Page
                        </button>
                    </form>
                </div>
              </div>';
    }
    ?>
</body>

</html>