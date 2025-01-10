<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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
            cursor: pointer;
        }

        .header h1 {
            font-size: 20px;
            font-weight: 500;
        }

        .container {
            padding: 16px;
            max-width: 600px;
            margin: 0 auto;
        }

        .portfolio-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .portfolio-header {
            background: #FF1B51;
            color: white;
            padding: 24px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .portfolio-content {
            padding: 24px;
        }

        .price {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 12px;
        }

        .description {
            color: #666;
            margin-bottom: 24px;
            line-height: 1.5;
        }

        .feature-list {
            list-style: none;
            margin-bottom: 24px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
            color: #333;
        }

        .feature-dot {
            width: 8px;
            height: 8px;
            background: #FF1B51;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .visit-button {
            background: #FF1B51;
            color: white;
            border: none;
            padding: 12px 32px;
            border-radius: 100px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            max-width: 200px;
            display: block;
            margin: 0 auto;
            text-decoration: none;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="header">
        <button class="back-button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 18l-6-6 6-6"/>
            </svg>
        </button>
        <h1>Services</h1>
    </header>

    <div class="container">
        <!-- Super Exclusive Portfolio -->
        <div class="portfolio-card">
            <div class="portfolio-header">
                SUPER EXCLUSIVE<br>YEARLY PORTFOLIO
            </div>
            <div class="portfolio-content">
                <div class="price">&lt;60K/Month*</div>
                <p class="description">
                    Transform your business's digital landscape with Jugadwale.com's comprehensive packages, expertly crafted to manage and enhance your online portfolio.
                </p>
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        E-com. website with domain and hosting
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Blogs (200) & SEO
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        SMO (10 Social Channels) & SMM (Ad Management)
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Dedicated Festive Post (90) & Organic Post (130)
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Dedicated Reel/Video (100)
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Commercial Ad/Photography/Stock
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Printing Designing (42) & Portfolio Support
                    </li>
                </ul>
                <a href="#" class="visit-button">Visit Url</a>
            </div>
        </div>

        <!-- Exclusive Portfolio -->
        <div class="portfolio-card">
            <div class="portfolio-header">
                EXCLUSIVE<br>YEARLY PORTFOLIO
            </div>
            <div class="portfolio-content">
                <div class="price">&lt;35K/Month*</div>
                <p class="description">
                    Transform your business's digital landscape with Jugadwale.com's comprehensive packages, expertly crafted to manage and enhance your online portfolio.
                </p>
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        E-com. website with domain and hosting
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Blogs (100) & SEO
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        SMO (7 Social Channels) & SMM (Ad Management)
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Dedicated Festive Post (80) & Organic Post (120)
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Dedicated Reel/Video (60)
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Commercial Ad/Photography/Stock
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        CDR Printing Designing (30) & Portfolio Support
                    </li>
                </ul>
                <a href="#" class="visit-button">Visit Url</a>
            </div>
        </div>

        <!-- Standard Portfolio -->
        <div class="portfolio-card">
            <div class="portfolio-header">
                STANDARD<br>YEARLY PORTFOLIO
            </div>
            <div class="portfolio-content">
                <div class="price">&lt;20K/Month*</div>
                <p class="description">
                    Transform your business's digital landscape with Jugadwale.com's comprehensive packages, expertly crafted to manage and enhance your online portfolio.
                </p>
                <ul class="feature-list">
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        E-com. website with domain and hosting
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Blogs (50) & SEO
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        SMO (5 Social Channels) & SMM (Ad Management)
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Dedicated Festive Post (40) & Organic Post (60)
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Dedicated Reel/Video (30)
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Basic Photography/Stock
                    </li>
                    <li class="feature-item">
                        <div class="feature-dot"></div>
                        Basic Portfolio Support
                    </li>
                </ul>
                <a href="#" class="visit-button">Visit Url</a>
            </div>
        </div>
    </div>

    <?php
    // Add any PHP functionality here if needed
    ?>
</body>
</html>