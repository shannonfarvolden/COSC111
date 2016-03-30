public class TestItem
{
  public static void main( String[] args )
  {
    // make a new item
    String   q  = "Who is Jake?";
    String[] pa = new String[ 4 ];
    pa[0] = "A chef";
    pa[1] = "A teacher";
    pa[2] = "A pirate";
    pa[3] = "A taxi driver";
    char ca = 'c';

    Item one = new Item( q, pa, ca );
    
    // display item
    System.out.println( one.toString() );
    System.out.println( "The correct answer is: " + one.getCorrectAnswer() + "." );
  }
}

