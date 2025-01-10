<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        html {
            width: 100%;
            height: 100%;
            font-family: 'Arial', sans-serif;
            background-color: #f2f3f7;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            display: flex;
            width: 74%;
            /* max-width: 900px; */
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            height: 69%;
        }

        .image-section {
            flex: 1;
            background-color: #d3d3d3;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            min-height: 300px;
        }

        .image-section p {
            color: #666;
            font-size: 18px;
            text-align: center;
        }

        .login-section {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #fff;
        }

        .login-section h2 {
            color: #d32f2f;
            margin-bottom: 10px;
            text-align: center;
        }

        .login-section p {
            color: #555;
            margin-bottom: 55px;
            text-align: center;
        }

        .login-section label {
            font-size: 14px;
            margin-bottom: 8px;
            display: block;
            color: #333;
        }

        .login-section input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .login-section button {
            width: 100%;
            padding: 10px;
            background-color: #d32f2f;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-section button:hover {
            background-color: #b71c1c;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="image-section">
            <p>picwala image</p>
        </div>
        <div class="login-section">
            <h2>Welcome Back!</h2>
            <p>Sign in to continue to Picwala.</p>
            <form>
                <label for="otp">Enter Your OTP</label>
                <input type="text" id="otp" name="otp" value="123456" required>
                <button type="submit">Verify OTP</button>
            </form>
        </div>
    </div>
</body>

</html>