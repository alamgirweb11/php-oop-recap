<?php  
// destructor method with arguments
class withArguments{
    public function __construct($bike_brand)
    {
            $this->brand = $bike_brand;   
    }

    public function simple_function(){
            echo "Simple function.<br>";
      }

    public function __destruct()
    {
           echo "Bike brand name is ".$this->brand.".";
    }
}

// set arguments value
$with_argument = new withArguments("Suzuki");
$with_argument->simple_function();