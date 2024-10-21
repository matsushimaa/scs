<!-- date_selection.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日付選択</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <main class="container">
        <h2 class="text-center p-3">日付を選択してください</h2>
        <form action="db_connect.php" method="get">
            <div class="mb-3">
                <label for="date" class="form-label">日付:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <button type="submit" class="btn btn-outline-primary">次へ</button>
        </form>
    </main>
</body>
</html>
