<?php 
abstract class User  
{
       abstract protected function getName($name);
}

class UserData extends User  
{
      public function getName($name){
             echo "User name is ." .$name;
      }
}

$userData = new UserData();
$userData->getName("Alamgir Hosen");