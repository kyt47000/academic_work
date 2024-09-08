
import java.util.*;

public class Pt5{
    static Scanner sc=new Scanner(System.in);
    public static void main(String[] args){
        Pt5 p=new Pt5();
        System.out.print("Enter Any Integer To Get First N Prime Numbers ? ");
        int num=sc.nextInt();
        System.out.println("First "+num+" Prime Numbers : ");
        int arr[]=p.fPrime(num);
        p.display(arr);
        sc.close();
    }
    public boolean isPrime(int num){
        for(int i=2;i<=(num/2);i++){
            if((num%i)==0)
                return false;
        }
        return true;
    }
    public int[] fPrime(int size){
        int arr[]=new int[size];
        int j=0;
        int i=2;
        while(j<size){
            if(isPrime(i)){
                arr[j]=i;
                j++;
            }
            i++;
        }
        return arr;
    }
    public void display(int[] arr){
        int a=arr.length;
        for(int i=0;i<a;i++)
            System.out.print("    "+arr[i]);
    }
}