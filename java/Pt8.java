public class Pt8 {
    String name;
    long enroll;
    public static void main(String[] args){
        Pt8 p=new Pt8();
        p.display("Yash Kayastha", 226170307072L);
    }
    void display(String name, long enroll){
        this.name=name;
        this.enroll=enroll;
        System.out.println("Name : "+this.name);
        System.out.println("Enrollment No : "+this.enroll);
    }
    
}
