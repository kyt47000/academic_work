import java.util.Arrays;

public class Pt13 {
    public static void main(String[] args){
        String str="Hello Yash!";
        System.out.println(str.charAt(6));
        System.out.println(str.charAt(2));     
        System.out.println(str.contains("Yash")); 
        System.out.println(str.contains("World")); 
        System.out.println(str.length());
        System.out.println(String.format("%-10s", 101));
        System.out.println(String.format("%-10.7s", 2024.56f));
        System.out.println(String.format("%10.2s", 2025.77f));
        System.out.println(str.length());
        String[] parts = str.split(" ");
        System.out.println("Array of strings: " + Arrays.toString(parts));
        parts=str.split("");
        System.out.println("Array of strings: " + Arrays.toString(parts));
    }
}
