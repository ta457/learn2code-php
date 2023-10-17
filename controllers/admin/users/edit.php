<?php
require base_path('models/Model.php');

$usersModel = new Model();
$rolesModel = new Model();
$user = $usersModel->get("SELECT * FROM users WHERE user_id={$_GET['id']}");
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

  // $emailExisted = 0;
  // foreach ($users as $user) {
  //   if($user['email'] == $email) {
  //     $emailExisted = 1;
  //   }
  // }
  if(!empty($password)) {
    $usersModel->update('users', 
      ['email','password','name','profile_img','github','phone','is_active','role_id'], 
      [$email, $password, $name, $prfImg, $github, $phone, $active, $role],
      'user_id = ' . $_GET['id']
    );

    header('location: /admin/users');
    exit();
  }
}

function getRoleName($id, $rolesModel) {
  return $rolesModel->get("SELECT role_name FROM roles WHERE role_id = $id")['role_name'];
}

view("admin/users/edit.view.php", [
  'header' => 'Admin Dashboard',
  'subHeader' => 'Users',
  'user' => $user,
  'roles' => $roles,
  'rolesModel' => $rolesModel
]);