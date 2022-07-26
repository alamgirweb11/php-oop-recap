<?php
class CustomerSubscription
{
     public $name = "Alamgir Hosen";
     protected $subscription = false;

     public function is_subscription(){
           return $this->subscription = true;
     }
}

class CustomerCourse extends CustomerSubscription 
{
    private $total_course = 15;
    
    public function subscription_course(){
              if($this->is_subscription() == true){
                  echo 'Customer name is '. $this->name .'. Total subscription courses '.$this->total_course.'.';
              }
    }
}

$customer_subscription = new CustomerSubscription();
$customer_course = new CustomerCourse();
$customer_course->subscription_course();