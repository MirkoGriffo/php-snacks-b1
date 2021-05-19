<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <h1>Snack 1</h1>
    <?php

$matches = [
    [
        'team1' => 'Detroit Pistons',
        'team2' => 'Miami Heat',
        'punti_team_1' => 107,
        'punti_team_2' => 120,
    ],
    [
        'team1' => 'Atlanta Hawks',
        'team2' => 'Huston Rockets',
        'punti_team_1' => 124,
        'punti_team_2' => 95,
    ],
    [
        'team1' => 'New Orleans Pelicans',
        'team2' => 'Los Angeles Lakers',
        'punti_team_1' => 98,
        'punti_team_2' => 110,
    ],
]

?>
    <h2>Risultati giornata 1</h2>
    <ul>
    <?php for ($i = 0; $i < count($matches); $i++) {?>
        <li>
        <?php echo $matches[$i]['team1']; ?> -  <?php echo $matches[$i]['team2']; ?> |
        <?php echo $matches[$i]['punti_team_1']; ?> - <?php echo $matches[$i]['punti_team_2']; ?>
        </li>
        <?php }?>
    </ul>

        <h1>Snack 2</h1>
        <?php
if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
    echo 'Errore, non tutti i parametri richiesti sono stati passati';
}
//controllo nome
elseif (strlen($_GET['name']) <= 3) {
    echo 'Nome troppo corto';
}
//controllo mail
elseif (strpos($_GET['mail'], '@') === false || strpos($_GET['mail'], '.') === false) {
    echo 'formato email non valido';
}
//controllo età
elseif (!is_numeric($_GET['age'])) {
    echo 'età non valida';
} else {
    echo 'accesso riuscito';
}
?>

</body>
</html>