final class Bike{}  
  
class Pt21 extends Bike{   //Get Completion error
  void run(){System.out.println("running safely with 100kmph");}  
    
  public static void main(String args[]){  
  Pt21 honda= new Pt21();  
  honda.run();  
  }  
}  