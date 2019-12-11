<h1>Pour nous contacter</h1>
<?php
if (isset($_POST['frmContact'])) {
  $nom = trim htmlspecialchars (addslashes(urldecode(trim($_POST['nom']))));


}

else {
  require 'frmContact.php';
}
