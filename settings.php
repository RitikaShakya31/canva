<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
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

    .section-title {
        padding: 16px;
        font-size: 16px;
        font-weight: 600;
        color: #333;
        border-bottom: 2px solid #FF1B51;
        width: fit-content;
    }

    .settings-list {
        padding: 16px;
    }

    .setting-item {
        display: flex;
        align-items: center;
        padding: 16px 0;
        border-bottom: 1px solid #eee;
    }

    .setting-icon {
        width: 24px;
        height: 24px;
        margin-right: 12px;
        opacity: 0.7;
    }

    .setting-text {
        flex: 1;
        font-size: 16px;
        color: #333;
    }

    .toggle-switch {
        width: 44px;
        height: 24px;
        background: #ccc;
        border-radius: 12px;
        position: relative;
        cursor: pointer;
    }

    .toggle-switch.active {
        background: #FF1B51;
    }

    .toggle-switch::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background: white;
        border-radius: 50%;
        top: 2px;
        left: 2px;
        transition: transform 0.3s;
    }

    .toggle-switch.active::after {
        transform: translateX(20px);
    }

    .cache-clear {
        color: #FF1B51;
        padding: 4px 8px;
        border: 1px solid #FF1B51;
        border-radius: 4px;
        font-size: 14px;
    }

    .version {
        color: #666;
        font-size: 14px;
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
        <h1>Settings</h1>
    </header>

    <div class="section-title">General</div>

    <div class="settings-list">
        <div class="setting-item">
            <svg class="setting-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                <path d="M13.73 21a2 2 0 0 1-3.46 0" />
            </svg>
            <span class="setting-text">Notifications</span>
            <div class="toggle-switch active"></div>
        </div>

        <div class="setting-item">
            <svg class="setting-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
            </svg>
            <span class="setting-text">Theme: Light</span>
            <div class="toggle-switch"></div>
        </div>

        <div class="setting-item">
            <svg class="setting-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z" />
            </svg>
            <span class="setting-text">Clear Cache: 13.7 MB</span>
            <span class="cache-clear">Clear</span>
        </div>
    </div>

    <div class="section-title">Privacy Settings</div>

    <div class="settings-list">
        <div class="setting-item">
            <svg class="setting-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
            </svg>
            <span class="setting-text">Privacy Policy</span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#999" stroke-width="2">
                <path d="M9 18l6-6-6-6" />
            </svg>
        </div>

        <div class="setting-item">
            <svg class="setting-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10" />
                <path d="M12 16v-4" />
                <path d="M12 8h.01" />
            </svg>
            <span class="setting-text">Terms & Service</span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#999" stroke-width="2">
                <path d="M9 18l6-6-6-6" />
            </svg>
        </div>

        <div class="setting-item">
            <svg class="setting-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="4" y="4" width="16" height="16" rx="2" />
                <path d="M12 8v8" />
                <path d="M8 12h8" />
            </svg>
            <span class="setting-text">Version: 2.8</span>
        </div>
    </div>

    <script>
    // Toggle switch functionality
    document.querySelectorAll('.toggle-switch').forEach(toggle => {
        toggle.addEventListener('click', () => {
            toggle.classList.toggle('active');
        });
    });
    </script>
</body>

</html>