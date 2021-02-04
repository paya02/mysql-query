<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->truncate();

        $datas = [
            [
                'id' => 1,
                'name' => 'バーチャル東京',
            ],
            [
                'id' => 2,
                'name' => 'バーチャル大阪',
            ],
        ];

        foreach($datas as $data) {
            $destination = new Destination();
            $destination->id = $data['id'];
            $destination->name = $data['name'];
            $destination->save();
        }
    }
}
