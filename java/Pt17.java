import java.util.Scanner;

class Bank {
    int getRateOfInterest() {
        return 0;
    }

    void simpleInterestCount(long amount, int month, int rate) {
        System.out.println("Simple Interest is : " + (amount * month * rate) / 100);
    }
}

class SBI extends Bank {
    @Override
    int getRateOfInterest() {
        return 8;
    }
}

class ICICI extends Bank {
    @Override
    int getRateOfInterest() {
        return 7;
    }
}

class AXIS extends Bank {
    @Override
    int getRateOfInterest() {
        return 9;
    }
}

public class Pt17 {
    static Scanner sc = new Scanner(System.in);

    public static void main(String args[]) {
        int ch;
        do {
            System.out.println("Which Bank's Rate of Interest You Want show ...");
            System.out.println("1. SBI\n2. ICICI\n3. AXIS\n0. Exit");
            System.out.print("Enter Your Choice ? ");
            ch = sc.nextInt();
            switch (ch) {
                case 1:
                    calculateInterest(new SBI());
                    break;
                case 2:
                    calculateInterest(new ICICI());
                    break;
                case 3:
                    calculateInterest(new AXIS());
                    break;
                case 0:
                    System.out.println("Exiting...");
                    sc.close();
                    System.exit(0);
                default:
                    System.out.println("\nInvalid choice, Please enter again.");
                    break;
            }
        } while (ch != 0);
    }

    static void calculateInterest(Bank bank) {
        System.out.println("Rate of Interest: " + bank.getRateOfInterest());
        long amount;
        int month;
        System.out.print("Enter Amount: ");
        amount = sc.nextLong();
        System.out.print("Enter Number Of Month(s): ");
        month = sc.nextInt();
        bank.simpleInterestCount(amount, month, bank.getRateOfInterest());
    }
}
