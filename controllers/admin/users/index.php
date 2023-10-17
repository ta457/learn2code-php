<?php

require base_path('models/Model.php');

$usersModel = new Model();
$rolesModel = new Model();
$users = $usersModel->getAll('users');
$roles = $rolesModel->getAll('roles');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $email = $_POST['email'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $prfImg = $_POST['profile_img'];
  $github = $_POST['github'];
  $phone = $_POST['phone'];
  $active = $_POST['active'];
  $role = $_POST['role'];

  $emailExisted = 0;
  foreach ($users as $user) {
    if($user['email'] == $email) {
      $emailExisted = 1;
    }
  }
  if($emailExisted == 0 && !empty($email) && !empty($password)) {
    $usersModel->add('users', [
      'email' => $email,
      'password' => $password,
      'name' => $name,
      'profile_img' => $prfImg,
      'github' => $github,
      'phone' => $phone,
      'is_active' => $active,
      'role_id' => $role
    ]);

    header('location: /admin/users');
    exit();
  }
}

function getRoleName($id, $rolesModel) {
  return $rolesModel->get("SELECT role_name FROM roles WHERE role_id = $id")['role_name'];
}

view("admin/users/index.view.php", [
  'header' => 'Admin Dashboard',
  'subHeader' => 'Users',
  'users' => $users,
  'rolesModel' => $rolesModel,
  'roles' => $roles
]);