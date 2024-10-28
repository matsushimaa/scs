<?php
// データベース接続関数
function db_connect()
{
    try {
        $db = new PDO('mysql:dbname=yoyakudb;host=127.0.0.1;charset=utf8', 'root', '');
        return $db; // $dbを返す
    } catch (PDOException $e) {
        echo 'DB接続エラー： ' . $e->getMessage();
        exit; // スクリプト終了
    }
}

// データベース接続
$db = db_connect();

// データベースから予約情報を取得（同じ時間の予約をグループ化）
$stmt = $db->query("SELECT time, SUM(people_count) AS total_people FROM reservations GROUP BY time ORDER BY time ASC");
$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 全ての時間を生成（例: 10:00から20:00まで1時間ごと）
$all_times = [];
$start_time = strtotime('10:00');
$end_time = strtotime('20:00');

for ($time = $start_time; $time <= $end_time; $time += 3600) { // 3600秒（1時間）
    $all_times[] = date('H:i', $time);
}

// 予約情報を全ての時間にマージ
$availability = [];
foreach ($all_times as $time) {
    $availability[$time] = ['total_people' => 0]; // 初期値を設定
    foreach ($reservations as $reservation) {
        if ($reservation['time'] === $time) {
            $availability[$time]['total_people'] = $reservation['total_people'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約状況</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .full {
            color: red;
        }

        .one-space {
            color: orange;
        }

        .available {
            color: green;
        }
    </style>
</head>

<body>
    <main class="container">
        <h2 class="text-center p-3">予約状況</h2>
        <a href="input.php" class="btn btn-secondary mb-3">新規予約</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">時間</th>
                    <th scope="col">空き状況</th>
                    <th scope="col">予約</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_times as $time) : ?>
                    <tr>
                        <td>
                            <?php
                            // 時間の表示
                            $start_time = $time; // 開始時刻
                            $end_time = date('H:i', strtotime($time) + 3600); // 終了時刻（1時間後）
                            echo $start_time . '~' . $end_time;
                            ?>
                        </td>
                        <td>
                            <?php
                            // 空き状況の表示
                            $total_people = $availability[$time]['total_people'];
                            if ($total_people >= 2) {
                                echo '<span class="full">満席</span>';
                            } elseif ($total_people == 1) {
                                echo '<span class="one-space">1人のみ空き</span>';
                            } else {
                                echo '<span class="available">空きあり</span>';
                            }
                            ?>
                        </td>
                        <td>
                            <?php if ($total_people < 2) : ?>
                                <a href="input.php?time=<?php echo urlencode($time); ?>">予約</a>
                            <?php else : ?>
                                <span class="text-muted">予約不可</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <a href="./" class="btn btn-primary">ホーム画面に戻る</a>
        </div>
    </main>
</body>

</html>
