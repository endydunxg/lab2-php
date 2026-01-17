<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
    <style>
        .message { color: green; font-weight: bold; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Thêm Sinh Viên Mới</h2>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = $_POST['fullname'];
        $student_code = $_POST['student_code'];
        $email = $_POST['email'];

        try {
            $sql = "INSERT INTO students (fullname, student_code, email) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            
            $stmt->execute([$fullname, $student_code, $email]);

            echo "<p class='message'>Thêm sinh viên thành công!</p>";
        } catch (PDOException $e) {
            echo "<p class='error'>Lỗi: " . $e->getMessage() . "</p>";
        }
    }
    ?>

    <form action="" method="POST">
        <label>Họ và tên:</label><br>
        <input type="text" name="fullname" required><br><br>

        <label>Mã sinh viên:</label><br>
        <input type="text" name="student_code" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Thêm mới</button>
    </form>
    <br>
    <a href="list_students.php">Xem danh sách sinh viên</a>
</body>
</html>