<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Latest Festivals</title>
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
        }

        .back-button {
            background: none;
            border: none;
            color: white;
            padding: 8px;
        }

        .header h1 {
            font-size: 20px;
            font-weight: 500;
        }

        .filter-container {
            padding: 16px;
        }

        .filter-select {
            width: 100%;
            padding: 12px;
            border: 1px solid #eee;
            border-radius: 8px;
            font-size: 16px;
            color: #666;
            background: white;
        }

        .festivals-grid {
            padding: 23px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }

        @media only screen and (max-width: 768px) {
            .festivals-grid {
                padding: 12px;
                grid-template-columns: repeat(1, 1fr) !important;
            }
        }

        .festival-card {
            position: relative;
            aspect-ratio: 16/9;
            background: #FF1B51;
            border-radius: 12px;
            overflow: hidden;
        }

        .festival-date {
            position: absolute;
            top: 8px;
            right: 8px;
            background: white;
            color: #000;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
        }

        .festival-name {
            position: absolute;
            bottom: 8px;
            left: 8px;
            color: white;
            font-weight: bold;
            font-size: 14px;
        }

        .festival-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.2;
        }


        .card { 
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .card-header {
            position: relative;
            width: 100%;
            height: 400px;
            background: url('assets/category-images/image.png') no-repeat center center/cover;
        }

        .card-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-header .social-icons {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            gap: 10px;
        }

        .social-icons a {
            color: #fff;
            font-size: 18px;
        }

        .card-header .phone-number {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
        }

        .card-content {
            padding: 15px;
            text-align: center;
        }

        .card-content h2 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .card-content p {
            font-size: 14px;
            color: #666;
            margin: 10px 0;
        }

        .card-content .personal-info {
            margin: 10px 0;
            font-size: 14px;
        }

        .card-footer {
            display: flex;
            justify-content: space-around;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .card-footer a {
            text-decoration: none;
            font-size: 14px;
            color: #666;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .card-footer a i {
            font-size: 18px;
        }

        .card-footer a:hover {
            color: #007bff;
        }

        .fa-whatsapp {
            color: #4aa42b;
        }

        .fa-edit {
            color: #ce1741;
        }

        .fa-download {
            color: #ce1741;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="index.php">
            <button class="back-button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>
        </a>
        <h1>Daily Post</h1>
    </header>

    <div class="filter-container">
        <select class="filter-select">
            <option>Select Category</option>
            <option>INC</option>
            <option>AAP</option>
            <option>BJP</option>
        </select>
    </div>

    <div class="festivals-grid">
        <div class="card">
            <div class="card-header">
                <div class="phone-number">
                    <i class="fas fa-phone"></i> 9065001331
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="card-footer">
                <a href="#"><i class="fas fa-edit"></i> Edit</a>
                <a href="#"><i class="fas fa-download"></i> Download</a>
                <a href="#"><i class="fab fa-whatsapp"></i> Share</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="phone-number">
                    <i class="fas fa-phone"></i> 9065001331
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="card-footer">
                <a href="#"><i class="fas fa-edit"></i> Edit</a>
                <a href="#"><i class="fas fa-download"></i> Download</a>
                <a href="#"><i class="fab fa-whatsapp"></i> Share</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="phone-number">
                    <i class="fas fa-phone"></i> 9065001331
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="card-footer">
                <a href="#"><i class="fas fa-edit"></i> Edit</a>
                <a href="#"><i class="fas fa-download"></i> Download</a>
                <a href="#"><i class="fab fa-whatsapp"></i> Share</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="phone-number">
                    <i class="fas fa-phone"></i> 9065001331
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="card-footer">
                <a href="#"><i class="fas fa-edit"></i> Edit</a>
                <a href="#"><i class="fas fa-download"></i> Download</a>
                <a href="#"><i class="fab fa-whatsapp"></i> Share</a>
            </div>
        </div>
    </div>



</body>

</html>