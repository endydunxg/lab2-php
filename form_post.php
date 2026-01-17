<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form POST Register</title>
</head>
<body>
    <h2>Đăng ký (POST)</h2>
    <form action="" method="POST">
        <label>Tên đăng nhập:</label>
        <input type="text" name="username" required><br><br>
        
        <label>Mật khẩu:</label>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Gửi thông tin</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = htmlspecialchars($_POST['username']);
        echo "<p style='color:green'>Đã nhận thông tin của: <strong>$username</strong></p>";
    }
    ?>
</body>
</html>