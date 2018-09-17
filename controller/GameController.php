<?php 
class Game {
    public $gameName;
    public $publisher;
    public $releaseDate;
    public $imgSource;

    //Creates new Game
    public function Game($gameName, $publisher, $releaseDate, $imgSource) {
        $this->gameName = $gameName;
        $this->publisher = $publisher;
        $this->releaseDate = $releaseDate;
        $this->imgSource = $imgSource;
    }

    //Creates new Gamecard for game
    public function makeCard() {
        echo '<div class="gameCard">
        <img src="',$this->imgSource,'" alt="Picture of the Game" />
        <h3 class="gameTitle">',$this->gameName,'</h3>
        <p>',$this->publisher,'</p>
        <p>',$this->releaseDate,'</p>
        </div>';
    }
}
?>