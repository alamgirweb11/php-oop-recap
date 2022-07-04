<?php  
class destructorMethod{
        public function __construct()
        {
             echo "I'm from construct method <br>";
        }

        public function simple_function(){
              echo "Simple function.";
        }

        public function __destruct()
        {
             echo "I'm from destruct method";
        }
}

$constructor_method = new destructorMethod();
$constructor_method->simple_function();
echo "<br>";
