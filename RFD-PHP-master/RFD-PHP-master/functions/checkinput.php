<?php

function checkInput($chaine) {
  return htmlspecialchars (addslashes(urldecode(trim($_POST['nom']))));

}
