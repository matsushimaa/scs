<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ツアー予定人数登録</title>
  <link rel="Stylesheet" href="../css/styles.css" />
</head>

<body class="background-image">
  <?php
    // 获取链接中传递的参数
    $tourId = isset($_GET['tour_id']) ? $_GET['tour_id'] : '';
    $tdate = isset($_GET['tdate']) ? $_GET['tdate'] : '';
    $ttime = isset($_GET['ttime']) ? $_GET['ttime'] : '';
  ?>
  
  <form action="confirm.php" method="post">
    <h1 class="title">ツアー予定人数登録システム</h1>
    <div class="container">
      <div class="">
        <div class="conta" style="float: left">
          <p>
            <label for=""><strong>ツアー名:</strong><br />
              <select name="tour_id" id="" class="sele2">
                <option value="1" <?= $tourId == '1' ? 'selected' : '' ?>>横浜ランドマークタワー</option>
                <option value="2" <?= $tourId == '2' ? 'selected' : '' ?>>日本丸メモリアルパーク</option>
                <option value="3" <?= $tourId == '3' ? 'selected' : '' ?>>横浜ハンマーベット</option>
                <option value="4" <?= $tourId == '4' ? 'selected' : '' ?>>MARINE&WALK YOKOHAMA</option>
                <option value="5" <?= $tourId == '5' ? 'selected' : '' ?>>横浜赤レンガ倉庫</option>
                <option value="6" <?= $tourId == '6' ? 'selected' : '' ?>>カップヌードルミュージアム</option>
              </select>
            </label>
          </p>
          <p>
            <label for=""><strong>ツアー年月日：</strong><br />
              <input type="date" name="tdate" class="sele" value="<?= htmlspecialchars($tdate) ?>" />
            </label>
          </p>
          <p>
            <label for=""><strong>ツアー時刻：</strong><br />
              <select name="ttime" id="" class="sele2">
                <?php
                  for ($i = 6; $i <= 21; $i++) {
                    $timeLabel = $i . ":00-" . ($i + 1) . ":00";
                    $selected = ($ttime == $i) ? 'selected' : '';
                    echo "<option value=\"$i\" $selected>$timeLabel</option>";
                  }
                ?>
              </select>
            </label>
          </p>
          <p>
            <label for=""><strong>ツアー者数:</strong><br />
              <input
                type="text"
                name="tnum"
                pattern="^[0-9]+$"
                size=""
                class="sele" />
            </label>
          </p>
          <p>
            <input type="submit" value="登録" class="login-button" />
          </p>
        </div>
      </div>
    </div>
  </form>
</body>

</html>
