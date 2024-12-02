<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Panel Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900 font-poppins">

    <!-- Sidebar Container -->
    <div class="flex">
        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="fixed top-4 left-4 z-50 lg:hidden bg-gray-800 text-white p-2 rounded-md ">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Sidebar -->
        <div id="sidebar"
            class="h-screen w-64 bg-gray-800 text-white fixed transform -translate-x-full lg:translate-x-0 lg:relative flex flex-col transition-transform duration-300 z-40">
            <div class="px-14 sm:px-6 py-4 bg-gray-900 text-xl sm:text-2xl font-bold">
                Admin Panel
            </div>
            <ul class="flex-1 space-y-4 mt-4">
                <li>
                    <a href="dashboard.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <i class="fa fa-tachometer-alt mr-2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="add_donor.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <i class="fa fa-user-plus mr-2"></i> Add Donor
                    </a>
                </li>
                <li>
                    <a href="donor_list.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <i class="fa fa-list-alt mr-2"></i> Donor List
                    </a>
                </li>
                <li>
                    <a href="query.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <i class="fa fa-comments mr-2"></i> User Queries
                    </a>
                </li>
                <li>
                    <a href="pages.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <i class="fa fa-edit mr-2"></i> Manage Pages
                    </a>
                </li>
                <li>
                    <a href="update_contact.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <i class="fa fa-phone mr-2"></i> Update Contact Info
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");

        menuToggle.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full"); // Toggle sidebar visibility
        });
    </script>
</body>

</html>
