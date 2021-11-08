<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>advanced</title>
</head>
<body>

<?php
    //    $characters = array(
               
    //            "cartoons" => "Mickey Mouse",
    //            "animes" => "Pokemon",
    //            "games"  => "Supermario");
               
    //            echo "Cartoon is ". $characters['cartoons'] . "<br/>";
    //            echo "Anime is " . $characters['animes']. "<br/>" ;
    //            echo "Game is ". $characters['games'] . "<br/>";

               $characters = array(

                "cartoons" => array
                (
                    "mickeymouse" => "Mouse",
                    "minnimouse" => "Mouse",
                    "donaldduck"  => "Duck",
                    "daisyduck" => "Duck"
                ),

                "animens" => array
                (
                    "pikachu" => "Mouse",
                    "charmander" => "Lizards",
                    "squirtle" => "Mini toads"
                ),

                "games" => array
                (
                    "supermario" => "Human",
                    "princesspeach" => "Princess",
                    "bower" => "evil"
                )
                );
                echo "Mickey Mouse is ";
                echo $characters['cartoons']['mickeymouse'] . "<br/>" ;
                echo "Minnie Mouse is ";
                echo $characters['cartoons']['minnimouse'] . "<br/>" ;
                echo "Donald Duck is ";
                echo $characters['cartoons']['donaldduck'] . "<br/>" ;
                echo "Daisy Duck is ";
                echo $characters['cartoons']['daisyduck'] . "<br/><br/>" ;

                echo "Pikachu is ";
                echo $characters['animens']['pikachu'] . "<br/>" ;
                echo "Charmander is ";
                echo $characters['animens']['charmander'] . "<br/>" ;
                echo "Squirtle is ";
                echo $characters['animens']['squirtle'] . "<br/><br/>" ;

                echo "Super Mario is ";
                echo $characters['games']['supermario'] . "<br/>" ;
                echo "Princess Peach is ";
                echo $characters['games']['princesspeach'] . "<br/>" ;
                echo "Bower is ";
                echo $characters['games']['bower'] . "<br/>" ;
                

                
                
              



               ?>
    
</body>
</html>