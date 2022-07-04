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
          echo "Bike Name: ".$this->name ."<br>" . "Brand Name: ". $this->brand. "<br>" . " Model: ".$this->model;
      }
}

$bike_info = new Bike();

$bike_info->set_name('Suzuki GSX R150 SP with ABS');
$bike_info->set_brand('Suzuki');
$bike_info->set_model('GSX R150');
$bike_info->get_bike_info();