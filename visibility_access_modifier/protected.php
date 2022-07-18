<?php

class ProtectedVisibility{
            protected $name = "Alamgir Hosen";
            protected $email = "example@gmail.com";

            public function getNameEmail(){
           return "Name: ".$this->name. ", Email: ".$this->email;
      }
}

// child class

class ChildClass extends ProtectedVisibility{
        public function getOnlyName(){
              return "Only Name: ".$this->name;
        }
}

// called parent class
$parentClassObject = new ProtectedVisibility();
echo $parentClassObject->getNameEmail();
echo "<br>";

// called child class
$childClassObject = new ChildClass();
echo $childClassObject->getOnlyName();
