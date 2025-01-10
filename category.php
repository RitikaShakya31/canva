<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    body {
        background: #fff;
    }

    .header {
        background: #FF1B51;
        color: white;
        padding: 16px;
        display: flex;
        align-items: center;
        gap: 12px;
        position: sticky;
        top: 0;
        z-index: 100;
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
        max-width: 1200px;
        margin: 0 auto;
        padding: 16px;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        padding: 16px;
    }

    .category-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        gap: 8px;
    }

    .category-icon {
        width: 100%;
        aspect-ratio: 1;
        max-width: 190px;
        background: #8B0028;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .category-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        filter: brightness(0) invert(1);
    }

    .category-name {
        color: #333;
        font-size: 13px;
        text-align: center;
        font-weight: 500;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 480px) {
        .grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            padding: 12px;
        }

        .category-icon {
            max-width: 100px;
            padding: 80px;
        }

        .category-name {
            font-size: 12px;
        }
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
        <h1>Category</h1>
    </header>

    <div class="container">
        <div class="grid">
            <!-- Political Categories -->
            <a href="#" class="category-item">
                <div class="category-icon">
                    <img src="canva\assets\category-images\1727684687.jpg" alt="INC">
                </div>
                <span class="category-name">INC (Political)</span>
            </a>

            <a href="#" class="category-item">
                <div class="category-icon">
                    <img src="canva\assets\category-images\1727684687.jpg
                        alt=" AAP">
                </div>
                <span class="category-name">AAP (Political)</span>
            </a>

            <a href="#" class="category-item">
                <div class="category-icon">
                    <img src="canva\assets\category-images\1727684687.jpg" alt="BJP">
                </div>
                <span class="category-name">BJP (Political)</span>
            </a>

            <a href="#" class="category-item">
                <div class="category-icon">
                    <img src="canva\assets\category-images\1727684687.jpg" alt="BSP">
                </div>
                <span class="category-name">BSP (Political)</span>
            </a>

            <!-- Other Categories -->
            <a href="#" class="category-item">
                <div class="category-icon">
                    <img src="canva\assets\category-images\1727684687.jpg" alt="Exam Warrior">
                </div>
                <span class="category-name">Exam Warrior</span>
            </a>

            <a href="#" class="category-item">
                <div class="category-icon">
                    <img src="canva\assets\category-images\1727684687.jpg" alt="Zodiac Sign">
                </div>
                <span class="category-name">Zodiac Sign</span>
            </a>

            <a href="#" class="category-item">
                <div class="category-icon">
                    <img src="canva\assets\category-images\1727684687.jpg" alt="Customer Services">
                </div>
                <span class="category-name">Customer Services</span>
            </a>

            <!-- Add all other categories following the same pattern -->
            <a href="#" class="category-item">
                <div class="category-icon">
                    <img src="canva\assets\category-images\1727684687.jpg" alt="Sports Quotes">
                </div>
                <span class="category-name">Sports Quotes</span>
            </a>

            <a href="#" class="category-item">
                <div class="category-icon">
                    <img src="assets\category-images\1727684687.jpg" alt="Famous Leader Quotes">
                </div>
                <span class="category-name">Famous Leader Quotes</span>
            </a>

            <!-- Continue with remaining categories -->
            <!-- Add more category items here following the same pattern -->
        </div>
    </div>
</body>

</html>