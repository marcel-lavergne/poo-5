<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
    {
        public function changeWheel() {
            return 'changeWheelBicycle';
        }
        public function switchOff(): bool
        {
            return false;
        }
        public function switchOn(): bool
        {
           if ($this->getCurrentSpeed()>10){
               return true;
           }else{
               return false;
        }
}

}
