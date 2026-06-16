<?php
require_once __DIR__ . "/../models/DronesManager.php";
class DronesController
{
  public function dronesPage()
  {
    $dronesManager = new DronesManager();

    global $scripts_js;
    $scripts_js = [DataScript::MOBILE_MENU, DataScript::UNCRN];

    $drone_category = [
      DataText::CATEGORY_BEGINERS,
      DataText::CATEGORY_VIEWERS,
      DataText::CATEGORY_FPV,
      DataText::CATEGORY_FARMERS,
      DataText::CATEGORY_MAPPING,
      DataText::CATEGORY_SECURITY
    ];

    require_once __DIR__ . '/../views/layouts/drones.php';
  }
}
