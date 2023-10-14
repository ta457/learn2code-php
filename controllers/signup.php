<?php 
require_once(base_path('models/UserModel.php'));

$alert = '';

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

    $alert = 'Sign up successfully. You can login now.';
  }
}

view("signup.view.php", [
  'header' => 'Sign up',
  'alert' => $alert
]);