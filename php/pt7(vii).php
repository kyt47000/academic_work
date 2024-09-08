<?php 
class Bank{ 
    function getRateOfInterest(){ 
        return 0; 
        } 
    } //Creating child classes.
class SBI extends Bank{ 
    function getRateOfInterest(){ 
        return 8; 
        } 
} 
class AXIS extends Bank{ 
    function getRateOfInterest(){ 
        return 9; 
        } 
} //Test class to create objects and call the methods 

        $s = new SBI();
        $a = new AXIS(); 
        echo "SBI Rate of Interest: ". $s->getRateOfInterest(). "<br>"; 
        echo "AXIS Rate of Interest: ". $a->getRateOfInterest(). "<br>"; 
?>