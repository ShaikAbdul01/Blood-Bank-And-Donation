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
    <?php include('header.php'); ?>
    <main class="md:container md:mx-auto">
        <!-- Blood Donar Names -->
        <section class="my-24">
            <h3 class="text-5xl mb-12 font-semibold text-center">Blood <span class="text-blood-primary">Donor Names</span></h3>
            <div class="grid gap-10 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                <?php
                include 'connection.php';

                // Fetch donars from the database
                $sql = "SELECT name, bloodtype, phone, gender, age, address FROM donars";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='card bg-base-100 p-9 border border-gray-400'>";
                        echo "<h1 class='font-semibold text-xl text-blood-primary text-center'>Name: " . $row["name"] . "</h1>";
                        echo "<div class='card-body'>";
                        echo "<div class='text-center space-y-4 mt-4'>";
                        echo "<h4 class='text-sm font-semibold '>Blood Group: " . $row["bloodtype"] . "</h4>";
                        echo "<h4 class='text-sm font-semibold '>Phone Number: " . $row["phone"] . "</h4>";
                        echo "<h4 class='text-sm font-semibold '>Gender: " . $row["gender"] . "</h4>";
                        echo "<h4 class='text-sm font-semibold '>Age: " . $row["age"] . "</h4>";
                        echo "<h4 class='text-sm font-semibold '>Address: " . $row["address"] . "</h4>";
                        echo "</div></div></div>";
                    }
                } else {
                    echo "0 results";
                }

                // Close connection
                mysqli_close($conn);
                ?>
            </div>
        </section>
        <!-- FAQ -->
        <section class="my-24">
            <h3 class="text-5xl mb-12 font-semibold text-center">Frequently Asked <span class="text-blood-primary">Questions</span></h3>
            <div class="hero">
                <div class="hero-content flex-col lg:gap-24 lg:flex-row">
                    <img src="image/faq.png" class="w-3/4 lg:max-w-sm rounded-lg shadow-2xl" />
                    <div>
                        <!-- first question -->
                        <div class="collapse collapse-arrow ">
                            <input type="radio" name="my-accordion-2" checked="checked" />
                            <div class="collapse-title text-xl font-medium">
                                Who can donate blood?
                            </div>
                            <div class="collapse-content">
                                <p>Most healthy adults who are at least 18 years old and weigh at least 110 pounds can donate blood. However, eligibility may vary based on medical history, current medications, travel history, and other factors. It’s best to check with our blood bank or visit our eligibility criteria page for detailed information. </p>
                            </div>
                        </div>
                        <div class="collapse collapse-arrow ">
                            <input type="radio" name="my-accordion-2" />
                            <div class="collapse-title text-xl font-medium">
                                How often can I donate blood?
                            </div>
                            <div class="collapse-content">
                                <p> You can donate whole blood every 56 days (approximately every 2 months). Platelet donations can be made more frequently, typically every 7 to 14 days, up to 24 times a year. Double red cell donations have a longer interval, typically every 112 days. </p>
                            </div>
                        </div>
                        <div class="collapse collapse-arrow ">
                            <input type="radio" name="my-accordion-2" />
                            <div class="collapse-title text-xl font-medium">
                                What should I do to prepare for blood donation?
                            </div>
                            <div class="collapse-content">
                                <p>Before donating blood, ensure you are well-hydrated by drinking plenty of water. Eat a healthy meal, avoid fatty foods, and get a good night's sleep. Bring a valid ID and any necessary donor cards or paperwork.</p>
                            </div>
                        </div>
                        <div class="collapse collapse-arrow ">
                            <input type="radio" name="my-accordion-2" />
                            <div class="collapse-title text-xl font-medium">
                                What should I expect during the blood donation process?
                            </div>
                            <div class="collapse-content">
                                <p>The donation process typically involves registration, a brief health screening, the actual donation, and a short recovery period. The entire process takes about an hour, with the donation itself lasting around 10 minutes.</p>
                            </div>
                        </div>
                        <div class="collapse collapse-arrow ">
                            <input type="radio" name="my-accordion-2" />
                            <div class="collapse-title text-xl font-medium">
                                Is blood donation safe?
                            </div>
                            <div class="collapse-content">
                                <p>Yes, blood donation is safe. All needles and equipment are sterile, used only once, and then discarded. You cannot contract any diseases by donating blood.</p>
                            </div>
                        </div>
                        <div class="collapse collapse-arrow ">
                            <input type="radio" name="my-accordion-2" />
                            <div class="collapse-title text-xl font-medium">
                                What happens to my blood after donation?
                            </div>
                            <div class="collapse-content">
                                <p>After donation, your blood is tested, processed, and stored until needed. It is then distributed to hospitals and clinics to help patients in need.</p>
                            </div>
                        </div>
                        <div class="collapse collapse-arrow ">
                            <input type="radio" name="my-accordion-2" />
                            <div class="collapse-title text-xl font-medium">
                                How can I find out my blood type?
                            </div>
                            <div class="collapse-content">
                                <p>Your blood type is typically tested and recorded during your first donation. You will be informed of your blood type afterwards, or you can ask our staff during your visit.</p>
                            </div>
                        </div>
                        <div class="collapse collapse-arrow ">
                            <input type="radio" name="my-accordion-2" />
                            <div class="collapse-title text-xl font-medium">
                                What are the benefits of donating blood?
                            </div>
                            <div class="collapse-content">
                                <p>Blood donation has several benefits, including the satisfaction of saving lives, a free health screening, and the potential to burn calories. Some studies suggest it may also help maintain healthy iron levels.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Review Feedback -->
        <h3 class="text-5xl mb-12 font-semibold text-center">What Users
        Are  <span class="text-blood-primary">Saying</span></h3>
         <section class="bg-white px-4 py-12 md:py-24">
  <div class="max-w-screen-xl mx-auto">
    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4 relative">
      <div class="bg-gray-200 rounded-lg p-8 text-center md:w-1/3">
        <p class="font-bold uppercase">John Doe</p>
        <p class="text-xl font-light italic text-gray-700">This podcast is amazing! The storytelling and production
          quality are top-notch. I can't wait for the next episode!</p>
        <div class="flex items-center justify-center space-x-2 mt-4">
          <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor" stroke="currentColor">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor" stroke="currentColor">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor" stroke="currentColor">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
        </div>
      </div>
      <div class="bg-gray-200 rounded-lg p-8 text-center md:w-1/3">
        <p class="font-bold uppercase">Jane Smith</p>
        <p class="text-xl font-light italic text-gray-700">This podcast kept me on the edge of my seat. It's a
          must-listen for true crime enthusiasts!</p>
        <div class="flex items-center justify-center space-x-2 mt-4">
          <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor" stroke="currentColor">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor" stroke="currentColor">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor" stroke="currentColor">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
        </div>
      </div>
      <div class="bg-gray-200 rounded-lg p-8 text-center md:w-1/3">
        <p class="font-bold uppercase">Emily Johnson</p>
        <p class="text-xl font-light italic text-gray-700">I can't get enough of this podcast! The host's voice is so
          soothing, and the stories are gripping. Highly recommend!</p>
        <div class="flex items-center justify-center space-x-2 mt-4">
          <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor" stroke="currentColor">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor" stroke="currentColor">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="text-yellow-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
            fill="currentColor" stroke="currentColor">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3 .921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784 .57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81 .588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>
    </main>

    <?php include('footer.php') ?>


</body>

</html>