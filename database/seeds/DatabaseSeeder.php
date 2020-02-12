<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3)->create()->each(function($u) {
            echo $u . "\n";
            $u->questions()
                ->saveMany(
                    factory(App\Question::class, rand(3, 7))->make()
                );
        });
    }
}
