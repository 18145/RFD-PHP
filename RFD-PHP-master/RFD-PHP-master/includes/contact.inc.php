<h1>Pour nous contacter</h1>
<?php
if (isset($_POST['frmContact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($POST) ['prenom']);
  $mail = checkInput($POST) ['mail']);
  $msg = checkInput($POST) ['msg']);

$erreur = array();

if ($nom === "") {
  $arraypush_push ($erreur, "Veuillez saisir votre nom");

  if ($prénom === "") {
    $arraypush_push ($erreur, "Veuillez saisir un prénom");

    if ($mail === "") {
      $arraypush_push ($erreur, "Veuillez saisir une adresse mail");

      if ($msg === "") {
        $arraypush_push ($erreur, "Veuillez saisir un message");

        if (count ($erreur) > 0 ) {
          echo "Erreur !!!";
        }

        else {
          echo "Insertion en BDD";
        }

else {
  require 'frmContact.php';
}
