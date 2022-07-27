<?php 

class Subscription
{
    public $userName = "";
    protected $subscription = false;
     public function subscription()
     {
         $this->subscription = true;
     }
}

class Enrollment extends Subscription
{
    private $enrollCourses = 10;
      public function subscription()
      {
         $this->subscription = true;
         echo "User name ".$this->userName.". Total enroll courses ".$this->enrollCourses;
      }
}

$enrollment = new Enrollment();
$enrollment->userName = "Alamgir Hosen";
$enrollment->subscription();