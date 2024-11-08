<?php
$date = date('Y-m-d');
if (isset($_GET['date'])) {
    $date = $_GET['date'];
}

// TODO: search reservations
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日付別 予約状況一覧</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
     
   
</style>
<body>
    
         <!--ナビゲーションバー  -->
    <!-- ナビゲーションメニュー -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="logo">旅行サイト</div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#tour-list">旅行リスト</a></li>
                    <li class="nav-item"><a class="nav-link" href="register/">ツアー登録</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">お問い合わせ</a></li>
                </ul>
            </div>
            <div class="hamburger-menu" onclick="toggleMenu()">☰</div>
    </nav>
    <main class="container mt-5">
                <h2 class="text-center p-3">ツアーリスト</h2>

                <div class="mb-3">
                    <h3 class="h3 p-3"><?= $date ?></h3>
                    <form action="" method="get">
                        <input type="date" name="date" value="<?= $date ?>">
                        <button class="btn btn-primary">検索</button>
                    </form>
                </div>
                <div>
                    <ul>
                        <li><a href="reserve_status.php">横浜ランドマークタワー</a></li>
                        <li>日本丸メモリアルパーク</li>
                        <li>横浜ハンマーベット</li>
                        <li>MARINE&WALK YOKOHAMA</li>
                        <li>横浜赤レンガ倉庫</li>
                        <li>カップヌードルミュージアム</li>
                    </ul>
            
                </div>

                <!-- 予約状況テーブル -->
                <table class="table table-bordered table-hover">
                
                    </tbody>
                </table>

                <!-- 戻るボタン -->
                <div class="text-center mt-3">
                    <a href="../" class="btn btn-outline-secondary">Top</a>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
         </main>
    <!-- map方法1 -->
    <!-- <?php
    echo file_get_contents('map.html');
?> -->
    <!-- map方法2
    <div id="mapid" style="width: 900px; height: 1300px"></div>
        <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
        <script>
            var map = L.map('mapid').setView([35.45378052765312, 139.63589255447292], 17);

            var gsi = L.tileLayer('https://cyberjapandata.gsi.go.jp/xyz/std/{z}/{x}/{y}.png', {
            attribution: "<a href='https://maps.gsi.go.jp/development/ichiran.html' target='_blank'>地理院タイル</a>"
            });

            var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: "c <a href='https://www.openstreetmap.org/copyright'>OpenStreetMap</a> contributors"
            });

            var baseMaps = {
            "地理院地図" : gsi,
            "OpenStreetMap" : osm
            };
            L.control.layers(baseMaps).addTo(map);
            osm.addTo(map);

            //1.横浜ランドマークタワーにマーカーを追加する。
            var myIcon1 = L.divIcon({ html: '<p style="color:white;text-align:center;">横浜ランドマークタワー</p>', className: 'icon1', iconAnchor: [20,20] });
            L.marker([35.45511168509241, 139.6314074802348], { icon: myIcon1 }).addTo(map);

            //2.日本丸メモリアルパークにマーカーを追加する。
            var myIcon2 = L.divIcon({ html: '<p style="color:white;text-align:center;">日本丸メモリアルパーク</p>', className: 'icon2', iconAnchor: [20,20] });
            L.marker([35.45378571465553, 139.63263289630348], { icon: myIcon2 }).addTo(map);

            //3.カップヌードルミュージアム横浜にマーカーを追加する。
            var myIcon3 = L.divIcon({ html: '<p style="color:white;text-align:center;">カップヌードルミュージアム横浜</p>', className: 'icon3', iconAnchor: [20,20] });
            L.marker([35.45601733791626, 139.6388669], { icon: myIcon3 }).addTo(map);
            //4.横浜ハンマーヘッドにマーカーを追加する。
            var myIcon4 = L.divIcon({ html: '<p style="color:white;text-align:center;">横浜ハンマーヘッドにマーカー</p>', className: 'icon4', iconAnchor: [20,20] });
            L.marker([35.45605229507586, 139.6389270568413], { icon: myIcon4 }).addTo(map);
            //5.マリンアンドウォークヨコハマにマーカーを追加する。
            var myIcon5 = L.divIcon({ html: '<p style="color:white;text-align:center;">マリンアンドウォークヨコハマにマーカー</p>', className: 'icon5', iconAnchor: [20,20] });
            L.marker([35.45476714030414, 139.64212454066205], { icon: myIcon5 }).addTo(map);
            //6.横浜赤レンガ倉庫にマーカーを追加する。
            var myIcon6 = L.divIcon({ html: '<p style="color:white;text-align:center;">横浜赤レンガ倉庫</p>', className: 'icon6', iconAnchor: [20,20] });
            L.marker([35.45283968507287, 139.64281265255195], { icon: myIcon6 }).addTo(map);
            //桜木町駅にマーカーを追加する。
            var marker = L.marker([35.45116053227894,139.6310917445411]).addTo(map);
            //上のマーカーにポップアップを追加する。
            marker.bindPopup("桜木町駅").openPopup();

        </script> -->
</body>

</html>