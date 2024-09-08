import java.util.Scanner;

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

public class Pt20 {
    public static void main(String[] args) {
        int c;
        Scanner sc = new Scanner(System.in);
        System.out.println("Area finding ...");
        do {
            System.out.println("1. Triangle \n2. Circle \n3. Rectangle \n0. Exit");
            System.out.print("Enter Your Choice ? ");
            c = sc.nextInt();
            switch (c) {
                case 1:
                    System.out.println("\nTriangle Area : ");
                    System.out.print("Enter base: ");
                    double base = sc.nextDouble();
                    System.out.print("Enter height: ");
                    double height = sc.nextDouble();
                    Triangle t = new Triangle(base, height);
                    System.out.println("Area: " + t.area());
                    t = null;
                    System.gc();
                    break;
                case 2:
                    System.out.println("\nCircle Area : ");
                    System.out.print("Enter radius: ");
                    double radius = sc.nextDouble();
                    Circle c1 = new Circle(radius);
                    System.out.println("Area: " + c1.area());
                    c1 = null;
                    System.gc();
                    break;
                case 3:
                    System.out.println("\nRectangle Area : ");
                    System.out.print("Enter length: ");
                    double length = sc.nextDouble();
                    System.out.print("Enter width: ");
                    double width = sc.nextDouble();
                    Rectangle r = new Rectangle(length, width);
                    System.out.println("Area: " + r.area());
                    r = null;
                    System.gc();
                    break;
                case 0:
                    System.out.println("Exiting.....");
                    break;
                default:
                    System.out.println("Invalid choice!");
            }
        } while (c != 0);
    }
}

