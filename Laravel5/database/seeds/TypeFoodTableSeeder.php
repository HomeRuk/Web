<?php

use Illuminate\Database\Seeder;

class TypeFoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tf1 = new App\TypeFood();
        $tf1->name = 'ต้ม';
        $tf1->save();
        
        $tf2 = new App\TypeFood();
        $tf2->name = 'ผัด';
        $tf2->save();
           
        $tf3 = new App\TypeFood();
        $tf3->name = 'แกง';
        $tf3->save();
        
        $tf4 = new App\TypeFood();
        $tf4->name = 'ทอด';
        $tf4->save();
     
        $tf5 = new App\TypeFood();
        $tf5->name = 'นึ่ง';
        $tf5->save();
     
        $tf6 = new App\TypeFood();
        $tf6->name = 'ตุ๋น';
        $tf6->save();
        
        $tf7 = new App\TypeFood();
        $tf7->name = 'ย่าง';
        $tf7->save();
     
     
     
    }
}
