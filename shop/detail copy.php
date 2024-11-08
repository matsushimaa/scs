<?php
// データベース接続関数
function db_connect()
{
    try {
        // データベース:yoyakudbに接続　ホスト:127.0.0.1　ユーザーID:root　パスワード:なし
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約状況</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .full { color: red; }
        .one-space { color: orange; }
        .available { color: green; }
    </style>
</head>

<body>
    <main class="container">
        <h2 class="text-center p-3">予約状況</h2>
        <a href="input.php">新規予約</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">時間</th>
                    <th></th>
                    <th scope="col">空き状況</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation) : ?>
                    <tr>
                        <td>
                            <?php
                            // 時間の表示形式を変更して10:00~11:00の形式で表示
                            $time_from_db = $reservation['time'];
                            $start_time = date('H:i', strtotime($time_from_db)); // 開始時刻
                            $end_time = date('H:i', strtotime($time_from_db) + (60 * 60)); // 終了時刻（1時間後）
                            echo $start_time . '~' . $end_time;
                            ?>
                        </td>
                        <td>
                            <a href="input.php">予約</a>
                        </td>
                        <td>
                            <?php
                            // 空き状況の表示
                            $total_people = $reservation['total_people'];
                            if ($total_people >= 2) {
                                echo '<span class="full">満席</span>';
                            } elseif ($total_people == 1) {
                                echo '<span class="one-space">1席のみ空き</span>';
                            } else {
                                echo '<span class="available">空席</span>';
                            }
                            ?>
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
