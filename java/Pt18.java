//  Pt18


public class Car {
     int topSpeed;
     String name;

    public Car(int topSpeed, String name) {
        this.topSpeed = topSpeed;
        this.name = name;
    }

    @Override
    public String toString() {
        return "Car{" +
                "topSpeed=" + topSpeed +
                ", name='" + name + '\'' +
                '}';
    }

    public static void main(String[] args) {
        Car car1 = new Car(200, "Toyota");
        Car car2 = new Car(180, "Honda");
        Car car3 = new Car(220, "Ford");
        Car car4 = new Car(190, "Chevrolet");
        Car car5 = new Car(210, "BMW");

        System.out.println(car1);
        System.out.println(car2);
        System.out.println(car3);
        System.out.println(car4);
        System.out.println(car5);
    }
}

