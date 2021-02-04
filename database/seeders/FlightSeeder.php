<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->truncate();

        $datas = [
            [
                'destination_id' => 1,
                'name' => 'ZN001',
                'arrived_at' => '2021-02-01 08:00:00',
            ],
            [
                'destination_id' => 1,
                'name' => 'QT001',
                'arrived_at' => '2021-02-01 10:00:00',
            ],
            [
                'destination_id' => 1,
                'name' => 'ZN002',
                'arrived_at' => '2021-02-01 12:00:00',
            ],
            [
                'destination_id' => 2,
                'name' => 'ZN003',
                'arrived_at' => '2021-02-01 14:00:00',
            ],
            [
                'destination_id' => 2,
                'name' => 'QT002',
                'arrived_at' => '2021-02-01 16:00:00',
            ],
        ];

        foreach($datas as $data) {
            $flight = new Flight();
            $flight->destination_id = $data['destination_id'];
            $flight->name = $data['name'];
            $flight->arrived_at = $data['arrived_at'];
            $flight->save();
        }
    }
}
