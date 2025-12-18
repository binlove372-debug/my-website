<?php
$correctUser = "a";
$correctPass = "1";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user === $correctUser && $pass === $correctPass) {
        echo "<!DOCTYPE html>
        <html lang='vi'>
        <head>
          <meta charset='UTF-8'>
          <title>Kết quả đăng nhập</title>
          <style>
            body { font-family: Arial; background: #f0f0f0; text-align: center; margin-top: 100px; }
            .success { color: green; font-size: 24px; }
          </style>
        </head>
        <body>
          <p class='success'>Đăng nhập thành công!</p>
        </body>
        </html>";
    } else {
        echo "<p style='color:red; font-size:20px;'>Sai tên đăng nhập hoặc mật khẩu!</p>";
    }
}
?>
