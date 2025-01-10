<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Personal Profile</title>
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

    .profile-section {
        padding: 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .avatar-container {
        position: relative;
        margin-bottom: 32px;
    }

    .avatar {
        width: 100px;
        height: 100px;
        background: #FF1B51;
        border-radius: 50%;
        border: 4px solid #FFE4E8;
    }

    .camera-button {
        position: absolute;
        right: 0;
        bottom: 0;
        background: #FF1B51;
        border: none;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .form-container {
        width: 100%;
        padding: 0 16px;
    }

    .form-group {
        margin-bottom: 24px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-size: 16px;
    }

    .form-input {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        color: #666;
    }

    .save-button {
        background: #FF1B51;
        color: white;
        border: none;
        width: 100%;
        padding: 16px;
        border-radius: 100px;
        font-size: 16px;
        margin-top: 32px;
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
        <h1>Edit Personal Profile</h1>
    </header>

    <div class="profile-section">
        <div class="avatar-container">
            <div class="avatar"></div>
            <button class="camera-button">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                    <circle cx="12" cy="13" r="4" />
                </svg>
            </button>
        </div>

        <div class="form-container">
            <div class="form-group">
                <label class="form-label">Personal Name</label>
                <input type="text" class="form-input" placeholder="Office" value="Office">
            </div>

            <div class="form-group">
                <label class="form-label">Personal Email</label>
                <input type="email" class="form-input" placeholder="&gmail.com" value="&gmail.com">
            </div>

            <div class="form-group">
                <label class="form-label">Your Designation</label>
                <input type="text" class="form-input" placeholder="Enter Designation">
            </div>

            <div class="form-group">
                <label class="form-label">Personal Phone</label>
                <input type="tel" class="form-input" value="9065001331">
            </div>

            <button class="save-button">Save</button>
        </div>
    </div>
</body>

</html>