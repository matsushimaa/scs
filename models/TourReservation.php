<?php
require_once 'Model.php';

class TourReservation extends Model
{
    function getReservationCounts($tour_id, $date)
    {
        $pdo = $this->pdo;
        $sql = "SELECT time, count 
                FROM tour_reservations 
                WHERE date = :date AND tour_id = :tour_id;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':date', $date, PDO::PARAM_STR);
        $stmt->bindParam(':tour_id', $tour_id, PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $counts = [];
        foreach ($results as $row) {
            $counts[$row['time']] = $row['count'];
        }
        return $counts;
    }

    function getReservationCountsByDay($date)
    {
        // from_date と to_date を指定して、1日の範囲を設定
        $from_date = date('Y-m-d 00:00:00', strtotime($date));
        $to_date = date('Y-m-d 23:59:59', strtotime($date));
        
        $pdo = $this->pdo;
        $sql = "SELECT * FROM tour_reservations 
                WHERE date BETWEEN :from_date AND :to_date;";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':from_date', $from_date, PDO::PARAM_STR);
        $stmt->bindParam(':to_date', $to_date, PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $counts = [];
        foreach ($results as $row) {
            $counts[$row['tour_id']] = 0;
        }
        foreach ($results as $row) {
            $count = (isset($row['count'])) ? $row['count'] : 0;
            $counts[$row['tour_id']] += $count;
        }
        return $counts;
    }

    function getByDate($tour_id, $date)
    {
        $pdo = $this->pdo;
        $sql = "SELECT * FROM tour_reservations 
                WHERE date = '{$date}' AND tour_id = $tour_id;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $values = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $values;
    }

}
