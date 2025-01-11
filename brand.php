<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Category</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .link-1 {
            text-decoration: none;
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
            z-index: 10;
            border-radius: 0 0 14px 14px;

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

        .search-container {
            padding: 16px;
            background: #f5f5f5;
        }

        .search-input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: white;
            font-size: 16px;
        }

        .category-list {
            padding: 16px;
        }

        .category-item {
            display: flex;
            align-items: center;
            padding: 16px 0;
            border-bottom: 1px solid #eee;
        }

        .category-icon {
            width: 48px;
            height: 48px;
            background: #FFE4E8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 16px;
        }

        .category-icon svg {
            width: 24px;
            height: 24px;
            color: #FF1B51;
        }

        .category-name {
            font-size: 16px;
            color: #333;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="category-details.php">
            <button class="back-button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>
        </a>
        <h1>Brand Category</h1>
    </header>

    <div class="search-container">
        <input type="text" class="search-input" placeholder="Search Brand">
    </div>

    <div class="category-list">
        <a class="link-1" href="">
            <div class="category-item">
                <div class="category-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                        <path d="M22 6l-10 7L2 6" />
                    </svg>
                </div>
                <span class="category-name">Accounting</span>
            </div>
        </a>

        <a class="link-1" href="">
            <div class="category-item">
                <div class="category-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                </div>
                <span class="category-name">Bridal</span>
            </div>
        </a>

        <a class="link-1" href="">
            <div class="category-item">
                <div class="category-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                </div>
                <span class="category-name">Home Services</span>
            </div>
        </a>

        <a class="link-1" href="">
            <div class="category-item">
                <div class="category-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                    </svg>
                </div>
                <span class="category-name">Construction</span>
            </div>
        </a>

        <a class="link-1" href="">
            <div class="category-item">
                <div class="category-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                    </svg>
                </div>
                <span class="category-name">Business Services</span>
            </div>
        </a>

        <a class="link-1" href="">
            <div class="category-item">
                <div class="category-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                    </svg>
                </div>
                <span class="category-name">Books / Novel</span>
            </div>
        </a>

        <a class="link-1" href="">
            <div class="category-item">
                <div class="category-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="12" rx="2" ry="2" />
                        <line x1="12" y1="16" x2="12" y2="20" />
                        <line x1="8" y1="20" x2="16" y2="20" />
                    </svg>
                </div>
                <span class="category-name">Battery</span>
            </div>
        </a>

        <a class="link-1" href="">
            <div class="category-item">
                <div class="category-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                </div>
                <span class="category-name">Beauty Services</span>
            </div>
        </a>

        <a class="link-1" href="">
            <div class="category-item">
                <div class="category-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                    </svg>
                </div>
                <span class="category-name">Medical Services</span>
            </div>
        </a>
    </div>
</body>

</html>