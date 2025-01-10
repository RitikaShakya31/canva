<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>
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

    .container {
        padding: 16px;
    }

    .plan-card {
        background: #8B0028;
        border-radius: 16px;
        padding: 24px;
        margin-bottom: 24px;
        color: white;
        position: relative;
    }

    .plan-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
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
        font-size: 14px;
    }

    .feature-dot {
        width: 6px;
        height: 6px;
        background: white;
        border-radius: 50%;
    }

    .price-container {
        background: white;
        border-radius: 100px;
        padding: 12px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: black;
    }

    .duration {
        font-weight: bold;
    }

    .price {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .current-price {
        font-weight: bold;
    }

    .original-price {
        text-decoration: line-through;
        color: #666;
    }

    .purchased-tag {
        position: absolute;
        top: 16px;
        right: 16px;
        background: #FFD700;
        color: black;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <header class="header">
        <button class="back-button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 18l-6-6 6-6" />
            </svg>
        </button>
        <h1>Subscribe</h1>
    </header>

    <div class="container">
        <div class="plan-card">
            <h2 class="plan-title">PREMIUM 3 YEAR PLAN</h2>
            <ul class="feature-list">
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    Add upto 12 Brands in one Profile
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    540+ Event/Festival Wishes Categories
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    150+ Business Categories
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    12 Custom Frames
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    All Premium & No ads/watermark
                </li>
            </ul>
            <div class="price-container">
                <span class="duration">3 YEAR</span>
                <div class="price">
                    <span class="current-price">₹ 6000</span>
                    <span class="original-price">₹ 15000</span>
                </div>
            </div>
        </div>

        <div class="plan-card">
            <h2 class="plan-title">PREMIUM YEAR PLAN</h2>
            <ul class="feature-list">
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    Add upto 6 Brands in one Profile
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    540+ Event/Festival Wishes Categories
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    150+ Business Categories
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    6 Custom Frame
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    All Premium & No ads/watermark
                </li>
            </ul>
            <div class="price-container">
                <span class="duration">1 YEAR</span>
                <div class="price">
                    <span class="current-price">₹ 1800</span>
                    <span class="original-price">₹ 6000</span>
                </div>
            </div>
        </div>

        <div class="plan-card">
            <h2 class="plan-title">PREMIUM YEAR PLAN</h2>
            <ul class="feature-list">
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    Add upto 6 Brands in one Profile
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    540+ Event/Festival Wishes Categories
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    150+ Business Categories
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    6 Custom Frame
                </li>
                <li class="feature-item">
                    <div class="feature-dot"></div>
                    All Premium & No ads/watermark
                </li>
            </ul>
            <div class="price-container">
                <span class="duration">1 YEAR</span>
                <div class="price">
                    <span class="current-price">₹ 1800</span>
                    <span class="original-price">₹ 6000</span>
                </div>
            </div>
        </div>



</body>

</html>