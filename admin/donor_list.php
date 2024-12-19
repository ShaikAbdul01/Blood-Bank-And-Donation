<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank And Donation</title>
    <!-- Tailwind CSS and Daisy UI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
        .table-responsive {
            overflow-x: auto;
        }
        #he {
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            padding: 3px 7px;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            text-align: center;
        }
    </style>
</head>

<body class="font-poppins bg-gray-100">

    <?php
    include 'connection.php';
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>

    <!-- Main content -->
    <main class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <section class="w-full md:w-1/4">
            <?php include 'sidebar.php'; ?>
        </section>

        <!-- Content -->
        <section class="flex-1 p-6">
            <div class="py-16">
                <h3 class="text-5xl mb-12 font-semibold text-center text-blood-primary">Donor <span class="text-blood-primary">List</span></h3>

                <?php
                // Pagination logic
                $limit = 10;
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $offset = ($page - 1) * $limit;

                $sql = "SELECT * FROM donars LIMIT {$offset}, {$limit}";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                ?>

                <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                    <table class="min-w-full table-auto text-center text-sm">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="px-4 py-2 border">S.no</th>
                                <th class="px-4 py-2 border">Name</th>
                                <th class="px-4 py-2 border">Mobile</th>
                                <th class="px-4 py-2 border">Email</th>
                                <th class="px-4 py-2 border">Age</th>
                                <th class="px-4 py-2 border">Gender</th>
                                <th class="px-4 py-2 border">Blood Group</th>
                                <th class="px-4 py-2 border">Address</th>
                                <th class="px-4 py-2 border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = $offset + 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td class="px-4 py-2 border"><?php echo $count++; ?></td>
                                <td class="px-4 py-2 border"><?php echo $row['name']; ?></td>
                                <td class="px-4 py-2 border"><?php echo $row['phone']; ?></td>
                                <td class="px-4 py-2 border"><?php echo $row['email']; ?></td>
                                <td class="px-4 py-2 border"><?php echo $row['age']; ?></td>
                                <td class="px-4 py-2 border"><?php echo $row['gender']; ?></td>
                                <td class="px-4 py-2 border"><?php echo $row['bloodtype']; ?></td>
                                <td class="px-4 py-2 border"><?php echo $row['address']; ?></td>
                                <td class="px-4 py-2 border">
                                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="text-red-500 hover:text-red-700">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <?php
                $sql1 = "SELECT * FROM donars";
                $result1 = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result1) > 0) {
                    $total_records = mysqli_num_rows($result1);
                    $total_page = ceil($total_records / $limit);
                    echo '<div class="mt-4 text-center">';
                    echo '<ul class="inline-flex items-center space-x-2">';
                    if ($page > 1) {
                        echo '<li><a href="donor_list.php?page=' . ($page - 1) . '" class="px-4 py-2 bg-gray-300 text-black rounded-md hover:bg-gray-400">Prev</a></li>';
                    }

                    for ($i = 1; $i <= $total_page; $i++) {
                        $active = ($i == $page) ? 'bg-blue-500 text-white' : 'bg-white text-black';
                        echo '<li><a href="donor_list.php?page=' . $i . '" class="px-4 py-2 rounded-md ' . $active . ' hover:bg-blue-300">' . $i . '</a></li>';
                    }

                    if ($total_page > $page) {
                        echo '<li><a href="donor_list.php?page=' . ($page + 1) . '" class="px-4 py-2 bg-gray-300 text-black rounded-md hover:bg-gray-400">Next</a></li>';
                    }
                    echo '</ul>';
                    echo '</div>';
                }
                ?>

                <?php } else { ?>
                    <div class="text-center py-4 text-gray-500">No donors found</div>
                <?php } ?>
            </div>
        </section>
    </main>

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
