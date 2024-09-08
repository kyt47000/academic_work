class Animal{  
    void eat(){
        System.out.println("Animal : eating...");
    }  
}  

class Dog extends Animal{  
    void bark(){
        System.out.println("Dog : barking...");
    }  
}  

class BabyDog extends Dog{  
    void weep(){
        System.out.println("BabyDog : weeping...");
    }  
}  

class TestInheritance2{  
    public static void main(String args[]){  
        BabyDog d = new BabyDog();  
        d.weep();  
        d.bark();  
        d.eat();  
    }  
}  
