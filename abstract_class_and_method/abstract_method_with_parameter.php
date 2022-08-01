<?php  
// problem for same parameter issue 
// abstract class Student 
// {
//       abstract protected function getStudentInfo($name, $roll);
// }

// class StudentInfo extends Student
// {
//      public function getStudentInfo($name, $roll, $prefix)
//      {
//          echo "Student name ".$prefix." ".$name." Roll no ".$roll;
//      }
// }

// $getStudentInfo = new StudentInfo();
// $getStudentInfo->getStudentInfo("Alamgir Hosen", 2200011); 
/** output: Fatal error: Declaration of StudentInfo::getStudentInfo($name, $roll, $prefix) 
           *must be compatible with Student::getStudentInfo($name, $roll) */ 


// solved code
abstract class Student 
{
      abstract protected function getStudentInfo($name, $roll);
}

class StudentInfo extends Student
{
     public function getStudentInfo($name, $roll, $prefix="Md")
     {
         echo "Student name ".$prefix." ".$name.", Roll no ".$roll;
     }
}

$getStudentInfo = new StudentInfo();
$getStudentInfo->getStudentInfo("Alamgir Hosen", 2200011);