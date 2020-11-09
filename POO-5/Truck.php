<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var integer
     */
    private $capacity;

    /**
     * @var integer
     */
    private $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $loading)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->loading = $loading;
    }

    public function fullOrNot(): string
    {
        if ($this->loading >= $this->capacity) {
            return "Full";
        } else {
            return "In filling";
        }
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(string $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(string $loading): void
    {
        $this->loading = $loading;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function changeWheel() {
        return 'ChangeWheelTruck';
    }

}

