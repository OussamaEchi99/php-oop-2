<?php
require_once __DIR__ . '/Platform.php';

class Games {

    use Platform;

    public $title;

    public $PEGI;

    public $multiplayer;

    public $price;

    public function __construct($_title, $_platform, $_PEGI, $_multiplayer, $_price) {
        $this->title = $_title;
        $this->platform = $_platform;
        $this->PEGI = $_PEGI;
        $this->multiplayer = $_multiplayer;
        $this->price = $_price;
    }
}
?>