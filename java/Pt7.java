public class Pt7 {
    public static void main(String[] args){
        Rectangle r1=new Rectangle(); //empty constructor 
        Rectangle r2=new Rectangle(5f,7f); //parameterized constructor
        Rectangle r3=r2; // copy(sallow) constructor
        Rectangle r4=new Rectangle(r2); //copy(deep) constructor
        System.out.println("r1(empty) : "+r1+"\tHeight : "+r1.height+"\tWeight : "+r1.weight);
        System.out.println("r2(parameterized) : "+r2+"\tHeight : "+r2.height+"\tWeight : "+r2.weight);
        System.out.println("r3(copy(sallow)) : "+r3+"\tHeight : "+r3.height+"\tWeight : "+r3.weight);
        System.out.println("r4(copy(deep)) : "+r4+"\tHeight : "+r4.height+"\tWeight : "+r4.weight);
    }
}

class Rectangle{
    float height;
    float weight;
    Rectangle(){
        height=0;
        weight=0;
    }
    Rectangle(float h,float w){
        height=h;
        weight=w;
    }
    Rectangle(Rectangle r){
        height=r.height;
        weight=r.weight;
    }

}