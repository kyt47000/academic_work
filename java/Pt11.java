import java.util.Scanner;

public class Pt11 {
    static Scanner sc = new Scanner(System.in);
    public static void main(String[] args) {
        float area;
        int c;
        do {
            System.out.println("1. Get Area Of Circle");
            System.out.println("2. Get Area Of Rectangle");
            System.out.println("0. Exit");
            c = sc.nextInt();
            switch (c) {
                case 1:
                    System.out.println("Enter radius of the circle:");
                    float r = sc.nextFloat();
                    area = area(r);
                    System.out.println("Area of Circle: " + area);
                    break;
                case 2:
                    System.out.println("Enter height and width of the rectangle:");
                    float h = sc.nextFloat();
                    float w = sc.nextFloat();
                    area = area(h, w);
                    System.out.println("Area of Rectangle: " + area);
                    break;
                case 0:
                    System.out.println("Exiting...");
                    sc.close();
                    System.exit(0);
                    break;
                default:
                    System.out.println("Invalid choice. Please enter 1, 2, or 0.");
            }
        } while (c != 0);
    }

    static float area(float r) {
        return 3.14f * r * r;
    }

    static float area(float h, float w) {
        return h * w;
    }
}
