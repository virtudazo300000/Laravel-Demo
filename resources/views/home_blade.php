<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello with Simple Effect</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .hello-text {
            font-size: 48px;
            color: #007BFF;
            opacity: 0;
            animation: fadeIn 2s forwards;
        }

        @keyframes fadeIn {
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="hello-text">
        <?php echo "Hello!"; ?>
    </div>
</body>
</html>
