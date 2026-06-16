<?php
require_once __DIR__ . "/Encryptor.php"; //import de l'encryptor

// On initialise la navigation autorisé
const AVAILABLE_ROUTES = [
  'Home' => 'HomeController',
  'Drones' => 'DronesController',
  'Custom' => 'CustomDroneController',
];

//on récupère la page de guard (l'index) → le shield
$page = 'Home';
if (isset($_GET['page'])) {
  //si la page est vérifié on chiffre l'url
  $decrypted = Encryptor::decrypt($_GET['page']);
  //si la clé de tableau est éxistante on déchiffre
  if ($decrypted && array_key_exists($decrypted, AVAILABLE_ROUTES)) {
    $page = $decrypted;
  }
}
//si jamais la page n'existe pas dans une des clée du tableau indexé on redirige sur le home automatiquement
if (!array_key_exists($page, AVAILABLE_ROUTES)) {
  $page = 'Home';
}


//on charge le fichier controller en placant le chemin dans une variable
$controllerName = AVAILABLE_ROUTES[$page];
$controllerFile = __DIR__ . '/../controllers/' . $controllerName . '.php';

//on vérifie que le fichier est existant
if (file_exists($controllerFile)) {
  //si le fichier existe on l'importe
  require_once $controllerFile;
  //on instancie et on appel la methode
  $app = new $controllerName();
  //structure conditionelle pour switché entre les pages
  if ($page === 'Home') {
    $app->homePage();
  } elseif ($page === 'Drones') {
    $app->dronesPage();
  } elseif ($page === 'Custom') {
    $app->customDronePage();
  }
} else {
  echo "Controleur introuvable";
}
