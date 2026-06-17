<?php
require_once __DIR__ . "/../config/database.php";

class SignupManager
{
  private $bdd;

  public function __construct()
  {
    $database = new Lod_db();
    $this->bdd = $database->getConnection();
  }
}
