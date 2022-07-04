<?php  
class Bike{
      private $name = "";
      private $brand = "";
      private $model = "";

      public function set_name($name){
            $this->name = $name;
            return $this;
      }
      public function set_brand($brand){
            $this->brand = $brand;
            return $this;
      }
      public function set_model($model){
            $this->model = $model;
            return $this;
      }

      public function get_bike_info(){
          echo "Bike Name: ".$this->name ."<br>" . "Brand Name: ". $this->brand. "<br>" . " Model: ".$this->model;
      }
}

$bike_info = new Bike();
$bike_info->set_name('Suzuki GSX R150 SP with ABS')->set_brand('Suzuki')->set_model('GSX R150')->get_bike_info();
