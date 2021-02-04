<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Destination extends Model
{
    use HasFactory;

    /**
     * 方法１
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getLastFlightCase1()
    {
        return Destination::addSelect([
            'last_flight' =>
                Flight::select(['name'])
                      ->whereColumn('destination_id', 'destinations.id')
                      ->orderByDesc('arrived_at')
                      ->limit(1)
        ])->get();
    }

    /**
     * 方法２
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getLastFlightCase2()
    {
        // ユーザー定義変数をセット
        DB::statement('SET @row_num = 0;');
        // destination_idごとに順位付け
        $flights = Flight::query()
            ->select(
                'flights.*',
                DB::raw('if(@_last_id != flights.destination_id, @row_num := 1, @row_num := @row_num + 1) as row_num'),
                DB::raw('@_last_id := flights.destination_id as last_id'),
            )
            ->orderBy('flights.destination_id')
            ->orderByDesc('flights.arrived_at');

        return Destination::query()
            ->select([
                'destinations.*',
                'flights.name as flights_name',
                'flights.arrived_at as flights_arrived_at',
            ])
            ->joinSub($flights, 'flights', function ($join) {
                $join->on('destinations.id', '=', 'flights.destination_id')
                      ->where('flights.row_num', 1);
            })
            ->get();
    }

    /**
     * 方法３
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getLastFlightCase3()
    {
        return DB::select("
            SELECT
              d.id as id
            , d.name as name
            , f.name as last_flight
            FROM
              destinations d
            JOIN
                (
              SELECT *
              , ROW_NUMBER() OVER (PARTITION BY destination_id
                                    ORDER BY arrived_at DESC) AS row_num
              FROM flights
              ) f
            ON
                d.id = f.destination_id
            AND row_num = 1
        ");
    }

}
