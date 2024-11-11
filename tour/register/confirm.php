<?php
require_once "../../models/Tour.php";
// TODO: session

// TODO: ツアーに空き（定員）があるかチェック

// TODO: sanitize
$posts = $_POST;

$tour = new Tour();
$tourData = $tour->fetch($posts['tour_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[確認]ツアー予定人数登録システム</title>
    <link rel="Stylesheet" href="../css/styles.css">
</head>

<body class="background-image">
    <h1 class="title">登録情報確認画面</h1>
    <div class="container">
        <div>
            <div class="conta" style="float: left">
                <table>
                    <tr>
                        <th>項目</th>
                        <th>内容</th>
                    </tr>
                    <td><strong>ツアー会社名</strong></td>
                    <td><?= $tourData['company_id'] ?></td>
                    <tr>
                        <td><strong>ツアー名</strong></td>
                        <td><?= $tourData['name'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>ツアー年月日</strong></td>
                        <td>
                            <?= $posts['date'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>ツアー時刻</strong></td>
                        <td>
                            <?= $tour->getTimeSlot($posts['time']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>ツアー場所</strong></td>
                        <td><?= $tourData['place'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>ツアー者数</strong></td>
                        <td>
                            <?= $posts['count'] ?>
                        </td>
                    </tr>
                </table>
                <p>
                <form action="add.php" method="post">
                    <input type="hidden" name="tour_id" value="<?= $posts['tour_id'] ?>">
                    <input type="hidden" name="user_id" value="">
                    <input type="hidden" name="date" value="<?= $posts['date'] ?>">
                    <input type="hidden" name="time" value="<?= $posts['time'] ?>"">
                    <input type="hidden" name="count" value="<?= $posts['count'] ?>">

                    <input type="submit" value="登録" class="login-button">
                    <input type="button" onclick="history.back()" value="戻る" class="login-button">
                </form>
                </p>
            </div>
        </div>
    </div>
</body>

</html>