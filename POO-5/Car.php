<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function changeWheel()
    {
        return 'ChangeWheelCar';
    }

    /**
     * @return bool
     */
    public function isHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    /**
     * @param bool $hasParkBrake
     */
    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function setParkBrake()
    {
        if ($this->hasParkBrake == true){
           return $this->hasParkBrake == false;
        }else {
            return $this->hasParkBrake == true;
        }
    }

    public function start():bool
    {
        if ($this->hasParkBrake === true) {
            throw new Exception("Park break is active");
        }
        return "Car started";
    }
    public function switchOn(): bool
    {
        return true;
    }
     public function switchOff(): bool
    {
        return false;
    }
}