<?php
  $pdo = new PDO('mysql:host=localhost;port=3307;dbname=bash', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   echo '<pre>';
//   var_dump($pdo);
//   echo '</pre>';