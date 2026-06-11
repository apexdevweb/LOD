<?php
require_once __DIR__ . "/../config/database.php";

class DronesManager
{
  private $bdd;

  public function __construct()
  {
    $database = new Lod_db();
    $this->bdd = $database->getConnection();
  }
}
