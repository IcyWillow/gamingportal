<?php




class Game {


    public $gameName;
    public $publisher;
    public $description;


    //Creates new Game
    public function Game($gameName, $publisher, $description) {
        $this->gameName = $gameName;
        $this->publisher = $publisher;
        $this->description = $description;
    }

    public function GameById($id){

        include "../config/config.php";

        $query = $link->query("SELECT name FROM game WHERE id = " . $id);

            while ($rows = $query->fetch_array(MYSQLI_ASSOC)) {
                $this->gameName = $rows['name'];
                $this->publisher = $rows['publisher'];
                $this->description = $rows['description'];
                }


            echo '<div class="gameCard">
        <h3 class="gameTitle">',$this->gameName,'</h3>
        <p>',$this->publisher,'</p>
        <p>',$this->description,'</p>
        </div>';



    }

    //Creates new Gamecard for game
    public function makeCard() {
        echo '<div class="gameCard">
        <h3 class="gameTitle">',$this->gameName,'</h3>
        <p>',$this->publisher,'</p>
        <p>',$this->description,'</p>
        </div>';
    }
}
?>