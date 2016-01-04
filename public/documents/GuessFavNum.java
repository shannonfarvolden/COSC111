import java.util.Random;
import java.util.Scanner;

public class GuessFavNum 
{
	public static void main(String[] args) 
	{
		Random rand = new Random();
		int fav = rand.nextInt(100);
		
		Scanner input = new Scanner(System.in);
		int guess;
		System.out.println("Guess what my favourite (integer) number is? ");
		guess = input.nextInt();
		
		if (guess == fav) 
		{
			System.out.println("You're right! My fav number is " + fav);
		} 
		else if (guess < fav) 
		{
			System.out.println("That's too low! My fav number is " + fav);
		} 
		else if (guess > fav) 
		{
			System.out.println("That's too high! My fav number is " + fav);
		}
	}
}