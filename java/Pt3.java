
import java.util.*;
public class Pt3{
    public static void main(String[] args){
        Scanner sc=new Scanner(System.in);
        Pt3 p=new Pt3();
        System.out.print("Enter an integer ? ");
        int num=sc.nextInt();
        num=p.revInt(num);
        System.out.println("Reversed integer : "+ num);
        sc.close();
    }
    int revInt(int num){
        int reversed=0;
        while(num != 0){
            int digit = num%10;
            reversed = reversed*10+digit;
            num /= 10;
        }
        return reversed;
    }
}