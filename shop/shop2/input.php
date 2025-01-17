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

// 予約時間をURLから取得
$selected_time = isset($_GET['time']) ? $_GET['time'] : null;
$error_message = null;
$can_reserve = true; // 初期値は予約可能
$total_people = 0; // 予約人数の初期化

// 予約時間の人数チェック
if ($selected_time) {
    // 時間帯に対する予約人数を確認
    $db = db_connect();
    $stmt = $db->prepare("SELECT SUM(people_count) AS total_people FROM reservations2 WHERE time = :time");
    $stmt->bindParam(':time', $selected_time);
    $stmt->execute();
    $reservation2 = $stmt->fetch(PDO::FETCH_ASSOC);

    $total_people = $reservation2['total_people'] ?? 0;

    // 予約可能人数チェック
    if ($total_people >= 2) {
        $can_reserve = false; // 予約不可
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = db_connect();
    
    $name = $_POST['name'];
    $time = $_POST['time'];
    $people_count = $_POST['people_count'];

    // 時間帯に対する予約人数を再確認
    $stmt = $db->prepare("SELECT SUM(people_count) AS total_people FROM reservations2 WHERE time = :time");
    $stmt->bindParam(':time', $time);
    $stmt->execute();
    $reservation2 = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $total_people = $reservation2['total_people'] ?? 0;

    // 予約可能人数チェック
    if (($total_people + $people_count) > 2) {
        // 2人以上の予約ができない場合
        $error_message = "この時間帯は1席しか空いていません。1人での予約のみ可能です。";
        $can_reserve = false;
    } else {
        // データベースにデータを挿入する処理
        $stmt = $db->prepare("INSERT INTO reservations2 (name, time, people_count) VALUES (:name, :time, :people_count)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':time', $time);
        $stmt->bindParam(':people_count', $people_count);

        if ($stmt->execute()) {
            // 成功時の処理
            header("Location: confirm.php");
            exit;
        } else {
            // エラー時の処理
            $error_message = "エラーが発生しました: " . implode(", ", $stmt->errorInfo());
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            width: 60%;
        }
        h2 {
            color: #007bff;
        }
    </style>
</head>
<body>
    <main class="container">
        <h2 class="text-center p-3">予約</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <?php if (isset($error_message)): ?>
                <div class="alert alert-danger"><?php echo htmlspecialchars($error_message); ?></div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="name" class="form-label">名前:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            <div class="mb-3">
                <label for="time" class="form-label">予約時間:</label>
                <?php if ($selected_time): ?>
                    <?php
                    // 終了時間を計算
                    $end_time = date('H:i', strtotime($selected_time) + 3600);
                    ?>
                    <input type="text" class="form-control" id="time" name="time" value="<?php echo htmlspecialchars($selected_time) . '~' . htmlspecialchars($end_time); ?>" readonly>
                <?php else: ?>
                    <select class="form-select" id="time" name="time" required <?php echo !$can_reserve ? 'disabled' : ''; ?>>
                        <?php
                        $start_time = strtotime('10:00');
                        $end_time = strtotime('20:00');
                        for ($time = $start_time; $time <= $end_time; $time += 3600) {
                            $time_str = date('H:i', $time);
                            $next_time_str = date('H:i', $time + 3600);
                            $disabled = false;

                            // 予約が埋まっている時間帯を無効化
                            if ($total_people >= 2) {
                                $disabled = true;
                            }

                            echo "<option value=\"$time_str\" " . ($disabled ? "disabled" : "") . ">$time_str~$next_time_str</option>";
                        }
                        ?>
                    </select>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">人数:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="people_count" id="people_count_1" value="1" checked <?php echo !$can_reserve ? 'disabled' : ''; ?>>
                    <label class="form-check-label" for="people_count_1">1人</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="people_count" id="people_count_2" value="2" <?php echo ($total_people >= 1) ? 'disabled' : ''; ?>>
                    <label class="form-check-label" for="people_count_2">2人</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" <?php echo !$can_reserve ? 'disabled' : ''; ?>>予約する</button>
        </form>

        <div class="mt-3 text-center">
            <a class="btn btn-outline-primary" href="detail.php">予約状況画面へ</a>
            <a class="btn btn-outline-primary" href="../index.php">ホーム画面に戻る</a>
        </div>
    </main>
</body>

