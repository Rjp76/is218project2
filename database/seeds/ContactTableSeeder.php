<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Contact::class, 5)->create()->each(function ($msg) {
            // $u->posts()->save(factory(App\Post::class)->make());
        });
    }
}
