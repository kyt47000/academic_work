
abstract class Shape {
    abstract double area();
}

class Triangle extends Shape {
    double base;
    double height;

    Triangle(double base, double height) {
        this.base = base;
        this.height = height;
    }

    @Override
    double area() {
        return 0.5 * base * height;
    }
}

class Rectangle extends Shape {
    double length;
    double width;

    Rectangle(double length, double width) {
        this.length = length;
        this.width = width;
    }

    @Override
    double area() {
        return length * width;
    }
}

class Circle extends Shape {
    double radius;

    Circle(double radius) {
        this.radius = radius;
    }

    @Override
    double area() {
        return Math.PI * radius * radius;
    }
}

public class Pt20v2 {
    public static void main(String[] args) {
        System.out.println("Area finding....");
        Shape obj;
        obj=new Triangle(3,4);
        System.out.println("Area of Triangle : "+ obj.area());
        obj=new Rectangle(6,7);
        System.out.println("Area of Rectangle: "+obj.area());
        obj=new Circle(5);
        System.out.println("Area of Circle   : "+obj.area());
    }
}

