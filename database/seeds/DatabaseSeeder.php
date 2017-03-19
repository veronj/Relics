<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            ['name' => 'Frost Prime', 'type' => 'warframe'],
            ['name' => 'Soma Prime', 'type' => 'primary']
        ]);

        DB::table('parts')->insert([
            ['name' => 'Frost Prime system blueprint', 'item_id' => '1'],
            ['name' => 'Soma Prime receiver', 'item_id' => '2']
        ]);

        DB::table('relics')->insert([
            ['name' => 'A1', 'dropable' => '1'],
            ['name' => 'G2', 'dropable' => '1']
        ]);

        DB::table('parts')->insert([
            ['name' => 'neuroptics', 'item_id' => '1'],
            ['name' => 'chassis', 'item_id' => '1'],
            ['name' => 'systems', 'item_id' => '1'],
            ['name' => 'blueprint', 'item_id' => '1'],
            ['name' => 'receiver', 'item_id' => '2']
        ]);
    }
}
