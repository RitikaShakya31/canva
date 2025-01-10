<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }

        .container {
            max-width: 480px;
            margin: 0 auto;
            padding: 16px;
        }

        .header {
            padding: 16px 0;
        }

        .header h1 {
            font-size: 24px;
            font-weight: 600;
        }

        .profile-card {
            background: #f7f5f5;
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 20px;
            margin-top: 20px;
            display: flex;
            align-items: center;
            position: relative;
        }

        .avatar {
            width: 60px;
            height: 60px;
            background: #FF1B51;
            border-radius: 50%;
            margin-right: 16px;
        }

        .profile-info {
            flex: 1;
        }

        .profile-number {
            font-size: 18px;
            font-weight: 500;
        }

        .premium-badge {
            position: absolute;
            right: 20px;
            top: 20px;
            background: linear-gradient(135deg, #fd5d07, #ebca00);
            color: black;
            padding: 4px 12px;
            border-radius: 0 10px 0 10px;
            font-size: 14px;
        }

        .edit-button {
            background: #e3dddd;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            margin-top: 8px;
        }

        .menu-list {
            background: white;
            border-radius: 16px;
            overflow: hidden;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 16px 20px;
            border-bottom: 1px solid #f5f5f5;
        }

        .menu-item:last-child {
            border-bottom: none;
        }

        .menu-icon {
            width: 24px;
            height: 24px;
            margin-right: 12px;
            opacity: 0.7;
        }

        .menu-text {
            flex: 1;
            font-size: 16px;
        }

        .chevron {
            opacity: 0.3;
        }

        .logout-button {
            background: #FF1B51;
            color: white;
            border: none;
            width: 100%;
            padding: 16px;
            border-radius: 100px;
            font-size: 16px;
            margin: 24px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .delete-account {
            text-align: center;
            color: #666;
            text-decoration: none;
            display: block;
            margin-bottom: 24px;
        }

        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            display: flex;
            justify-content: space-around;
            padding: 16px;
            border-top: 1px solid #eee;
        }

        .nav-item {
            text-align: center;
            opacity: 0.5;
        }

        .nav-item.active {
            opacity: 1;
            color: #FF1B51;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>Personal Profile</h1>
        </header>
        <hr>
        <div  class="profile-card">
            <div class="avatar"></div>
            <div class="profile-info">
                <div class="profile-number">9065001331</div>
                <button class="edit-button" data-target="profile-edit.php">Edit Personal Profile</button>
            </div>
            <div class="premium-badge">Premium User</div>
        </div>


        <div class="menu-list">
            <div class="menu-item" data-target="service.php">
                <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 12h7M5 12h2m2 0h2M5 4h14M5 20h14" />
                </svg>
                <span class="menu-text">Services</span>
                <svg class="chevron" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </div>

            <div class="menu-item">
                <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path
                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                </svg>
                <span class="menu-text">Rate This App</span>
                <svg class="chevron" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </div>

            <div class="menu-item">
                <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
                    <polyline points="16 6 12 2 8 6" />
                    <line x1="12" y1="2" x2="12" y2="15" />
                </svg>
                <span class="menu-text">Share App</span>
                <svg class="chevron" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </div>

            <div class="menu-item" data-target="refundpolicy.php">
                <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M8 14s1.5 2 4 2 4-2 4-2" />
                    <line x1="9" y1="9" x2="9.01" y2="9" />
                    <line x1="15" y1="9" x2="15.01" y2="9" />
                </svg>
                <span class="menu-text">Refund Policy</span>
                <svg class="chevron" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </div>

            <div class="menu-item" data-target="settings.php">
                <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3" />
                    <path
                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                </svg>
                <span class="menu-text">Settings</span>
                <svg class="chevron" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </div>

            <div class="menu-item">
                <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>
                <span class="menu-text">Contact Us</span>
                <svg class="chevron" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-width="2">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </div>
        </div>

        <button class="logout-button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                <polyline points="16 17 21 12 16 7" />
                <line x1="21" y1="12" x2="9" y2="12" />
            </svg>
            Logout
        </button>

        <a href="#" class="delete-account">Delete Account</a>
    </div>

    <?php
    include 'nav.php';
    ?>

</body>
<script>
    document.querySelectorAll('.menu-item').forEach(item => {
        item.addEventListener('click', () => {
            const target = item.getAttribute('data-target');
            if (target) {
                window.location.href = target; // Redirect to the specified PHP file
            }
        });
    });

    // Add event listener to the Edit button
    document.querySelector('.edit-button').addEventListener('click', function () {
        const target = this.getAttribute('data-target'); // Get the target PHP file
        if (target) {
            window.location.href = target; // Navigate to the target file
        }
    });
</script>

</html>