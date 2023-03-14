<?php

// Viene definita la classe "Movie"
class Movie {

    // Le variabili d'istanza 
    public $title;
    public $genre;
    public $year;
    public $director;
    public $plot;
    public $duration;
    public $poster;


    // Costruttere
    public function __construct($_title, $_genre, $_year, $_director, $_plot, $_duration, $_poster = null){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->director = $_director;
        $this->plot = $_plot;
        $this->duration = $_duration;
        $this->poster = $_poster;
    }

    // Metodo 
    public function printMovie(){
        echo "<h2>";
        echo $this->title;
        echo "</h2>";

        echo "<p>";
        echo $this->genre;
        echo "</p>";

        echo "<p>";
        echo $this->year;  
        echo "</p>";

        echo "<h6>";
        echo $this->director;
        echo "</h6>";

        echo "<p>";
        echo $this->plot;
        echo "</p>";

        echo "<p>";
        echo $this->duration;
        echo " minutes";
        echo "</p>";
    }
}


// Istanziati più oggetti con classe "Movie"

$theMenu = new Movie("The Menu", "thriller", 2022, "Mark Mylod", "A young couple travels to a remote island to eat at an exclusive restaurant where the chef has prepared a lavish menu, with some shocking surprises.", 107, "https://www.themoviedb.org/t/p/w220_and_h330_face/wBPKTdq4T5M4usRCSa6DC5XQEpK.jpg");

$theFabelmans = new Movie("The Fabelmans", "drama", 2022, "Steven Spielberg", "Growing up in post-World War II era Arizona, young Sammy Fabelman aspires to become a filmmaker as he reaches adolescence, but soon discovers a shattering family secret and explores how the power of films can help him see the truth.", 151, "https://www.themoviedb.org/t/p/w220_and_h330_face/oTHqqE6XlW51swOsZjgIRPFHoCr.jpg");

$babylon = new Movie("Babylon", "drama", 2023, "Damien Chazelle", "A tale of outsized ambition and outrageous excess, it traces the rise and fall of multiple characters during an era of unbridled decadence and depravity in early Hollywood.", 188, "https://www.themoviedb.org/t/p/w220_and_h330_face/h8r6dYrcQQYZ7sBl1e6p4colbCB.jpg");

$marcelTheShell = new Movie("Marcel the shell", "animation", 2023, "Dean Fleischer Camp", "Marcel is an adorable, 1-inch-tall shell who ekes out a colorful existence with his grandmother, Connie, and their pet lint, Alan. Once part of a sprawling community of shells, they now live alone as the sole survivors of a mysterious tragedy. However, when a documentary filmmaker discovers them, the short film he posts online brings Marcel millions of passionate fans, as well as unprecedented dangers and a new hope of finding his long-lost family.", 90, "https://www.themoviedb.org/t/p/w220_and_h330_face/tFOYw0Rdjo0nBPabpt6lsz50mSj.jpg");

$pussInBoots2 = new Movie("Puss in boots 2 - The last wish", "animation", 2022, "Joel Crawford", "An outlaw cat, his childhood egg-friend, and a seductive thief kitty set out in search for the eggs of the fabled Golden Goose to clear his name, restore his lost honor, and regain the trust of his mother and town.", 100);

$theBansheesOfInisherin = new Movie("The Banshees of Inisherin", "drama", 2023, "Martin McDonagh", "Two lifelong friends find themselves at an impasse when one abruptly ends their relationship, with alarming consequences for both of them.", 109);

$everythingEverywhereAllAtOnce = new Movie("Everything everywhere all at once", "action", 2022, "Daniel Kwan", "A middle-aged Chinese immigrant is swept up into an insane adventure in which she alone can save existence by exploring other universes and connecting with the lives she could have led.", 139);


// Stampa a schermo di 2 oggetti 
$theBansheesOfInisherin->printMovie();
$marcelTheShell->printMovie();


?>