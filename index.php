<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Array uppg</title>
</head>
<body>
    <!--Uppgift 1 skriva ut bonddjur i array -->
    <section id="uppg1">
        
        <!--H1 för Rubrik -->
        <div id="uppg1_h1">
            <h1>Uppgift 1</h1>
        </div>
    <?php
    //Skapa en array
    $djur = ["Gris","Anka","Hund","Häst","ko"];

    //Ersätta tredje plats med "Får"
    $djur[2] = "Får";

    //Skapar foreach loop för att sriva ut djuren
    foreach($djur as $djurs){
        echo $djurs, '<br>';
    }

    //Skriver ut djuren i rå formar
    echo "<pre>";
    print_r($djur);
    echo "</pre>";

    //Ersätter sista djuren med kanin
    array_push($djur, "kanin");

    //Skriver ut djuren i rå format med kanin som sista djuret
    echo "<pre>";
    print_r($djur);
    echo "</pre>";
    ?>
    </section>

    
    <!--Uppgift 2 skriva ut namn i table -->
    <section id="uppg2">

     <!--H1 för Rubrik -->
    <div id="uppg1_h2">
            <h1>Uppgift 2</h1>
        </div>

        <?php
        $person = array("Bond" => "28", "David" => "15", "Jonas" => "78", "Wilma" => "55", "Johanna" => "33");

        foreach($person as $KEY => $Value){
            echo"<table>";
            echo"<tr><td>$KEY</td><td>$Value</td></tr>";
            echo"</table>";
        }
        ?>
    </section>
</body>
</html>