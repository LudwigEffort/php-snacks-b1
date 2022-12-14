<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Snack 1</h1>
    <h2>NBA Matchs Sab 10/12/2022</h2>

    <?php
    $saturday = [

        //Match 1
        [
            "team1" => "Heat",
            "team2" => "Spurs",
            "score" => "111|115",
        ],

        //Match 2
        [
            "team1" => "Mavericks",
            "team2" => "Bucks",
            "score" => "105|106",
        ],

        //Match 3
        [
            "team1" => "Jazz",
            "team2" => "Timberwolves",
            "score" => "108|118",
        ],

        //Match 4
        [
            "team1" => "Pelicans",
            "team2" => "Suns",
            "score" => "128|117",
        ],

        //Match 5
        [
            "team1" => "Grizzilies",
            "team2" => "Pistons",
            "score" => "114|103",
        ],

        //Match 6
        [
            "team1" => "Cavaliers",
            "team2" => "Kings",
            "score" =>"95|105",
        ]

    ];
    ?>
    <h4>Match list:</h4>
    <ul>
        <li>
            <span><?php print_r($saturday[0]["team1"]); ?></span> vs 
            <span><?php print_r($saturday[0]["team2"]); ?></span>,
            Score: <span><?php print_r($saturday[0]["score"]); ?></span>
        </li>
        <li>
            <span><?php print_r($saturday[1]["team1"]); ?></span> vs 
            <span><?php print_r($saturday[1]["team2"]); ?></span>,
            Score: <span><?php print_r($saturday[1]["score"]); ?></span>
        </li>
        <li>
            <span><?php print_r($saturday[2]["team1"]); ?></span> vs 
            <span><?php print_r($saturday[2]["team2"]); ?></span>,
            Score: <span><?php print_r($saturday[2]["score"]); ?></span>
        </li>
        <li>
            <span><?php print_r($saturday[3]["team1"]); ?></span> vs 
            <span><?php print_r($saturday[3]["team2"]); ?></span>,
            Score: <span><?php print_r($saturday[3]["score"]); ?></span>
        </li>
        <li>
            <span><?php print_r($saturday[4]["team1"]); ?></span> vs 
            <span><?php print_r($saturday[4]["team2"]); ?></span>,
            Score: <span><?php print_r($saturday[4]["score"]); ?></span>
        </li>
        <li>
            <span><?php print_r($saturday[5]["team1"]); ?></span> vs 
            <span><?php print_r($saturday[5]["team2"]); ?></span>,
            Score: <span><?php print_r($saturday[5]["score"]); ?></span>
        </li>
    </ul>
</body>
</html>