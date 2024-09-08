import java.util.HashMap;
import java.util.Map;

public class Pt30 {
    public static void main(String[] args) {
        // Create a new HashMap to store students' data
        Map<Integer, String> studentData = new HashMap<>();

        // Add 5 students' data (enrolment no and name) to the HashMap
        studentData.put(101, "Harry Potter");
        studentData.put(102, "Hermione Granger");
        studentData.put(103, "Ron Weasley");
        studentData.put(104, "Luna Lovegood");
        studentData.put(105, "Draco Malfoy");

        // Retrieve and display student's name from HashMap using enrollment number
        int enrollmentNo = 103; // Example enrollment number
        if (studentData.containsKey(enrollmentNo)) {
            String studentName = studentData.get(enrollmentNo);
            System.out.println("Student name for enrollment no " + enrollmentNo + ": " + studentName);
        } else {
            System.out.println("Student not found for enrollment no " + enrollmentNo);
        }
    }
}
