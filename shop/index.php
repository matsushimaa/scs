<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clickable Links with Images and Text</title>
    <style>
        body {
            padding: 20px;
            margin-bottom: 200px;
            background-color: #f9f9f9;
            background-image: url(../images/index.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* font-family: Arial, sans-serif; を削除してデフォルトフォントに戻す */
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
            display: flex;  /* 画像とテキストを横並びにする */
            align-items: flex-start;  /* 画像とテキストを縦方向に揃え */
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            text-decoration: none;
            color: #333;
            background-color: #f0f0f0;
            transition: background-color 0.3s, transform 0.3s;
        }

        .item img {
            width: 200px;  /* 画像の幅を大きく */
            height: 200px;  /* 画像の高さを大きく */
            margin-right: 20px;  /* 画像とテキストの間にスペースを追加 */
            border-radius: 10px;
        }

        .item-text {
            display: flex;
            flex-direction: column;  /* テキストを縦に並べる */
            justify-content: space-between;  /* 各部分の間隔を均等に */
            flex-grow: 1;  /* テキスト部分が画像の横に広がる */
            font-size: 25px;
            color: #2c3e50;
        }

        .item-title {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 10px; /* タイトルとサブテキストの間の隙間を調整 */
        }

        .item-subtext,
        .item-description {
            font-size: 16px;  /* サイズを少し小さく */
            color: #777;
            margin-bottom: 15px;
        }

        .item-description {
            font-size: 18px;  /* お店の紹介テキストのサイズ */
            color: #555;
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
        <a href="./shop1/detail.php" id="1" class="item">
            <img src="../images/a.jpg" alt="画像1">
            <div class="item-text">
                <div class="item-title">
                    キッチン大宮　MARK　IS　みなとみらい店
                </div>
                <div class="item-subtext">
                    神奈川県横浜市西区みなとみらい3-5-1 MARK IS みなとみらい 4F <br>
                    朝：1,500円　夜：4,000円　桜木町駅 徒歩7分
                </div>
                <div class="item-description">
                    美味しい料理と素晴らしいサービスが自慢のお店です。おしゃれな雰囲気の中で、心地よいひと時をお楽しみください。<br>
                </div>
            </div>
        </a>
        <a href="./shop2/detail.php" id="2" class="item">
            <img src="../images/b.jpg" alt="画像2">
            <div class="item-text">
                <div class="item-title">
                    なかめのてっぺん横浜みなとみらい
                </div>
                <div class="item-subtext">
                神奈川県横浜市西区みなとみらい2-2-1 ランドマークプラザドックヤードガーデン B2F <br>
                居酒屋 和食 海鮮料理　ディナー：4000円　みなとみらい駅 徒歩3分
                </div>
                <div class="item-description">
                    横浜の美しい景色と共に、絶品の料理を堪能できるお店です。お客様に最高の体験を提供します。
                </div>
            </div>
        </a>
        <a href="./shop3/detail.php" id="3" class="item">
            <img src="../images/c.jpg" alt="画像3">
            <div class="item-text">
                <div class="item-title">
                    ブラッスリー　024
                </div>
                <div class="item-subtext">                    
                神奈川県横浜市西区みなとみらい5-1-1 <br>
                フレンチ　ディナー：7000円　ランチ：2000円　横浜駅 徒歩8分

                </div>
                <div class="item-description">
                    フランス料理をベースにした独創的なメニューをご提供します。厳選した食材で作られた料理の数々をお楽しみください。
                </div>
            </div>
        </a>
    </div>
    <div class="text-center mt-3">
        <a href="http://172.16.2.22/SCS_html" id="homeButton" class="btn btn-primary">ホーム画面に戻る</a>
    </div>
</body>

</html>
