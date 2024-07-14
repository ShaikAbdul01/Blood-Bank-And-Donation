<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank And Donation</title>
    <!-- tailwind and daisy ui cdn -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- tailwind custom classes -->
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

    <!-- custom styles -->
    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="font-poppins">
    <header class="md:container md:mx-auto">
        <nav>
            <div class="navbar bg-base-100">
                <div class="flex-1">
                    <div class="dropdown">
                        <label tabindex="0" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </label>
                        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 text-base shadow bg-base-100 rounded-box w-52">
                            <li><a href="http://localhost/Projects/Blood-Bank-And-Donation/index.php">Home</a></li>
                            <li><a href="http://localhost/Projects/Blood-Bank-And-Donation/why_should.php">Why Donate Blood</a></li>
                            <li><a>Become a Donar</a></li>
                            <li><a>Need Blood</a></li>
                            <li><a>Contact</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-ghost normal-case text-sm lg:text-3xl">Blood Bank And Donation</a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu text-base menu-horizontal px-1">
                        <li><a href="http://localhost/Projects/Blood-Bank-And-Donation/index.php">Home</a></li>
                        <li><a href="http://localhost/Projects/Blood-Bank-And-Donation/why_should.php">Why Donate Blood</a></li>
                        <li><a>Become a Donar</a></li>
                        <li><a>Need Blood</a></li>
                        <li><a>Contact</a></li>
                    </ul>
                </div>
                <div class="">
                    <a class="btn bg-blood-primary text-white">Login</a>
                </div>
            </div>
        </nav>
        <!-- slider or carousel -->
        <div class="carousel w-full lg:h-[550px] bg-blood-primary-bg">
            <!-- slide 1 -->
            <div id="slide1" class="carousel-item relative w-full">
                <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24">
                    <div class="space-y-7 flex-1">
                        <h2 class="text-xl lg:text-4xl font-bold">
                            Join Our Community of
                            <br>
                            Lifesaving Blood Donors
                        </h2>
                        <p>
                            Heroes come in all forms. By donating blood, you join a dedicated community committed to saving lives. Your single donation can help multiple patients in need, making you a hero in their eyes.
                        </p>
                        <button class="btn bg-blood-primary text-white">Purchase</button>
                    </div>
                    <div class="flex-1">
                        <img src="image/blood1.jpg" class="w-[400px]" />
                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide4" class="btn btn-circle">❮</a>
                    <a href="#slide2" class="btn btn-circle">❯</a>
                </div>
            </div>
            <!-- slide 2 -->
            <div id="slide2" class="carousel-item relative w-full">
                <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24">
                    <div class="space-y-7 flex-1">
                        <h2 class="text-xl lg:text-4xl font-bold">

                            Small Act, Big Impact
                            <br>
                            – Donate Blood and Save Lives
                        </h2>
                        <p>
                            No matter how small it may seem, your blood donation has the power to create a significant impact. Each drop can contribute to saving lives, whether it’s for a child battling cancer, a mother during childbirth, or a patient undergoing surgery.
                        </p>
                        <button class="btn bg-blood-primary text-white">Purchase</button>
                    </div>
                    <div class="flex-1">
                        <img src="image/blood2.jpg" class="w-[400px]" />

                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide1" class="btn btn-circle">❮</a>
                    <a href="#slide3" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide3" class="carousel-item relative w-full">
                <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24">
                    <div class="space-y-7 flex-1">
                        <h2 class="text-xl lg:text-4xl font-bold">

                            Your Blood Donation is Crucial During Emergency Situations

                            <br>
                            During Emergency Situations
                        </h2>
                        <p>
                            During emergencies and natural disasters, the demand for blood increases dramatically. Your timely donation ensures that hospitals and clinics are well-equipped to handle crises and save lives when every second counts.

                        </p>
                        <button class="btn bg-blood-primary text-white">Purchase</button>
                    </div>
                    <div class="flex-1">
                        <img src="image/blood3.jpg" class="w-[400px]" />

                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide2" class="btn btn-circle">❮</a>
                    <a href="#slide4" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide4" class="carousel-item relative w-full">
                <div class="flex flex-col lg:flex-row gap-20 p-4 lg:p-24">
                    <div class="space-y-7 flex-1">
                        <h2 class="text-xl lg:text-4xl font-bold">

                            Transform Lives by
                            <br>
                            Donating Blood Regularly
                        </h2>
                        <p>
                            Regular blood donations are vital to maintaining a steady supply for those in need. By making blood donation a regular habit, you continuously contribute to the well-being of patients and help build a healthier community.

                        </p>
                        <button class="btn bg-blood-primary text-white">Purchase</button>
                    </div>
                    <div class="flex-1">
                        <img src="image/blood4.jpg" class="w-[400px]" />

                    </div>
                </div>
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide3" class="btn btn-circle">❮</a>
                    <a href="#slide1" class="btn btn-circle">❯</a>
                </div>
            </div>
        </div>
    </header>
    <main class="md:container md:mx-auto">
        <!-- Table -->
        <section class="py-16 px-4 ">
            <h3 class="text-5xl mb-12 font-semibold text-center">Need <span class="text-blood-primary">Blood</span></h3>
            <form class="mx-auto">




                <div class="relative z-0 w-full mb-5 group">
                    <label for="blood_group" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Blood Group</label>
                    <select name="blood_group" id="blood_group" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required>
                        <option value="" disabled selected>Select your blood group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="floating_reason" id="floating_reason" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_reason" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Reason, why do you need blood?</label>
                </div>


                <button type="submit" class="text-white bg-[#DE3163] hover:bg-[#f82561]focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </section>

    </main>


    <footer class="bg-white dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Careers</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Brand Center</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Discord Server</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Twitter</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Facebook</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Licensing</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">iOS</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Android</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Windows</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">MacOS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 text-center">
                <span class="text-sm text-gray-500 dark:text-gray-300 ">Shaik Abdul</a>. All Rights Reserved.
                </span>

            </div>
        </div>
    </footer>

</body>

</html>