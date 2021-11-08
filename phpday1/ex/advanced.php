<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php

// $characters = array(
//     "cartoon" => "Mickey mouse",
//     "anime" => "Pokemon",
//     "game" =>"Super Mario"
// );

// echo "Famous character of cartoon is ". $characters['cartoon'] . "<br/>";
// echo "Famous charactor of anime is ". $characters['anime']. "<br/>" ;
// echo "Famous character of game is ". $characters['game'] . "<br/>";




$characters = array(
    "cartoon" => array
    (
        "Mickey mouse" => "mouse", 
        "Daisy" => "duck",
        "Bambi" => "dier"
    ),
    "anime" => array
    (   
        "Pikachu" => "mouse",
        "Charizard" => "dragon",
        "Squietle" => "turtle"
    ),
    "game" => array
    (
        "Super Mario" => "human",
        "Kinopio" => "mushroom",
        "Teresa" => "gohst"
   )
);

echo  "Famouse charactor <br>
      Mickey mouse : ";
echo  $characters['cartoon']['Mickey mouse'] . "<br/>" ;
echo "Daisy: ";
echo $characters['cartoon']['Daisy'] . "</br>";
echo "Bambi: ";
echo $characters['cartoon']['Bambi'] . "</br>";
echo "Pikachu: ";
echo $characters['anime']['Pikachu'] . "</br>";
echo "Charizard: ";
echo $characters['anime']['Charizard'] . "</br>";
echo "Squietle: ";
echo $characters['anime']['Squietle'] . "</br>";
echo "Super Mario: ";
echo $characters['game']['Super Mario'] . "</br>";
echo "Kinopio: ";
echo $characters['game']['Kinopio'] . "</br>";
echo "Teresa: ";
echo $characters['game']['Teresa'] . "</br>";

?>
    
</body>
</html>