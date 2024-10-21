<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clickable Links with Images and Text (Using <a> Tag)</title>
<style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
        margin: 0;
        background-color: #f9f9f9;
    }
    .container {
        /* スクロール不要なため、高さを自動に */
        height: auto;
        border: 1px solid #ccc;
        padding: 10px;
        background-color: #fff;
    }
    .item {
        display: flex; /* Flexbox を使ってアイテムを並べる */
        align-items: center; /* アイテムを垂直方向に中央揃え */
        padding: 10px;
        margin-bottom: 5px;
        background-color: #f0f0f0;
        text-decoration: none; /* リンクの下線を削除 */
        color: #333; /* リンクの色を設定 */
    }
    .item img {
        width: 30px; /* 画像の幅を調整 */
        height: 30px; /* 画像の高さを調整 */
        margin-right: 10px; /* 画像とテキストの間隔 */
    }
    .item-text {
        flex-grow: 1; /* テキストを伸縮させて残りのスペースを埋める */
    }
    .item:hover {
        background-color: #e0e0e0;
    }
</style>
</head>
<body>

<div class="container" id="linkContainer">
    <!-- 各リンクを手動で記述 -->
    <a href="../tenpo itiran2/tenpo1/date_selection.php" class="item">
        <img src="image1.jpg" alt="画像1">
        <div class="item-text">店舗 1</div>
    </a>
    <a href="page2.php" class="item">
        <img src="image2.jpg" alt="画像2">
        <div class="item-text">店舗 2</div>
    </a>
    <a href="page3.html" class="item">
        <img src="image3.jpg" alt="画像3">
        <div class="item-text">店舗 3</div>
    </a>
    <!-- 他のリンクも同様に続けて記述 -->
</div>

</body>
</html>
