public class Arena 
{
  private Animal competitor1;
  private Animal competitor2;
  private String arenaName;

  public Arena( Animal one, Animal two, String name )
  {
    competitor1 = one;
    competitor2 = two;      
    arenaName   = name;

    System.out.println( toString() );
	startBattle();
  }

  /*
  * Randomly decide which competitor starts first in each round
  * Have the first animal attack the other using its attack() method
  * Then have the second animal fight back once as well 
  *
  * After each attack, check if the target of the attack has fainted via isAlilve()
  * Repeat these rounds as long as competitors are both alive.
  * Once one of the two animals has fainted
  *   - End the battle
  *   - Store the winner and loser
  *   - Award winner bonus points for winning and call its healUp() 
  *   - Printer battle results
  */
  public void startBattle()
  {
  }

  /*
  * Creates a meaningful pre-fight summary of the battle. 
  * Remember that toString() method you wrote in the Animal class? Use it here 
  * See the sample output for more guidance.
  */
  public String toString()
  {
    String str = arenaName +" is about to begin!\n";
    str += "Tale of the tape: \n";
    str += competitor1.toString() + "\t vs \t";
    str += competitor2.toString() + "\n";
    return str;
  }
}
