<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:hover { background-color: #f5f5f5; }
    </style>
</head>
<body>
    <h2>Danh sách Sinh Viên</h2>
    <a href="add_student.php">Thêm sinh viên mới</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ Tên</th>
                <th>Mã SV</th>
                <th>Email</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM students";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($students as $sv) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($sv['id']) . "</td>";
                echo "<td>" . htmlspecialchars($sv['fullname']) . "</td>";
                echo "<td>" . htmlspecialchars($sv['student_code']) . "</td>";
                echo "<td>" . htmlspecialchars($sv['email']) . "</td>";
                echo "<td>
                        <a href='#'>Sửa</a> | 
                        <a href='#' onclick='return confirm(\"Bạn có chắc muốn xóa?\")'>Xóa</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>