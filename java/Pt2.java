
import java.util.*;
public class Pt2{
    public static void main(String[] args){
        Scanner sc=new Scanner(System.in);
        Pt2 p=new Pt2();
        System.out.print("Enter A ? ");
        int a=sc.nextInt();
        System.out.print("Enter B ? ");
        int b=sc.nextInt();
        System.out.print("Enter C ? ");
        int c=sc.nextInt();
        int max=p.maxOfThree(a,b,c);
        System.out.println("Max : "+ max);
        sc.close();

    }
    int maxOfThree(int a,int b,int c){
        int max=a;
        if(max<b)
            max=b;
        if(max<c)
            max=c;
        return max;
    }
}