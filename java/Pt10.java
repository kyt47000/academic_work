public class Pt10 {
    final static int y = 100;

    public static void main(String[] args) {
        final int x = 10;
        System.out.println("The value of x is: " + x);
        System.out.println("The value of y is: " + y);
        Pt10 obj = new Pt10();
        obj.demoFinalMethod();
    }
    
    final void demoFinalMethod() {
        System.out.println("This is a final method.");
    }
}
