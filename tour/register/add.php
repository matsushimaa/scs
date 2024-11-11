<?PHP
$posts = $_POST;

function db_connect()
{
    // TODO: outer file
    try {
        $db = new PDO('mysql:dbname=yoyakudb; host=127.0.0.1; charset=utf8', 'root', '');
        return $db;
    } catch (PDOException $e) {
        echo 'DB接続エラー:' . $e->getMessage();
        exit;
    }
}

function insert($posts)
{
    $sql = "INSERT INTO 
                tour_reservations(tour_id, date, time, count, user_id) 
                VALUES(:tour_id, :date, :time, :count, :user_id)";

    $pdo = db_connect();
    $stmt = $pdo->prepare($sql);
    return $stmt->execute($posts);
}

try {
    if (insert($posts)) {
        header('Location: complete.php');
    }
} catch (\Throwable $th) {
    header('Location: confirm.php');
}