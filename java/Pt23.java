import java.util.Scanner;

class DivideByZero extends Exception {
    public DivideByZero(String message) {
        super(message);
    }
}

public class Pt23 {
    static Scanner sc = new Scanner(System.in);
    
    static double div(double a, double b) throws DivideByZero {
        if (b == 0) {
            throw new DivideByZero("Cannot divide by zero");
        }
        return (a / b);
    }
    
    public static void main(String[] args) {
        try {
            System.out.println("Let's perform 'Division' Today.....");
            System.out.print("Enter Divisor ? ");
            double divisor = sc.nextDouble();
            System.out.print("Enter Dividend ? ");
            double dividend = sc.nextDouble();
            double ans = div(divisor, dividend);
            System.out.println("Result: " + ans);
        } catch (DivideByZero e) {
            System.out.println("An error occurred: " + e.getMessage());
        } catch (Exception e) {
            System.out.println("An error occurred: " + e.getMessage());
        } finally {
            System.out.println("Division operation completed.");
        }
    }
}
