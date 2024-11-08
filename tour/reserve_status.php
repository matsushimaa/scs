<?php
$date = date('Y-m-d');
if (isset($_GET['date'])) {
    $date = $_GET['date'];
}

// TODO: search reservations
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日付別 予約状況一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!--ナビゲーションバー  -->
    <!-- ナビゲーションメニュー -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="logo">旅行サイト</div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="list.php">旅行リスト</a></li>
                    <li class="nav-item"><a class="nav-link" href="register/">ツアー登録</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">お問い合わせ</a></li>
                </ul>
            </div>
            <div class="hamburger-menu" onclick="toggleMenu()">☰</div>
    </nav>

    <main class="container mt-5">
        <h2 class="text-center p-3">予約状況一覧</h2>

        <!-- ツアー情報 -->
        <div class="mb-4">
            <h4>ツアー名: 横浜ランドマークタワーツアー</h4>
            <p>ツアー会社: JTB</p>
            <p>料金: ¥5,000 | 定員: 30人</p>
        </div>

        <div class="mb-3">
            <h3 class="h3 p-3"><?= $date ?></h3>
            <form action="" method="get">
                <input type="date" name="date" value="<?= $date ?>">
                <button class="btn btn-primary">検索</button>
            </form>
        </div>

        <!-- 予約状況テーブル -->
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>日付</th>
                    <th>ステータス</th>
                    <th>予約数/定員</th>
                </tr>
            </thead>
            <tbody>
                <!-- ダミーデータ -->
                <tr>
                    <td>10:00</td>
                    <td><a href="./" class="btn btn-success">ツアー登録</a></td>
                    <td>7/30</td>
                </tr>
                <tr>
                    <td>11:00</td>
                    <td><a href="./" class="btn btn-success">ツアー登録</a></td>
                    <td>20/30</td>
                </tr>
                <tr>
                    <td>12:00</td>
                    <td>満員</td>
                    <td>30/30</td>
                </tr>
            </tbody>
        </table>

        <!-- 戻るボタン -->
        <div class="text-center mt-3">
            <a href="../" class="btn btn-outline-secondary">Top</a>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>