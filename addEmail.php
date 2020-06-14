<?php
/**
 * Lorsqu'un utilisateur rentre son email dans le formulaire et que la requete Ajax c'est bien passé alors il est rediriger ici
 * On ajoute un cookie dans so navigateur et ça nous permet de nous rappeler qu'il a bien rentrer son email
 * (OU ALORS IL A CLIQUER SUR "NE PLUS ME LE RAPPELER)
 * @author Quentin Aslan <quentin.aslan@outlook.com>
 */


$email = $_GET['email'];

if (!empty($email) && (filter_var($email, FILTER_VALIDATE_EMAIL) || $email == 'none')) {

    //On récupère le contenu du fichier
    $texte = file_get_contents('email.txt');

    //On ajoute notre nouveau texte à l'ancien
    $texte .= "\n".$email;

    //On écrit tout le texte dans notre fichier
    file_put_contents('email.txt', $texte);

    setcookie( "france-covid19-email", $email, strtotime( '+30 days' ) );

    echo json_encode('ok');

} else {
    echo json_encode('ko');
}
?>