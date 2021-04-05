<?php
require __DIR__."/vendor/autoload.php";

use Faker\Provider\Lorem;
use Source\Models\Post;

try {
    for ($i=0; $i < 10; $i++) { 
        $post = new Post();
        $post->title = Lorem::text(80);
        $post->description = Lorem::paragraph(3, true);
        $post->save();
    }
} catch (\Throwable $th) {
   echo $th;
}