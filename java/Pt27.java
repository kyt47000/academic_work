import java.io.*;

public class Pt27 {
    public static void main(String[] args) {
        String filePath = "example.txt";

        // Write to file
        try {
            FileWriter fw = new FileWriter(filePath, true); // true is for append mode
            PrintWriter pw = new PrintWriter(fw);
            pw.println("Hello, World!");
            pw.close();
        } catch (IOException e) {
            System.out.println("An error occurred during file write: " + e.getMessage());
        }

        // Read from file
        try {
            FileReader fr = new FileReader(filePath);
            BufferedReader br= new BufferedReader(fr);
            String line;
            while ((line = br.readLine())!= null) {
                System.out.println("Read from file:\n " + line);
            }
            br.close();
        } catch (IOException e) {
            System.out.println("An error occurred during file read: " + e.getMessage());
        }
    }
}