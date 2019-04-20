<?php
session_start();
  if (isset($_SESSION['email'])) $connexion = 1;
  else $connexion = 0;
?>
