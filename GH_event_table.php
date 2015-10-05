<!DOCTYPE html>
<html>
    <head>
    <title>Game Happenings</title>
    </head>
    
    </body>
        <P> 
            <?php
                class event {
                    public $Identifier;
                    public $Event_Title;
                    public $Game_Title;
                    public $Game_Genre;
                    public $Platform;
                    public $Location;
                    public $Organizer;
                    public $Start_Date;
                    public $End_Date;
                    public $Further_Instructions;
//So these are all the things for the event creation page.  I didn't include a //submission variable for when the creator submits his/her event.  Do I need to include //one?
                    
                public function __construct($Event_Title, $Game_Title, $Game_Genre, $Platform, $Location, $Organizer, $Start_Date, $End_Date $Further_Instructions){
                    
                    $this-> Event_Title = $Event_Title;
                    $this-> Game_Title = $Game_Title;
                    $this-> Game_Genre= $Game_Genre;
                    $this-> Platform = $Platform;
                    $this-> Location = $Location;
                    $this-> Organizer = $Organizer;
                    $this-> Start_Date = $Start_Date;
                    $this-> End_Date = $End_Date;
                    $this-> Further_Instructions = $Further_Instructions;
                }
//Now here I was told to create a construct function.  Did I need to include the //$Identifier?                    
                    
                public function search_event(result){
                    //Here I want to be able to search for an event through the game's //title
                }
                }
                    
            ?>
        </P>        
    </body>
</html>