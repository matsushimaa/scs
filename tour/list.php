<?php
require_once "../models/Tour.php";
$tour = new Tour();
$tours = $tour->getList();

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>


</style>

<body>

    <!--ナビゲーションバー  -->
    <!-- ナビゲーションメニュー -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="logo">旅行サイト</div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#tour-list">旅行リスト</a></li>
                    <li class="nav-item"><a class="nav-link" href="register/">ツアー登録</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">お問い合わせ</a></li>
                </ul>
            </div>
            <div class="hamburger-menu" onclick="toggleMenu()">☰</div>
    </nav>
    <main class="container mt-5">
        <h2 class="text-center p-3">ツアーリスト</h2>

        <div class="mb-3">
            <h3 class="h3 p-3"><?= $date ?></h3>
            <form action="" method="get">
                <input type="date" name="date" value="<?= $date ?>">
                <button class="btn btn-primary">検索</button>
            </form>
        </div>
        <div>
            <ul>
                <?php foreach ($tours as $tour): ?>
                    <li><a href="reserve_status.php?tour_id=<?= $tour['id'] ?>"><?= $tour['name'] ?></a></li>
                <?php endforeach ?>
            </ul>

        </div>

        <!-- 予約状況テーブル -->
        <table class="table table-bordered table-hover">

            </tbody>
        </table>

        <!-- 戻るボタン -->
        <div class="text-center mt-3">
            <a href="../" class="btn btn-outline-secondary">Top</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </main>
</body>

</html>