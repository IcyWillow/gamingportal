<?php 
class Game {
    public $gameName;
    public $publisher;
    public $releaseDate;

    //Creates new Game
    public function Game($gameName, $publisher, $releaseDate) {
        $this->gameName = $gameName;
        $this->publisher = $publisher;
        $this->releaseDate = $releaseDate;
    }

    //Creates new Gamecard for game
    public function makeCard() {
        echo '<div class="gameCard">
        <h3 class="gameTitle">',$this->gameName,'</h3>
        <p>',$this->publisher,'</p>
        <p>',$this->releaseDate,'</p>
        </div>';
    }
}
?>