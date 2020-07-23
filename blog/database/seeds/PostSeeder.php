<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new App\Model\Post([
            'author_id' => 1,
            'title' => 'What a crazy world is my Wonderlands!',
            'description' => 'At cum soleat disputationi, quo veri admodum vituperata ad. Ea vix ceteros complectitur, vel cu nihil nullam.',
            'content' => 'His audiam deserunt in, eum ubique voluptatibus te. In reque dicta usu. Ne rebum dissentiet eam, vim omnis deseruisse id. Ullum deleniti vituperata at quo, insolens complectitur te eos, ea pri dico munere propriae. Vel ferri facilis ut, qui paulo ridens praesent ad. Possim alterum qui cu. Accusamus consulatu ius te, cu decore soleat appareat usu'
        ]);

        $post->save();

        $post = new App\Model\Post([
            'author_id' => 1,
            'title' => 'Me, Myself & I in Wonderlands!',
            'description' => 'Ea vix ceteros complectitur, vel cu nihil nullam.',
            'content' => 'In reque dicta usu. Ne rebum dissentiet eam, vim omnis deseruisse id. Ullum deleniti vituperata at quo, insolens complectitur te eos, ea pri dico munere propriae. Vel ferri facilis ut, qui paulo ridens praesent ad. Possim alterum qui cu. Accusamus consulatu ius te, cu decore soleat appareat usu'
        ]);

        $post->save();

        $post = new App\Model\Post([
            'author_id' => 4,
            'title' => 'The only sensible way to live in this world is without rules.',
            'description' => 'Meis vocent signiferumque pri et. Facilis corpora recusabo ne quo, eum ne eruditi blandit suscipiantur.',
            'content' => 'Ne rebum dissentiet eam, vim omnis deseruisse id. Ullum deleniti vituperata at quo, insolens complectitur te eos, ea pri dico munere propriae. Vel ferri facilis ut, qui paulo ridens praesent ad. Possim alterum qui cu. Accusamus consulatu ius te, cu decore soleat appareat usu.'
        ]);

        $post->save();
    }
}
