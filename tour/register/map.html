<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Crowd Level</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
    <style>
        /* CSSアイコンスタイル */
        .icon {
            width: 200px !important;
            height: 40px !important;
            padding-top: 10px;
            border-radius: 10px;
            border: 3px solid #fdfdfd;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
            font-size: 12px;
            text-align: center;
            color: white;
        }

        .red {
            background-color: #ff0000;
        }

        .blue {
            background-color: #0008b0;
        }

        .tomato {
            background-color: #ff6347;
        }

        .coral {
            background-color: #ff7f50;
        }

        .green {
            background-color: #008000;
        }

        .orangered {
            background-color: #ff4500;
        }

        /* 凡例を右下に固定 */
        .legend {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 200px;
            padding: 10px;
            border-radius: 10px;
            border: 3px solid #fdfdfd;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
            background-color: white;
            font-size: 12px;
            z-index: 1000;
        }

        /* 凡例の色 */
        .square {
            display: inline-block;
            width: 30px;
            height: 20px;
            margin-right: 10px;
            vertical-align: middle;
        }

        .red-square {
            background-color: #ff0000;
        }

        .blue-square {
            background-color: #0008b0;
        }

        .tomato-square {
            background-color: #ff6347;
        }

        .coral-square {
            background-color: #ff7f50;
        }

        .green-square {
            background-color: #008000;
        }

        .orangered-square {
            background-color: #ff4500;
        }

        /* 人数入力用のフォーム */
        .control-panel {
            position: absolute;
            bottom: 20px;
            right: 300px;
            background-color: white;
            padding: 10px;
            border-radius: 10px;
            border: 3px solid #fdfdfd;
            box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
            font-size: 12px;
            z-index: 1000;
        }

        .control-panel input {
            width: 80px;
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div id="mapid" style="width: 100%; height: 800px"></div>

    <!-- 凡例を表示する固定要素 -->
    <div class="legend" id="legend"></div>

    <!-- 人数変更のためのコントロールパネル -->
    <div class="control-panel" id="control-panel">
        <p>TODO: 定期的に更新</p>
    </div>

    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
    <script>
        // マップ位置
        var mapLocation = { lat: 35.45378052765312, lng: 139.63589255447292, magnification: 17 };
        var map, markers = [];

        // 出発地
        var departure = {
            lat: 35.45116053227894,
            lng: 139.6310917445411,
            name: "桜木町駅"
        };

        // 凡例データ（colorClass の範囲指定）
        var legendData = [
            { colorClass: 'red', min: 1000, max: 2000 },
            { colorClass: 'orangered', min: 800, max: 1000 },
            { colorClass: 'tomato', min: 600, max: 800 },
            { colorClass: 'coral', min: 400, max: 600 },
            { colorClass: 'green', min: 200, max: 400 },
            { colorClass: 'blue', min: 0, max: 200 }
        ];

        // ロケーション情報
        var locations = [
            { id: 1, lat: 35.45511168509241, lng: 139.6314074802348, name: '横浜ランドマークタワー', count: 1750 },
            { id: 2, lat: 35.45378571465553, lng: 139.63263289630348, name: '日本丸メモリアルパーク', count: 198 },
            { id: 3, lat: 35.45601733791626, lng: 139.6388669, name: 'カップヌードルミュージアム横浜', count: 780 },
            { id: 4, lat: 35.455335, lng: 139.640664, name: '横浜ハンマーヘッド', count: 550 },
            { id: 5, lat: 35.45476714030414, lng: 139.64212454066205, name: 'マリンアンドウォークヨコハマ', count: 380 },
            { id: 6, lat: 35.45283968507287, lng: 139.64281265255195, name: '横浜赤レンガ倉庫', count: 960 },
        ];

        // 凡例をHTMLに追加
        function createLegend() {
            var legendContainer = document.getElementById('legend');
            legendData.forEach(function (item) {
                var legendItem = document.createElement('p');
                legendItem.innerHTML = `<span class="square ${item.colorClass}-square"></span>${item.min}-${item.max}人`;
                legendContainer.appendChild(legendItem);
            });
        }

        createLegend();

        // 各ロケーションの人数に応じて colorClass を動的に設定する関数
        function getColorClass(count) {
            for (var i = 0; i < legendData.length; i++) {
                if (count >= legendData[i].min && count <= legendData[i].max) {
                    return legendData[i].colorClass;
                }
            }
            // 最大の max 値を超える場合は最大色クラスを返す
            return legendData[0].colorClass;
        }

        // マーカーを更新する関数
        function updateMarkers() {
            markers.forEach(marker => map.removeLayer(marker)); // 既存マーカーを削除
            markers = []; // マーカー配列をクリア
            locations.forEach(function (location) {
                var colorClass = getColorClass(location.count);
                var icon = L.divIcon({
                    html: `<div>${location.name}</div><div>${location.count}人</div>`,
                    className: `icon ${colorClass}`,
                    iconAnchor: [20, 20]
                });
                var marker = L.marker([location.lat, location.lng], { icon: icon }).addTo(map);
                markers.push(marker);
            });
        }

        function showMap() {
            map = L.map('mapid').setView([mapLocation.lat, mapLocation.lng], mapLocation.magnification);

            // タイルレイヤー追加
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: "© OpenStreetMap contributors"
            }).addTo(map);

            // 出発地のマーカーとポップアップ
            var departureMarker = L.marker([departure.lat, departure.lng]).addTo(map);
            departureMarker.bindPopup(departure.name).openPopup();

            // 初期マーカー表示
            updateMarkers();

            // 外部リンク表示
            showLink(map);

            // コントロールパネルに人数変更用の入力フィールドを生成
            var controlPanel = document.getElementById('control-panel');
            locations.forEach(function (location) {
                var input = document.createElement('input');
                input.type = 'number';
                input.value = location.count;
                input.step = 10;
                input.id = `count-input-${location.id}`;
                input.onchange = function () {
                    var newCount = parseInt(input.value, 10);
                    if (!isNaN(newCount)) {
                        location.count = newCount;
                        updateMarkers(); // マーカー更新
                    }
                };
                var label = document.createElement('label');
                label.innerHTML = `${location.name}: `;
                controlPanel.appendChild(label);
                controlPanel.appendChild(input);
                controlPanel.appendChild(document.createElement('br'));
            });
        }

        function showLink(map) {
            // 外部リンク
            var gsi = L.tileLayer('https://cyberjapandata.gsi.go.jp/xyz/std/{z}/{x}/{y}.png', {
                attribution: "<a href='https://maps.gsi.go.jp/development/ichiran.html' target='_blank'>地理院タイル</a>"
            });
            var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: "c <a href='https://www.openstreetmap.org/copyright'>OpenStreetMap</a> contributors"
            });

            var baseMaps = {
                "地理院地図": gsi,
                "OpenStreetMap": osm
            };
            L.control.layers(baseMaps).addTo(map);
            osm.addTo(map);
        }

        showMap();
    </script>
</body>

</html>