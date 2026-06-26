<?php
require_once __DIR__ . "/../models/LoginManager.php";
class LoginController
{
  public function loginPage()
  {
    $loginManager = new LoginManager();

    global $scripts_js;
    $scripts_js = [DataScript::MOBILE_MENU, DataScript::UNCRN, DataScript::FONT_AWESOME];

    require_once __DIR__ . '/../views/layouts/login.php';
  }
}
