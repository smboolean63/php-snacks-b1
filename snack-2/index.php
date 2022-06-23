<?php
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

if(empty($_GET['name']) || empty($_GET['email']) || empty($_GET['age'])) {
    echo "Non stai passando tutti i dati richiesti!";
    die();
}

// if (strlen($_GET['name']) > 3 && filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) && is_numeric($_GET['age'])) {
//     echo "Accesso Riuscito!!!";
// } else {
//     echo "Accesso Negato!!!!";
// }

if (strlen($_GET['name']) < 4 ) {
    echo "Errore: il nome deve contenere almeno 4 caratteri";
} else if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Errore: l'email non è corretta";
} else if (!is_numeric($_GET['age'])) {
    echo "Errore: l'età non è un numero";
} else {
    echo "Accesso Riuscito!!";
}