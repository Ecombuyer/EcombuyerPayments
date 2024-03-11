<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification Code</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #75136d;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        h1 {
            /* color: #2653a7;
            text-align: center;
            margin-top: 0;
            font-weight: bold;
            font-size: 28px; */
        }

        p {
            color: #ffffff;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .verification-code {
            background-color: #f0f0f0;
            padding: 15px 20px;
            text-align: center;
            border-radius: 6px;
            margin-top: 20px;
        }

        .verification-code p {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            color: #333333;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            color: #999999;
            font-size: 14px;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color: #ffffff;">Email Verification Code</h1>
        <p>Your verification code is:</p>
        <div class="verification-code">
            <p>{{ $usernewOtp->pin }}</p>
        </div>
        <p>If you didn't request this code, you can safely ignore this email.</p>
        <p>Thanks,<br>EcomBuyer</p>
        <div class="footer">
            <p>Please do not reply to this email. If you need help, <a href="#">contact our support team</a>.</p>
        </div>
    </div>
</body>
</html>
