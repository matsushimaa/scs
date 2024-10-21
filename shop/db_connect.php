<?php
// データベース接続関数
function db_connect() {
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

// 日付を取得
$date = isset($_GET['date']) ? htmlspecialchars($_GET['date']) : null;

// 日付が指定されていない場合はリダイレクト
if (!$date) {
    header("Location: date_selection.php");
    exit;
}

// フォームが送信された場合の処理
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POSTデータの処理
    $name = $_POST['name'];
    $time = $_POST['time'];
    $people_count = $_POST['people_count'];

    // 名前が空でないかチェック
    if (empty($name)) {
        echo '<script>alert("名前を入力してください。"); history.back();</script>';
        exit;
    }

    // 同じ時間と日付に予約が入っているか確認
    $stmt = $db->prepare("SELECT COUNT(*) FROM reservations WHERE time = :time AND date = :date");
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':date', $date);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        echo '<script>alert("予約できません。すでにその時間に予約が入っています。"); history.back();</script>';
        exit;
    }

    // データベースにデータを挿入する処理
    $stmt = $db->prepare("INSERT INTO reservations (name, time, people_count, date) VALUES (:name, :time, :people_count, :date)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':people_count', $people_count);
    $stmt->bindParam(':date', $date);
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
    <script>
        function validateForm() {
            const name = document.getElementById('name').value;
            if (name.trim() === '') {
                alert("名前を入力してください。");
                return false; // フォーム送信を中止
            }
            return true; // フォーム送信を続行
        }
    </script>
</head>
<body>
    <main class="container">
        <h2 class="text-center p-3">予約</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm();">
            <input type="hidden" name="date" value="<?php echo $date; ?>"> <!-- 隠しフィールド -->
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
            <a class="btn btn-outline-primary" href="reservation_status.php">予約状況画面へ</a>
            <a class="btn btn-outline-primary" href="../main.php">ホーム画面へ</a>
        </div>
    </main>
</body>
</html>
