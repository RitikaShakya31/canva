<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIY (Do it yourself)</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: white;
    }

    .container {
        padding: 16px;
    }

    h1 {
        font-size: 20px;
        margin-bottom: 21px;
        margin-top: 20px;
    }



    .card {
        background: linear-gradient(to right, #FF1B51, #FF758E);
        border-radius: 16px;
        color: white;
        padding: 24px;
        margin-bottom: 16px;
        height: 72px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .card h2 {
        font-size: 20px;
        margin: 0;
    }

    .card p {
        font-size: 20px;
        margin: 0;
    }

    .premium {
        position: absolute;
        top: 16px;
        right: 16px;
        background-color: #FFD700;
        color: black;
        font-size: 12px;
        padding: 2px 8px;
        border-radius: 12px;
    }

    .form-group {
        margin-bottom: 16px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
    }

    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    .download-btn {
        background-color: #FF1B51;
        color: white;
        border: none;
        border-radius: 24px;
        padding: 12px;
        width: 100%;
        font-size: 16px;
        position: relative;
    }

    .icon {
        width: 32px;
        height: 32px;
        fill: white;
        opacity: 0.8;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>DIY (Do it yourself)</h1>

        <div class="card">
            <div>
                <h2>CUSTOM SIZE</h2>
                <p>POST</p>
            </div>
            <svg class="icon" viewBox="0 0 24 24">
                <path
                    d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z" />
            </svg>
        </div>

        <div class="card" style="position: relative;">
            <div>
                <h2>BLANK IMAGE</h2>
                <p>DATABASE FOR DIY</p>
            </div>
            <svg class="icon" viewBox="0 0 24 24">
                <path
                    d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z" />
            </svg>
            <span class="premium">Premium</span>
        </div>

        <div style="text-align: center; margin-top: 32px; margin-bottom: 24px;">
            <h3 style="margin: 0; font-size: 18px;">DIY Database</h3>
            <p style="margin: 4px 0 0; font-size: 14px; color: #666;">Download Full Blank Data in Zip Format</p>
        </div>

        <div class="form-group">
            <label for="dataType">Select Data Type</label>
            <select id="dataType">
                <option value="">Select</option>
            </select>
        </div>

        <div class="form-group">
            <label for="category">Select Category</label>
            <select id="category">
                <option value="">Select</option>
            </select>
        </div>

        <div class="form-group">
            <label for="language">Select Language</label>
            <select id="language">
                <option value="">Language</option>
            </select>
        </div>

        <button class="download-btn">
            Download Zip
            <span class="premium" style="top: 50%; transform: translateY(-50%);">Premium</span>
        </button>
    </div>



    <?php
    include 'nav.php';
    ?>


    <script>
    // Add any necessary JavaScript here
    // For example, you could add event listeners to the selects and button
    document.querySelector('.download-btn').addEventListener('click', function() {
        alert('This is a demo. Download functionality is not implemented.');
    });
    </script>
</body>

</html>