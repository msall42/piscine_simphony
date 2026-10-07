<?php
$content = file_get_contents("ex01.txt");
$values = explode(",", trim($content));
foreach ($values as $value)
{
    echo $value . "\n";
}