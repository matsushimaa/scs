<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clickable Links with Images and Text</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            margin-bottom: 200px;
            background-color: #f9f9f9;
            background-image: url(main.jpg);
            /* 背景画像を指定 */
            background-size: cover;
            /* 背景画像をカバーする */
            background-position: center;
            /* 中央に配置 */
            background-repeat: no-repeat;
            /* 繰り返さない */
        } 

         .container { 
            max-width: 600px;
            /* 最大幅を設定 */
            margin: 0 auto;
            /* 中央に配置 */
            border-radius: 8px;
            /* 角を丸く */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            /* 影を追加 */
            padding: 20px;
            background-color:rgba(255, 255, 255, 0.9); 
            /* 背景を少し透明にして背景画像を透かす */
        }

        .item {
            display: flex;
            align-items: center;
            padding: 15px;
            /* パディングを増加 */
            margin-bottom: 10px;
            /* マージンを調整 */
            border-radius: 5px;
            /* 角を丸く */
            text-decoration: none;
            color: #333;
            background-color: #f0f0f0;
            transition: background-color 0.3s, transform 0.3s;
            /* ホバー時のアニメーション */
        }

        .item img {
            width: 16px;
            /* 画像の幅を小さく */
            height: 16px;
            /* 画像の高さを小さく */
            margin-right: 10px;
            /* 画像とテキストの間隔を調整 */
            border-radius: 50%;
            /* 画像を円形に */
        }

        .item-text {
            flex-grow: 1;
            font-size: 18px;
            /* テキストのサイズを増加 */
        }

        .item:hover {
            background-color: #e0e0e0;
            /* ホバー時の背景色 */
            transform: translateY(-2px);
            /* 上に浮き上がる効果 */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            /* ホバー時に影を強調 */
        }

        /* モバイル用のスタイル調整 */
        @media (max-width: 600px) {
            .item {
                flex-direction: column;
                /* アイテムを縦に並べる */
                align-items: flex-start;
                /* 左揃え */
            }

            .item img {
                margin-bottom: 10px;
                /* 画像とテキストの間隔を調整 */
            }
        }
    </style>
</head>

<body>

    <div class="container" id="linkContainer">
        <!-- 各リンクを手動で記述 -->
        <a href="../tenpo itiran/tenpo1/db_connect.php" class="item">
            <img src="tenpo1/a.jpg" alt="画像1">
            <div class="item-text">キッチン大宮　MARK　IS　みなとみらい店<br>
            あいうえお</div>
        </a>
        <a href="page2.php" class="item">
            <img src="tenpo1/b.jpg" alt="画像2">
            <div class="item-text">なかめのてっぺん　横浜みなとみらい</div>
        </a>
        <a href="page3.html" class="item">
            <img src="tenpo1/c.jpg" alt="画像3">
            <div class="item-text">ブラッスリー　024</div>
        </a>
        <!-- 他のリンクも同様に続けて記述 -->
    </div>

</body>

</html>