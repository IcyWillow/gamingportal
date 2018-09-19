<?php
class Game {
    private $id;
    private $gameName;
    private $publisher;
    private $imgSource;

    //Creates new Game
    public function __construct($id, $gameName, $publisher, $imgSource) {
        $this->id = $id;
        $this->gameName = $gameName;
        $this->publisher = $publisher;
        $this->imgSource = $imgSource;
    }
    //Get a game by ID
    public function getGameById($id){
        include("../config/config.php");
        $query= $link->query("SELECT * FROM game where id = " . $id . ";");
        while ($rows = $query->fetch_array(MYSQLI_ASSOC)) {
            $this->gameName = $rows['name'];
            $this->publisher = $rows['publisher'];
            $this->imgSource = $rows['picture_directory'];
        }
    }
    //Get a game by name
    public function getGameByName($g_name){
        include("../config/config.php");
        $query= $link->query("SELECT * FROM game where name LIKE '%" . $g_name . "%';");
        while ($rows = $query->fetch_array(MYSQLI_ASSOC)) {
            $foundGame = new Game($rows['id'], $rows['name'], $rows['publisher'], $rows['picture_directory']);
            $foundGame->makeCard();
        }
    }
    //Creates new Gamecard for game
    public function makeCard() {
        echo '<div class="gameCard">
        <div class="thumbnailContainer">
            <img class="thumbnail" src="'. htmlentities($this->imgSource) .'" alt="Picture of the Game" />
        </div>
        <div class="cardInfo">
            <h3 class="gameTitle">'. htmlentities($this->gameName) .'</h3>
            <p class="publisher">'. htmlentities($this->publisher) .'</p>
            <div class="crudIcon">
                <a class="icon-link" href="../lib/delete.php?id='.$this->id.'&image-src='.$this->imgSource.'"><img class="icon" src="../public/images/bin.png" alt="delete icon" /></a>
                <a class="icon-link" href="../view/edit.php?name='.urlencode($this->gameName).'&publisher='.urlencode($this->publisher)"><img class="icon" src="../public/images/penIcon.png" alt="edit icon" /></a>
            </div>
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
                $newGame = new Game($row['id'], $row['name'], $row['publisher'], $row['picture_directory']);
                $newGame->makeCard();
            }
        } else {
            echo "No results!";
        }
    }
}
?>