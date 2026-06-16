<?php
// 1. On repart sur votre base stricte par défaut
$csp = "default-src 'self'; ";

// 2. SCRIPTS : Autorise vos fichiers JS locaux ET jsDelivr (requis par uniscript.js pour charger le SDK)
$csp .= "script-src 'self' https://jsdelivr.net 'unsafe-inline'; ";

// 3. STYLES : Autorise vos styles, Google Fonts, jsDelivr et les injections de styles d'Unicorn Studio
$csp .= "style-src 'self' https://googleapis.com https://jsdelivr.net 'unsafe-inline'; ";

// 4. POLICES : Conserve vos polices Google
$csp .= "font-src 'self' https://gstatic.com; ";

// 5. IMAGES : Ajoute le domaine d'Unicorn Studio au cas où vos scènes WebGL chargent des textures/images distantes
$csp .= "img-src 'self' data: blob: https://unicorn.studio; "; 

// 6. CONNEXIONS (Le point de blocage principal) :
// Autorise votre application à interroger l'API d'Unicorn Studio pour récupérer votre projet (3cc5zi7d2wI1yLyppAbD) et ses configurations WebGL JSON
$csp .= "connect-src 'self' https://jsdelivr.net https://unicorn.studio https://unicorn.studio; ";

// 7. MEDIAS : Conserve l'accès requis pour le flux vidéo de votre webcam
$csp .= "media-src 'self' blob:; ";

