public class Pt26 {
    public static void main(String[] args) {
        try{
            Runnable oddRunnable = () -> {
                for (int i = 1; i <= 200; i += 2) {
                    System.out.println("Odd: " + i);
                }
            };
            Runnable evenRunnable = () -> {
                for (int i = 2; i <= 200; i += 2) {
                    System.out.println("Even: " + i);
                }
            };
            new Thread(oddRunnable).start();
            new Thread(evenRunnable).start();

        } catch (Exception e){
            e.getStackTrace();
        }

    }
}
