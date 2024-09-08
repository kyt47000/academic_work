import java.util.HashSet;

public class Pt29 {
    public static void main(String[] args) {
        // Create a new HashSet
        HashSet<String> colorsSet = new HashSet<>();

        // Add colors to the HashSet
        colorsSet.add("Red");
        colorsSet.add("Green");
        colorsSet.add("Blue");
        colorsSet.add("Yellow");
        colorsSet.add("Orange");

        // Iterate through the HashSet using for-each loop
        System.out.println("Colors in the HashSet:");
        for (String color : colorsSet) {
            System.out.println(color);
        }
    }
}
