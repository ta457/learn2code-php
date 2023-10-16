<?php
require '../core/functions.php';
require_once(base_path('models/UserModel.php'));

$userModel = new UserModel();

$user = $userModel->findUser([
  'user_id' => $_GET['id']
]);

header('Content-Type: application/json');

echo json_encode($user);