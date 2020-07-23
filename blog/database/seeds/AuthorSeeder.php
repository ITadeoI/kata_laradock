<?php

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new App\Model\Author([
            'name' => 'alice',
            'surname' => 'wonderlands'
        ]);

        $author->save();

        $author = new App\Model\Author([
            'name' => 'chesire',
            'surname' => 'wonderlands'
        ]);

        $author->save();

        $author = new App\Model\Author([
            'name' => 'bruce',
            'surname' => 'wayne'
        ]);

        $author->save();

        $author = new App\Model\Author([
            'name' => 'joker',
            'surname' => 'phoenix'
        ]);

        $author->save();
    }
}
