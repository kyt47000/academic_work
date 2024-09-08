import java.util.Scanner;

public class Pt24 extends Exception{
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        double amount = 0;
        System.out.println("Welcome to the Banking System.....");
        int c;
        try{
            do {
                
                System.out.print("\n1. Withdraw\n2. Deposit\n0. Exit");
                System.out.print("\nEnter your choice ? ");
                c = sc.nextInt();
                switch (c) {
                    case 1:
                        System.out.print("Amount to be withdrawn ? ");
                        double w = sc.nextDouble();
                        if(amount - w <= 2000) throw new Exception("Inffluance Balance,must contains at least 2000...");
                        else amount-=w;
                        System.out.println(w+" Withdraled...\nUpdated Balance : "+amount);
                        break;
                    case 2:
                        System.out.print("Amount to be deposit ? ");
                        double d= sc.nextDouble();
                        amount+=d;
                        System.out.println(d+" deposited...\nUpdated Balance : "+amount);
                        break;
                    case 0:
                        System.out.println("Exiting ATM. Thank you!");
                        break;
                    default:
                        System.out.println("Invalid choice. Please try again.");
                    }
                } while (c != 0);
        } catch(Exception e){
            System.out.println("Error! " + e.getMessage());
        }
        finally{
            System.out.println("System Terminated....");
        }
    }
}
