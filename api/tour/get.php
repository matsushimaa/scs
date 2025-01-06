<?php
require_once '../../models/TourReservation.php';
require_once '../../models/Tour.php';


$tour = new Tour();
$tourList = $tour->getList();

// 今日の日付
$date = date('Y-m-d');

$tour_reservation = new TourReservation();
$reservation_counts = $tour_reservation->getReservationCountsByDay($date);

$results = [];
foreach ($tourList as $index => $value) {
    if (isset($reservation_counts[$value['id']])) {
        $value['count'] = $reservation_counts[$value['id']];
    } else {
        $value['count'] = 0;
    }
    $results[] = $value;
}
echo json_encode($results);