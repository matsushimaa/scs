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
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        } 

        .container { 
            max-width: 600px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .item {
            display: flex;
            align-items: center;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
            background-color: #f0f0f0;
            transition: background-color 0.3s, transform 0.3s;
        }

        .item img {
            width: 40px; /* 画像の幅を大きく */
            height: 40px; /* 画像の高さを大きく */
            margin-right: 10px;
            border-radius: 50%;
        }

        .item-text {
            flex-grow: 1;
            font-size: 20px; /* テキストのサイズを増加 */
            font-weight: bold; /* テキストを太字に */
            color: #2c3e50; /* テキストの色を変更 */
        }

        .item-subtext {
            font-size: 14px; /* フォントサイズを小さく */
            color: #777; /* 色を薄くして目立たなくする */
            margin-top: 5px; /* 上部にマージンを追加 */
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
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="container" id="linkContainer">
        <a href="../shop/staff detail.php" class="item">
            <img src="tenpo1/a.jpg" alt="画像1">
            <div class="item-text">
                キッチン大宮　MARK　IS　みなとみらい店<br>
                <span class="item-subtext">あいうえお</span> <!-- 追加した行 -->
            </div>
        </a>
        <a href="../shop/staff detail2.php" class="item">
            <img src="tenpo1/b.jpg" alt="画像2">
            <div class="item-text">なかめのてっぺん　横浜みなとみらい<br>
            <span class="item-subtext">あいうえお</span>
        </div>
        </a>
        <a href="../shop/staff detail3.php" class="item">
            <img src="tenpo1/c.jpg" alt="画像3">
            <div class="item-text">ブラッスリー　024<br>
            <span class="item-subtext">あいうえお</span>
        </div>
        </a>
    </div>

</body>

</html>
