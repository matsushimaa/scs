<?php
// データベース接続関数
function db_connect()
{
    try {
        $db = new PDO('mysql:dbname=yoyakudb;host=127.0.0.1;charset=utf8', 'root', '');
        return $db;
    } catch (PDOException $e) {
        echo 'DB接続エラー： ' . $e->getMessage();
        exit;
    }
}

// データベース接続
$db = db_connect();

// フォームが送信された場合の処理
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $time = $_POST['time'];
    $people_count = $_POST['people_count'];

    // データベースにデータを挿入する処理
    $stmt = $db->prepare("INSERT INTO reservations (name, time, people_count) VALUES (:name, :time, :people_count)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':people_count', $people_count);
    $stmt->execute();

    // 確認ページにリダイレクト
    header("Location: confirm.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* 背景色 */
        }
        .container {
            margin-top: 50px; /* 上部の余白 */
            padding: 30px; /* 内側の余白 */
            border-radius: 8px; /* 角を丸く */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* 影を追加 */
            background-color: #ffffff; /* コンテナの背景色 */
        }
        h2 {
            color: #007bff; /* ヘッダーの色 */
        }
        .form-control:focus {
            border-color: #007bff; /* フォーカス時のボーダー色 */
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* フォーカス時の影 */
        }
        .btn-primary {
            background-color: #007bff; /* ボタンの色 */
            border-color: #007bff; /* ボタンのボーダー色 */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* ホバー時の色 */
            border-color: #0056b3; /* ホバー時のボーダー色 */
        }
    </style>
</head>

<body>
    <main class="container">
        <h2 class="text-center p-3">予約</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">名前:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">予約時間:</label>
                <select class="form-select" id="time" name="time" required>
                    <?php
                    $start_time = strtotime('10:00');
                    $end_time = strtotime('20:00');
                    $interval = 30 * 60;
                    for ($time = $start_time; $time < $end_time; $time += $interval) {
                        $start = date('H:i', $time);
                        $end = date('H:i', $time + $interval);
                        echo "<option value=\"$start\">$start~$end</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">人数:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="people_count" id="people_count_1" value="1" checked>
                    <label class="form-check-label" for="people_count_1">1人</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="people_count" id="people_count_2" value="2">
                    <label class="form-check-label" for="people_count_2">2人</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">予約する</button>
        </form>

        <div class="mt-3 text-center">
            <a class="btn btn-outline-primary" href="detail.php">予約状況画面へ</a>
            <a class="btn btn-outline-primary" href="index.php">ホーム画面へ</a>
        </div>
    </main>
</body>

</html>

