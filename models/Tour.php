<?php
class Tour
{
    public $timeSlots = [
        6 => "6:00-7:00",
        7 => "7:00-8:00",
        8 => "8:00-9:00",
        9 => "9:00-10:00",
        10 => "10:00-11:00",
        11 => "11:00-12:00",
        12 => "12:00-13:00",
        13 => "13:00-14:00",
        14 => "14:00-15:00",
        15 => "15:00-16:00",
        16 => "16:00-17:00",
        17 => "17:00-18:00",
        18 => "18:00-19:00",
        19 => "19:00-20:00",
        20 => "20:00-21:00",
        21 => "21:00-22:00",
    ];

    function getTimeSlot($key)
    {
        return $this->timeSlots[$key];
    }

    function fetch($id)
    {
        // TODO: Database
        $values = $this->getList();
        foreach ($values as $tour) {
            if ($tour['id'] == $id) {
                return $tour;
            }
        }
    }

    function getList()
    {
        // TODO: Database
        $values = [
            [
                "id" => 1,
                "name" => "横浜ランドマークタワーツアー",
                "place" => "横浜ランドマークタワー",
                "lat" => 35.45511168509241,
                "lng" => 139.6314074802348,
                "capacity" => 20,
                "company_id" => 1,
            ],
            [
                "id" => 2,
                "name" => "日本丸メモリアルパークツアー",
                "place" => "日本丸メモリアルパーク",
                "lat" => 35.45378571465553,
                "lng" => 139.63263289630348,
                "capacity" => 20,
                "company_id" => 1,
            ],
            [
                "id" => 3,
                "name" => "横浜ハンマーベットツアー",
                "place" => "横浜ハンマーベット",
                "lat" => 35.45601733791626,
                "lng" => 139.6388669,
                "capacity" => 20,
                "company_id" => 1,
            ],
            [
                "id" => 4,
                "name" => "MARINE&WALK YOKOHAMツアー",
                "place" => "MARINE&WALK YOKOHAM",
                "lat" => 35.45476714030414,
                "lng" => 139.64212454066205,
                "capacity" => 20,
                "company_id" => 1,
            ],
            [
                "id" => 5,
                "name" => "横浜赤レンガ倉庫ツアー",
                "place" => "横浜赤レンガ倉庫",
                "lat" => 35.45283968507287,
                "lng" => 139.64281265255195,
                "capacity" => 20,
                "company_id" => 1,
            ],
            [
                "id" => 6,
                "name" => "カップヌードルミュージアムツアー",
                "place" => "カップヌードルミュージアム",
                "lat" => 35.45601733791626,
                "lng" => 139.6388669,
                "capacity" => 20,
                "company_id" => 1,
            ],
        ];
        return $values;
    }

}