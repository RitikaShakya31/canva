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
        <div><img src="assets/img/1.png" alt=""></div>
        <div><img src="assets/img/3.png" alt=""></div>
    </div>
    <div class="options-row">
        <div class="tabs">
            <p class="tab active" id="free-tab">Free</p>
            <p class="tab" id="premium-tab">Premium</p>
        </div>
        <select name="" id="">
            <option value="">All size</option>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000
        });
    });
</script>

</body>

</html>