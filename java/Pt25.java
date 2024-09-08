public class Pt25 extends Thread {
    int ms;
    int repeat;

    public static void main(String[] args) {
        int r = 5;
        Pt25 obj1 = new Pt25("Thread-1", 1000, r);
        Pt25 obj2 = new Pt25("Thread-2", 2000, r);

        // Wait for both obj1 and obj2 to complete
        try {
            obj1.join();
            obj2.join();
        } catch (InterruptedException e) {
            e.printStackTrace();
        }

        System.out.println("obj1 is Alive? " + obj1.isAlive());
        System.out.println("obj2 is Alive? " + obj2.isAlive());
        System.out.println("Main is Alive? " + Thread.currentThread().isAlive());
    }

    public Pt25(String name, int ms, int repeat) {
        super(name);
        this.ms = ms;
        this.repeat = repeat;
        System.out.println(name + " created");
        start();
    }

    @Override
    public void run() {
        int i = 0;
        while (i < repeat) {
            System.out.println(this.getName());
            try {
                i++;
                Thread.sleep(ms);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
        }
    }
}
