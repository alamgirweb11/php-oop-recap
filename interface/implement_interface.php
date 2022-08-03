<?php 
interface Person  
{
     public function  getPersonInfoSuccessMessage();
}

class PersonInfo implements Person 
{
    private $name;
    private $phone;
    private $email;

    public function __construct($name, $phone, $email)
    {
         $this->name = $name;
         $this->name = $phone;
         $this->name = $email;
    }

     public function personInfo(){
         return "Name: ". $this->name . ". Email: ".$this->email . ". Phone: ".$this->phone;
     }

     public function getPersonInfoSuccessMessage()
     {
        echo "Fetch Person Information Successfully";
     }

}

$personInfo = new PersonInfo("Alamgir Hosen", "01200000000", "alamgirtest@gmail.com");
 echo "Person record: ".$personInfo->personInfo() ."<br>";
$personInfo->getPersonInfoSuccessMessage();
