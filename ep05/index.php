<?php
require __DIR__."/vendor/autoload.php";

use CoffeeCode\Paginator\Paginator;
use Source\Models\Post;

$post = new Post();
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_STRIPPED);
$paginator = new Paginator("http://localhost/phptip/ep05/?page=", "Primeira", ["Primeria Página", "Primeira"], ["Ultima página", "Ultima"]);
//$paginator = new Paginator("http://localhost/phptip/ep05/?page=");
$paginator->pager($post->find()->count(), 2, $page, 2);

echo "<link rel='stylesheet' href='styles.css'>";

echo "<section>";
echo "<h1>Página {$paginator->page()} de {$paginator->pages()}</h1>";

$posts = $post->find()->limit($paginator->limit())->offset($paginator->offset())->fetch(true);
if($post){
    foreach ($posts as $post) {
        echo "
        <article>
            <h1>{$post->title}</h1>
            <p>{$post->description}</p>
        </article>
        ";
    }
}
echo $paginator->render();
echo "</section>";
?>


