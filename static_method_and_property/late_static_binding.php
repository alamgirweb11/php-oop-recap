<?php  

// problem code 
// class StudentInfo 
// {
//      protected static $mobileNumber = "0120000000";

//      public static function getMobileNumber(){
//          echo self::$mobileNumber;
//      }
// }

// class StudentInfoUpdate extends StudentInfo 
// {
//     protected static $mobileNumber = "012045510";
// }

// StudentInfoUpdate::getMobileNumber(); // output:  0120000000 not 012045510


// solution code
class StudentInfo 
{
     protected static $mobileNumber = "0120000000";

     public static function getMobileNumber(){
         echo static::$mobileNumber;
     }
}

class StudentInfoUpdate extends StudentInfo 
{
    protected static $mobileNumber = "012045510";
}

StudentInfoUpdate::getMobileNumber();  // output: 012045510 not 0120000000