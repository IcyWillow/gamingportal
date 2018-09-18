<?php
class Game {
    private $gameName;
    private $publisher;
    private $description;
    private $imgSource;


    //Creates new Game
    public function __construct($gameName, $publisher, $description, $imgSource) {
        $this->gameName = $gameName;
        $this->publisher = $publisher;
        $this->description = $description;
        $this->imgSource = $imgSource;
    }
    //Get a game by ID
    public function getGameById($id){
        include("../config/config.php");
        $query= $link->query("SELECT * FROM game where id = " . $id . ";");
        while ($rows = $query->fetch_array(MYSQLI_ASSOC)) {
            $this->gameName = $rows['name'];
            $this->publisher = $rows['publisher'];
            $this->description = $rows['description'];
            $this->imgSource = $rows['picture_directory'];
        }
    }
    //Get a game by name
    public function getGameByName($g_name){
        include("../config/config.php");
        $query= $link->query("SELECT * FROM game where name LIKE '%" . $g_name . "%';");
        while ($rows = $query->fetch_array(MYSQLI_ASSOC)) {
            $foundGame = new Game($rows['name'], $rows['publisher'], $rows['description'], $rows['picture_directory']);
            $foundGame->makeCard();
        }
    }
    //Creates new Gamecard for game
    public function makeCard() {
        echo '<div class="gameCard">
        <div class="thumbnailContainer">
            <img class="thumbnail" src="'.$this->imgSource.'" alt="Picture of the Game" />
        </div>
        <div class="cardInfo">
            <h3 class="gameTitle">',$this->gameName,'</h3>
            <p>',$this->publisher,'</p>
        <a href="../view/edit.php"><img class="icon" src="../public/images/penIcon.png" alt="edit icon" /></a>
        </div>
        </div>';
    }
    //Show all Games
    public function listAllGames(){
        include("../config/config.php");
        $sql = "SELECT * FROM game";
        $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $newGame = new Game($row['name'], $row['publisher'], $row['description'], $row['picture_directory']);
                $newGame->makeCard();
            }
        } else {
            echo "No results!";
        }
    }
}
?>