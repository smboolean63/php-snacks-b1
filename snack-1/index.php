<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60

$teamsA = [
    [
        "squadraCasa" => "Olimpia Milano",
        "squadraOspite" => "Cantù",
        "puntiCasa" => 55,
        "puntiOspite" => 60,
    ],
    [
        "squadraCasa" => "Armani Milano",
        "squadraOspite" => "Virtus Bologna",
        "puntiCasa" => 40,
        "puntiOspite" => 70,
    ],
    [
        "squadraCasa" => "Dinamo Sassari",
        "squadraOspite" => "Virtus Roma",
        "puntiCasa" => 82,
        "puntiOspite" => 78,
    ],
];

$teamsB = [
    [
        "home" => [
            "name" => "Olimpia Milano", 
            "score" => 50
        ],
        "outsider" => [
            "name" => "Cantu", 
            "score" => 60
        ]
    ],
    [
        "home" => [
            "name" => "Armani Jeans", 
            "score" => 80
        ],
        "outsider" => [
            "name" => "Olimpia Milano", 
            "score" => 76
        ]
    ],
    [
        "home" => [
            "name" => "Armani Jeans", 
            "score" => 80
        ],
        "outsider" => [
            "name" => "Cantu", 
            "score" => 90
        ]
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <h2>Risultati 5° Giornata TEAM A</h2>
    <ul>
        <?php
        for ($i = 0; $i < count($teamsA); $i++) {
            $team = $teamsA[$i];
        ?>
            <li>
                <strong><?= $team['squadraCasa'] ?></strong> - <strong><?= $team['squadraOspite'] ?></strong> |
                <?= $team['puntiCasa'] ?> - <?= $team['puntiOspite'] ?>
            </li>
        <?php } ?>
    </ul>
    <hr>
    <h2>Risultati 5° Giornata TEAM B</h2>
    <ul>
        <?php 
            for($i = 0; $i < count($teamsB); $i++):
            $team = $teamsB[$i];
        ?>
            <li><?= $team['home']['name'] ?> - <?= $team['outsider']['name'] ?> | 
                <?= $team['home']['score'] ?> - <?= $team['outsider']['score'] ?></li>
        <?php endfor; ?>
    </ul>
    <?php
        for($i = 0; $i < count($teamsA); $i++) {
            $team = $teamsA[$i];
            echo "<p>{$team['squadraCasa']} - {$team['squadraOspite']} | {$team['puntiCasa']}-{$team['puntiOspite']}</p>";
        }
    ?>
</body>

</html>