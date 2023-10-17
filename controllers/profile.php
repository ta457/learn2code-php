<?php
require_once(base_path('models/UserModel.php'));
$userModel = new UserModel();
$user = $userModel->findUser([
  'user_id' => $_SESSION['user']['id']
]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usersModel = new Model();
  $name = $_POST['name'];
  $github = $_POST['github'];
  $phone = $_POST['phone'];

  $usersModel->update('users', 
    ['name','github','phone'], 
    [$name, $github, $phone],
    'user_id = ' . $user['user_id']
  );

  header('location: /profile');
  exit();

}

view("profile.view.php", [
  'user' => $user
]);