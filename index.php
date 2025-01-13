<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festival App</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="sty.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <div class="container">
        <!-- Header -->
        <header>
            <div class="brand" onclick="togglePopup()">
                <img src="assets/image/logo.png" alt="Brand Logo" class="brand-logo">
                <div class="brand-info">
                    <span class="brand-name">Your Brand</span>
                    <span class="brand-handle">wjjwj ▼</span>
                </div>
            </div>

            <div id="brand-popup" class="popup">
                <div class="popup-content">
                    <div class="popup-header">
                        <h3>Brand</h3>
                    </div>
                    <div class="popup-body">
                        <div class="brand-card">
                            <img src="assets/image/logo.png" alt="Brand Logo" class="brand-logo">
                            <div>
                                <span class="brand-name">wjjwj</span>
                                <span class="brand-category">Accounting</span>
                            </div>
                            <a href="brand-edit.php"> <button class="edit-btn">Edit Brand Details</button></a>
                            <button class="delete-btn">Delete</button>
                        </div>
                    </div>
                    <a href="brand-edit.php"><button class="add-brand-btn">+ Add More Brand</button></a>
                </div>
            </div>

            <div class="header-actions" data-target="subscription.php">
                <a style="color:#e91e63;" class="" href="daily-post.php"><i style="font-size:25px;"
                        class="fa fa-user-circle" aria-hidden="true"></i></a>
                <!-- First SVG Icon -->
                <a href="subscription.php"> <svg class="header-icon" width="25px" height="25px" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#E91E63">
                        <g id="SVGRepo_bgCarrier" stroke-width="0">
                            <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#ecf2f4"
                                stroke-width="0" />
                        </g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M21.8382 11.1263L21.609 13.5616C21.2313 17.5742 21.0425 19.5805 19.8599 20.7902C18.6773 22 16.9048 22 13.3599 22H10.6401C7.09517 22 5.32271 22 4.14009 20.7902C2.95748 19.5805 2.76865 17.5742 2.391 13.5616L2.16181 11.1263C1.9818 9.2137 1.8918 8.25739 2.21899 7.86207C2.39598 7.64823 2.63666 7.5172 2.89399 7.4946C3.36968 7.45282 3.96708 8.1329 5.16187 9.49307C5.77977 10.1965 6.08872 10.5482 6.43337 10.6027C6.62434 10.6328 6.81892 10.6018 6.99526 10.5131C7.31351 10.3529 7.5257 9.91812 7.95007 9.04852L10.1869 4.46486C10.9888 2.82162 11.3898 2 12 2C12.6102 2 13.0112 2.82162 13.8131 4.46485L16.0499 9.04851C16.4743 9.91812 16.6865 10.3529 17.0047 10.5131C17.1811 10.6018 17.3757 10.6328 17.5666 10.6027C17.9113 10.5482 18.2202 10.1965 18.8381 9.49307C20.0329 8.1329 20.6303 7.45282 21.106 7.4946C21.3633 7.5172 21.604 7.64823 21.781 7.86207C22.1082 8.25739 22.0182 9.2137 21.8382 11.1263ZM8.25 18C8.25 17.5858 8.58579 17.25 9 17.25H15C15.4142 17.25 15.75 17.5858 15.75 18C15.75 18.4142 15.4142 18.75 15 18.75H9C8.58579 18.75 8.25 18.4142 8.25 18Z"
                                fill="#E91E63" />
                        </g>
                    </svg></a>


            </div>


        </header>

        <!-- Hero Section -->
        <section class="hero-slider">
            <div class="slider-container">
                <div class="slide">
                    <img src="assets/image/bannerimage.jpg" alt="Slide 1" class="hero-image">
                </div>
                <div class="slide">
                    <img src="assets/image/bannerimage.jpg" alt="Slide 2" class="hero-image">
                </div>
                <div class="slide">
                    <img src="assets/image/bannerimage.jpg" alt="Slide 3" class="hero-image">
                </div>
                <div class="slide">
                    <img src="assets/image/bannerimage.jpg" alt="Slide 4" class="hero-image">
                </div>
                <div class="slide">
                    <img src="assets/image/bannerimage.jpg" alt="Slide 5" class="hero-image">
                </div>
                <div class="slide">
                    <img src="assets/image/bannerimage.jpg" alt="Slide 6" class="hero-image">
                </div>
            </div>
            <button class="prev-btn">‹</button>
            <button class="next-btn">›</button>
        </section>


        <!-- Latest & Trending Section -->
        <section class="section">
            <div class="section-header">
                <h2 class="section-title">Latest & Trending</h2>
            </div>
            <div class="scroll-container">
                <a href="" class="trending-item">
                    <div class="trending-icon">
                        <img src="assets\category-images\1727684671.jpg" alt="W. Hindi Day">
                    </div>
                    <span class="trending-name">W. Hindi Day</span>
                </a>
                <a href="" class="trending-item">
                    <div class="trending-icon">
                        <img src="assets\category-images\1727684671.jpg" alt="W. Hindi Day">
                    </div>
                    <span class="trending-name">W. Hindi Day</span>
                </a>
                <a href="" class="trending-item">
                    <div class="trending-icon">
                        <img src="assets\category-images\1727684687.jpg" alt="Lohri">
                    </div>
                    <span class="trending-name">Lohri</span>
                </a>
                <a href="" class="trending-item">
                    <div class="trending-icon">
                        <img src="assets\category-images\1728540333.jpg" alt="Makar Sankranti">
                    </div>
                    <span class="trending-name">Makar Sankranti</span>
                </a>
                <a href="" class="trending-item">
                    <div class="trending-icon">
                        <img src="assets/category-images/1732977865.jpg" alt="Republic Day">
                    </div>
                    <span class="trending-name">Republic Day</span>
                </a>
                <a href="" class="trending-item">
                    <div class="trending-icon">
                        <img src="assets/category-images/1732977865.jpg" alt="Vasant Panchami">
                    </div>
                    <span class="trending-name">Vasant Panchami</span>
                </a>
            </div>
        </section>




        <!-- Calendar Filter Section -->
        <div id="section123-filter-dropdown">
            <select>
                <option>Filter By Calendar</option>
                <option>Vasant Panchmi</option>
                <option>Lohri</option>
                <option>Holi </option>
                <option>Diwali</option>
            </select>
        </div>


        <!-- Upcoming Festivals Section -->
        <div id="section123-upcoming-festivals" class="py-8">
            <div class="header flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold">Upcoming Festivals</h2>
                <div class="flex-grow border-t border-gray-300 mx-4"></div>
                <a href="latestFest.php" class="text-gray-500 hover:underline flex items-center">
                    See all
                    <i class="fa fa-chevron-right ml-2" aria-hidden="true"></i>
                </a>
            </div>

            <div
                class="festival-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4">
                <a href=""
                    class="festival-card bg-cover bg-center rounded-lg shadow-lg p-4 text-white flex flex-col justify-between"
                    style="background-image: url('assets/category-images/1728540333.jpg');">
                    <div class="date text-sm bg-gray-900 bg-opacity-75 px-2 py-1 rounded">2025-01-10</div>
                    <div class="content-overlay bg-gray-900 bg-opacity-75 p-2 rounded mt-2">
                        <p class="upcoming-festival">W. Hindi Day</p>
                    </div>
                </a>
                <a href=""
                    class="festival-card bg-cover bg-center rounded-lg shadow-lg p-4 text-white flex flex-col justify-between"
                    style="background-image: url('assets/category-images/1728540333.jpg');">
                    <div class="date text-sm bg-gray-900 bg-opacity-75 px-2 py-1 rounded">2025-01-11</div>
                    <div class="content-overlay bg-gray-900 bg-opacity-75 p-2 rounded mt-2">
                        <p class="upcoming-festival">Lal Bahadur Shastri</p>
                    </div>
                </a>
                <a href=""
                    class="festival-card bg-cover bg-center rounded-lg shadow-lg p-4 text-white flex flex-col justify-between"
                    style="background-image: url('assets/category-images/1728540333.jpg');">
                    <div class="date text-sm bg-gray-900 bg-opacity-75 px-2 py-1 rounded">2025-01-12</div>
                    <div class="content-overlay bg-gray-900 bg-opacity-75 p-2 rounded mt-2">
                        <p class="upcoming-festival">Nat. Youth Day</p>
                    </div>
                </a>
                <a href=""
                    class="festival-card bg-cover bg-center rounded-lg shadow-lg p-4 text-white flex flex-col justify-between"
                    style="background-image: url('assets/category-images/1728540333.jpg');">
                    <div class="date text-sm bg-gray-900 bg-opacity-75 px-2 py-1 rounded">2025-01-12</div>
                    <div class="content-overlay bg-gray-900 bg-opacity-75 p-2 rounded mt-2">
                        <p class="upcoming-festival">Nat. Youth Day</p>
                    </div>
                </a>
                <a href=""
                    class="festival-card bg-cover bg-center rounded-lg shadow-lg p-4 text-white flex flex-col justify-between"
                    style="background-image: url('assets/category-images/1728540333.jpg');">
                    <div class="date text-sm bg-gray-900 bg-opacity-75 px-2 py-1 rounded">2025-01-12</div>
                    <div class="content-overlay bg-gray-900 bg-opacity-75 p-2 rounded mt-2">
                        <p class="upcoming-festival">Nat. Youth Day</p>
                    </div>
                </a>
                <a href=""
                    class="festival-card bg-cover bg-center rounded-lg shadow-lg p-4 text-white flex flex-col justify-between"
                    style="background-image: url('assets/category-images/1728540333.jpg');">
                    <div class="date text-sm bg-gray-900 bg-opacity-75 px-2 py-1 rounded">2025-01-12</div>
                    <div class="content-overlay bg-gray-900 bg-opacity-75 p-2 rounded mt-2">
                        <p class="upcoming-festival">Nat. Youth Day</p>
                    </div>
                </a>
                <a href=""
                    class="festival-card bg-cover bg-center rounded-lg shadow-lg p-4 text-white flex flex-col justify-between"
                    style="background-image: url('assets/category-images/1728540333.jpg');">
                    <div class="date text-sm bg-gray-900 bg-opacity-75 px-2 py-1 rounded">2025-01-12</div>
                    <div class="content-overlay bg-gray-900 bg-opacity-75 p-2 rounded mt-2">
                        <p>Nat. Youth Day</p>
                    </div>
                </a>
                <!-- Add more festival cards here -->
            </div>
        </div>



        <!-- Festival Images Sections -->
        <div id="section123-vasant-panchami">
            <div class="header flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold other-h2">Vasant Panchmi</h2>
                <!-- <div class="flex-grow border-t border-gray-300 mx-4"></div> -->
                <a href="" class="text-black-500 hover:underline">See all <i class="fa fa-chevron-right"
                        aria-hidden="true"></i></a>
            </div>
            <div class="card-container grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 p-4">
                <a href="select-post.php?image_url=assets/img/orange.webp"
                    class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/orange.webp" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" style="width:90px;" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/2.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/3.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" style="width:90px;" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/4.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/1.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" style="width:90px;" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/2.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/3.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
            </div>

        </div>

        <div id="section123-vasant-panchami">
            <div class="header flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold other-h2">Republic Day</h2>
                <div class="flex-grow border-t border-gray-300 mx-4"></div>
                <a href="" class="text-black-500 hover:underline">See all <i class="fa fa-chevron-right"
                        aria-hidden="true"></i></a>
            </div>
            <div
                class="card-container grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 p-4">
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/1.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/2.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/3.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/4.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/1.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/2.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
            </div>

        </div>
        <div id="section123-vasant-panchami">
            <div class="header flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold other-h2">Makra Sankranti</h2>
                <div class="flex-grow border-t border-gray-300 mx-4"></div>
                <a href="" class="text-black-500 hover:underline">See all <i class="fa fa-chevron-right"
                        aria-hidden="true"></i></a>
            </div>
            <div class="card-container grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 p-4">
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/makar sankrantri/1.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" style="width:90px;" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/makar sankrantri/2.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/makar sankrantri/3.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" style="width:90px;" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/makar sankrantri/4.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/makar sankrantri/1.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" style="width:90px;" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/makar sankrantri/2.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/makar sankrantri/3.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
            </div>

        </div>
        <div id="section123-vasant-panchami">
            <div class="header flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold other-2">Lohri</h2>
                <div class="flex-grow border-t border-gray-300 mx-4"></div>
                <a href="" class="text-black-500 hover:underline">See all <i class="fa fa-chevron-right"
                        aria-hidden="true"></i></a>
            </div>
            <div
                class="card-container grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 p-4">
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/1.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/2.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/3.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/4.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/1.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
                <a href="" class="card bg-white rounded-lg shadow hover:shadow-lg overflow-hidden">
                    <img src="assets/img/republic/2.png" alt="Vasant Panchami Image" class="w-full h-auto">
                </a>
            </div>
        </div>


        <!-- Categories Section -->
        <section class="section">
            <div class="header flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold other-h2">Category</h2>
                <div class="flex-grow border-t border-gray-300 mx-4"></div>
                <a href="" class="text-black-500 hover:underline">See all <i class="fa fa-chevron-right"
                        aria-hidden="true"></i></a>
            </div>
            <div class="category-grid">
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="INC">
                    </div>
                    <span class="category-name">INC (Political)</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="AAP">
                    </div>
                    <span class="category-name">AAP (Political)</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="BJP">
                    </div>
                    <span class="category-name">BJP (Political)</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="BSP">
                    </div>
                    <span class="category-name">BSP (Political)</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="SP">
                    </div>
                    <span class="category-name">SP (Political)</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="Exam Warrior">
                    </div>
                    <span class="category-name">Exam Warrior</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="Zodiac Sign">
                    </div>
                    <span class="category-name">Zodiac Sign</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="Customer Services">
                    </div>
                    <span class="category-name">Customer Services</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="INC">
                    </div>
                    <span class="category-name">INC (Political)</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="AAP">
                    </div>
                    <span class="category-name">AAP (Political)</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="BJP">
                    </div>
                    <span class="category-name">BJP (Political)</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="BSP">
                    </div>
                    <span class="category-name">BSP (Political)</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="SP">
                    </div>
                    <span class="category-name">SP (Political)</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="Exam Warrior">
                    </div>
                    <span class="category-name">Exam Warrior</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="Zodiac Sign">
                    </div>
                    <span class="category-name">Zodiac Sign</span>
                </a>
                <a href="" class="category-item">
                    <div class="category-icon">
                        <img src="assets\category-images\1730015544.jpg" alt="Customer Services">
                    </div>
                    <span class="category-name">Customer Services</span>
                </a>
            </div>
        </section>
        <!-- Bottom Navigation -->



        <?php
        include 'nav.php';
        ?>

        <script>
            function togglePopup() {
                const popup = document.getElementById('brand-popup');
                popup.classList.toggle('active'); // Toggles the active class
            }
        </script>
       

</body>

</html>