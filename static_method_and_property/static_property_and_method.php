<?php  
class StaticParentClass
{
    public static $count = 0;
    public static $a = 10;
    public static $b = 20;

    public static function sum(){
          echo self::$a + self::$b . "<br>";
    }
}

class StaticChildClass extends StaticParentClass 
{
     public static function increment(){
        echo "Count value is " . self::$count++ . "<br>";
     }
}

StaticParentClass::sum();
StaticChildClass::increment();
StaticChildClass::increment();
StaticChildClass::increment();
StaticChildClass::increment();
StaticChildClass::increment();
StaticChildClass::increment();