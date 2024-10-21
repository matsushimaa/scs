<?PHP
$tcoop = $_POST['tcoop'];
$tname = $_POST['tname'];
$tdate = $_POST['tdate'];
$ttime = $_POST['ttime'];
$tplace = $_POST['tplace'];
$tnum = $_POST['tnum'];

function db_connect()
{
    try {
        $db = new PDO('mysql:dbname=yoyakudb; host=127.0.0.1; charset=utf8', 'root', '');
        return $db;
    } catch (PDOException $e) {
        echo 'DB接続エラー:' . $e->getMessage();
        exit;
    }
}

function insert($tcoop, $tname, $tdate, $ttime, $tplace, $tnum)
{
    $db = db_connect();
    $sql = "INSERT INTO tour_reservations(TCoop,TName,TDate,TTime,TPlace,TNum) VALUES(" . $tcoop . "," . "'$tname'" . "," . "'$tdate'" . "," . $ttime . "," . $tplace . "," . $tnum . ")";

    print("正常に登録が完了しました");
    $count = $db->query($sql);
    $db = NULL;
    return 0;
}

//TODO:
insert($tcoop, $tname, $tdate, $ttime, $tplace, $tnum);

header('Location: complete.php');