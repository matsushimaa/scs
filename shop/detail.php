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

// データベースから予約情報を取得
$stmt = $db->query("SELECT name, time, people_count FROM reservations");
$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約状況</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <th scope="col">名前</th>
                    <th scope="col">人数</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation) : ?>
                    <tr>
                        <td>
                            <?php
                            // 時間の表示形式を変更して10:00~10:30の形式で表示
                            $time_from_db = $reservation['time'];
                            $start_time = date('H:i', strtotime($time_from_db)); // 開始時刻
                            $end_time = date('H:i', strtotime($time_from_db) + (30 * 60)); // 終了時刻（30分後）
                            echo $start_time . '~' . $end_time;
                            ?>
                        </td>
                        <td>
                            <a href="input.php">予約</a>
                        </td>
                        <td><?php echo htmlspecialchars($reservation['name']); ?></td>
                        <td><?php echo htmlspecialchars($reservation['people_count']); ?>人</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <a href="./" class="btn btn-primary">予約画面に戻る</a>
        </div>
    </main>
</body>

</html>
