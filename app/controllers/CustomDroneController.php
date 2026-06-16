<?php
require_once __DIR__ . "/../models/CustomDroneManager.php";
class CustomDroneController
{
  public function customDronePage()
  {
    $dronesManager = new CustomDroneManager();

    global $scripts_js;
    $scripts_js = [DataScript::MOBILE_MENU, DataScript::UNCRN];
    
    require_once __DIR__ . '/../views/layouts/customDrone.php';
  }
}