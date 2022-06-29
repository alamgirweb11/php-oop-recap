<?php  
class Bike{
             private $name = "";
             private $brand = "";
             private $model = "";

      public function set_name($name){
            $this->name = $name;
      }
      public function set_brand($brand){
            $this->brand = $brand;
      }
      public function set_model($model){
            $this->model = $model;
      }

      public function get_bike_info(){
          echo "Bike name ".$this->name ."<br>" . "Brand Name ". $this->brand. "<br>" . " Model ".$this->model;
      }
}

$bike_info = new Bike();
