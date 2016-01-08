import java.util.Scanner; 

public class OddNum
{
  public static void main( String[] args )
  {
    Scanner input = new Scanner( System.in );
    int yourNum;
    System.out.println( "Enter an integer number between 1 and 100: " );
    yourNum= input.nextInt();
    System.out.println( "You entered " + yourNum );

    if(( yourNum < 1 )||( yourNum > 100 ))
    {
      System.out.println( "Hey, you didn't enter a number in the valid range!" );
    }
    else 
    {
      if( yourNum % 2 == 1 )
        System.out.println( "Your number is odd! Haha, that's a pun." );
      else
        System.out.println( "Your number is even!" );
      System.out.println( "Thank you for being a cooperative user." );
    }
  }
}
