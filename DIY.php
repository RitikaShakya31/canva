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
            background: linear-gradient(to right, #f10e83, #ff75d6c4);
            border-radius: 16px;
            color: white;
            padding: 55px 45px;
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

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            /* Remove default margins */
        }

        .download-btn {
            background-color: #FF1B51;
            color: white;
            border: none;
            border-radius: 24px;
            padding: 12px;
            width: 30%;
            font-size: 16px;
            position: relative;
            text-align: center;
        }

        .premium {
            position: absolute;
    top: 10%;
    transform: translateY(-50%);
    right: 1px;
    font-size: 12px;
    color: #030202;
    background: #ffb671;
    padding: 2px 10px;
    border-radius: 13px;
        }

        .icon {
            width: 32px;
            height: 32px;
            fill: white;
            opacity: 0.8;
        }

        /* Mobile View: 100% width for buttons */
        @media (max-width: 768px) {
            .center-container {
                flex-direction: column;
            }

            .download-btn {
                width: 100%;
                margin-bottom: 10px;
            }
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
            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.29289 1.29289C9.48043 1.10536 9.73478 1 10 1H18C19.6569 1 21 2.34315 21 4V9C21 9.55228 20.5523 10 20 10C19.4477 10 19 9.55228 19 9V4C19 3.44772 18.5523 3 18 3H11V8C11 8.55228 10.5523 9 10 9H5V20C5 20.5523 5.44772 21 6 21H10C10.5523 21 11 21.4477 11 22C11 22.5523 10.5523 23 10 23H6C4.34315 23 3 21.6569 3 20V8C3 7.73478 3.10536 7.48043 3.29289 7.29289L9.29289 1.29289ZM6.41421 7H9V4.41421L6.41421 7ZM11.2929 10.2929C11.63 9.95583 12.1581 9.90353 12.5547 10.1679C12.7377 10.29 13.138 10.4206 13.8692 10.5557C14.2116 10.619 14.5873 10.6773 15.0006 10.7413L15.0159 10.7436C15.42 10.8062 15.8556 10.8736 16.3008 10.9531C18.0592 11.2671 20.2179 11.8037 21.7071 13.2929C22.907 14.4928 23.2701 15.7765 23.1846 16.8892C23.1413 17.4519 22.9841 17.9568 22.7829 18.3687L23 18.5858C23.781 19.3668 23.781 20.6332 23 21.4142L21.4142 23C20.6332 23.781 19.3668 23.781 18.5858 23L18.3687 22.7829C17.9568 22.9841 17.4519 23.1413 16.8892 23.1846C15.7765 23.2701 14.4928 22.907 13.2929 21.7071C11.8037 20.2179 11.2671 18.0592 10.9531 16.3008C10.8736 15.8556 10.8062 15.42 10.7436 15.0159L10.7413 15.0006C10.6773 14.5873 10.619 14.2116 10.5557 13.8692C10.4206 13.138 10.29 12.7377 10.1679 12.5547C9.90353 12.1581 9.95583 11.63 10.2929 11.2929L10.7926 10.7931L10.7929 10.7929L11.2929 10.2929ZM15.0677 16.482L12.6124 14.0266C12.6482 14.2458 12.683 14.47 12.7177 14.6947L12.7186 14.7006L12.7187 14.7007C12.7821 15.1107 12.8465 15.527 12.9219 15.9492C13.2329 17.6908 13.6963 19.2821 14.7071 20.2929C15.5072 21.093 16.2235 21.2299 16.7358 21.1904C17.3109 21.1462 17.7121 20.8737 17.7929 20.7929C18.1834 20.4024 18.8166 20.4024 19.2071 20.7929L20 21.5858L21.5858 20L20.7929 19.2071C20.6054 19.0196 20.5 18.7652 20.5 18.5C20.5 18.2348 20.6054 17.9804 20.7929 17.7929C20.8737 17.7121 21.1462 17.3109 21.1904 16.7358C21.2299 16.2235 21.093 15.5072 20.2929 14.7071C19.2821 13.6963 17.6908 13.2329 15.9492 12.9219C15.527 12.8465 15.1107 12.7821 14.7007 12.7187L14.7006 12.7186L14.6947 12.7177C14.47 12.683 14.2458 12.6482 14.0266 12.6124L16.482 15.0677C16.6472 15.0236 16.8208 15 17 15C18.1046 15 19 15.8954 19 17C19 18.1046 18.1046 19 17 19C15.8954 19 15 18.1046 15 17C15 16.8208 15.0236 16.6472 15.0677 16.482Z"
                        fill="#ffffff"></path>
                </g>
            </svg>
            <!-- <svg class="icon" viewBox="0 0 24 24">
                <path
                    d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z" />
            </svg> -->
        </div>

        <div class="card" style="position: relative;">
            <div>
                <h2>BLANK IMAGE</h2>
                <p>DATABASE FOR DIY</p>
            </div>
            <svg width="40px" height="40px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"
                stroke="#ffffff">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill="none" stroke="#ffffff" stroke-width="2"
                        d="M4.99787498,8.99999999 L4.99787498,0.999999992 L19.4999998,0.999999992 L22.9999998,4.50000005 L23,23 L4,23 M18,1 L18,6 L23,6 M2,13 L7,13 L7,14 L3,18 L3,19 L8,19 M11,12 L11,20 L11,12 Z M15,13 L15,20 L15,13 Z M20,15 C20,13.895 19.105,13 18,13 L15,13 L15,17 L18,17 C19.105,17 20,16.105 20,15 Z">
                    </path>
                </g>
            </svg>
            <!--             
            <svg class="icon" viewBox="0 0 24 24">
                <path
                    d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 12H4V8h16v10z" />
            </svg> -->
            <span class="premium">Premium</span>
        </div>

        <div style="text-align: center; margin-top: 32px; margin-bottom: 24px;">
            <h3 style="margin: 0; font-size: 16px; font-weight:400;">DIY Database</h3>
            <p style="margin: 4px 0 0; font-size: 16px; color: #000;font-weight:400;">Download Full Blank Data in Zip
                Format</p>
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

        <div class="center-container">
            <button class="download-btn">
                Download Zip
                <span class="premium">Premium</span>
            </button>
        </div>
    </div>


    <?php
    include 'nav.php';
    ?>


    <script>
        // Add any necessary JavaScript here
        // For example, you could add event listeners to the selects and button
        document.querySelector('.download-btn').addEventListener('click', function () {
            alert('This is a demo. Download functionality is not implemented.');
        });
    </script>
</body>

</html>