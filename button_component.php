<h3>Button Component</h3>

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

$button = new Button("Click Me");
echo $button->toString();

?>
