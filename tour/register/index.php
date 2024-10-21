<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ツアー予定人数登録</title>
  <link rel="Stylesheet" href="../css/styles.css" />
</head>

<body class="background-image">
  <form action="confirm.php" method="post">
    <h1 class="title">ツアー予定人数登録システム</h1>
    <div class="container">
      <div class="">
        <div class="conta" style="float: left">
          <p>
            <label for=""><strong>ツアー会社：</strong><br />
              <select name="tcoop" id="" class="sele2">
                <option value="1">01:JTB</option>
                <option value="2">02:日本旅行</option>
                <option value="3">03:HIS</option>
                <option value="4">04:JTB</option>
                <option value="5">05:日本ツアーリスト</option>
                <option value="6">06:クラブツーリズム</option>
              </select>
            </label>
          </p>
          <p>
            <label for=""><strong>ツアー名：</strong><br />
              <input type="text" name="tname" size="" value="" class="sele" />
            </label>
          </p>
          <p>
            <label for=""><strong>ツアー年月日：</strong><br />
              <input type="date" name="tdate" class="sele" />
            </label>
          </p>
          <p>
            <label for=""><strong>ツアー時刻：</strong><br />
              <select name="ttime" id="" class="sele2">
                <option value="6">6:00-7:00</option>
                <option value="6">7:00-8:00</option>
                <option value="6">8:00-9:00</option>
                <option value="6">9:00-10:00</option>
                <option value="6">10:00-11:00</option>
                <option value="6">11:00-12:00</option>
                <option value="6">12:00-13:00</option>
                <option value="6">13:00-14:00</option>
                <option value="6">14:00-15:00</option>
                <option value="6">15:00-16:00</option>
                <option value="6">17:00-18:00</option>
                <option value="6">19:00-20:00</option>
                <option value="6">21:00-22:00</option>
              </select>
            </label>
          </p>
          <p>
            <label for=""><strong>ツアー場所:</strong><br />
              <select name="tplace" id="" class="sele2">
                <option value="1">横浜ランドマークタワー</option>
                <option value="2">日本丸メモリアルパーク</option>
                <option value="3">横浜ハンマーベット</option>
                <option value="4">MARINE&WALK YOKOHAMA</option>
                <option value="5">横浜赤レンガ倉庫</option>
                <option value="6">カップヌードルミュージアム</option>
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