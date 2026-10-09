<?php

class TemplateEngine
{
    public function createFile($filename, $templateName, $parameters)
    {
        $template = file_get_contents($templateName);
        foreach ($parameters as $key => $value)
        {
            $placeholder = '{' . $key . '}';
            $template = str_replace($placeholder, $value, $template);
        }
        
        file_put_contents($filename, $template);
    }
}