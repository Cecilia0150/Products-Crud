<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            /*background-color: #737ca6;*/
            background: linear-gradient(0deg, #737ca6 40%, #e4e3e1 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .error-container {
            text-align: center;
            padding: 20px;
        }

        .error-image {
            max-width: 400px;
            width: 100%;
            height: auto;
            margin-bottom: 30px;
        }

        .error-title {
            font-size: 40px;
            color: #333;
            margin-bottom: 15px;
        }

        .error-message {
            font-size: 20px;
            color: #ffffffff;
            margin-bottom: 30px;
        }

        .back-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: #8DA2FB;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #5850EC;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <img src="{{ asset('images/404_Patrick_SleepyTime.png') }}" alt="Error 404" class="error-image">
        <h1 class="error-title">Error 404</h1>
        <p class="error-message">Espera... ¿cómo llegaste aquí?</p>
        <a href="{{ url('/') }}" class="back-button">Volver al inicio</a>
    </div>
</body>
</html>