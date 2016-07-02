<?php

use Illuminate\Database\Seeder;
use App\TypeFood;
class TypeFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typefoodS1 = new TypeFood();
        $typefoodS1->typefood_name = 'ต้ม';      
        $typefoodS1->save();
        
        $typefoodS2 = new TypeFood();
        $typefoodS2->typefood_name = 'ผัด';      
        $typefoodS2->save();
        
        $typefoodS3 = new TypeFood();
        $typefoodS3->typefood_name = 'แกง';      
        $typefoodS3->save();
        
        $typefoodS4 = new TypeFood();
        $typefoodS4->typefood_name = 'ทอด';      
        $typefoodS4->save();
        
        $typefoodS5 = new TypeFood();
        $typefoodS5->typefood_name = 'ย่าง';      
        $typefoodS5->save();
        
        $typefoodS6 = new TypeFood();
        $typefoodS6->typefood_name = 'นึ่ง';      
        $typefoodS6->save();
    }
}
