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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'hello@gunharth.io',
            'password' => bcrypt('123456'),
        ]);

        DB::table('destinations')->insert([
            'name' => 'New York',
            'description' => 'Lorem ipsum',
            'latitude' => '40.712784',
            'longitude' => '-74.005941',
        ]);

        DB::table('categories')->insert([
            'destination_id' => 1,
            'name' => 'Dining Out',
        ]);

        DB::table('records')->insert([
            'category_id' => 1,
            'name' => 'A great Venue',
        ]);


        factory(App\Destination::class, 19)->create()->each(function($d) {
            $d->categories()->saveMany(factory(App\Category::class, 5)->make())->each(function($c) {
	            $c->records()->saveMany(factory(App\Record::class, 5)->make());
	        })

            	;
        });
    }
}
