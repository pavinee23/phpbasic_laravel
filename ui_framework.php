<?php

class Button {
    public $text;

    public function __construct($text){
        $this->text = $text;
    }

    public function toString(){
        $style = "
        background-color: #007bff; 
        color: #fff; 
        padding: 10px 20px; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer;
        ";

        return "<button style='$style'>$this->text</button>";
    }



}

class Input {
    public $type;

    public function __construct($type){
        $this->type = $type;
    }

    public function toString(){
        $style = "
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        ";

        return "<input type='$this->type' style='$style'>";
    }

}

?>