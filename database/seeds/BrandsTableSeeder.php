<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ['VOLVO', 'VAZ', 'Mercedes', 'GAZ'];
        for($i = 0; $i < count($brands); $i++) {
            Brand::create([
                'brand_name' => $brands[$i],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
