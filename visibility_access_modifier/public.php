<?php  
class BrandName{
      public $brand_name = 'Suzuki';

      public function get_brand_name(){
           return $this->brand_name;
      }
}

class ChildClass extends BrandName{
        public function child_brand_name(){
             return $this->brand_name;
        }
}

// called brand name from parent class
$parent_class = new BrandName();
echo $parent_class->get_brand_name() ."</br>";

// called brand name from child class
$child_class = new ChildClass();
echo $child_class->child_brand_name() ."</br>";

// called property outside of class
echo $parent_class->brand_name;

