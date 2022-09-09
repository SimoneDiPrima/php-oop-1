<!-- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
class Movies
{
    public $id;
    public $title;
    public $originalname;
    public $genre;
    public $year;

    public function __construct($_id,$_title,$_originalname,$_genre,$_year)
    {
        $this->id=$_id;
        $this->title=$_title;
        $this->originalname=$_originalname;
        $this->genre=$_genre;
        $this->year=$_year;
        
    }
}

$movie_comedy = new Movies(1, "UNA NOTTE DA LEONI","The Hangover","Comedy",2012);
$movie_drama = new Movies(2, "IL MIGLIO VERDE","the green mile","drama",1992);
$movie_documentary = new Movies(3, "THE SOCIAL DILEMMA","the social dilemma","documentary",2020);
$movie_thriller = new Movies(4, "IL SILENZIO DEGLI INNOCENTI","The Silence of the Lambs","THRILLER",1988);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <li>
                <h5>
                <?php echo $movie_comedy->id ?> 
                </h5>
            </li>
            <li>
                <h2>
                <?php echo $movie_comedy->title ?>
                </h2>
            </li>
            <li>
                <h3>
                <?php echo $movie_comedy->originalname ?>
                </h3>
            </li>
            <li>
                <h4>
                <?php echo $movie_comedy->genre ?>
                </h4>
            </li>
            <li>
                <h6>
                <?php echo $movie_comedy->year ?>
                </h6>
            </li>
        </ul>
    </div>
    <div>
        <ul>
            <li>
                <h5>
                <?php echo $movie_drama->id ?> 
                </h5>
            </li>
            <li>
                <h2>
                <?php echo $movie_drama->title ?>
                </h2>
            </li>
            <li>
                <h3>
                <?php echo $movie_drama->originalname ?>
                </h3>
            </li>
            <li>
                <h4>
                <?php echo $movie_drama->genre ?>
                </h4>
            </li>
            <li>
                <h6>
                <?php echo $movie_drama->year ?>
                </h6>
            </li>
        </ul>
    </div>
    <div>
        <ul>
            <li>
                <h5>
                <?php echo $movie_documentary->id ?> 
                </h5>
            </li>
            <li>
                <h2>
                <?php echo $movie_documentary->title ?>
                </h2>
            </li>
            <li>
                <h3>
                <?php echo $movie_documentary->originalname ?>
                </h3>
            </li>
            <li>
                <h4>
                <?php echo $movie_documentary->genre ?>
                </h4>
            </li>
            <li>
                <h6>
                <?php echo $movie_documentary->year ?>
                </h6>
            </li>
        </ul>
    </div>
    <div>
        <ul>
            <li>
                <h5>
                <?php echo $movie_thriller->id ?> 
                </h5>
            </li>
            <li>
                <h2>
                <?php echo $movie_thriller->title ?>
                </h2>
            </li>
            <li>
                <h3>
                <?php echo $movie_thriller->originalname ?>
                </h3>
            </li>
            <li>
                <h4>
                <?php echo $movie_thriller->genre ?>
                </h4>
            </li>
            <li>
                <h6>
                <?php echo $movie_thriller->year ?>
                </h6>
            </li>
        </ul>
    </div>
    
</body>
</html>

  