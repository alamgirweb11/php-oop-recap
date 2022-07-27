<?php
class Customer
{
     public $name = "Alamgir Hosen";

     public final function getCustomerName(){
           echo $this->name;
     }
}

class CustomerProduct extends Customer
{
    public function getCustomerName(){ // cannot overriding getCustomerName method because use final keyword in parent class 
        echo $this->name;
  }
}