<?php 
class ParentClass 
{
     public $userName = "";
     public function getUserName()
     {
         echo "User name is ".$this->userName."<br>";
     }
}

class ChildClass extends ParentClass 
{
      public function getUserName()
      {
          parent::getUserName();
      }
}

$parentClass = new ParentClass();
$parentClass->userName = "Test user";
$parentClass->getUserName();

// child class
$childClass = new ChildClass();
$childClass->userName = "Alamgir Hosen";
$childClass->getUserName();
