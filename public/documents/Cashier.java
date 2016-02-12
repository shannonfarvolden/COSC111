import java.util.Scanner;

public class Cashier
{
  public static void main( String args[] )
  {
    // setup keyboard
    Scanner input = new Scanner( System.in );

    // display menu options
    System.out.println( "Which cartoon t-shirt do you want to buy?" );
    System.out.println( "1. Bugs Bunny" );
    System.out.println( "2. Bart Simpson" );
    System.out.println( "3. Pinky and the Brain" );
    System.out.println( "4. The Powerpuff Girls" );
    int choice = input.nextInt();
    String cartoon = "";

    // validate input is between 1 and 4
    // --- STUDENT WRITES THIS CODE


    // depending on the selected menu item, 
    // store the corresponding cartoon character name into a string
    // --- STUDENT WRITES THIS CODE


    // ask how many units of purchase 
    System.out.println( "How many do you want to buy?" );
    int num = input.nextInt();

    // call compose method and display output
    // --- STUDENT WRITES THIS CODE


  }

  // write a method that takes two parameters and returns a string
  // where the string stores the information of the purchase
  // the 1st parameter is a string indicating the character chosen by the user
  // the 2nd parameter is an integer indicating the amount of t-shirts to buy
  // --- STUDENT UNCOMMENT AND MODIFY THIS CODE
  /*
  public static void compose( )
  {
    String str = "You ordered " + amount + " of " + item + " t-shirts.\n";
    str = str + "The cost including taxes is " + getTotal( amount );
  }
  */

  // write a method that takes one parameter and returns a double
  // the parameter is an integer indicating the number of t-shirts to buy
  // the method calculates the cost of the entire purchase based on $5/tshirt
  // and a 5% tax on the total order
  // --- STUDENT UNCOMMENT AND MODIFY THIS CODE
  /*
  public static void getTotal( )
  {
    double price = 5 * quantity;
    price = price * 1.05;
  }
  */
}
