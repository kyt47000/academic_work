public class Pt9 {

    static int a;
    int b;

    public static void main(String[] args){
        Pt9 p1=new Pt9();
        Pt9 p2=new Pt9();
        Pt9 p3=new Pt9();
        Pt9 p4=new Pt9();
        Pt9 p5=new Pt9();
    }
    Pt9(){
        a++;
        b++;
        System.out.println("A(Static) : "+a+"\tB(Non-Static) : "+b);
    }

}
