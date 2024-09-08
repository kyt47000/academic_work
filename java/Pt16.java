class Animal {  
    void eat() {
        System.out.println("Animal : eating...");
    }  
}  

class Dog extends Animal {  
    void bark() {
        System.out.println("Dog : barking...");
    }  
}  

class Cat extends Animal {  
    void meow() {
        System.out.println("Cat : meowing...");
    }  
}  

class TestInheritance3 {  
    public static void main(String args[]) {  
        Cat c = new Cat();
        Dog d=new Dog();
        d.bark();
        d.eat();
        c.meow();  
        c.eat();  
        //c.bark();     //C.T.Error  //here Cat and Dog class not directly connected
    }  
}  
