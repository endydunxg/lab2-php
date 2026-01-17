<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form GET Search</title>
</head>
<body>
    <h2>Tìm kiếm (GET)</h2>
    <form action="" method="GET">
        <label>Từ khóa:</label>
        <input type="text" name="keyword" placeholder="Nhập từ khóa...">
        <button type="submit">Tìm kiếm</button>
    </form>

    <?php
    if (isset($_GET['keyword'])) {
        $keyword = htmlspecialchars($_GET['keyword']);
        echo "<p>Bạn đang tìm kiếm từ khóa: <strong>$keyword</strong></p>";
    }
    ?>
</body>
</html>