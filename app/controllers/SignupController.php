<?php
require_once __DIR__ . "/../models/SignupManager.php";
class SignupController
{
  public function signupPage()
  {
    $signupManager = new SignupManager();

    global $scripts_js;
    $scripts_js = [DataScript::MOBILE_MENU, DataScript::UNCRN, DataScript::FONT_AWESOME];

    require_once __DIR__ . '/../views/layouts/signup.php';
  }
}
