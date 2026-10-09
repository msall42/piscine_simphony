<?php

class Text{
    private $data;

    public function __construct($data){
        $this->data = $data;
    }
    public function append($text){
        $this->data[] = $text;
    }
    public function readData(){
        $html = '';
        foreach ($this->data as $text)
        {
            $html .= '<p>' . $text . '</p>';
        }
        return $html;
    }
}