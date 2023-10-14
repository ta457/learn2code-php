<?php

require_once(base_path('models/UserModel.php'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $userModel = new UserModel();

  $user = $userModel->findUser([
    'email' => $_POST['email']
  ]);

  if ($user) {
    $alert = 'Invalid email';
  } else {
    $userModel->addUser([
      'email' => $_POST['email'],
      'password' => $_POST['password'],
      'name' => $_POST['name']
    ]);

    $_SESSION['user'] = [
      'email' => $email
    ];

    header('location: /');
    exit();
  }
}

view("signup.view.php", [
  'header' => 'Sign up',
  'alert' => $alert
]);