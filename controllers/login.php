<?php
require_once(base_path('models/UserModel.php'));

$alert = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $userModel = new UserModel();

  $user = $userModel->findUser([
    'email' => $_POST['email'],
    'password' => $_POST['password']
  ]);

  if (!$user) {
    $alert = 'Invalid email or password';
  } else {
    
    $_SESSION['user'] = [
      'email' => $user['email'],
      'role' => $user['role_id']
    ];
    //dd($user);

    header('location: /');
    exit();
  }
}

view("login.view.php", [
  'header' => 'Log in',
  'alert' => $alert
]);