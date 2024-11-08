<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>旅行ホームページ</title>
    <link rel="stylesheet" href="css/styles2.css">
</head>
<body>
<!--ナビゲーションバー  -->
    <header class="navbar">
        <div class="logo">旅行サイト</div>
        <nav>
        <ul class="nav-links">
            <li><a href="list.php">旅行リスト</a></li>
            <li><a href="register/">ツアー登録</a></li>
            <li><a href="#contact">お問い合わせ</a></li>
        </ul>
        </nav>
        <div class="hamburger-menu" onclick="toggleMenu()">☰</div>
    </header>
<!--メインビジュアルエリア -->
<section class="hero">
    <h1>世界のあらゆる場所を探索しよう</h1>
    <p>素晴らしい旅行プランを見つけて、今すぐあなたの旅を始めよう！</p>
    <a href="#register" class="cta-button">今すぐ登録</a>
  </section>
 <!-- 旅行リスト -->
 <section id="tour-list" class="tour-list">
    <h2>おすすめ旅行リスト</h2>
    <div class="tour-item">
      <img src="img/slick1.jpg" alt="国内旅行">
      <h3>国内旅行 - 自然の美を探索</h3>
      <p>価格：¥2999から</p>
      <button>今すぐ予約</button>
    </div>
    <div class="tour-item">
      <img src="img/ege.jpg" alt="海外旅行">
      <h3>海外旅行 - ヨーロッパの風景を楽しむ</h3>
      <p>価格：¥8999から</p>
      <button>今すぐ予約</button>
    </div>
  </section>
  <!-- 登録フォーム -->

  <section id="register" class="register-section">
    <h2>迅速登録</h2>
    <form action="register/RegisterSuccess.php" method="post">
      <input type="text" placeholder="名前" required>
      <input type="email" placeholder="メールアドレス" required>
      <input type="tel" placeholder="電話番号" required>
      <button type="submit">送信</button>
    </form>
  </section>

  <!-- お問い合わせ -->
  <section id="contact" class="contact-section">
    <h2>お問い合わせ</h2>
    <p>電話：040-123-4567</p>
    <p>メール：info@tour.com</p>
    <p>住所：〒222-0033 神奈川県横浜市港北区新横浜2-14</p>
  </section>

  <!-- フッター -->
  <footer class="footer">
    <p>&copy; 2024 旅行サイト - 全ての権利を保留</p>
  </footer>

  <script src="script.js"></script>


    
    <!-- <h1>トップ画面</h1>
    <nav>
        <ul>
            <li><a href="register/">ツアー登録</a></li>
        </ul>
    </nav>
    <p>
        差し替え
    </p> -->
</body>
</html>