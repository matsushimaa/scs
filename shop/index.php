<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clickable Links with Images and Text</title>
    <style>
        /* 基本的なボディのスタイル */
        body {
            font-family: 'Arial', sans-serif;
            padding: 20px;
            margin: 0;
            background-color: #f9f9f9;
            background-image: url(../images/index.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* 背景のぼかしを加えるコンテナ */
        .container {
            max-width: 600px;
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.8);
            /* 背景を透明にしてぼかしを強調 */
            margin: auto;
            backdrop-filter: blur(10px);
            /* 背景をぼかす */
        }

        /* リストアイテムのスタイル */
        .item {
            display: flex;
            align-items: center;
            padding: 15px;
            margin-bottom: 12px;
            border-radius: 10px;
            background-color: #f9f9f9;
            text-decoration: none;
            color: #333;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .item img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
            border-radius: 50%;
        }

        .item-text {
            flex-grow: 1;
            font-size: 18px;
            font-weight: bold;
            color: #2c3e50;
            line-height: 1.4;
        }

        .item-subtext {
            font-size: 14px;
            color: #777;
            margin-top: 6px;
        }

        /* ホバー効果 */
        .item:hover {
            background-color: #e0e0e0;
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        /* スマートフォン対応のレスポンシブ */
        @media (max-width: 600px) {
            .item {
                flex-direction: column;
                align-items: flex-start;
            }

            .item img {
                margin-bottom: 10px;
            }
        }

        /* ホームボタンのスタイル */
        #homeButton {
            position: absolute;
            top: 25px;
            left: 25px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            /* 四角形の角 */
            cursor: pointer;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.8);
            /* 初期の光を少しだけ */
            z-index: 1000;
            transition: background-color 0.3s, box-shadow 0.3s;
            text-decoration: none;
            /* 下線を消す */
        }

        /* ホームボタンのホバー時のエフェクト */
        #homeButton:hover {
            background-color: #0056b3;
            box-shadow: 0 0 15px rgba(0, 123, 255, 1), 0 0 25px rgba(0, 123, 255, 0.6);
            /* 光るエフェクト */
        }

        /* ボタンがクリックされた時のアクション（動きなし） */
        #homeButton:active {
            box-shadow: 0 0 10px rgba(0, 123, 255, 1);
            /* クリック時の微光 */
        }
    </style>
</head>

<body>

    <div class="container" id="linkContainer">
        <a href="detail.php?shop_id=1" class="item">
            <img src="../images/a.jpg" alt="画像1">
            <div class="item-text">
                キッチン大宮　MARK　IS　みなとみらい店<br>
                <span class="item-subtext">あいうえお</span> <!-- 追加した行 -->
            </div>
        </a>
        <a href="detail.php?shop_id=2" class="item">
            <img src="../images/b.jpg" alt="画像2">
            <div class="item-text">
                なかめのてっぺん　横浜みなとみらい<br>
                <span class="item-subtext">あいうえお</span>
            </div>
        </a>
        <a href="detail.php?shop_id=3" class="item">
            <img src="../images/c.jpg" alt="画像3">
            <div class="item-text">
                ブラッスリー　024<br>
                <span class="item-subtext">あいうえお</span>
            </div>
        </a>
    </div>

    <!-- ホームボタン -->
    <div class="text-center mt-3">
        <a href="http://172.16.2.22/SCS_html" id="homeButton" class="btn btn-primary">ホーム画面に戻る</a>
    </div>

</body>

</html>