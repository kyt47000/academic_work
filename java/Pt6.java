import java.util.Scanner;

public class Pt6{
    static Scanner sc=new Scanner(System.in);
    public static void main(String[] args){
        System.out.print("Enter How Many Data You Will Add ? ");
        int count=sc.nextInt();
        Student[] stu=new Student[count];
        for(int i=0;i<count;i++){
            stu[i] = new Student();
            System.out.println("Enter The Data Of Student "+(i+1)+" :");
            stu[i].getData();
        }
        System.out.print("\n\n\n");
        for(int i=0;i<count;i++){
            System.out.println("Displaying The Data Of Student "+(i+1)+" :");
            stu[i].displayData();
        }
    }
}
 class Student{
    long enrolmentNo;
    String name;
    Scanner sc=new Scanner(System.in);
    void getData(){
        System.out.print("Enter Student Name ? ");
        name=sc.next();
        System.out.print("Enter Enrollment Number ? ");
        enrolmentNo=sc.nextLong();
    }
    void displayData(){
        System.out.println("\nName = "+name+"\nEnrollment No = "+enrolmentNo);
    }
}