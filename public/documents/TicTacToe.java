public class TicTacToe 
{
  public static void main(String[] args) 
  {
    final int SIZE = 3;
    char[][] board = new char[SIZE][SIZE];

    initBoard( board );
    printBoard( board );

    // #1. keep playing until either someone wins or the board is full
    // ... insert your code ...

    // #2. if the board is full and there is no winner then it's a tie
    // ... insert your code ...
  }

  // define other methods here as needed
  // ... insert your code ...

  // this method initializes all the board spots to be empty spaces
  public static void initBoard( char[][] gameBoard )
  {
    int sz = gameBoard.length;
    for( int i=0; i<sz; i++ )
      for( int j=0; j<sz; j++ )
        gameBoard[i][j] = ' ';
  }

  // this method prints the entire board
  public static void printBoard( char[][] gameBoard )
  {
    int sz = gameBoard.length;
    for( int i=0; i<sz; i++ )
    {
      System.out.println( "-------" );
      for( int j=0; j<sz; j++ )
        if( j == (sz-1) )
          System.out.println( "|" + gameBoard[i][j] + "|" );
        else
          System.out.print( "|" + gameBoard[i][j] );
    }
    System.out.println( "-------" );
  }  
}
