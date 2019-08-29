<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataInsert=[
            [
                'categoryName'=>'Văn Phòng',
                'moreInfo'=>'Word, Exel',
            ],
            [
                'categoryName'=>'Hệ Thống',
                'moreInfo'=>'Win, Linux, Unix',
            ]
        ];
        DB::table('categories')->insert($dataInsert);
    }
}
