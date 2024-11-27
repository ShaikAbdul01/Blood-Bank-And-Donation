<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Sidebar & Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
</head>

<body class="bg-gray-100 text-gray-900 font-poppins form-container">

    <!-- Navbar & Dropdown for Mobile -->
    <nav>
        <div class="navbar bg-base-100">

            <!-- Dropdown for Mobile Menu -->
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>

            </div>

            <a class="btn btn-ghost normal-case text-lg lg:text-4xl lg:my-10 flex justify-center items-center mx-auto">
                Blood Bank And Donation
            </a>
        </div>

    </nav>


    <div class="flex">

        <nav id="sidebar"
            class="w-64 bg-gray-800 text-white h-screen fixed flex flex-col transform transition-transform -translate-x-full sm:translate-x-0">
            <div class="px-6 py-4 text-2xl font-bold bg-gray-900">Admin Panel</div>
            <ul class="mt-4 space-y-2 flex-1">
                <li>
                    <a href="dashboard.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <span class="mr-2 glyphicon glyphicon-dashboard"></span> Dashboard
                    </a>
                </li>
                <li>
                    <a href="add_donor.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <span class="mr-2 glyphicon glyphicon-pencil"></span> Add Donor
                    </a>
                </li>
                <li>
                    <a href="donor_list.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <span class="mr-2 glyphicon glyphicon-list-alt"></span> Donor List
                    </a>
                </li>
                <li>
                    <a href="query.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <span class="mr-2 glyphicon glyphicon-check"></span> Check Contact Query
                    </a>
                </li>
                <li>
                    <a href="pages.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <span class="mr-2 glyphicon glyphicon-edit"></span> Manage Pages
                    </a>
                </li>
                <li>
                    <a href="update_contact.php" class="block px-6 py-3 rounded-md hover:bg-gray-700">
                        <span class="mr-2 glyphicon glyphicon-edit"></span> Update Contact Info
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section class="lg:grid grid-cols-3 sm:flex gap-4 mx-auto w-4/12 text-center">
            <div id="deposit" class="text-white bg-emerald-400 p-5 py-10 sm:my-5 rounded-xl shadow-lg">
                <h2 class="text-2xl font-medium mb-2">Deposit</h2>
                <p class="text-5xl">$<span id="dipoCash">00</span></p>
            </div>
            <div class="text-white bg-amber-400 p-5 py-10 sm:my-5  rounded-xl shadow-lg">
                <h2 class="text-2xl font-medium mb-2">Withdraw</h2>
                <p class="text-5xl">$<span id="WithCash">00</span></p>
            </div>
            <div class="text-white bg-rose-400 p-5 py-10 sm:my-5  rounded-xl shadow-lg">
                <h2 class="text-2xl font-medium mb-2">Balance</h2>
                <p class="text-5xl">$<span id="balanceCash">1240</span></p>
            </div>
        </section>
    </div>

    <script>
        const sidebar = document.getElementById("sidebar");
        const sidebarToggle = document.querySelector(".dropdown label");

        // Toggle sidebar visibility for mobile
        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full"); // Hide or show the sidebar
        });
    </script>

</body>

</html>