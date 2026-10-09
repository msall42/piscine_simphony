<?php
require_once 'Text.php';

class TemplateEngine
{
    public function createFile($fileName, Text$text)
    {
        $html = '<!Doctype html>
        <html><head><meta charset="UTF-8"> <title>Text</title></head><body>'; $html .= $text->readData(); $html .= '</body></html>';
        file_put_contents($fileName, $html);
    }
}