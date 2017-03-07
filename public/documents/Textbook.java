public class Textbook 
{
  // attributes
  private String title; 
  private int    year;  
  private String subject;
  private String author;

  // constructor
  public Textbook( String tle, int yr, String auth )
  {
    title   = tle;
    year    = yr; 
    author  = auth;
    subject = "unknown";
  }

  // accessor and mutator methods
  public String getSubject()                { return subject; }
  public String getAuthor()                 { return author; }
  public void   setSubject( String newSub ) { subject = newSub; }

  // summary of contents
  public String toString()
  {
    return "Subject: " + subject + "\n" 
         + "Title:   " + title   + "\n" 
         + "Author: "  + author  + "\n"
         + "Year:   "  + year    + "\n";
  }
}
