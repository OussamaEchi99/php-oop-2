<?php

class User {
    public $nome;

    public $cognome;

    public $email;

    public $nick_name;

    public $platform;

    protected $basket = [];

    public function __construct($_nome, $_cognome, $_email, $nick_name, $platform) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
        $this->nick_name = $_nick_name;
        $this->platform = $_platform;
    }

    public function getFullName() {
        return $this->nome . ' ' . $this->cognome;
    }

    public function addGame($game) {
        $this->basket[] = $game;
    }

    public function getBasket() {
        return $this->basket;
    }
}
?>