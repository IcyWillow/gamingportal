<?php
class Game {
    public $gameName;
    public $publisher;
    public $description;
    public $imgSource;

    //Creates new Game
    public function Game($gameName, $publisher, $releaseDate, $imgSource) {
        $this->gameName = $gameName;
        $this->publisher = $publisher;
        $this->imgSource = $imgSource;
    }


    //Get a gaame by ID
    public function getGameById($id){

        include("../config/config.php");

        $g_name = $g_description = $g_publisher = $g_img;



        $query= $link->query("SELECT * FROM game where id = " . $id . ";");





            while ($rows = $query->fetch_array(MYSQLI_ASSOC)) {

                $this->gameName = $rows['name'];
                $this->publisher = $rows['publisher'];
                $this->description = $rows['description'];
                $this->imgSource = $rows['picture_directory'];


                     }




    }

    //Creates new Gamecard for game
    public function makeCard() {
        echo '<div class="gameCard">
        <img src="',$this->imgSource,'" alt="Picture of the Game" />
        <h3 class="gameTitle">',$this->gameName,'</h3>
        <p>',$this->publisher,'</p>
        </div>';
    }
}
?>