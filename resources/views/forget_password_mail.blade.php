<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password Email</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .card {
            background-color: #f0f8ff; /* Light blue color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center; /* Center the heading */
        }
        p {
            color: #555;
            line-height: 1.6;
            margin: 10px 0;
        }
        strong {
            color: #333;
        }
        hr {
            border: 1px solid #ddd;
            margin: 20px 0;
        }
        .phone {
            color: #007bff; /* Blue color for the phone number */
            text-decoration: none;
        }
        .phone:hover {
            text-decoration: underline;
        }
        .logo {
            max-width: 30%;
            height: auto;
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card">
            <img src="https://vincash.ca/public/images/1653367549.png" alt="Logo" class="logo">
            <h1>You can reset password from bellow link:</h1>
            <p><strong>Link : </strong> <a href="{{ route('reset_password', $token) }}">Reset Password</a> </p>
        </div>
    </div>
</body>
</html>