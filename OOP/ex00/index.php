<?php
require_once 'TemplateEngine.php';

$engine = new TemplateEngine();

$parameters = [
    'nom' => 'Le Petit Prince', 'auteur' => 'Antoine de Saint-Exupéry', 'description' => 'Un conte philosophique celèbre', 'prix' => '12'
];
$engine->createFile('book.html', 'book_description.html', $parameters);