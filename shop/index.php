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
            background-image: url(../images/index.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            max-width: 900px;  /* コンテナの幅を広げる */
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .item {
            display: flex;
            align-items: center;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            text-decoration: none;
            color: #333;
            background-color: #f0f0f0;
            transition: background-color 0.3s, transform 0.3s;
        }

        .item img {
            width: 100px;  /* 画像の幅を大きく */
            height: 100px;  /* 画像の高さを大きく */
            margin-right: 20px;
            border-radius: 10px;
        }

        .item-text {
            flex-grow: 1;
            font-size: 24px;  /* テキストサイズをさらに大きく */
            font-weight: bold;
            color: #2c3e50;
        }

        .item-subtext {
            font-size: 16px;  /* サブテキストのサイズを大きく */
            color: #777;
            margin-top: 5px;
        }

        .item-description {
            font-size: 18px;  /* お店の紹介テキストのサイズ */
            color: #555;
            margin-top: 10px;
        }

        .item:hover {
            background-color: #e0e0e0;
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        @media (max-width: 600px) {
            .item {
                flex-direction: column;
                align-items: flex-start;
            }

            .item img {
                margin-bottom: 15px;
            }
        }

        /* ホームボタンのCSS */
        #homeButton {
            position: absolute;
            top: 25px;
            left: 60px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            text-decoration: none;  /* 下線を消す */
        }

        #homeButton:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container" id="linkContainer">
        <a href="detail.php?shop_id=1" class="item">
            <img src="../images/a.jpg" alt="画像1">
            <div class="item-text">
                キッチン大宮　MARK　IS　みなとみらい店<br>
                <span class="item-subtext">あいうえお</span>
            </div>
            <div class="item-description">
                <p>美味しい料理と素晴らしいサービスが自慢のお店です。おしゃれな雰囲気の中で、心地よいひと時をお楽しみください。</p>
            </div>
        </a>
        <a href="detail.php?shop_id=2" class="item">
            <img src="../images/b.jpg" alt="画像2">
            <div class="item-text">
                なかめのてっぺん<br>横浜みなとみらい
                <span class="item-subtext">あいうえお</span>
            </div>
            <div class="item-description">
                <p>横浜の美しい景色と共に、絶品の料理を堪能できるお店です。お客様に最高の体験を提供します。</p>
            </div>
        </a>
        <a href="detail.php?shop_id=3" class="item">
            <img src="../images/c.jpg" alt="画像3">
            <div class="item-text">
                ブラッスリー　024<br>
                <span class="item-subtext">あいうえお</span>
            </div>
            <div class="item-description">
                <p>フランス料理をベースにした独創的なメニューをご提供します。厳選した食材で作られた料理の数々をお楽しみください。</p>
            </div>
        </a>
    </div>
    <div class="text-center mt-3">
        <a href="http://172.16.2.22/SCS_html" id="homeButton" class="btn btn-primary">ホーム画面に戻る</a>
    </div>
</body>

</html>
