<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DormitoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dormitories')->delete();
        $data = [
            ['name' => 'Faith Domitory'],
            ['name' => 'Peace Domitory'],
            ['name' => 'Grace Domitory'],
            ['name' => 'Success Domitory'],
            ['name' => 'Trust Domitory'],
        ];
        DB::table('dormitories')->insert($data);
    }
}
