<?php
class DronePrototyper
{
  private int $prototype_id; // Identifiant unique de la configuration
  private int $client_prototype_id; // ID du client (ou ID de session si invité)
  private int $frame_prototype_id; // ID du châssis de base sélectionné
  private string $prototype_name; // Nom du prototype choisi par le client
  private string $prototype_category; // Category du prototype choisi par le client
}
