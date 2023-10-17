<?php
require_once(base_path('models/UserModel.php'));

$alert = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $userModel = new UserModel();

  $user = $userModel->findUser([
    'email' => $_POST['email'],
    'password' => $_POST['password']
  ]);

  if (!$user || !validatePassword($_POST['password']) || !validateEmail($_POST['email'])) {

    $alert = 'Invalid email or password';
  
  } else {
    
    $_SESSION['user'] = [
      'id' => $user['user_id'],
      'email' => $user['email'],
      'name' => $user['name'],
      'role' => $user['role_id']
    ];
    header('location: /');
    exit();
  }
}

view("login.view.php", [
  'header' => 'Log in',
  'alert' => $alert
]);