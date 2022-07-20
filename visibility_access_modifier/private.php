<?php 
class BaseClass{
        private $carBrand = 'BMW';
        private $carModel = 'BMW X7';

        public function getCarBrand(){
               return $this->carBrand;
        }
}

class ChildClass extends BaseClass{
        public function getCarModel(){
             return $this->carModel;
        }
}

// base class object
$baseClassObject = new BaseClass();
echo $baseClassObject->getCarBrand();

// cannot access the private property outside of own class/method
echo $baseClassObject->carModel; // output: Fatal error: Uncaught Error: Cannot access private property

// child class object 
$childClassObject = new ChildClass();
echo $childClassObject->getCarModel();  // output: get notice

