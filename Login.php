<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "b231210052@sakarya.edu.tr" && $password == "b231210052") {
    echo "
    <!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Hoşgeldiniz</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                text-align: center;
                padding: 50px;
            }
            .welcome-message {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class='welcome-message'>
            <h1>Hoşgeldiniz b231210052</h1>
            <p>Giriş başarılı!</p>
        </div>

        <script>
            setTimeout(function() {
                window.location.href = 'index.html';
            }, 3000); 
        </script>

    </body>
    </html>
    ";

} else {
    header("Location: Login.html");
    exit();
}
?>
