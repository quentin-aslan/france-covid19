<?php
/**
 * Lorsqu'un utilisateur rentre son email dans le formulaire et que la requete Ajax c'est bien passé alors il est rediriger ici
 * On ajoute un cookie dans so navigateur et ça nous permet de nous rappeler qu'il a bien rentrer son email
 * (OU ALORS IL A CLIQUER SUR "NE PLUS ME LE RAPPELER)
 * @author Quentin Aslan <quentin.aslan@outlook.com>
 */


$email = $_GET['email'];
echo $email;

setcookie( "france-covid19-email", $email, strtotime( '+30 days' ) );

header('location: index.php');
?>