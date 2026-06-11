<?php
require_once __DIR__ . "/../models/DronesManager.php";
class DronesController
{
  public function dronesPage()
  {
    $dronesManager = new DronesManager();

    global $scripts_js;
    $scripts_js = [DataScript::MOBILE_MENU];
    require_once __DIR__ . '/../views/layouts/drones.php';
  }
}