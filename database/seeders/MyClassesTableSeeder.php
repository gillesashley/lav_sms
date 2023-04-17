<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'Nursery 1', 'class_type_id' => $ct[2]],
            ['name' => 'Nursery 2', 'class_type_id' => $ct[2]],
            ['name' => 'Nursery 3', 'class_type_id' => $ct[2]],
            ['name' => 'Primary 1', 'class_type_id' => $ct[3]],
            ['name' => 'Primary 2', 'class_type_id' => $ct[3]],
            ['name' => 'JHS 2', 'class_type_id' => $ct[4]],
            ['name' => 'JHS 3', 'class_type_id' => $ct[4]],
            ['name' => 'SHS 1', 'class_type_id' => $ct[5]],
            ['name' => 'SHS 2', 'class_type_id' => $ct[5]],
            ['name' => 'SHS 3', 'class_type_id' => $ct[5]],
            ];

        DB::table('my_classes')->insert($data);
    }
}
