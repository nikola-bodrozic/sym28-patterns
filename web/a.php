<?php

class Automobile
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class Bike
{
    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class BikeFactory
{
    public static function create($make, $model)
    {
        return new Bike($make, $model);
    }
}

// have the factory create the Automobile object
$veyron = BikeFactory::create('vevo', 'lkjlkj');

print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"
print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"
print_r($veyron->getMakeAndModel()); // outputs "Bugatti Veyron"

?>


