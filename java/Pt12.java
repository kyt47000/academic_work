public class Pt12 {
    private int rollno;
    private int marks;

    public Pt12() {
        rollno = 0;
        marks = 0;
    }

    public Pt12(int rank) {
        rollno = rank;
        marks = rank;
    }

    public Pt12(int idno, int ranks) {
        rollno = idno;
        marks = ranks;
    }

    public static void main(String[] args) {
        Pt12 student1 = new Pt12(); 
        Pt12 student2 = new Pt12(101); 
        Pt12 student3 = new Pt12(201, 90); 

        System.out.println("Student 1 (Default Constructor):");
        System.out.println("Roll No: " + student1.rollno);
        System.out.println("Marks: " + student1.marks);

        System.out.println("\nStudent 2 (Constructor with one parameter):");
        System.out.println("Roll No: " + student2.rollno);
        System.out.println("Marks: " + student2.marks);

        System.out.println("\nStudent 3 (Constructor with two parameters):");
        System.out.println("Roll No: " + student3.rollno);
        System.out.println("Marks: " + student3.marks);
    }
}
