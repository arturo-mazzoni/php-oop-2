<?php

class Blogger extends User {
  public $blogName;
  public $subscriptions;

  public function __construct($_id, $_blogName) {
    parent::__construct($_id);
    $this->blogName = $_blogName;
  }

  public function setSubsriptions($_subscriptions) {
    $this->subscriptions = $_subscriptions;
  }

  public function getSubsriptions() {
    return $this->subscriptions;
  }
}
