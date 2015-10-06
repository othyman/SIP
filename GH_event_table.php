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

                    
//This function below is for making the event.                    
                public function place_event(){
                    //However I would get the user to fill in the fields and spaces //necessary.  I was not taught on how to create places for the user to fill.
                }
                    
                    //Here I want to be able to search for an event through the game's //title. I would imagine something like.                    
                
                    public function search_event(result){
                    //$gameName = get name of game entered in by user
                    //for($selection in (however I call for the eventtable)){
                    //  if ($selection == $gameName){
                            //echo $selection;
                            //}
                    //}
                }
                }
                    
            ?>
        </P>        
    </body>
</html>