<?php
require_once 'TemplateEngine.php';

$text = new Text(['Premier paragraphe', 'Deuxieme paragraphe']);

$text->append('Troisieme paragraphe');

$engine = new TemplateEngine();
$engine->createFile('output.html', $text);