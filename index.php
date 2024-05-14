<?php 
class Car {
    private $hasParkBrake = false;

    public function setParkBrake($state) {
        $this->hasParkBrake = $state;
    }

    public function start() {
        try {
            if ($this->hasParkBrake) {
                throw new Exception("Frein à main actif !");
            }
        } catch (Exception $e) {
            echo "Frein à main actif. Arrêt de la voiture.\n";
            $this->setParkBrake(false);
        } finally {
            echo "Ma voiture roule comme un donut !\n";
        }
    }
}

// Exemple d'utilisation
$maVoiture = new Car();
$maVoiture->setParkBrake(true);
$maVoiture->start();
