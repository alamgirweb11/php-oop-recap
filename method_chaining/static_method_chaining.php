<?php  
class Bike{
      private static $name = "";
      private static $brand = "";
      private static $model = "";

      public static function set_name($name){
            self::$name = $name;
            return new static;
      }
      public static function set_brand($brand){
            self::$brand = $brand;
            return new static;
      }
      public static function set_model($model){
            self::$model = $model;
            return new static;
      }

      public static function get_bike_info(){
          echo "Bike Name: ".self::$name ."<br>" . "Brand Name: ". self::$brand. "<br>" . " Model: ".self::$model;
      }
}


Bike::set_name('Suzuki GSX R150 SP with ABS')->set_brand('Suzuki')->set_model('GSX R150')->get_bike_info();
