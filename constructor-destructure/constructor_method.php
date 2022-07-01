<?php  
class constructorMethod{
        public function __construct()
        {
             echo "I'm from construct method <br>";
        }

        public function simple_function(){
              echo "Simple function.";
        }
}

$constructor_method = new constructorMethod();
$constructor_method->simple_function();
echo "<br>";

// constructor method with arguments
class withArguments{
        public function __construct($car_brand)
        {
                $this->car_brand = $car_brand;   
        }

        public function get_car_brand(){
               echo "Car brand name is ".$this->car_brand.".";
        }
}

// set arguments value
$with_argument = new withArguments("BMW");
$with_argument->get_car_brand();