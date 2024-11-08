<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles3.css">
</head>
<body>
<div class="nav">
    <div class="logo">ログイン</div>
</div>
    <div class="centered-content">
    <form action="../index.php" method="post" class="register-section">
        <div>
            <label for="username">ユーザー名:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">登録</button>
        </div>
    </form>
</div>
</body>
</html>