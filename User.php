<?php

class User {
  public $id;
  public $nome;
  public $dataDiNascita;
  public $nazionalita;
  public $username;
  public $email;
  public $password;

  public function __construct($_id) {
    $this->id = $_id;
  }
}