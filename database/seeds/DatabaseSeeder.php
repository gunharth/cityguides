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

        factory(App\Destination::class, 20)->create()->each(function($d) {
            $d->categories()->saveMany(factory(App\Category::class, 5)->make())->each(function($c) {
	            $c->records()->saveMany(factory(App\Record::class, 5)->make());
	        })

            	;
        });
    }
}
