<?php 

class VarMethod{
            private $email = "demo@gmail.com";
            public  $name = "Demo";
            // static property
            static public $country = "Bangladesh";

        public function override_name($new_name){
                return $this->name = "Name: ". $new_name;
        }

        public function print_email(){
             echo "Email: ".$this->email . "<br>";
        }

        // static function
       public static function get_country(){
           echo self::$country;
       }
}

$var_method = new VarMethod();
echo $var_method->override_name("Test Name") . "<br>";
$var_method->print_email();
// access static method
VarMethod::get_country();