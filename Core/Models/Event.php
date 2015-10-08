<?php

/*

    Try to keep this file focused on the data; In this case the data is an event it self.
    I removed the constructor for ease and clarity.
    We can just set properties for now until we have a reason to do otherwise

*/

class Event {
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
}
