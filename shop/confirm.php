<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約確認</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* bodyの余白をリセット */
        body {
            margin: 0;
            padding: 0;
        }

        /* main 要素に余白を追加 */
        main {
            margin-top: 50px; /* 上部に50pxの余白を追加 */
        }

        /* 画面幅の60%で中央配置 */
        .container {
            width: 60%; /* 横幅を60%に設定 */
            margin: 0 auto; /* 横方向に中央配置 */
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <div class="alert alert-success text-center" role="alert">
                予約が完了しました。
            </div>
            <div class="text-center">
                <a href="./detail.php" class="btn btn-primary">予約状況画面へ</a>
            </div>
            <div class="text-center mt-3">
                <a href="./" class="btn btn-secondary">ホーム画面に戻る</a>
            </div>
        </div>
    </main>
</body>

</html>
