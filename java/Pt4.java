import java.util.Scanner;

public class Pt4 {
    static Scanner sc = new Scanner(System.in);

    public static void main(String[] args) {
        Pt4 p = new Pt4();
        System.out.print("Enter Number of Rows ? ");
        int r = sc.nextInt();
        System.out.print("Enter Number of Columns ? ");
        int c = sc.nextInt();
        System.out.print("Enter Numbers Of Matrices ? ");
        int size = sc.nextInt();

        int[][][] matrices = p.getMatrices(r, c, size);
        
        for (int k = 0; k < size; k++) {
            System.out.println("Matrix " + (k + 1) + ":");
            p.printMatrix(matrices[k]);
        }
        
        int[][] sumMatrix = p.sum(matrices, size, r, c);
        System.out.println("Sum of Matrices:");
        p.printMatrix(sumMatrix);
    }

    public int[][][] getMatrices(int r, int c, int size) {
        int[][][] matrices = new int[size][r][c];
        for (int k = 0; k < size; k++) {
            System.out.println("Enter elements for Matrix " + (k + 1) + ":");
            for (int i = 0; i < r; i++) {
                for (int j = 0; j < c; j++) {
                    System.out.print("Enter Element [" + (i + 1) + "," + (j + 1) + "]: ");
                    matrices[k][i][j] = sc.nextInt();
                }
            }
        }
        return matrices;
    }
    
    public int[][] sum(int[][][] arr, int size, int r, int c) {
        int[][] sumMatrix = new int[r][c];
        for (int k = 0; k < size; k++) {
            for (int i = 0; i < r; i++) {
                for (int j = 0; j < c; j++) {
                    sumMatrix[i][j] += arr[k][i][j];
                }
            }
        }
        return sumMatrix;
    }
    
    public void printMatrix(int[][] matrix) {
        for (int i = 0; i < matrix.length; i++) {
            for (int j = 0; j < matrix[0].length; j++) {
                System.out.print(matrix[i][j] + " ");
            }
            System.out.println();
        }
        System.out.println();
    }
}
