<?php
require_once __DIR__ . '/Games.php';

class PC extends Games {
    public $system_requirements;

    // override
    public function __construct($_title, $_PEGI, $_platform, $_multiplayer, $_price, $_system_requirements) {
        parent::__construct($_title, $_PEGI, $_platform, $_multiplayer, $_price);

        if(is_string($_system_requirements)) {
            $this->system_requirements = $_system_requirements;
        } else {
            throw new Exception('errore GG WP');
        }
    }
}
?>