<?php

view("index.view.php", [
  'header' => 'Welcome',
  'currentUser' => $_SESSION['user']['email']
]);