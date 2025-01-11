<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Edit</title>
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
        <a href="index.php">
            <button class="back-button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>
        </a>
        <h1>Brand Edit</h1>
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
    <form action="save-brand-details.php" method="POST">
        <!-- Brand Name -->
        <div class="form-group">
            <label class="form-label" for="brand-name">Brand Name</label>
            <input type="text" id="brand-name" name="brand_name" class="form-input" placeholder="Enter Brand Name" value="Office" required>
        </div>

        <!-- Brand GST/Tagline -->
        <div class="form-group">
            <label class="form-label" for="brand-tagline">Brand GST No./Tagline</label>
            <input type="text" id="brand-tagline" name="brand_tagline" class="form-input" placeholder="Enter Tagline" value="tagline" required>
        </div>

        <!-- Brand Phone Number -->
        <div class="form-group">
            <label class="form-label" for="brand-phone">Brand Phone Number</label>
            <input type="tel" id="brand-phone" name="brand_phone" class="form-input" placeholder="Enter Phone Number" required>
        </div>

        <!-- Brand Email -->
        <div class="form-group">
            <label class="form-label" for="brand-email">Brand Email</label>
            <input type="email" id="brand-email" name="brand_email" class="form-input" placeholder="Enter Email Address" value="email" required>
        </div>

        <!-- Brand Website -->
        <div class="form-group">
            <label class="form-label" for="brand-website">Brand Website</label>
            <input type="url" id="brand-website" name="brand_website" class="form-input" placeholder="Enter Website URL" value="website">
        </div>

        <!-- Brand Address -->
        <div class="form-group">
            <label class="form-label" for="brand-address">Brand Address</label>
            <input type="text" id="brand-address" name="brand_address" class="form-input" placeholder="Enter Address" value="address">
        </div>

        <!-- Brand Category -->
        <div class="form-group">
            <label class="form-label" for="brand-category">Brand Category</label>
            <input type="text" id="brand-category" name="brand_category" class="form-input" placeholder="Enter Brand Category">
        </div>

        <!-- Instagram URL -->
        <div class="form-group">
            <label class="form-label" for="instagram-url">Instagram URL</label>
            <input type="url" id="instagram-url" name="instagram_url" class="form-input" placeholder="Enter Instagram URL">
        </div>

        <!-- Facebook URL -->
        <div class="form-group">
            <label class="form-label" for="facebook-url">Facebook URL</label>
            <input type="url" id="facebook-url" name="facebook_url" class="form-input" placeholder="Enter Facebook URL">
        </div>

        <!-- Twitter URL -->
        <div class="form-group">
            <label class="form-label" for="twitter-url">Twitter URL</label>
            <input type="url" id="twitter-url" name="twitter_url" class="form-input" placeholder="Enter Twitter URL">
        </div>

        <!-- YouTube URL -->
        <div class="form-group">
            <label class="form-label" for="youtube-url">YouTube URL</label>
            <input type="url" id="youtube-url" name="youtube_url" class="form-input" placeholder="Enter YouTube URL">
        </div>

        <!-- Save Button -->
        <button type="submit" class="save-button">Save</button>
    </form>
</div>

    </div>
</body>

</html>