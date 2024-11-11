<?php
require_once "../../models/Tour.php";

$tour = new Tour();
$tours = $tour->getList();
?>
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
  $date = isset($_GET['date']) ? $_GET['date'] : '';
  $time = isset($_GET['time']) ? $_GET['time'] : '';
  ?>

  <form action="confirm.php" method="post">
    <h1 class="title">ツアー予定人数登録システム</h1>
    <div class="container">
      <div class="">
        <div class="conta" style="float: left">
          <p>
            <label for=""><strong>ツアー名:</strong><br />
              <select name="tour_id" id="" class="sele2">
                <?php foreach ($tours as $value): ?>
                  <option value="<?= $value['id'] ?>" <?= $tourId == $value['id'] ? 'selected' : '' ?>><?= $value['name'] ?></option>
                <?php endforeach ?>
              </select>
            </label>
          </p>
          <p>
            <label for=""><strong>ツアー年月日：</strong><br />
              <input type="date" name="date" class="sele" value="<?= htmlspecialchars($date) ?>" />
            </label>
          </p>
          <p>
            <label for=""><strong>ツアー時刻：</strong><br />
              <select name="time" id="" class="sele2">
                <?php foreach ($tour->timeSlots as $key => $timeSlot): ?>
                  <option value="<?= $key ?>" <?= $time == $key ? 'selected' : '' ?>><?= $timeSlot ?></option>";
                <?php endforeach ?>
                ?>
              </select>
            </label>
          </p>
          <p>
            <label for=""><strong>ツアー者数:</strong><br />
              <input
                type="number"
                name="count"
                min="0"
                max="10"
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