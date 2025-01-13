<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .header {
            background: #FF1B51;
            color: white;
            padding: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-radius: 0 0 14px 14px;
        }

        .back-button {
            background: none;
            border: none;
            color: white;
            padding: 8px;
            cursor: pointer;
        }

        .header h1 {
            font-size: 20px;
            font-weight: 500;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .policy-text {
            color: #333;
            font-size: 15px;
            margin-bottom: 16px;
        }

        .card {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .card img {
            width: 100%;
            max-width: 600px;
            border-radius: 8px;
            height: 450px;
        }

        .options-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }

        .tabs {
            display: flex;
            gap: 10px;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
        }

        .tab.active {
            color: red;
            border-bottom: 2px solid red;
        }

        .all-post img {
            width: 200px;
        }

        @media (max-width: 768px) {
            .all-post img {
                width: 32%;
            }

            .logout-button {
                position: fixed !important;
                top: 84% !important;
                left: 5% !important;
                width: 93% !important;

            }
        }

        .logout-button {
            background: #FF1B51;
            color: white;
            border: none;
            width: 15%;
            padding: 16px;
            border-radius: 100px;
            font-size: 16px;
            margin: 24px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            position: fixed;
            top: 84%;
            text-align: center;
            left: 43%;
        }


        .slider {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .slider img {
            width: 100%;
            border-radius: 8px;
            height: 450px;
        }

        .size-btn {
            border-radius: 19px;
            padding: 7px 10px;
            border: none;
            background: #80808030;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="profile.php">
            <button class="back-button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>
        </a>
        <h1>Vasant Panchmi</h1>
    </header>
    <div class="slider sslider">
        <div><img src="" alt=""></div>
        <div><img src="" alt=""></div>
        <div><img src="" alt=""></div>
    </div>
    <div class="options-row">
        <div class="tabs">
            <p class="tab active" id="free-tab">Free</p>
            <p class="tab" id="premium-tab">Premium</p>
        </div>
        <select class="size-btn">
            <option value="">All sizes</option>
            <option value="">Square</option>
            <option value="">Story</option>
            <option value="">Landscape</option>
            <option value="">Portrait</option>
        </select>
    </div>
    <div class="all-post">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
        <img src="assets/img/1.png" alt="">
    </div>
    <button class="logout-button " id="edit-btn">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
            <polyline points="16 17 21 12 16 7" />
            <line x1="21" y1="12" x2="9" y2="12" />
        </svg>
        Edit
    </button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                autoplay: false,
                autoplaySpeed: 5000
            });
        });
    </script>
    <script>
        window.onload = function () {
            // Get the image URL from the query string
            const urlParams = new URLSearchParams(window.location.search);
            const imageUrl = urlParams.get('image_url'); // "image_url" is the key used in the query parameter

            // If image_url exists, update the slider images
            if (imageUrl) {
                const sliderImages = document.querySelectorAll('.slider.sslider img');
                sliderImages.forEach((img) => {
                    img.src = imageUrl; // Update the src of each image in the slider
                });

                console.log("Slider images updated with URL: " + imageUrl);
            } else {
                console.warn("No image URL found in query parameters.");
            }
        };

        document.getElementById("edit-btn").addEventListener("click", () => {
            // Get the image URL from the current page's query string
            const urlParams = new URLSearchParams(window.location.search);
            const imageUrl = urlParams.get('image_url'); // Extract the image URL from the query parameter

            if (imageUrl) {
                console.log("Redirecting with image URL:", imageUrl);
                // Redirect to editor.php with the same image URL
                window.location.href = `editor.php?image_url=${imageUrl}`;
            } else {
                alert("No image URL found in the current page URL.");
            }
        });


        document.addEventListener('DOMContentLoaded', function () {
            // Select the second and third image containers
            const sliderDivs = document.querySelectorAll('.slider.sslider div');
            if (sliderDivs.length > 2) {
                const secondImage = sliderDivs[1];
                const thirdImage = sliderDivs[2];

                // Add gradient styles for the second image (white gradient frame)
                secondImage.style.position = 'relative';
                secondImage.style.setProperty('--gradient-color', 'rgba(255, 255, 255, 1)');
                secondImage.style.setProperty('--gradient-color-transparent', 'rgba(255, 255, 255, 0)');
                secondImage.innerHTML += `
            <div class="gradient-frame gradient-top"></div>
            <div class="gradient-frame gradient-bottom"></div>
        `;

                // Add gradient styles for the third image (dark gradient frame)
                thirdImage.style.position = 'relative';
                thirdImage.style.setProperty('--gradient-color', 'rgba(0, 0, 0, 1)');
                thirdImage.style.setProperty('--gradient-color-transparent', 'rgba(0, 0, 0, 0)');
                thirdImage.innerHTML += `
            <div class="gradient-frame gradient-top"></div>
            <div class="gradient-frame gradient-bottom"></div>
        `;
            }

            // Common styles for frame gradients
            const style = document.createElement('style');
            style.textContent = `
        .gradient-frame {
            position: absolute;
            left: 0;
            right: 0;
            height: 23px; /* Adjust thickness of the frame border */
            z-index: 9;
        }

        /* Top gradient: top-to-bottom */
        .gradient-frame.gradient-top {
            top: 0;
            background: linear-gradient(to bottom, var(--gradient-color), var(--gradient-color-transparent));
        }

        /* Bottom gradient: bottom-to-top */
        .gradient-frame.gradient-bottom {
            bottom: 0;
            background: linear-gradient(to top, var(--gradient-color), var(--gradient-color-transparent));
        }
        
        /* Ensures the image is not obstructed */
        .slider.sslider div img {
            display: block;
            position: relative;
            z-index: 2;
        }
    `;
            document.head.appendChild(style);
        });



    </script>
</body>

</html>