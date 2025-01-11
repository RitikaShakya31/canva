<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            padding: 16px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
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
        <h1>Latest Festivals</h1>
    </header>

    <div class="filter-container">
        <select class="filter-select">
            <option>Filter by Calendar</option>
        </select>
    </div>

    <div class="festivals-grid">
        <div class="festival-card">
            <div class="festival-date">2025-01-10</div>
            <img src="assets\category-images\image.png" class="festival-image" alt="Hindi Day">
            <div class="festival-name">W. Hindi Day</div>
        </div>

        <div class="festival-card">
            <div class="festival-date">2025-01-11</div>
            <img src="assets\category-images\image.png" class="festival-image" alt="Lal Bahadur Shastri">
            <div class="festival-name">Lal Bahadur Shastri Death Anniv...</div>
        </div>

        <div class="festival-card">
            <div class="festival-date">2025-01-12</div>
            <img src="assets\category-images\image.png" class="festival-image" alt="Youth Day">
            <div class="festival-name">Nat. Youth Day</div>
        </div>

        <div class="festival-card">
            <div class="festival-date">2025-01-13</div>
            <img src="assets\category-images\image.png" class="festival-image" alt="Lohri">
            <div class="festival-name">Lohri</div>
        </div>

        <div class="festival-card">
            <div class="festival-date">2025-01-14</div>
            <img src="assets\category-images\image.png" class="festival-image" alt="Makar Sankranti">
            <div class="festival-name">Makar Sankranti</div>
        </div>

        <div class="festival-card">
            <div class="festival-date">2025-01-14</div>
            <img src="assets\category-images\image.png" class="festival-image" alt="Pongal">
            <div class="festival-name">Pongal</div>
        </div>
    </div>
</body>

</html>