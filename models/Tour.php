<?php
class Tour
{
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
                "capacity" => 20,
                "company_id" => 1,
            ],
            [
                "id" => 2,
                "name" => "横浜ランドマークタワーツアー",
                "place" => "横浜ランドマークタワー",
                "capacity" => 20,
                "company_id" => 1,
            ],
        ];
        return $values;
    }
}
