<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download</title>
    <style>
        .center-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        h1 {
            font-weight: 600;
            font-size: 25px;
            margin-botom: 17%;
            margin-bottom: 1%;
        }
        .download-btn {
            background-color: #f3f3f3ad;
            color: black;
            border: none;
            border-radius: 8px;
            padding: 12px;
            width: 49%;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .download-btn.active {
            background-color: #ff008d;
            color: white;
        }

        .download-btn:hover {
            background-color: #ff008d !important;
            color: white !important;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Download</h1>
        <div class="center-container">
            <button class="download-btn active">FREE</button>
            <button class="download-btn">PREMIUM</button>
        </div>
    </div>

    <?php
    include 'nav.php';
    ?>

</body>

</html>