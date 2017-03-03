public class Tournament 
{
  private final int TOUR_SIZE = 8;
  private Arena quarter1;
  private Arena quarter2;
  private Arena quarter3;
  private Arena quarter4;
  private Arena semi1;
  private Arena semi2;
  private Arena finalRound;
  private Animal[] competitors;
    
  public Tournament( Animal[] animalList ) 
  {
    if( animalList.length == TOUR_SIZE )
    {
      competitors = animalList;
      quarter1    = new Arena( competitors[0], competitors[1], "QuarterFinal 1" );
      quarter2    = new Arena( competitors[2], competitors[3], "QuarterFinal 2" );
      quarter3    = new Arena( competitors[4], competitors[5], "QuarterFinal 3" );
      quarter4    = new Arena( competitors[6], competitors[7], "QuarterFinal 4" );
    }
    else
      System.out.println( "Cannot start tournament -- too many/few competitors" );
  }

  /* 
  * Sort the array of competitors by score, from highest to lowest
  */
  private void sortResults()
  {
    for( int i=1; i<competitors.length; i++ )
    {
      Animal temp = competitors[i];
      int j;
      for( j=(i-1); j>=0 && temp.getScore() < competitors[j].getScore(); j-- )
        competitors[j+1] = competitors[j];
      competitors[j+1] = temp;
    }
  }
}
