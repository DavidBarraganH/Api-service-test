<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          "Bus", "Carro", "taxi", "Uber", "Helicoptero", "Bicicleta"
        ];


        if(count(Menu::all()) == 0)
        {
            foreach ($data as $menus) {
                DB::table('menus')->insert([
                    'name' => $menus,
                    "created_at" => date('Y/m/d H:i:s'),
                    "updated_at" => date('Y/m/d H:i:s')
                ]);
            }
        }

    }
}
