<?php
require_once __DIR__ . "/../models/HomeManager.php";
class HomeController
{
  public function homePage()
  {
    $homeManager = new HomeManager();
    
    global $scripts_js;
    $scripts_js = [DataScript::MOBILE_MENU];

    require_once __DIR__ . '/../views/layouts/home.php';
  }
}