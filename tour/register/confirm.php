<?php
require_once "../../models/Tour.php";

$tour = new Tour();
$tourData = $tour->fetch($_POST['tour_id']);
var_dump($tourData);
exit;
$tname = $_POST['tname'];
$tdate = $_POST['tdate'];
$ttime = $_POST['ttime'];
$tplace = $_POST['tplace'];
$tnum = $_POST['tnum'];


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
                    <td>
                        <?php
                        if ($tcoop == 1) {
                            echo "JTB";
                        } else if ($tcoop == 2) {
                            echo "HIS";
                        } else if ($tcoop == 3) {
                            echo "JTB";
                        } else if ($tcoop == 4) {
                            echo "日本旅行";
                        } else if ($tcoop == 5) {
                            echo "日本ツアーリスト";
                        } else if ($tcoop == 6) {
                            echo "クラブツーリズム";
                        } else {
                            echo "";
                        }
                        ?>
                    </td>
                    <tr>
                        <td><strong>ツアー名</strong></td>
                        <td><?= $tname ?></td>
                    </tr>
                    <tr>
                        <td><strong>ツアー年月日</strong></td>
                        <td>
                            <?= $tdate ?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>ツアー時刻</strong></td>
                        <td>
                            <?php
                            if ($ttime == 6) {
                                echo "6:00-7:00";
                            } else if ($ttime == 7) {
                                echo "7:00-8:00";
                            } else if ($ttime == 8) {
                                echo "8:00-9:00";
                            } else if ($ttime == 9) {
                                echo "9:00-10:00";
                            } else if ($ttime == 10) {
                                echo "10:00-11:00";
                            } else if ($ttime == 11) {
                                echo "11:00-12:00";
                            } else if ($ttime == 12) {
                                echo "12:00-13:00";
                            } else if ($ttime == 13) {
                                echo "13:00-14:00";
                            } else if ($ttime == 14) {
                                echo "14:00-15:00";
                            } else if ($ttime == 15) {
                                echo "15:00-16:00";
                            } else if ($ttime == 16) {
                                echo "16:00-17:00";
                            } else if ($ttime == 17) {
                                echo "17:00-18:00";
                            } else if ($ttime == 18) {
                                echo "18:00-19:00";
                            } else if ($ttime == 19) {
                                echo "19:00-20:00";
                            } else if ($ttime == 20) {
                                echo "20:00-21:00";
                            } else if ($ttime == 21) {
                                echo "21:00-22:00";
                            } else {
                                echo "";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>ツアー場所</strong></td>
                        <td>
                            <?php
                            if ($tplace == 1) {
                                echo "横浜ランドマークタワー";
                            } else if ($tplace == 2) {
                                echo "日本丸メモリアルパーク";
                            } else if ($tplace == 3) {
                                echo "横浜ハンマーベット";
                            } else if ($tplace == 4) {
                                echo "MARINE&WALK YOKOHAMA";
                            } else if ($tplace == 5) {
                                echo "横浜赤レンガ倉庫";
                            } else if ($tplace == 6) {
                                echo "カップヌードルミュージアム";
                            } else {
                                echo "";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>ツアー者数</strong></td>
                        <td>
                            <?= $tnum ?>
                        </td>
                    </tr>
                </table>
                <p>
                <form action="add.php" method="post">
                    <input type="hidden" name="tcoop" value=<?= $tcoop ?>>
                    <input type="hidden" name="tname" value=<?= $tname ?>>
                    <input type="hidden" name="tdate" value=<?= $tdate ?>>
                    <input type="hidden" name="ttime" value=<?= $ttime ?>>
                    <input type="hidden" name="tplace" value=<?= $tplace ?>>
                    <input type="hidden" name="tnum" value=<?= $tnum ?>>

                    <input type="submit" value="登録" class="login-button">
                    <input type="button" onclick="history.back()" value="戻る" class="login-button">
                </form>
                </p>
            </div>
        </div>
    </div>
</body>

</html>